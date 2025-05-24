@extends('layouts.app')

@section('content')

<div class="relative">
    <div class="bg-white flex items-center justify-center min-h-screen">
           <img src="{{ asset('images/logo.jpeg') }}" alt="Logo Sala de Belleza Paris" class="width: 600px; height: auto;" />

        <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="flex text-black -100 pt-10 pb-10 relative z-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-5xl uppercase font-bold pb-14">
                 Bienvenido a sala de belleza Paris 
                </h1>
                <div class="my-1"></div>
                <a href="/appointments" class="buttonbg">
                    ¡Reserva ahora!
                </a>
            </div>
        </div>
    </div>
</div>


</section>
<section id="whatdowedo" class="py-12">
    <div class="container mx-auto">
        <div class="flex flex-col items-center"> 
            <h2 class="text-4xl lg:text-5xl text-gray-700 font-bold mb-4">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/uñastratamiento.jpeg') }}"  alt="Advanced Nail Treatments" class="w-full h-auto">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold font-normal text-customPink mb-4">Tratamientos avanzados de uñas</h2>
                        <p class="text-lg text-gray-700">Descubre nuestra gama de tratamientos especializados para uñas. Ya sea que busques un diseño de uñas elaborado, extensiones o diseños únicos, nuestros talentosos técnicos te ayudarán.</p>
                    </div>
                </div>            
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/tintes.webp') }}" alt="Luxury Facials" class="w-full h-auto">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Descubre nuestra gama de tintes profesionales y transforma tu estilo.</h2>
                        <p class="text-lg text-gray-700">Ya sea que busques un cambio sutil, una cobertura perfecta de canas o un color vibrante y atrevido, nuestros coloristas expertos están listos para asesorarte y lograr el look que deseas.
                                                        Utilizamos productos de alta calidad que cuidan tu cabello mientras lo llenan de vida.</p>
                    </div>
                </div>            
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/Maquillaje.jpeg') }}" alt="Glamour Massage" class="w-full h-auto">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Realza tu belleza con nuestro servicio de maquillaje profesional.</h2>
                        <p class="text-lg text-gray-700">Ya sea para un evento especial, una sesión de fotos o simplemente para consentirte, nuestros maquillistas expertos crearán el look perfecto para ti.
                                                        Desde estilos naturales y elegantes hasta acabados glamorosos e impactantes, trabajamos con productos de alta gama para asegurar un acabado impecable y duradero.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/depilacion1.jpg') }}" alt="Glamour Massage" class="w-full h-auto">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Depilacion Piel suave, sensación increíble.</h2>
                        <p class="text-lg text-gray-700">Descubre nuestros servicios de depilación profesional, diseñados para cuidar tu piel y brindarte resultados duraderos.
                                                        Ya sea con cera tradicional, cera tibia o técnica brasileña, nuestro equipo especializado te garantiza una experiencia cómoda, higiénica y efectiva.
                                                        ✨ Ideal para rostro, piernas, brazos, axilas y zona íntima.
                                                        👩‍🔬 Atención personalizada y productos de calidad dermatológica.
                                                        💆‍♀️ Reserva tu cita y disfruta de una piel libre de vello como nunca antes.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/Peinado.jpg') }}" alt="Glamour Massage" class="w-full h-auto">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Luce espectacular en cualquier ocasión con nuestros peinados profesionales.</h2>
                        <p class="text-lg text-gray-700">Desde ondas suaves y recogidos románticos hasta estilos sofisticados y modernos, nuestro equipo está listo para crear el look perfecto para ti.
                                                        Ideal para eventos, fiestas, bodas o simplemente para sentirte increíble.
                                                      💇‍♀️ Trabajamos con técnicas actuales y productos de alto nivel para un acabado duradero.
                                                      ✨ Asesoría personalizada incluida.
                                                        📅 Agenda tu cita y déjanos resaltar tu belleza con estilo.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/keratina.jpg') }}" alt="Glamour Massage" class="w-full h-auto">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-customPink mb-4">Recupera el brillo y la suavidad de tu cabello con nuestra keratina orgánic</h2>
                        <p class="text-lg text-gray-700">Un tratamiento libre de químicos agresivos, ideal para alisar, nutrir y fortalecer tu melena sin dañar su estructura natural.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-12">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="w-full lg:w-1/2 px-4 lg:px-8 py-6 lg:py-0">
                <h2 id="about-heading" class="text-3xl lg:text-4xl font-bold mb-4">Nuestros Horarios</h2>
                <ul class="text-base lg:text-lg text-gray-700 leading-relaxed">
                    <li class="py-2 flex items-center">
                        <span class="text-customPink">Lunes:</span>&nbsp;&nbsp;8:00 AM - 7:00 PM
                    </li>
                    <li class="py-2 flex items-center">
                        <span class="text-customPink">Martes:</span>&nbsp;&nbsp;8:00 AM - 7:00 PM
                    </li>
                    <li class="py-2 flex items-center">
                        <span class="text-customPink">Miercoles:</span>&nbsp;&nbsp;8:00 AM - 7:00 PM
                    </li>
                    <li class="py-2 flex items-center">
                        <span class="text-customPink">Jueves:</span>&nbsp;&nbsp;8:00 AM - 7:00 PM
                    </li>
                    <li class="py-2 flex items-center">
                        <span class="text-customPink">Viernes:</span>&nbsp;&nbsp;8:00 AM - 7:00 PM
                    </li>
                    <li class="py-2 flex items-center">
                        <span class="text-customPink">Sabado:</span>&nbsp;&nbsp;9:00 AM - 7:00 PM
                    </li>
                    <li class="py-2 flex items-center">
                        <span class="text-customPink">Domingo y festivos :</span>&nbsp;&nbsp;8:00 AM - 12:00 PM
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/salondebelleza.jpeg') }}" alt="OliveJune Image" class="w-full md:w-3/4 lg:w-2/3 h-auto rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>


<section id="services" class="py-12">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h2 id="about-heading" class="text-3xl lg:text-4xl font-bold mb-4">¡Inspirate  para tu próxima cita!</h2>
            <div class="flex flex-wrap justify-center">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/cejas.jpeg') }}" alt="Nail Art 1" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/peinado.jpeg') }}" alt="Nail Art 2" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://i.pinimg.com/originals/b7/62/6a/b7626a85dda15b295f1aedb3fdf5b963.jpg" alt="Nail Art 3" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
            <!-- View More Button -->
            <a href="/gallery" class="buttonbg2">
                Galería de diseño de uñas
            </a>
            
        </div>
    </div>
</section>

<section id="news" class="py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl lg:text-4xl font-bold mb-4">¡Nuestras Promociones para este mes!</h2>
        <div class="flex flex-wrap justify-center">
            <!-- News Article 1 -->
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/promouñas.jpeg') }}" alt="News Article 1" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Conciente a tu mamá en su mes</h3>
                        <p class="text-gray-700 mb-2">Contrata uno de nuestros servicios y disfruta de increíbles promociones.</p>
                    </div>
                </div>
            </div>
            <!-- News Article 2 -->
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://i.pinimg.com/564x/c9/4a/c5/c94ac533bc0d6083ecd92bfc728b3d80.jpg" alt="News Article 2" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Nail Salon of the Year 2024: Celebrating Our Victory!</h3>
                        <p class="text-gray-700 mb-2">Proudly announcing our triumph as the esteemed Nail Salon of the Year 2024</p>
                    </div>
                </div>
            </div>
            <!-- News Article 3 -->
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://i.pinimg.com/736x/66/b1/41/66b141da8b40c83a3c3204de47d12fcc.jpg" alt="News Article 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Consejos de expertos para el cuidado de las uñas</h3>
                        <p class="text-gray-700 mb-2">Aprenda consejos esenciales de expertos para mantener uñas sanas y hermosas con nuestra guía completa sobre el cuidado de las uñas.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>


@endsection