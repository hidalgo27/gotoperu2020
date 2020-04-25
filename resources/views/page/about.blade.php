@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/package/slider/mapi2_1574182691.jpg" alt="">

        </div>
        <div class="container h-100">
            {{--                <div class="row d-flex h-75 text-center align-items-end">--}}
            {{--                    <div class="col w-100 text-white">--}}
            {{--                        <h1 class="h1">{{$paquetes->titulo}}</h1>--}}
            {{--                        <h2 class="font-weight-lighter h4">Los mejores destinos en Perú operado por los mejores asesores de viaje.</h2>--}}
            {{--                        --}}{{--                    <a href="#consulte" class="btn btn-dark btn-lg h2 font-weight-bold mt-3">Diseña tu Viaje</a>--}}
            {{--                        --}}{{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="row h-25 align-items-center">--}}
            {{--                    <div class="col">--}}
            {{--                        --}}{{--                    <div class="rgba-white-8 rounded px-2 pt-3 pb-2">--}}

            {{--                        <example-component></example-component>--}}

            {{--                        --}}{{--                    </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <div class="position-absolute-bottom w-100">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="rgba-white-9 shadow-sm rounded-top text-center p-3">
                                <h1 class="h3 font-weight-bold text-g-green py-3">Quiénes Somos y por qué Amamos Viajar</h1>

                                <p class="">En GOTOPERU creemos en la excelencia, seguridad, atención personalizada y calidad de los servicios, es nuestro compromiso con nuestros pasajeros. Por eso, nos esforzamos en satisfacer las necesidades de nuestros clientes al máximo.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>

    <section class="py-5 bg-white">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col text-center">--}}
{{--                    <h1 class="text-g-yellow font-weight-bold display-4 text-center">Quiénes Somos y <span class="text-g-green">por qué Amamos Viajar</span></h1>--}}
{{--                    --}}{{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
{{--                    --}}{{--<p class="h4"></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <p class="mb-0 lead text-secondary text-center"><b>En GOTOPERU creemos en la excelencia, seguridad, atención personalizada y calidad de los servicios, es nuestro compromiso con nuestros pasajeros. Por eso, nos esforzamos en satisfacer las necesidades de nuestros clientes al máximo.</b></p>--}}
{{--                </div>--}}

{{--            </div>--}}

            <div class="row mt-5 align-items-center">

                <div class="col-6">
                    <div class="bg-light shadow-sm p-4 border-left border-g-green">
                        <h5 class="font-weight-bold text-secondary">NUESTRO COMPROMISO</h5>
                        <p class="align-middle">No dejar escapar la oportunidad de que nuestros turistas descubran los encantos de Perú y vivir una aventura inolvidable.</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="bg-light shadow-sm p-4 border-left border-g-yellow">
                        <h5 class="font-weight-bold text-secondary">MISIÓN</h5>
                        <p class="align-middle">Ofrecer a nuestros clientes los mejores recursos peruanos para una aventura inolvidable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative">
        <div class="offer-banner">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold">Conoce a nuestro equipo</h2>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    @foreach($team as $teams)
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-5">
                            <div class="card">
                                <a class="venobox position-relative" data-gall="myGallery" href="{{$teams->imagen_portada}}">
                                    <img src="{{$teams->imagen_portada}}" alt="image alt" class="card-img-top">
                                    <span class="position-absolute-top text-white">
                                    <i data-feather="image" stroke-width="1"></i>
                                </span>
                                </a>
                                <div class="card-body text-center">
                                    <a class="venobox position-relative" href="{{$teams->imagen_perfil}}">
                                        <img src="{{$teams->imagen_perfil}}" alt="image alt" class="avatar rounded-circle">
                                        <span class="position-absolute-bottom text-white">
                                        <i data-feather="image" stroke-width="2"></i>
                                    </span>
                                    </a>
                                    <h4 class="card-title">{{$teams->nombre}}</h4>
                                    <h6 class="card-subtitle mb-2 text-g-yellow font-weight-bold">{{$teams->cargo}}</h6>
                                    <p class="small">{{$teams->frase}}</p>
                                    <p class="font-weight-bold small text-secondary"><i data-feather="thumbs-up" stroke-width="2"></i> <b>Actividad Favorita:</b> {{$teams->actividad}}</p>
                                    <p class="small m-0"><i data-feather="mail" stroke-width="1"></i> {{$teams->email}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="offer-banner">
            <div class="container">
                <div class="row align-items-center pt-5 pt-md-0">
                    <div class="col-12 col-md-6">
                        <h2 class="h5">NOSOTROS SOMOS</h2>
                        <h4 class="font-weight-bold h1">GOTOPERU</h4>
                        <p>El compromiso de GOTOPERU es ofrecer una experiencia personalizada y de calidad que cumpla las expectativas de nuestros clientes. El modelo de Gestión de GOTOPERU está basado en la mejora continua y sus principales actuaciones son: Difundir las riquezas de nuestro país el Peru, sus costumbres, gastronomía, su patrimonio natural y cultural, ayudando a fomentar un turismo sostenible.</p>
                        <ul class="pl-3">
                            <li>Cede Central: Cusco, Perú</li>
                            <li>Company: 25 miembros</li>
                            <li>Fundado: 2009</li>
                            <li>Oficinas: Lima, Perú / New York, Usa</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="{{asset('images/gotoperu-banner-rgba.png')}}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-fondohome mt-5">
        <div class="container">
            <div class="row pb-4">
                <div class="col text-center">
                    <h2 class="font-weight-semi-bold h3">The GOTOPERU difference</h2>
                </div>
            </div>

            <div class="row mt-5 pb-5">
                <div class="col-4">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="rounded-circle p-3  alert-g-yellow border-g- shadow-sm">
                                <i data-feather="star" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <h5 class="font-weight-semi-bold">Authentic & Unique</h5>
                            <p class="small">Go off the beaten track. Our award-winning, licensed local guides provide incredible insights and insider tips, passionately bringing alive unique and exclusive experiences for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="rounded-circle p-3  alert-g-green border-g- shadow-sm">
                                <i data-feather="feather" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <h5 class="font-weight-semi-bold">Personalized & Flexible</h5>
                            <p class="small">Discover our enchanting world your way. Our experts completely customize your private tour to match your interests and preferences through their comprehensive knowledge of each destination.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="rounded-circle p-3  alert-primary border-g- shadow-sm">
                                <i data-feather="thumbs-up" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <h5 class="font-weight-semi-bold">Safe & Secure</h5>
                            <p class="small">You are in safe hands. We work exclusively with licensed, qualified chauffeurs tested for their skill and only the highest standards of safety. All our vehicles are regularly tested for safety.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="rounded-circle p-3  alert-info border-g- shadow-sm">
                                <i data-feather="lock" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <h5 class="font-weight-semi-bold">100% Financial Protection</h5>
                            <p class="small">We believe in complete transparency. We are bonded members and license holders of all leading travel organizations. Your booking is completely secure with us.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="rounded-circle p-3  alert-danger border-g- shadow-sm">
                                <i data-feather="award" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <h5 class="font-weight-semi-bold">High Quality Experiences</h5>
                            <p class="small">Never compromise on quality. All our accommodation, services and recommended restaurants are tested by our team. We offer you the most comfortable, high quality vehicles.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="rounded-circle p-3  alert-success border-g- shadow-sm">
                                <i data-feather="clock" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <h5 class="font-weight-semi-bold">Fully Supported Travel</h5>
                            <p class="small">You will never be stranded. Your dedicated and personal local trip coordinator is available around-the-clock throughout your trip. We can also offer you mobile phone access while you travel.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="container-fluid mt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-9 text-center mt-5">
                    <h2 class="h3 font-weight-semi-bold text-capitalize">feel safe with a globally accredited company</h2>
                    <p class="mt-4">Enchanting Travels is accredited by all leading international travel associations, including ASTA and AFTA. As a result you can travel with peace of mind since your trip is fully bonded and 100% financially protected.</p>
                </div>
                <div class="col-12 mt-4">
                    <div class="row py-5"><!--.row -->
                        <div class="col">
                            <img src="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/asta.png')}}" alt="logo asta" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/expedia.png')}}" alt="logo expedia" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/facebook.png')}}" alt="logo facebook" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/peru.png')}}" alt="logo marca peru" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/tripadvisor.png')}}" alt="logo tripadvisor" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/yelp.png')}}" alt="logo yelp" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logos/youtube.png')}}" alt="logo youtube" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
