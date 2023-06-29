@extends('layout')

@section('title', 'Buon Caffé - Productos')

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100 ">
                    <!-- Product image-->
                    <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/480-1.webp')}}" alt="..." " />
                    <!-- Product details-->
                    <div class="card-body p-4 bg-faded">
                        <div class="text-center">
                        <h5 class="fw-bolder">Lucaffe Mr Exclusive</h5>
                        <hr>
                        
                            <!-- Product name-->
                            {{-- span    Café Molido 250 G --}}
                            <span class="section-heading-lower">Café Molido 250 Gr.</span>
                            <!-- Product price-->
                            <br>
                            <span class="section-heading-lower">$14.990</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="p-4 pt-0 border-top-0 bg-faded">
                        <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="{{route('product')}}">Ver</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100 ">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                    <!-- Product image-->
                    <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/480.webp')}}" alt="..." " />
                    <!-- Product details-->
                    <div class="card-body p-4 bg-faded">
                        <div class="text-center">
                        <h5 class="fw-bolder">Lucaffe Mr Exclusive</h5>
                        <hr>
                        
                            <!-- Product name-->
                            {{-- span    Café Molido 250 G --}}
                            <span class="section-heading-lower">Café Molido 250 Gr.</span>
                            <!-- Product price-->
                            <br>
                            <span class="section-heading-lower">$14.990</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="p-4 pt-0 border-top-0 bg-faded">
                        <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="#">Ver</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100 ">
                    <!-- Product image-->
                    <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/480.webp')}}" alt="..." " />
                    <!-- Product details-->
                    <div class="card-body p-4 bg-faded">
                        <div class="text-center">
                        <h5 class="fw-bolder">Lucaffe Mr Exclusive</h5>
                        <hr>
                        
                            <!-- Product name-->
                            {{-- span    Café Molido 250 G --}}
                            <span class="section-heading-lower">Café Molido 250 Gr.</span>
                            <!-- Product price-->
                            <br>
                            <span class="section-heading-lower">$14.990</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="p-4 pt-0 border-top-0 bg-faded">
                        <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="#">Ver</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100 ">
                    <!-- Product image-->
                    <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/480.webp')}}" alt="..." " />
                    <!-- Product details-->
                    <div class="card-body p-4 bg-faded">
                        <div class="text-center">
                        <h5 class="fw-bolder">Lucaffe Mr Exclusive</h5>
                        <hr>
                        
                            <!-- Product name-->
                            {{-- span    Café Molido 250 G --}}
                            <span class="section-heading-lower">Café Molido 250 Gr.</span>
                            <!-- Product price-->
                            <br>
                            <span class="section-heading-lower">$14.990</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="p-4 pt-0 border-top-0 bg-faded">
                        <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="#">Ver</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100 ">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                    <!-- Product image-->
                    <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/480.webp')}}" alt="..." " />
                    <!-- Product details-->
                    <div class="card-body p-4 bg-faded">
                        <div class="text-center">
                        <h5 class="fw-bolder">Lucaffe Mr Exclusive</h5>
                        <hr>
                        
                            <!-- Product name-->
                            {{-- span    Café Molido 250 G --}}
                            <span class="section-heading-lower">Café Molido 250 Gr.</span>
                            <!-- Product price-->
                            <br>
                            <span class="section-heading-lower">$14.990</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="p-4 pt-0 border-top-0 bg-faded">
                        <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="#">Ver</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100 ">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                    <!-- Product image-->
                    <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/480.webp')}}" alt="..." " />
                    <!-- Product details-->
                    <div class="card-body p-4 bg-faded">
                        <div class="text-center">
                        <h5 class="fw-bolder">Lucaffe Mr Exclusive</h5>
                        <hr>
                        
                            <!-- Product name-->
                            {{-- span    Café Molido 250 G --}}
                            <span class="section-heading-lower">Café Molido 250 Gr.</span>
                            <!-- Product price-->
                            <br>
                            <span class="section-heading-lower">$14.990</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="p-4 pt-0 border-top-0 bg-faded">
                        <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="#">Ver</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100 ">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                    <!-- Product image-->
                    <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/480.webp')}}" alt="..." " />
                    <!-- Product details-->
                    <div class="card-body p-4 bg-faded">
                        <div class="text-center">
                        <h5 class="fw-bolder">Lucaffe Mr Exclusive</h5>
                        <hr>
                        
                            <!-- Product name-->
                            {{-- span    Café Molido 250 G --}}
                            <span class="section-heading-lower">Café Molido 250 Gr.</span>
                            <!-- Product price-->
                            <br>
                            <span class="section-heading-lower">$14.990</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="p-4 pt-0 border-top-0 bg-faded">
                        <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="#">Ver</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100 ">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                    <!-- Product image-->
                    <img class="card-img-top border border-bottom-0 border-dark" src="{{asset('img/480.webp')}}" alt="..." " />
                    <!-- Product details-->
                    <div class="card-body p-4 bg-faded">
                        <div class="text-center">
                        <h5 class="fw-bolder">Lucaffe Mr Exclusive</h5>
                        <hr>
                        
                            <!-- Product name-->
                            {{-- span    Café Molido 250 G --}}
                            <span class="section-heading-lower">Café Molido 250 Gr.</span>
                            <!-- Product price-->
                            <br>
                            <span class="section-heading-lower">$14.990</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="p-4 pt-0 border-top-0 bg-faded">
                        <div class="text-center"><a class="btn mt-auto text-white" style="background-color: rgba(47, 23, 15, 0.9)"  href="#">Ver</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection