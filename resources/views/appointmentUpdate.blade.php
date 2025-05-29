@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-24 custom-form-width"> 
    <h1 class="text-5xl font-bold text-center mb-8">Actualizar Citas</h1>
    <form action="{{ route('appointments.update', $appointment->appointment_id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-32 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT') 
        
        <!-- Error Messages -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Ups!</strong>
                <span class="block sm:inline">Hubo algunos problemas con tu entrada.</span>
                <ul class="mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Service Selection -->
        <h1 class="text-3xl font-semibold text-center mb-4">Actualizar Citas</h1>
        <div class="mb-4 ">
            <label for="service_id" class="block text-gray-700 text-xl font-bold mb-2">Service</label>
            <div class="overflow-x-auto">
                <table class="Service_table w-full">
                    <thead>
                        <tr>
                            <th>Nombre del Servicio</th>
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
                            <td>
                                <input type="radio" name="service_id" value="{{ $service->service_id }}" {{ $appointment->service_id == $service->service_id ? 'checked' : '' }} required>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Staff Selection -->
        <div class="mb-4">
            <label for="staff_id" class="block text-gray-700 text-xl font-bold mb-2">Personal</label>
            <div class="overflow-x-auto">
                <table class="staff_table w-full">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Puesto</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($staffs as $staff)
                        <tr>
                            <td>{{ $staff->artist_name }}</td>
                            <td>{{ $staff->position }}</td>
                            <td>
                                <input type="radio" name="staff_id" value="{{ $staff->staff_id }}" {{ $appointment->staff_id == $staff->staff_id ? 'checked' : '' }} required>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No se encontro personal.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Date and Time Selection -->
        <div class="form-group mb-4">
            <label for="date" class="block text-gray-700 text-xl font-bold mb-2">Fecha:</label>
            <input type="date" class="form-control w-full px-3 py-2 border rounded" id="date" name="date" value="{{ $appointment->date }}" required>
        </div>

        <div class="form-group mb-4">
            <label for="time" class="block text-gray-700 text-xl font-bold mb-2">Hora:</label>
            <input type="time" class="form-control w-full px-3 py-2 border rounded" id="time" name="time" value="{{ $appointment->time }}" required>
        </div>

        <input type="hidden" class="form-control" id="customer_id" name="customer_id" value="{{ auth()->id() }}" required>

        <!-- Submit Button -->
        <div class="flex items-center justify-center">
            <button type="submit" class="btn-pink">Actualizar Citas</button>
        </div>
    </form>
</div>
@endsection
