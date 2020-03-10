<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Paquetes de Viaje a Perú | Perú Tours</title>
    <link href="{{asset('icons/favicon.ico')}}" rel="icon" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token()  }}">


</head>
<body data-spy="scroll" data-target="#navbar-scroll">
<div id="app">

    <div class="menu-container rgba-white-9">
        <div class="container-fluid my-2">
            <div class="row justify-content-between align-items-center">
                <div class="col-7">
                    <div class="row align-items-center py-2">
                        <div class="col-5">
                            <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-black.png')}}" alt="logo destino" class="w-100"></a>
                        </div>
                        <div class="col">
                            <small class="font-weight-semi-bold text-secondary">| Private tailor-made journeys of a lifetime</small>
                        </div>
                    </div>
                </div>
{{--                <div class="col-4 d-none d-sm-inline">--}}
{{--                    <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank" class="mx-2">--}}
{{--                        <i data-feather="facebook" class="text-white" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://twitter.com/GOTOPERUCOM" target="_blank" class="mx-2">--}}
{{--                        <i data-feather="twitter" class="text-white" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank" class="mx-2">--}}
{{--                        <i data-feather="youtube" class="text-white" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://www.instagram.com/go.to.peru/" target="_blank" class="mx-2">--}}
{{--                        <i data-feather="instagram" class="text-white" stroke-width="1"></i>--}}
{{--                    </a>--}}

{{--                </div>--}}


                <div class="col-4 d-none d-sm-inline text-right">
                    <div class="row align-items-center">
                        <div class="col d-none d-sm-inline text-right">
                            <a href="" class="font-weight-bold text-dark">+1 202-491-1478</a>
                        </div>
                        <div class="col"><a href="#consulte" class="btn btn-block btn-g-yellow float-right ml-3 font-weight-bold px-4 text-white rounded-0">CONTACT US</a></div>
                    </div>
                    {{--                    <img src="{{asset('images/icons/mx.svg')}}" alt="" width="30" class="w-"> +52 (33) 41625836 |--}}
                    {{--                    <img src="{{asset('images/icons/mx.svg')}}" alt="" width="30" class="w-"> +52 (33) 41625836--}}
                </div>
            </div>
        </div>
        @include('layouts.page.menu')
    </div>



    @yield('content')

{{--    <div id="redes">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row justify-content-end">--}}
{{--                <div class="col-auto">--}}
{{--                    <div class="bg-dark rounded px-3 mx-3 shadow clearfix float-right">--}}
{{--                        <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="font-weight-bold text-white stretched-link">--}}
{{--                            Escríbenos por WhatsApp--}}
{{--                            <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <footer class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="position-relative text-center">
                        <small class="footer-title text-uppercase text-muted small">CONTACTE CON NOSOTROS</small>
                        <span class="footer-line-title"></span>
                        <div class="row justify-content-center">
                            <div class="col-9">
                                <div class="p-4">
                                    <div class="row">
                                        <div class="col text-left">
                                            <p class="small m-0"><i data-feather="check" class="" stroke-width="1"></i> Av. El Sol 449, Oficina 301.</p>
                                            <p class="small m-0"><i data-feather="check" class="" stroke-width="1"></i> Cusco Centro Historico</p>
                                            <p class="small m-0"><i data-feather="check" class="" stroke-width="1"></i> Ciudad del Cusco</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative text-center">
                        <small class="footer-title text-uppercase text-muted small">SIGUENOS EN NUESTRAS REDES</small>
                        <span class="footer-line-title"></span>
                        <div class="row justify-content-center">
                            <div class="col-9">
                                <div class="p-4">
                                    <div class="row">
                                        <div class="col">
                                            <i data-feather="facebook" class="" stroke-width="1"></i>
                                            <small class="t-small-6">FACEBOOK</small>
                                        </div>
                                        <div class="col">
                                            <i data-feather="twitter" class="" stroke-width="1"></i>
                                            <small class="t-small-6">TWITTER</small>
                                        </div>
                                        <div class="col">
                                            <i data-feather="instagram" class="" stroke-width="1"></i>
                                            <small class="t-small-6">INSTAGRAM</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="position-relative text-center">
                        <small class="footer-title text-uppercase text-muted small">SUSCRIBETE PARA OFERTAS</small>
                        <span class="footer-line-title"></span>
                        <div class="row justify-content-center">
                            <div class="col-9">
                                <div class="p-4">
                                    <input type="text" class="form-control form-control-sm rounded-0 d-block text-center t-corrido" placeholder="email">
                                    <button type="submit" class="btn btn-dark rounded-0 btn-sm btn-block mt-3"><span class="small">SUSCRIBE</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <small class="small text-white">© 2020 gotoperu</small>
                    </div>
                    <div class="col text-right">
                        <a href="" class="t-small-6 text-white-50">PAQUETES DE VIAJE</a>
                        <a href="" class="t-small-6 text-white-50"> | DESTINOS EN PERÚ | </a>
                        <a href="" class="t-small-6 text-white-50">SOBRE NOSOTROS</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="https://apps.elfsight.com/p/platform.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>
{{--<script src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/d1b447b4-892c-4562-a6dc-536d0eb23944-loader.js" ></script>--}}
@stack('scripts')
<script>
    feather.replace();
    $(document).ready(function(){
        $('.venobox').venobox();
    });
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
</script>
<script>
    /*global $ */
    $(document).ready(function() {
        "use strict";
        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
        //Checks if li has sub (ul) and adds class for toggle icon - just an UI
        $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
        //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)
        $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile text-white\">Menu</a>");
        //Adds menu-mobile class (for mobile toggle menu) before the normal menu
        //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
        //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
        //Done this way so it can be used with wordpress without any trouble
        $(".menu > ul > li").hover(function(e) {
            if ($(window).width() > 943) {
                $(this).children("ul").stop(true, false).fadeToggle(150);
                e.preventDefault();
            }
        });
        //If width is more than 943px dropdowns are displayed on hover
        $(".menu > ul > li").click(function() {
            if ($(window).width() <= 943) {
                $(this).children("ul").fadeToggle(150);
            }
        });
        //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)
        $(".menu-mobile").click(function(e) {
            $(".menu > ul").toggleClass('show-on-mobile');
            e.preventDefault();
        });
        //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
        // see next for specifications
    });
</script>
</body>
</html>
