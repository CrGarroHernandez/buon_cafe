@extends('layout')

@section('title', 'Buon Caffé - Inicio')

@section('content')
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('img/about.jpg')}}" alt="..." />
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Café fresco</span>
                    <span class="section-heading-lower">Vale la pena beber</span>
                </h2>
                <p class="mb-3">Cada taza de nuestro café artesanal de calidad comienza con ingredientes seleccionados a mano de origen local. Una vez que lo pruebe, nuestro café será una maravillosa adición a su rutina matutina diaria, ¡lo garantizamos!</p>

                
            </div>
        </div>
    </div>
</section>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Nuestra Promesa</span>
                        <span class="section-heading-lower">A Tí</span>
                    </h2>
                    <p class="mb-0">Cuando ingresa a nuestra tienda para comenzar el día, nos dedicamos a brindarle un servicio amable, un ambiente acogedor y, sobre todo, excelentes productos elaborados con ingredientes de la más alta calidad. Si no está satisfecho, háganoslo saber y haremos todo lo posible para hacer las cosas bien.</p>
                    <div class="cta-inner bg-faded text-center rounded">
                    <img src="{{asset('img/buon.png')}}" alt="" width="100px" height="100px">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection