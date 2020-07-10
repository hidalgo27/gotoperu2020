<div class="menu-container">
    <div class="container-fluid rgba-white-9">
        <div class="row justify-content-between align-items-center d-none d-sm-flex">
            <div class="col-auto py-3">
                <div class="row align-items-center">
                    <div class="col-5">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-black.png')}}" alt="logo destino" class="w-100"></a>
                    </div>
                    <div class="col text-left">
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

            <div class="col">
                <img src="{{asset('images/logos/tripadvisor-h.png')}}" alt="" class="p-2 w-100">
            </div>

            <div class="col">
                <img src="{{asset('images/logos/trustpilot.png')}}" alt="" class="p-2 w-100">
            </div>

            <div class="col-4 d-none py-0 d-sm-inline text-right">
                <div class="row align-items-center">
                    <div class="col d-none d-sm-inline text-right">
                        <a href="" class="font-weight-bold text-dark">+1 202-491-1478</a>
                    </div>
                    <div class="col"><a href="{{route('contact_path')}}" class="btn btn-block btn-sm btn-outline-g-yellow float-right ml-3 font-weight-bold px-4">CONTACT US</a></div>
                </div>
                {{--                    <img src="{{asset('images/icons/mx.svg')}}" alt="" width="30" class="w-"> +52 (33) 41625836 |--}}
                {{--                    <img src="{{asset('images/icons/mx.svg')}}" alt="" width="30" class="w-"> +52 (33) 41625836--}}
            </div>
        </div>
    </div>
    @include('layouts.page.menu')


        <div class="row no-gutters justify-content-between">
            <div class="col-3 text-white">
                <div class="p-2">
                    <h3 class="font-weight-bold">Travel with Confidence</h3>
                    <p class="small">we will continue to keep you safe and healthy on our tours and make you feel even better about choosing to book with GOTOPERU, including our new fully flexible terms. Lock our special deals and travel until Dec 2021.</p>
                    <p class="t-small-6 m-0">Founder & Director</p>
                    <img src="{{asset('images/firma-paul.png')}}" alt="">
                    <p class="t-small-6">Paul Catano</p>
                </div>

            </div>
            <div class="col-2 text-center">
                <div class="bg-warning clearfix rounded m-2 p-2 position-relative">
                    <img src="{{asset('images/free.png')}}" alt="" class="w-100">
                    <p class="h5 m-0">Postponements</p>
                    <p class="small m-0">up to 9 days before arrival</p>
                    <p class="m-0 font-weight-bold text-white">FLEXIBLE TERMS</p>

                    <div class="position-absolute-bottom-sticker-1">
                        <a href="">
                            <img src="{{asset('images/weekly.png')}}" alt="" class="w-50 float-right">
                        </a>
                    </div>

{{--                    <div class="position-absolute-bottom-sticker-2">--}}
{{--                        <a href="">--}}
{{--                            <img src="{{asset('images/weekly.png')}}" alt="" class="w-50 float-right">--}}
{{--                        </a>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>

{{--        <div class="row no-gutters justify-content-end">--}}
{{--            <div class="col-2 text-center">--}}
{{--                <div class="bg-g-lime text-white clearfix rounded m-2 p-2 position-relative">--}}
{{--                    <p class="h5 font-weight-bold">$99pp</p>--}}
{{--                    <p class="small font-weight-bold m-0">Down Payment</p>--}}
{{--                    <p class="small m-0">Balance due 30 days before arrival</p>--}}
{{--                    <div class="position-absolute-bottom-sticker">--}}
{{--                        <a href="">--}}
{{--                            <img src="{{asset('images/term.png')}}" alt="" class="w-50">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


</div>
