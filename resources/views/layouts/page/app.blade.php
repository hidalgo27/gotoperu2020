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
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


</head>
<body data-spy="scroll" data-target="#navbar-scroll">
<div id="app">


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
        <div class="bg-secondary d-block w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="row pt-4">
                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">GENERAL</p>
                            <ul class="m-0 text-g-yellow list-unstyled">
                                <li><a href="https://www.gotoperu.com" class="text-light font-weight-semi-bold small">Home</a></li>
                                <li><a href="#" class="text-light font-weight-semi-bold small">Request a Brochure</a></li>
                                <li><a href="https://www.gotoperu.com/contact-us" class="text-light font-weight-semi-bold small">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">About Us</p>
                            <ul class="m-0 list-unstyled">
                                <li><a href="https://www.gotoperu.com/about-us" class="text-light font-weight-semi-bold small">Our History</a></li>
                                <li><a href="#" class="text-light font-weight-semi-bold small">Social Responsability</a></li>
                                <li><a href="https://www.google.com/maps/place/GOTOPERU/@-13.5226792,-71.9748372,15z/data=!4m2!3m1!1s0x0:0xad9b34583ce776a0?sa=X&ved=2ahUKEwjZ86PazerjAhXuuFkKHb1dAaAQ_BIwE3oECAoQCA" target="_blank" class="text-light font-weight-semi-bold small">Offices</a></li>
                                <li><a href="https://www.gotoperu.com/join-our-team" class="text-light font-weight-semi-bold small">Join Our Team</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">Resources</p>
                            <ul class="m-0 list-unstyled">
                                <li><a href="https://www.gotoperu.com/frequently-asked-questions" class="text-light font-weight-semi-bold small">FAQ</a></li>
                                <li><a href="https://www.gotoperu.com/packages/category" class="text-light font-weight-semi-bold small">Travel Categories</a></li>
                                <li><a href="https://www.gotoperu.com/destinations" class="text-light font-weight-semi-bold small">Destinations</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">Community</p>
                            <ul class="m-0 text-g-yellow list-unstyled">
                                <li><a href="#" class="text-light font-weight-semi-bold small">GOTOPERU Blog</a></li>
                                <li><a href="https://www.gotoperu.com/video-testimonials" class="text-light font-weight-semi-bold small">Video Testimonials</a></li>
                                <li><a href="https://www.gotoperu.com/testimonials" class="text-light font-weight-semi-bold small">Reviews</a></li>
                                <li><a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" class="text-light font-weight-semi-bold small" target="_blank">Tripadvisor</a></li>
                                <li><a href="https://www.trustpilot.com/review/gotoperu.com" class="text-light font-weight-semi-bold small" target="_blank">Trustpilot</a></li>
                                <li><a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" class="text-light font-weight-semi-bold small" target="_blank">Yelp</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">Travel Agents</p>
                            <div class="rgba-black-5 p-4">
                                <p class="small text-light">As an agent of change, you have the power to change the world.</p>
                                <a href="https://www.gotoperu.com/contact-us" class="btn btn-g-green font-weight-semi-bold btn-sm btn-block rounded-0">Contact Us</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col">
                    <div class="position-relative text-center">
                        <div class="row justify-content-center">
                            <div class="col-9">
                                <div class="p-4">
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="{{asset('images/logos/logo-gotoperu-black.png')}}" alt="" class="w-100">
                                            <p class="small font-weight-bold text-secondary pt-3 m-0">Av. El Sol 449, Cusco 08001 Perú, Oficina 301.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative text-center">
                        <small class="footer-title text-uppercase text-muted small">CONNECT</small>
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
                        <small class="footer-title text-uppercase text-muted small">NEWSLETTER</small>
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
{{--<script src="https://player.vimeo.com/api/player.js"></script>--}}
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
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
    //     // see next for specifications
    // });

    (function($) {
        var defaults={
            sm : 540,
            md : 720,
            lg : 960,
            xl : 1140,
            navbar_expand: 'lg',
            animation: true,
            animateIn: 'fadeIn',
        };
        $.fn.bootnavbar = function(options) {

            var screen_width = $(document).width();
            settings = $.extend(defaults, options);

            if(screen_width >= settings.lg){
                $(this).find('.dropdown').hover(function() {
                    $(this).addClass('show');
                    $(this).find('.dropdown-menu').first().addClass('show');
                    if(settings.animation){
                        $(this).find('.dropdown-menu').first().addClass('animated ' + settings.animateIn);
                    }
                }, function() {
                    $(this).removeClass('show');
                    $(this).find('.dropdown-menu').first().removeClass('show');
                });
            }

            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');

                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });

                return false;
            });
        };
    })(jQuery);

</script>

<script>
    $(function () {
        $('#main_navbar').bootnavbar();
    })
</script>

</body>
</html>
