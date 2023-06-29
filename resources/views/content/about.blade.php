@extends('layout')

@section('title', 'Buon Caffé - Acerca de')

@section('content')
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/about.jpg')}}" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">CAFÉ FUERTE, RAÍCES FUERTES</span>
                            <span class="section-heading-lower">SOBRE NUESTRO CAFÉ</span>
                        </h2>
                        <p>Fundado en 1987 por los hermanos Hernández, nuestro establecimiento ha estado sirviendo un rico café procedente de agricultores artesanales en varias regiones de América del Sur y Central. Estamos dedicados a viajar por el mundo, encontrar el mejor café y traerlo de vuelta aquí en nuestra cafetería.</p>
                        <p class="mb-0">
                            Le garantizamos que caerá en la lujuria con nuestras mezclas decadentes desde el momento en que entra hasta que termine su último sorbo. Únase a nosotros para su rutina diaria, una salida con amigos o simplemente para disfrutar de un tiempo a solas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection