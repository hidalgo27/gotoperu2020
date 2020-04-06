@extends('layouts.page.app')
@section('content')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>

        </div>
        <div class="container h-100">
            <div class="row d-flex h-75 text-center align-items-end">
                <div class="col w-100 text-white">
                    <h1 class="h1">Un viaje de ensueño</h1>
                    <h2 class="font-weight-lighter h4">Los mejores destinos en Perú operado por los mejores asesores de viaje.</h2>
                    {{--                    <a href="#consulte" class="btn btn-dark btn-lg h2 font-weight-bold mt-3">Diseña tu Viaje</a>--}}
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                </div>
            </div>
            <div class="row h-25 align-items-center">
                <div class="col">
{{--                    <div class="rgba-white-8 rounded px-2 pt-3 pb-2">--}}

                        <example-component></example-component>

{{--                    </div>--}}
                </div>
            </div>
        </div>
    </header>

    <section class="bg-light clearfix">
        <div class="container">

            <div class="row py-5">
                <div class="col-12 text-center">
                    <p class="m-0 text-secondary">Travel with an award-winning team on a completely customized, private and authentic trip of a lifetime. With our 98% satisfaction rate, round-the-clock local support and 100% financial protection, explore 50+ enchanting destinations around the world safely and seamlessly. Our 40,000+ enchanted guests will vouch for us.</p>
                    <p class="text-g-yellow m-0 mt-3 font-weight-semi-bold">GOTOPERU</p>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container py-0">
            <div class="row align-items-center border-top border-bottom no-gutters">
                <div class="col border-right">
                    <div class="py-5 pr-5">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> 100% Tailor Made, Private Tours</p>
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> Authentic & Unique Experiences</p>
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> 24/7 Local Support While You Travel</p>
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> Travel with an Award-Winning Team</p>
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> 100% Financial Protection</p>
                            </div>
                            <div class="col text-center">
                                <p class="h1 m-0 font-weight-bold">98%</p>
                                <span class="t-small-6">GUEST SATISFACTION RATE</span>
                                <hr>
                                <p class="h3 m-0 font-weight-bold">40 000+</p>
                                <span class="t-small-6">ENCHANTER GUEST</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="py-5 pl-4">
                                <i data-feather="message-circle" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                                <p class="t-corrido font-weight-light  text-secondary small pt-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aperiam consequatur dolorem eveniet illum ipsam iure maiores nam neque odio pariatur placeat porro, possimus reiciendis reprehenderit sapiente soluta vel!"</p>
                                <div class="row align-items-center pt-3">
                                    <div class="col-auto">
                                        <a href="">
                                            <div class="rounded-circle overflow-hidden box-commnet-video position-relative">
                                                <img src="https://gotoperu.com.mx/images/video-testimonial/2.jpg" alt="">
                                                <div class="position-absolute-bottom mb-4 text-center">
                                                    <i data-feather="play" class="d-block mx-auto text-white" width="30" height="30" stroke-width="2"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <p class="h6 font-weight-bold m-0 text-secondary">Alison Love x2</p>
                                        <small class="text-muted">Traveled to USA in 2017</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 bg-light rounded">
                            <img src="https://gotoperu.com.mx/images/icons/tripadvisor.png" alt="" class="w-100 d-block my-3">
                            <img src="https://gotoperu.com.mx/images/icons/yelp.png" alt="" class="w-100 d-block my-3">
                            <img src="https://gotoperu.com.mx/images/icons/trust.png" alt="" class="w-100 d-block my-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="font-weight-semi-bold h3">Offers</h2>
                </div>
            </div>

            <div class="row no-gutters mb-5 align-items-center bg-light shadow-sm">
                <div class="col">
                    <div class="position-relative bx-img-destinohome">
                        <a href="" class="text-dark d-block">
                            <img src="https://res-4.cloudinary.com/enchanting/q_70,w_839,h_416,c_fill/et-web/2019/12/Enchanting-Travels-Botswana-Tours-Okavango-Delta-Vumbura-Plains-Boat-ride.jpg" alt="" class="w-100">
                        </a>
                        <div class="position-absolute-top m-3">
                            <div class="box-offers-circle rounded-circle bg-g-yellow clearfix text-center p-2">
                                <span class="mt-4 d-block small font-weight-bold text-white">DIRECTOR</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4">
                        <p>Make the most of the off-season at the Okavango Delta in Botswana with unique tours, exclusive safaris to get up close with the animals, bush walks, and more, at special prices and without the crowds.</p>
                        <button type="button" class="btn btn-g-green mt-3 rounded-0 btn-sm"><small class="font-weight-bold">VIEW SPECIAL OFFER</small></button>
                    </div>
                </div>
            </div>

            <div class="row no-gutters align-items-center bg-light shadow-sm">
                <div class="col">
                    <div class="position-relative bx-img-destinohome">
                        <a href="" class="text-dark d-block">
                            <img src="https://res-2.cloudinary.com/enchanting/q_70,w_839,h_416,c_fill/et-web/2019/04/Enchanting-Travels-South-Africa-Tours-e1554802713607.jpg" alt="" class="w-100">
                        </a>
                        <div class="position-absolute-top m-3">
                            <div class="box-offers-circle rounded-circle bg-g-green clearfix text-center p-2">
                                <span class="mt-4 d-block small font-weight-bold text-white">DIRECTOR</span>
                            </div>
                        </div>
                        <div class="position-absolute-bottom p-3 rgba-black-2">
                            <h5 class="text-white">Peru: Luxury Honeymoon and Beach</h5>
                            <p class="m-0 text-white">11 Days: From $7590 / person</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4">
                        <p>Make the most of the off-season at the Okavango Delta in Botswana with unique tours, exclusive safaris to get up close with the animals, bush walks, and more, at special prices and without the crowds.</p>

                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <a href="">
                                            <div class="rounded-circle overflow-hidden box-commnet-video position-relative">
                                                <img src="https://gotoperu.com.mx/images/video-testimonial/2.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <p class="font-weight-bold m-0 text-secondary">Alison Love x2</p>
                                        <small class="text-muted">Traveled to USA in 2017</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-g-yellow rounded-0 btn-sm"><small class="font-weight-bold">VIEW THIS VACATION</small></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="font-weight-semi-bold h3">Travel Packages</h2>
                </div>
            </div>


            <div class="row">
                <div class="col-4 mb-4">
                    <div class="position-relative bx-img-destinohome">
                        <a href="" class="text-dark d-block">
                            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/1574356950633lima_1574356947.jpg" alt="" class="w-100">
                        </a>
                        <div class="position-absolute-bottom p-2 rgba-black-2">
                            <h6 class="text-white">Peru: Luxury Honeymoon and Beach</h6>
                            <p class="m-0 small text-white">11 Days: From $7590 / person</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="position-relative bx-img-destinohome">
                        <a href="" class="text-dark d-block">
                            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/1574271769215arequipa_1574271768.jpg" alt="" class="w-100">
                        </a>
                        <div class="position-absolute-bottom p-2 rgba-black-2">
                            <h6 class="text-white">Peru: Luxury Honeymoon and Beach</h6>
                            <p class="m-0 small text-white">11 Days: From $7590 / person</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="position-relative bx-img-destinohome">
                        <a href="" class="text-dark d-block">
                            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/1574357060394puno_1574357057.jpg" alt="" class="w-100">
                        </a>
                        <div class="position-absolute-bottom p-2 rgba-black-2">
                            <h6 class="text-white">Peru: Luxury Honeymoon and Beach</h6>
                            <p class="m-0 small text-white">11 Days: From $7590 / person</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="position-relative bx-img-destinohome">
                        <a href="" class="text-dark d-block">
                            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/1574356950633lima_1574356947.jpg" alt="" class="w-100">
                        </a>
                        <div class="position-absolute-bottom p-2 rgba-black-2">
                            <h6 class="text-white">Peru: Luxury Honeymoon and Beach</h6>
                            <p class="m-0 small text-white">11 Days: From $7590 / person</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="position-relative bx-img-destinohome">
                        <a href="" class="text-dark d-block">
                            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/1574271769215arequipa_1574271768.jpg" alt="" class="w-100">
                        </a>
                        <div class="position-absolute-bottom p-2 rgba-black-2">
                            <h6 class="text-white">Peru: Luxury Honeymoon and Beach</h6>
                            <p class="m-0 small text-white">11 Days: From $7590 / person</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="position-relative bx-img-destinohome">
                        <a href="" class="text-dark d-block">
                            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/1574357060394puno_1574357057.jpg" alt="" class="w-100">
                        </a>
                        <div class="position-absolute-bottom p-2 rgba-black-2">
                            <h6 class="text-white">Peru: Luxury Honeymoon and Beach</h6>
                            <p class="m-0 small text-white">11 Days: From $7590 / person</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-5 pb-3">
        <div class="container">
            <div class="row no-gutters pb-4">
                <div class="col">
                    <h2 class="font-weight-semi-bold h3">Destinations</h2>
                    <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dolor dolore enim et, expedita hic incidunt inventore iure libero nisi odio perferendis porro possimus quo sint sit vel voluptatem?</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row no-gutters align-items-center">



                    @foreach($destino->take(6) as $destinos)
                    <div class="col-4">

                            <div class="position-relative bx-img-destinohome">
                                <a href="" class="text-dark d-block">
                                    <img src="{{$destinos->imagen}}" alt="" class="w-100">
                                </a>
                                <div class="position-absolute-bottom p-3 text-white rgba-black-1 t-corrido font-weight-bold">
                                    {{$destinos->nombre}}
                                </div>
                            </div>

                    </div>
                    @endforeach


                <div class="col d-none">
                    <h3 class="t-corrido">Cusco</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aut blanditiis dolor eius fuga id illo nemo omnis pariatur, porro quas reiciendis sit suscipit velit veniam vero vitae voluptates?</p>

                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="">
                                        <div class="rounded-circle overflow-hidden box-commnet-video position-relative">
                                            <img src="https://gotoperu.com.mx/images/video-testimonial/2.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold m-0 text-secondary">Alison Love x2</p>
                                    <small class="text-muted">Traveled to USA in 2017</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-g-yellow rounded-0 btn-sm"><small class="font-weight-bold">VIEW THIS VACATION</small></button>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row no-gutters">
                <div class="col text-center">
                    <a href="" class="btn btn-info font-weight-bold btn-sm text-uppercase text-white small mt-5"><small>Explore todos nuestros destinos en Perú</small></a>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative my-5">
        <div class="offer py-5">
            <div class="container my-5">
                <div class="row text-center">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-semi-bold text-white">Why <span class="text-g-yellow">Go</span>  With GotoPeru</h2>
                    </div>
                </div>
                    <div class="row pt-5">
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="users" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">Small Groups and Private tours.</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="clock" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">We live here, trully a 24/7 Assistance.</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="pen-tool" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">Book Now option or Customize a dream trip!</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="map-pin" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">Cutting the middlemen, headquarters at Peru.</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="thumbs-up" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">We take pride of our tripadvisor reviews!</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="calendar" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">We can adapt to any arrival and departure.</span>
                        </div>
                    </div>
                    <div class="row mt-5 pt-5">
                        <div class="col text-white text-white text-center">
                            <p class="small m-0 font-weight-light">Since 2009</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>


    <section class="box-fondohome">
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


    {{--    <section>--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col">--}}
    {{--                    <form action="https://api.rd.services/platform/contacts/{identifier}:{value}" method="post">--}}
    {{--                        @csrf--}}
    {{--                        <input type="text" name="email" placeholder="email">--}}
    {{--                        <input type="text" name="nombre" placeholder="nombre">--}}
    {{--                        <input type="submit" value="enviar">--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

@endsection

@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-category', {
            slidesPerView: 6,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var swiper = new Swiper('.swiper-destino', {

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>
@endpush
