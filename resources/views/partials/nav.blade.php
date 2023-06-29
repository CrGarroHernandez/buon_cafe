<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Buon Caffé</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4 {{request()->routeIs('home') ? 'active' : ''}}"><a class="nav-link text-uppercase" href="{{route('home')}}">Inicio</a></li>
                <li class="nav-item px-lg-4 {{request()->routeIs('about') ? 'active' : ''}}"><a class="nav-link text-uppercase" href="{{route('about')}}">Acerca de</a></li>
                <li class="nav-item px-lg-4 {{request()->routeIs('products') ? 'active' : ''}}"><a class="nav-link text-uppercase" href="{{route('products')}}">Productos</a></li>
                <li class="nav-item px-lg-4 {{request()->routeIs('store') ? 'active' : ''}}"><a class="nav-link text-uppercase" href="{{route('store')}}">Tienda</a></li>
            </ul>
        </div>
    </div>
</nav>