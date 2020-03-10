@extends('layouts.page.app')
@section('content')
    <header>
        <div class="overlay"></div>
        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <iframe src="https://player.vimeo.com/video/294846484?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>

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
                    <formhome-component></formhome-component>
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
        <div class="container">
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

            <div class="row no-gutters">
                <div class="col-4">
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

                <div class="col-4">
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

                <div class="col-4">
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

                <div class="col-4">
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

                <div class="col-4">
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

                <div class="col-4">
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



                    @foreach($destino->take(3) as $destinos)
                    <div class="col">

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
                    <a href="" class="btn btn-info font-weight-bold btn-sm text-uppercase small mt-5"><small>Explore todos nuestros destinos en Perú</small></a>
                </div>
            </div>
        </div>
    </section>


    <section class="box-fondohome">
        <div class="container">
            <div class="row pb-4">
                <div class="col text-center">
                    <h2 class="font-weight-light h3">SOMOS LOCALES APASIONADOS POR LOS VIAJES</h2>
                    <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dolor dolore enim et, expedita hic incidunt inventore iure libero nisi odio perferendis porro possimus quo sint sit vel voluptatem?</p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="users" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Grupos pequeños y personalizados.</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="clock" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Nosotros vivimos aquí, somos locales 100%.</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="pen-tool" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Reserve ahora o Diseña tu Viaje!</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="map-pin" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Sin intermediarios, sede en Perú.</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="thumbs-up" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Estamos orgullosos de nuestros recomendaciones!</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="calendar" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Nos adaptamos a cualquier hora de llegada.</span>
                </div>
            </div>

            <div class="row mt-5 pb-5">
                <div class="col">
                    <h3 class="my-4">POR QUE VIAJAR <span class="d-block mt-2">CON <mark>GOTOPERU</mark></span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum cupiditate ex labore numquam perspiciatis provident quis, repudiandae sapiente sequi sint, suscipit voluptatibus. Alias dignissimos fugiat id maiores quod saepe?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequatur error esse laborum maiores molestias nesciunt, nisi odio pariatur praesentium, quaerat quidem quos ratione saepe sapiente, tempore unde veniam vitae!</p>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a href=""><i data-feather="facebook" class="text-primary" stroke-width="2"></i></a>
                        </div>
                        <div class="col-auto">
                            <a href=""><i data-feather="twitter" class="text-info" stroke-width="2"></i></a>
                        </div>
                        <div class="col-auto">
                            <a href=""><i data-feather="instagram" class="text-dark" stroke-width="2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-4">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-white t-corrido">Parte del grupo:</h5>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        {{--                        <div class="col">--}}
                        {{--                            <img src="https://www.incasperutours.travel/images/logo-yovana.png" alt="" class="w-100">--}}
                        {{--                        </div>--}}
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
