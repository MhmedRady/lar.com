@include('front.includes.head')
<body id="index" class="lang-ar lang-rtl country-gb currency-gbp layout-full-width page-index tax-display-enabled">



<main id="main-site" class="displayhomenovthree">


    @include('front.includes.header')


    <div id="header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="d-flex align-items-center col-xl-3 col-md-3">
                    <div class="contentstickynew_verticalmenu"></div>
                    <div class="contentstickynew_logo"></div>
                </div>
                <div class="contentstickynew_search col-xl-7 col-md-6"></div>
                <div class="contentstickynew_group d-flex justify-content-end col-xl-2 col-md-3"></div>
            </div>
        </div>
    </div>





    <aside id="notifications">
        <div class="container">



        </div>
    </aside>

    @yield('page-content')

@include('front.includes.footer')
