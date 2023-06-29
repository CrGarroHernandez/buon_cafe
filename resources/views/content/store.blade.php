@extends('layout')

@section('title', 'Buon Caffé - Productos')

@section('content')
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Ven</span>
                        <span class="section-heading-lower">Estamos Abiertos</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Lunes
                            <span class="ms-auto">7:00 AM a 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Martes
                            <span class="ms-auto">7:00 AM a 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Miércoles
                            <span class="ms-auto">7:00 AM a 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Jueves
                            <span class="ms-auto">7:00 AM a 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Viernes
                            <span class="ms-auto">7:00 AM a 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Sábado
                            <span class="ms-auto">9:00 AM a 5:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Domingo
                            <span class="ms-auto">Cerrado</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>1111 Calle Falsa</strong>
                            <br />
                            Cauquenes, Talca
                        </em>
                    </p>
                    <p class="mb-0">
                        <small><em>Call Anytime</em></small>
                        <br />
                        +56 9 11 11 1111
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection