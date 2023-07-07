@extends('layout')

@section('title', 'Buon Caffé - Productos')

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @forelse ($products as $product)
                <div class="col mb-5">
                    <div class="card h-100 ">
                        <!-- Imagen del producto-->
                        <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/'.$product->title.'/480.webp')}}" alt="..."/>
                        <div class="card-body p-4 bg-faded">
                            <div class="text-center">
                                <!-- Nombre del producto-->
                                <h5 class="fw-bolder">{{$product->title}}</h5>
                                <hr>
                                <!-- Breve descripción del producto-->
                                <span class="section-heading-lower">{{$product->short_description}}</span>
                                <br>
                                <!-- Precio del producto-->
                                <span class="section-heading-lower">${{number_format($product->offer_price, 0, ',', '.')}}</span>
                            </div>
                        </div>
                        <!-- Accionar del producto-->
                        <div class="p-4 pt-0 border-top-0 bg-faded">
                            <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="{{route('content.product', $product)}}">Ver</a></div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-white">No hay productos para mostrar</p>
            @endforelse
            {{-- {{$products->links()}} --}}
        </div>
    </div>
</section>
@endsection