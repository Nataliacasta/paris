@extends('layouts.app')

@section('content')
<!-- Header Section -->
<div class="header-image">
    <div class="overlay"></div>
    <div class="header-content">
        <h1 class="page-title">Reservar una cita</h1>
        <nav class="breadcrumb">
            <a href="/">Inicio</a> » <span>Citas</span>
        </nav>
    </div>
</div>


<script>
    function fetchAvailableTimes() {
        const staffId = document.querySelector('input[name="staff_id"]:checked')?.value;
        const date = document.getElementById('date').value;

        if (staffId && date) {
            fetch(`/appointments/available-times?staff_id=${staffId}&date=${date}`)
                .then(response => response.json())
                .then(data => {
                    const timeSelect = document.getElementById('time');
                    timeSelect.innerHTML = '<option value="">Seleccionar hora</option>';
                    data.availableTimes.forEach(time => {
                        const option = document.createElement('option');
                        option.value = time;
                        option.textContent = time;
                        timeSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error:', error));
        } else {
            console.log("Staff ID o fecha no seleccionados");
        }
    }
</script>

<!-- Mensajes -->
@if ($errors->any())
    <div class="alert alert-error container mx-auto mt-4">
        <strong>Ups!</strong> Hubo algunos problemas con tu entrada.
        <ul class="mt-2 list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success container mx-auto mt-4">
        <strong>Éxito:</strong> {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-error container mx-auto mt-4">
        <strong>Error:</strong> {{ session('error') }}
    </div>
@endif

<!-- Formulario de Reservas -->
@if (Auth::check() && Auth::user()->isUser())
<h1 class="text-3xl font-semibold text-center mb-8">Reserva ahora</h1>
<div class="container mx-auto mt-24"> 
    <form method="POST" action="{{ route('appointments.store') }}" class="booking-form">
        @csrf

        <!-- Servicios -->
        <div class="mb-4">
            <label class="form-label">Servicio</label>
            <div class="overflow-x-auto">
                <table class="Service_table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>{{ $service->service_name }}</td>
                            <td>{{ $service->service_description }}</td>
                            <td>{{ number_format($service->service_price, 0, ',') }} COP</td>
                            <td><input type="radio" name="service_id" value="{{ $service->service_id }}" required></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Personal -->
        <div class="mb-4">
            <label class="form-label">Personal</label>
            <div class="overflow-x-auto">
                <table class="staff_table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Posición</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($staffs as $staff)
                        <tr>
                            <td>{{ $staff->artist_name }}</td>
                            <td>{{ $staff->position }}</td>
                            <td>
                                <input type="radio" name="staff_id" value="{{ $staff->staff_id }}" required onchange="fetchAvailableTimes();">
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="3">No se encontró personal.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Cliente -->
        <input type="hidden" id="customer_id" name="customer_id" value="{{ auth()->id() }}" required>

        <!-- Calendario -->
        <div class="calendar mb-4">
            <label class="form-label">Fecha</label>
            <input type="hidden" id="date" name="date" required>
            <div id="displayDate" class="date-display">Seleccione una fecha</div>

            <div class="calendar-nav">
                <button type="button" id="prevMonth">Anterior</button>
                <h2 id="currentMonth"></h2>
                <button type="button" id="nextMonth">Siguiente</button>
            </div>
            <div class="calendar-grid" id="calendar"></div>
        </div>

        <!-- Hora -->
        <div class="form-group mb-4">
            <label for="time" class="form-label">Hora</label>
            <select name="time" id="time" class="form-select" required>
                <option value="">Seleccionar hora</option>
            </select>
        </div>

        <!-- Botón -->
        <div class="form-actions">
            <button type="submit" class="btn-pink">Agregar cita</button>
        </div>
    </form>
</div>
@else
<!-- Vista para usuarios no autenticados -->
<div class="container mx-auto mt-24 custom-form-width text-center">
    <h1 class="text-3xl font-semibold mb-8">Bienvenido a nuestro sistema de reservas</h1>
    <p class="mb-4">Inicie sesión para reservar una cita</p>
    <a href="{{ route('login') }}" class="btn-pink mb-12">Reserva ahora</a>
</div>
@endif

<!-- Citas del Usuario -->
@if ($userAppointments->isNotEmpty())
<h1 class="text-3xl font-semibold text-center mb-8">Mis Citas</h1>
<div class="container mx-auto custom-form-width">
    <div class="overflow-x-auto">
        <table class="appointment_table">
            <thead>
                <tr>
                    <th>Personal</th>
                    <th>Servicio</th>
                    <th>Hora</th>
                    <th>Fecha</th>
                    <th>Precio</th>
                    <th>Actualizar</th>
                    <th>Cancelar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userAppointments as $appointment)
                <tr>
                    <td>{{ $appointment->staff->artist_name ?? 'Personal no encontrado' }}</td>
                    <td>{{ $appointment->service->service_name ?? 'Servicio no encontrado' }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ number_format($appointment->service->service_price ?? 0, 0, ',') }} COP</td>
                    <td><a href="{{ route('appointments.edit', $appointment->appointment_id) }}" class="btn-pink">Actualizar</a></td>
                    <td>
                        <form action="{{ route('appointments.destroy', $appointment->appointment_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-pink">Cancelar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif

<!-- Citas Administrador -->
@if(Auth::check() && Auth::user()->isAdmin())
<h1 class="text-3xl font-semibold text-center mb-8">Todas las citas</h1>
<div class="container mx-auto custom-form-width">
    <div class="overflow-x-auto">
        <table class="appointment_table">
            <thead>
                <tr>
                    <th>Personal</th>
                    <th>Servicio</th>
                    <th>Hora</th>
                    <th>Fecha</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->staff->artist_name ?? 'Personal no encontrado' }}</td>
                    <td>{{ $appointment->service->service_name ?? 'Servicio no encontrado' }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ number_format($appointment->service->service_price ?? 0, 0, ',') }} COP</td>
                    <td>
                        <form action="{{ route('appointments.destroy', $appointment->appointment_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-pink">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6">No se encontraron citas.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endif

<!-- Calendario Script -->
<script>
    function generateCalendar(year, month) {
        const calendarElement = document.getElementById('calendar');
        const currentMonthElement = document.getElementById('currentMonth');
        const firstDayOfMonth = new Date(year, month, 1);
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        calendarElement.innerHTML = '';
        const monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        currentMonthElement.innerText = `${monthNames[month]} ${year}`;
        const firstDayOfWeek = firstDayOfMonth.getDay();
        const daysOfWeek = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];
        daysOfWeek.forEach(day => {
            const dayElement = document.createElement('div');
            dayElement.className = 'text-center font-semibold';
            dayElement.innerText = day;
            calendarElement.appendChild(dayElement);
        });
        for (let i = 0; i < firstDayOfWeek; i++) {
            calendarElement.appendChild(document.createElement('div'));
        }
        for (let day = 1; day <= daysInMonth; day++) {
            const dayElement = document.createElement('div');
            dayElement.className = 'calendar-day';
            dayElement.innerText = day;
            dayElement.onclick = () => selectDate(day, month, year);
            calendarElement.appendChild(dayElement);
        }
    }

    function selectDate(day, month, year) {
        const dateInput = document.getElementById('date');
        const displayDate = document.getElementById('displayDate');
        month++;
        if (month < 10) month = '0' + month;
        if (day < 10) day = '0' + day;
        const formattedDate = `${year}-${month}-${day}`;
        dateInput.value = formattedDate;
        displayDate.textContent = formattedDate;
        fetchAvailableTimes();
    }

    const currentDate = new Date();
    let currentYear = currentDate.getFullYear();
    let currentMonth = currentDate.getMonth();
    generateCalendar(currentYear, currentMonth);

    document.getElementById('prevMonth').addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentYear, currentMonth);
    });

    document.getElementById('nextMonth').addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentYear, currentMonth);
    });
</script>
@endsection
