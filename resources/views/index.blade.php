@extends('layouts.app')

@section('content')

<div class="relative min-h-screen bg-gradient-to-b from-pink-300 via-pink-200 to-purple-200">
    <div class="flex flex-col items-center justify-center min-h-screen text-center px-4 relative z-10">
        
        <!-- Logo sin recuadro -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo Sala de Belleza Paris" class="w-72 md:w-96 mb-6" />

        <!-- Título -->
        <h1 class="text-black text-4xl md:text-5xl font-bold uppercase mb-8">
            Bienvenido a Sala de Belleza Paris
        </h1>

        <!-- Botón de reserva -->
        <a href="/appointments" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-3 rounded-full shadow-lg transition duration-300">
            ¡Reserva ahora!
        </a>
    </div>
</div>

<section id="whatdowedo" class="py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center"> 
            <h2 class="text-4xl lg:text-5xl text-gray-700 font-bold mb-4">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Servicio 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/uñastratamiento.jpeg') }}" alt="Tratamientos de Uñas" class="w-full h-auto object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Tratamientos avanzados de uñas</h2>
                        <p class="text-lg text-gray-700">Descubre nuestra gama de tratamientos especializados para uñas. Ya sea que busques un diseño de uñas elaborado, extensiones o diseños únicos, nuestros talentosos técnicos te ayudarán.</p>
                    </div>
                </div>
                <!-- Servicio 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/tintes.webp') }}" alt="Tintes Profesionales" class="w-full h-auto object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Descubre nuestra gama de tintes profesionales y transforma tu estilo.</h2>
                        <p class="text-lg text-gray-700">Ya sea que busques un cambio sutil, una cobertura perfecta de canas o un color vibrante y atrevido, nuestros coloristas expertos están listos para asesorarte y lograr el look que deseas.</p>
                    </div>
                </div>
                <!-- Servicio 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/Maquillaje.jpeg') }}" alt="Maquillaje Profesional" class="w-full h-auto object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Realza tu belleza con nuestro servicio de maquillaje profesional.</h2>
                        <p class="text-lg text-gray-700">Ya sea para un evento especial o simplemente para consentirte, nuestros maquillistas expertos crearán el look perfecto para ti.</p>
                    </div>
                </div>
                <!-- Servicio 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/depilacion1.jpg') }}" alt="Depilación" class="w-full h-auto object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Depilación: piel suave, sensación increíble.</h2>
                        <p class="text-lg text-gray-700">Nuestros servicios de depilación profesional cuidan tu piel y brindan resultados duraderos. Cera tradicional, tibia o técnica brasileña. Ideal para rostro, piernas, brazos y más.</p>
                    </div>
                </div>
                <!-- Servicio 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/Peinado.jpg') }}" alt="Peinados Profesionales" class="w-full h-auto object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Luce espectacular en cualquier ocasión con nuestros peinados.</h2>
                        <p class="text-lg text-gray-700">Desde ondas suaves hasta recogidos sofisticados, nuestro equipo crea el look ideal para tu evento. ¡Agenda tu cita!</p>
                    </div>
                </div>
                <!-- Servicio 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/keratina.jpg') }}" alt="Keratina Orgánica" class="w-full h-auto object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Recupera el brillo con nuestra keratina orgánica</h2>
                        <p class="text-lg text-gray-700">Un tratamiento libre de químicos agresivos, ideal para alisar, nutrir y fortalecer tu melena sin dañar su estructura natural.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="w-full lg:w-1/2 px-4">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Nuestros Horarios</h2>
                <ul class="text-base lg:text-lg text-gray-700 leading-relaxed">
                    <li><span class="text-customPink">Lunes:</span> 8:00 AM - 7:00 PM</li>
                    <li><span class="text-customPink">Martes:</span> 8:00 AM - 7:00 PM</li>
                    <li><span class="text-customPink">Miércoles:</span> 8:00 AM - 7:00 PM</li>
                    <li><span class="text-customPink">Jueves:</span> 8:00 AM - 7:00 PM</li>
                    <li><span class="text-customPink">Viernes:</span> 8:00 AM - 7:00 PM</li>
                    <li><span class="text-customPink">Sábado:</span> 9:00 AM - 7:00 PM</li>
                    <li><span class="text-customPink">Domingo y festivos:</span> 8:00 AM - 12:00 PM</li>
                </ul>
            </div>
            <div class="w-full lg:w-1/2 mt-8 lg:mt-0">
                <img src="{{ asset('images/salondebelleza.jpeg') }}" alt="Salón de belleza" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center">
            <h2 class="text-3xl lg:text-4xl font-bold mb-8 text-center">¡Inspírate para tu próxima cita!</h2>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="w-full sm:w-1/2 md:w-1/3">
                    <img src="{{ asset('images/cejas.jpeg') }}" alt="Cejas" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3">
                    <img src="{{ asset('images/peinado.jpeg') }}" alt="Peinado" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3">
                    <img src="https://i.pinimg.com/originals/b7/62/6a/b7626a85dda15b295f1aedb3fdf5b963.jpg" alt="Estilo" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
            <a href="/gallery" class="mt-6 bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-3 rounded-full shadow-md transition duration-300">
                Galería de diseño de uñas
            </a>
        </div>
    </div>
</section>

<section id="news" class="py-12 bg-pink-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl lg:text-4xl font-bold text-center text-gray-800 mb-10">¡Nuestras Promociones para este mes!</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                <img src="{{ asset('images/tarjetadefidelidad.jpg') }}" alt="Fidelidad" class="w-full h-auto object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-bold text-customPink mb-2">Premiamos tu fidelidad</h3>
                    <p class="text-gray-700">Acumula beneficios cada vez que nos visitas con nuestra tarjeta de fidelidad.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                <img src="{{ asset('images/promosion.jpg') }}" alt="Cuidado de uñas" class="w-full h-auto object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-bold text-customPink mb-2">Consejos de expertos para el cuidado de las uñas</h3>
                    <p class="text-gray-700">Mantén tus uñas sanas y hermosas con nuestra guía de cuidado.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                <img src="{{ asset('images/promosion2.jpg') }}" alt="Peinado" class="w-full h-auto object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-bold text-customPink mb-2">Realiza tu idea de peinado con nosotros</h3>
                    <p class="text-gray-700">Luce un cabello radiante y bien peinado con nuestros expertos estilistas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
