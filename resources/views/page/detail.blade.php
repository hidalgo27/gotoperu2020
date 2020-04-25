@extends('layouts.page.app')
@section('content')
    @foreach($paquete as $paquetes)
        @include('layouts.page.head')
        <header class="header">
            <div class="overlay"></div>
            <div class="homepage-video">

                {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
                {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
{{--                <img src="{{asset('images/placebg.jpg')}}" alt="">--}}
                @foreach($paquetes->imagen_paquetes->take(1) as $imagen)
                    <img src="{{$imagen->nombre}}" alt="{{$paquetes->titulo}}">
                @endforeach

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
                <div class="position-absolute-bottom r-0 w-25">
                    <div class="text-white text-center font-weight-semi-bold">{{$paquetes->duracion}} days from
                        <span class="text-white">$
                                @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                                @if($precio->precio_d > 0)
                                    {{$precio->precio_d}}
                                @else
                                    <span class="text-danger">
                                                    Inquire
                                                </span>
                                @endif
                            @endforeach
                            </span>
                    </div>
                        <div class="rgba-white-9 text-left p-3">
                            <h1 class="h3 font-weight-bold text-g-green">{{$paquetes->titulo}}</h1>
                            <h4 class="font-weight-semi-bold text-g-yellow">Included</h4>
                            <ul class="small pl-3">
                                <li>English-Speaking Resident Tour Director® and Local Guides</li>
                                <li>Hand-Selected Luxury Accommodations</li>
                                <li>Airport Meet and Greet with Private Transfers</li>
                                <li>Travelling Bell Boy® Luggage Handling</li>
                                <li>Breakfast in Bed on Select Days</li>
                                <li>Full Breakfast Daily; Select Lunches and Dinners</li>
                                <li>New! Your Choice of Activity on Design Your Day®</li>
                                <li>Traveller’s Valet® Laundry Service</li>
                                <li>Internet Access</li>
                                <li>Entrance Fees, Taxes and All Gratuities Except Resident Tour Director</li>
                                <li>24/7 A&K On-Call Support</li>
                                <li>Guaranteed Departures with Just Two Guests</li>
                            </ul>

                        </div>


                </div>
            </div>
        </header>

        <section class="my-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="badge badge-pill badge-danger">New</span>
                        <small class="t-small-6 font-weight-bold text-muted d-block my-1">SMALL GROUP TOURS | GROUP SIZE: 6-14</small>
                        <h1 class="h3 font-weight-bold">{{$paquetes->titulo}}</h1>
                        <hr>
                        <div class="text-muted font-weight-semi-bold">{{$paquetes->duracion}} days from
                            <span class="text-g-yellow">$
                                @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                                    @if($precio->precio_d > 0)
                                        {{$precio->precio_d}}
                                    @else
                                        <span class="text-danger">
                                                    Inquire
                                                </span>
                                    @endif
                                @endforeach
                            </span> per person
                        </div>

                        <div class="row my-4">
                            <div class="col">
                                <a href="" class="btn btn-block btn-outline-danger rounded-0 btn-sm">Download journey PDF</a>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-block btn-g-yellow rounded-0 btn-sm text-white">Book Now</a>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-block btn-g-green rounded-0 btn-sm">Inquire</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 position-relative">
                        <div class="mt-5 bg-white p-3 text-center rounded shadow-sm">
                            <div class="row align-items-center no-gutters">
                                <div class="col-3">
                                    <img src="https://gotoperu.com.mx/images/icons/whatsapp-i.png" alt="" class="w-100">
                                </div>
                                <div class="col">
                                    <h6 class="font-weight-bold text-secondary">Consulte ahora por Whatsapp</h6>
                                    <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="text-secondary h4 font-weight-bold stretched-link">+51 1 7059774</a>
                                </div>
                            </div>
                            {{--                                <h5 class="font-weight-bold text-secondary">Tour highligh</h5>--}}
                            {{--                                <ul class="list-unstyled">--}}
                            {{--                                    <li><i class="fas fa-chevron-right"></i> Arequipa</li>--}}
                            {{--                                    <li><i class="fas fa-chevron-right"></i> Cusco</li>--}}
                            {{--                                    <li><i class="fas fa-chevron-right"></i> Machu picchu</li>--}}
                            {{--                                </ul>--}}


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="box-tab-detail shadow-sm mt-5 mb-4">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="tabs-detail">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item text-muted nav-link py-3 rounded-0 active" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true"><i data-feather="book-open" stroke-width="1"></i> Overview</a>
                                <a class="nav-item text-muted nav-link py-3 rounded-0" id="nav-itinerary-tab" data-toggle="tab" href="#nav-itinerary" role="tab" aria-controls="nav-itinerary" aria-selected="false"><i data-feather="map-pin" stroke-width="1"></i> Itinerary</a>
                                <a class="nav-item text-muted nav-link py-3 rounded-0" id="nav-prices-tab" data-toggle="tab" href="#nav-prices" role="tab" aria-controls="nav-prices" aria-selected="false"><i data-feather="dollar-sign" stroke-width="1"></i> Prices</a>
                                <a class="nav-item text-muted nav-link py-3 rounded-0" id="before-tab" data-toggle="tab" href="#before" role="tab" aria-controls="before" aria-selected="false"><i data-feather="book-open" stroke-width="1"></i> Before you Go</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">

                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col">
                                                <h3 class="font-weight-semi-bold">Intro</h3>
                                                {!! $paquetes->descripcion !!}
                                            </div>
                                        </div>

{{--                                        <h3 class="font-weight-semi-bold mb-4">Outline</h3>--}}

                                        <div class="timeline-centered">
                                            @php $day = 1; @endphp
                                            @foreach($paquetes->paquete_itinerario as $itinerario)
                                                <article class="timeline-entry">

                                                    <div class="timeline-entry-inner">

                                                        @switch($day)
                                                            @case(1)
                                                                @php $bgit = 'bg-success'; $bgtext = 'Begin' @endphp
                                                            @break

                                                            @case($paquetes->duracion)
                                                                @php $bgit = 'bg-danger' ; $bgtext = 'End' @endphp
                                                            @break

                                                            @default
                                                                @php $bgit = 'bg-secondary'; $bgtext = '' @endphp
                                                        @endswitch

                                                            <div class="timeline-time"><span>Day {{$day}}</span> <span>{{$bgtext}}</span></div>

                                                        <div class="timeline-icon {{$bgit}}">
                                                            <i class="entypo-feather"></i>
                                                        </div>

                                                        <div class="timeline-label">
                                                            <h2 class="mb-0 h6 font-weight-semi-bold text-secondary">{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</h2>
                                                        </div>
                                                    </div>

                                                </article>
                                                @php $day++; @endphp
                                            @endforeach


                                            <article class="timeline-entry begin">

                                                <div class="timeline-entry-inner">

                                                    <div class="timeline-icon">
                                                        <i class="entypo-flight"></i>
                                                    </div>

                                                </div>

                                            </article>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="font-weight-semi-bold mb-3">Your Journey</h6>
                                        <img src="{{$paquetes->imagen}}" alt="" class="w-100 shadow-sm">

                                        <hr>
                                        <h6 class="font-weight-semi-bold mb-3">Climate Charts</h6>
                                        <a href="" class="btn btn-link font-weight-bold text-g-yellow"><i data-feather="sun" stroke-width="1" width="15" height="15"></i> view <i data-feather="arrow-right" stroke-width="1" width="15" height="15"></i></a>
                                        <hr>

                                        @foreach($dificultad->where('idpaquetes', $paquetes->id) as $dificultades)
                                            <h6 class="font-weight-semi-bold mt-3"><i class="fas fa-angle-right"></i> Physical demand: <span class="text-primary text-capitalize">{{$dificultades->dificultad->nombre}}</span></h6>
                                            <p>{!! $dificultades->dificultad->descripcion !!}</p>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-itinerary" role="tabpanel" aria-labelledby="nav-itinerary-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col">
{{--                                                <h3 class="font-weight-semi-bold">Intro</h3>--}}
{{--                                                {!! $paquetes->descripcion !!}--}}
                                            </div>
                                        </div>

                                        {{--                                        <h3 class="font-weight-semi-bold mb-4">Outline</h3>--}}

                                        <div class="timeline-centered">
                                            @php $day2 = 1; @endphp
                                            @foreach($paquetes->paquete_itinerario as $itinerario)
                                                <article class="timeline-entry mb-5">

                                                    <div class="timeline-entry-inner">

                                                        @switch($day2)
                                                            @case(1)
                                                            @php $bgit = 'bg-success'; $bgtext = 'Begin' @endphp
                                                            @break

                                                            @case($paquetes->duracion)
                                                            @php $bgit = 'bg-danger' ; $bgtext = 'End' @endphp
                                                            @break

                                                            @default
                                                            @php $bgit = 'bg-secondary'; $bgtext = '' @endphp
                                                        @endswitch

                                                        <div class="timeline-time"><span>Day {{$day2}}</span> <span>{{$bgtext}}</span></div>

                                                        <div class="timeline-icon {{$bgit}}">
                                                            <i class="entypo-feather"></i>
                                                        </div>

                                                        <div class="timeline-label text-secondary">
                                                            <h2 class="mb-0 h6 font-weight-bold text-secondary">{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</h2>
                                                            <hr>
                                                            {!! $itinerario->itinerarios->descripcion !!}
                                                        </div>
                                                    </div>

                                                </article>
                                                @php $day2++; @endphp
                                            @endforeach


                                            <article class="timeline-entry begin">

                                                <div class="timeline-entry-inner">

                                                    <div class="timeline-icon">
                                                        <i class="entypo-flight"></i>
                                                    </div>

                                                </div>

                                            </article>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="sticky-top sticky-top-20">
                                            <h6 class="font-weight-semi-bold mb-3">Your Journey</h6>
                                            <img src="{{$paquetes->imagen}}" alt="" class="w-100 shadow-sm">

                                            <hr>
                                            <h6 class="font-weight-semi-bold mb-3">Climate Charts</h6>
                                            <a href="" class="btn btn-link font-weight-bold text-g-yellow"><i data-feather="sun" stroke-width="1" width="15" height="15"></i> view <i data-feather="arrow-right" stroke-width="1" width="15" height="15"></i></a>
                                            <hr>

                                            @foreach($dificultad->where('idpaquetes', $paquetes->id) as $dificultades)
                                                <h6 class="font-weight-semi-bold mt-3"><i class="fas fa-angle-right"></i> Physical demand: <span class="text-primary text-capitalize">{{$dificultades->dificultad->nombre}}</span></h6>
                                                <p>{!! $dificultades->dificultad->descripcion !!}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-prices" role="tabpanel" aria-labelledby="nav-prices-tab">

                                    <div class="row">
                                        <div class="col">

                                            <h6 class="font-weight-bold text-secondary"><span class="text-g-yellow">Precios:</span></h6>
                                            <p>Los precios estan basados en doble acomodación.</p>
                                            <div class="table-responsive">
                                                <table class="table table-borderless border">
                                                    <thead class="thead-dark">
                                                    <tr class="text-center">
                                                        <th scope="col">Económico</th>
                                                        <th scope="col">Normal</th>
                                                        <th scope="col">Superior</th>
                                                        <th scope="col">Lujo</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="{{asset('images/hotels/2star.jpg')}}" alt="" class="w-100">
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/hotels/3star.jpg')}}" alt="" class="w-100">
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/hotels/4star.jpg')}}" alt="" class="w-100">
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/hotels/5start.jpg')}}" alt="" class="w-100">
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                            @if($precio->precio_d > 0)
                                                                <td>${{$precio->precio_d}}<small>USD</small></td>
                                                            @else
                                                                <td class="font-weight-bold text-danger">Inquire</td>
                                                            @endif
                                                        @endforeach

                                                    </tr>
                                                    <tr>
                                                        @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                            <td>
                                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                                    @foreach($hoteles_destinos->where('iddestinos', $paquete_destino->destinos->id) as $hoteles_destino)
                                                                        @foreach($hoteles->where('id', $hoteles_destino->hotel->id)->where('estrellas', $precio->estrellas) as $hotel)
                                                                            <a href="{{$hoteles_destino->hotel->url}}" target="_blank" data-toggle="tooltip" data-placement="top" title="{{$hotel->servicios}}"><small class="d-block"><i class="fas fa-angle-right"></i> {{ucwords(strtolower($hotel->nombre))}} <i class="text-secondary">({{ucwords(strtolower($paquete_destino->destinos->nombre))}})</i></small></a>
                                                                        @endforeach
                                                                    @endforeach
                                                                @endforeach
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="alert alert-primary">
                                                <p class="m-0">*Si tiene algún hotel en especifico con gusto lo prepararemos una cotización personalizada.</p>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col">





                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="before" role="tabpanel" aria-labelledby="before-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    @endforeach
@endsection
