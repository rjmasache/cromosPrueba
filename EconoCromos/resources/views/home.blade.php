@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('content')
@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif
<section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption">

            </div>
            <img src="{{ asset('img/slider1.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slider2.png') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</section>


<section class="tematicas" id="tematica">
    <!--<h2>Tematicas</h2>-->
    <article class="tema">
        <div class="card" style="width: 25rem;">
            <a href="">
                <img src="{{ asset('img/econometria.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Econometría</p>
                </div>
            </a>
        </div>
    </article>
    <article class="tema">
        <div class="card" style="width: 25rem;">
            <a href="">
                <img src="{{ asset('img/microeconomia.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Microeconomía</p>
                </div>
            </a>
        </div>
    </article>
    <article class="tema">
        <div class="card" style="width: 25rem;">
            <a href="">
                <img src="{{ asset('img/macroeconomia.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Macroeconomía</p>
                </div>
            </a>
        </div>
    </article>
    <article class="tema">
        <div class="card" style="width: 25rem;">
            <a href="">
                <img src="{{ asset('img/tema4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Finanzas</p>
                </div>
            </a>
        </div>
    </article>
    <article class="tema">
        <div class="card" style="width: 25rem;">
            <a href="">
                <img src="{{ asset('img/tema5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Ortodoxa</p>
                </div>
            </a>
        </div>
    </article>
    <article class="tema">
        <div class="card" style="width: 25rem;">
            <a href="">
                <img src="{{ asset('img/tema6.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Heterodoxa</p>
                </div>
            </a>
        </div>
    </article>
</section>

<script>
    var myCarousel = document.querySelector('#carouselExampleIndicators')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 4500,
        wrap: true,
        pause: false
    })
</script>
@endsection