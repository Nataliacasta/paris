@extends('layouts.app')

@section('content')
<section id="hero-2" class="bg-fixed hero-section division bg-hero-image2 bg-cover pt-5">
    <p class="h2glamour">Acerca de Sala de Belleza Paris</p>
</section>


<section id="about" class="division flex justify-center items-center">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/salondebelleza.jpeg') }}" alt="Nuestro Salon" class="w-full md:w-3/4 lg:w-2/3 h-auto rounded-lg shadow-lg">
            </div>
            <div class="w-full md:w-1/2 px-4 lg:px-8 py-6 lg:py-0">
                <h2 id="about-heading" class="text-3xl lg:text-4xl font-bold mb-4">¿Quienes Somos?</h2>
                <p class="text-base lg:text-lg text-gray-700 leading-relaxed">
                    Somos una empresa dedicada al servicio de la Belleza, con una trayectoria de 13 años de experiencia, donde nos inspiramos en  Paris capital de la belleza y la moda, ademas referente de las mejores marcas del mercado de la belleza  como loreal marca que  manejamos en nuestro servicio </p>
            </div>
        </div>
    </div>
</section>
<section id="services" class="bg-gray-100 py-12">
    <div class="container mx-auto">
        <div class="flex flex-col items-center"> <!-- Changed container to flex column -->
            <h2 id="about-heading" class="text-3xl lg:text-4xl font-bold mb-4">Nuestro Arte de Uñas</h2>
            <div class="flex flex-wrap justify-center">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/uñaspresson.jpeg') }}" alt="Nail Art 1" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/uñasengel.jpeg') }}" alt="Nail Art 2" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/uñaspoligel.jpeg') }}" alt="Nail Art 3" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="py-12">
    <div class="container mx-auto">
        <div class="flex flex-col items-center"> <!-- Changed container to flex column -->
            <h2 id="about-heading" class="text-3xl lg:text-4xl font-bold mb-4">lo que dice la Gente</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <p class="text-lg text-gray-700">"Me encanta sala de belleza Paris! El personal es amable y muy profesional y mis uñas simpre lucen increible."</p>
                    <p class="text-sm text-gray-500">- Alejandra S.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <p class="text-lg text-gray-700">"Los profesionales de uñas aqui son increiblemente talentosos, pueden darle vida a cualquier idea de arte!"</p>
                    <p class="text-sm text-gray-500">- Dayana P.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <p class="text-lg text-gray-700">"he sido cliente durante años y no confio mis uñas en nadie mas, lo recomiendo encarecidamente.!"</p>
                    <p class="text-sm text-gray-500">- Natalia R.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="news-events" class="pb-60 blog-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title title-01 mb-70">
                    <span class="section-id">Noticias y Eventos</span>
                    <h2 class="h2-lg">Ultimas Noticias y Eventos</h2>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2">
            <!-- Articles -->
            <div class="col mb-4">
                <div class="blog-1-post">
                    <div class="blog-post-img">
                        <img class="img-fluid" src="{{ asset('images/promotintes.jpeg') }}" alt="article1" />
                    </div>
                    <div class="blog-post-txt">
                        <h5 class="h5-md">Nuevo taller de arte de uñas y makeup!</h5>
                        <p class="post-tag">Evento, Anuncios| junio 18, 2025</p>
                        <p class="p-lg">Unete a nosotros en nuestro proximo taller de uñas y makeup!</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="blog-1-post">
                    <div class="blog-post-img">
                        <img class="img-fluid" src="{{ asset('images/promouñas.jpeg') }}" alt="article2" />
                    </div>
                    <div class="blog-post-txt">
                        <h5 class="h5-md">promocion por tiempo limitado de Colorimetria!</h5>
                        <p class="post-tag">Noticias promociones | junio 25, 2025</p>
                        <p class="p-lg">disfruta de un 20% en nuestras promociones!</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
