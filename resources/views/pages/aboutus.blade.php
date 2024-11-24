@extends('layouts.master')
<?php
$info = DB::table('infos')->first();
?>
@section('content')

<main class="sections" style="color: #00a0df;">
    <!-- begin pageHeader -->
    <div class="pageHeader" style=" color: #00a0df;">
        <div class="container container--full">
            <div class="pageHeader__inner"> 
                <div class="pageHeader__bg">
                    <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="1200" height="1200" viewBox="0 0 1200 1200" version="1.1">
                        <path d="M 493.93581,46.566504 C 211.54697,75.06329 -120.58829,812.471 51.091129,1029.7795 222.77055,1247.0879 1069.943,1161.5965 1180.6534,915.79332 1291.3638,669.99008 776.32564,18.070721 493.93581,46.566504 Z" />
                    </svg>
                </div>
                <div class="pageHeader__breadcrumbs">

                    <!--Block Classes :  class="block block-system block-system-breadcrumb-block"-->





                    <!-- begin breadcrumbs -->
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__items">
                            <li class="breadcrumbs__item breadcrumbs__item--home"></li>

                            <li class="breadcrumbs__item ">
                                <a href="{{ route('index') }}">@lang('site.home')</a>
                            </li>
                            <li class="breadcrumbs__item ">
                                <a href="{{ route('aboutus') }}">@lang('site.aboutf')</a>
                            </li>

                        </ul>
                    </div>
                    <!-- end breadcrumbs -->


                </div>









                <div class="pageHeader__wrapper">
                    <div class="pageHeader__content">
                        <!-- begin textContent -->
                        <div class="textContent">
                            <h1 class="textContent__category">

                                @lang('site.about_us')
                            </h1>
                            <p class="textContent__text">
                                @if (app()->getLocale()=='ar')
                                    {{ $about->about_ar }}
                                @else
                                    {{ $about->about_en }} 
                                @endif
                            </p>
                        </div>
                        <!-- end textContent -->

                    </div>

                    <div class="pageHeader__image">
                        <!-- begin imageFrame -->
                        <div class="imageFrame">
                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="450" height="450" viewBox="0 0 450 450" version="1.1">
                                <defs>
                                    <clipPath id="header-image-image-frame-clip-path" clipPathUnits="userSpaceOnUse">
                                        <path style="fill:#000000" d="M 361.1271,61.820457 C 286.9842,-3.171827 20.949473,87.147517 6.4149643,182.24908 -8.1195446,277.35066 214.30696,472.32954 302.9821,442.22509 391.65722,412.12064 435.26994,126.81414 361.1271,61.820457 Z" />
                                    </clipPath>
                                </defs>
                                <path style="opacity:0.66;fill:#06a0de" d="M 198.76644,4.9740999 C 97.713328,15.171775 -21.139832,279.05137 40.295231,356.81422 101.73029,434.57707 404.88765,403.98503 444.50768,316.02451 484.12772,228.06398 299.81955,-5.2235748 198.76644,4.9740999 Z" />
                                <path style="opacity:0.66;fill:#109bbf" d="M 313.7872,17.490465 C 221.1738,-24.204646 -13.695846,144.8952 0.62705383,242.95734 14.949954,341.01947 292.78794,466.10467 371.08016,409.73864 449.37238,353.37261 406.4006,59.185576 313.7872,17.490465 Z" />
                                <g clip-path="url(#header-image-image-frame-clip-path)">
                                    <image x="-8" y="32" xlink:href="{{ Voyager::image($about->img1) }}" width="420" height="420" preserveAspectRatio="xMidYMid slice" />
                                </g>
                            </svg>
                        </div>
                        <!-- end imageFrame -->
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- end pageHeader -->





    <!-- begin largeCircles -->
    <div class="largeCircles">
        <div class="container">
            <div class="largeCircles__inner">
                <div class="largeCircles__bg">
                    <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 2048 2048" height="4096" width="4096">
                        <path d="M 1287.4211,34.932273 A 145.36952,145.36952 0 0 0 1105.6895,176.05707 v 250.61226 a 138.3213,138.3213 0 0 0 91.4664,129.43092 499.14206,499.14206 0 0 1 -172.9216,967.36805 h -4.1648 A 499.14206,499.14206 0 0 1 851.15233,556.18033 138.40139,138.40139 0 0 0 942.61912,426.74941 V 176.13719 A 145.36952,145.36952 0 0 0 760.88713,35.012353 1023.9941,1023.9941 0 0 0 -3.10478e-5,1024.4063 c 0,16.0187 0.8007999578,32.0374 1.2015999478,48.0561 A 1023.7538,1023.7538 0 0 0 1019.8291,2048 h 4.1648 A 1023.8339,1023.8339 0 0 0 1287.1811,34.691993" />
                    </svg>
                </div>
                
                <div class="largeCircles__content">
                    <div class="largeCircles__items">



                        <div class="largeCircles__item">
                            <div class="largeCircles__itemCircle">
                                <div class="largeCircles__itemIcon">
                                    <img class="largeCircles__itemIconImg" src="{{ asset('public/src/images/largeCircleIcon03.png') }}" alt="# " />
                                </div>
                            </div>
                        </div>

                        <div class="largeCircles__item">
                            <div class="largeCircles__itemCircle">
                                <div class="largeCircles__itemIcon">
                                    <img class="largeCircles__itemIconImg" src="{{ asset('public/src/images/largeCircleIcon02.png') }}" alt="#" />
                                </div>
                            </div>
                            <h3 class="largeCircles__itemTitle">
                                @lang('site.Our_Vision')
                            </h3>
                            <p class="largeCircles__itemText">
                                @if (app()->getLocale()=='ar')
                                    {{ $about->vision_ar }}
                                @else
                                    {{ $about->vision_en }}
                                @endif
                            </p>
                        </div>

                        <div class="largeCircles__item">
                            <div class="largeCircles__itemCircle">
                                <div class="largeCircles__itemIcon">
                                    <img class="largeCircles__itemIconImg" src="{{ asset('public/src/images/largeCircleIcon01.png') }}" alt="#" />
                                </div>
                            </div>
                            <h3 class="largeCircles__itemTitle">
                                @lang('site.Our_msg')
                            </h3>
                            <p class="largeCircles__itemText">
                                @if (app()->getLocale()=='ar')
                                    {{ $about->msg_ar }}
                                @else
                                    {{ $about->msg_en }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="largeCircles__image">
                    <!-- begin imageFrameLarge --> 
                    <div class="imageFrameLarge">
                        <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 800 800" version="1.1">
                            <defs>
                                <clipPath id="header-image-image-frame-large-clip-path" clipPathUnits="userSpaceOnUse">
                                    <path style="fill:#000000" d="M 640.62914,156.82654 C 540.22427,22.428025 65.505809,78.639337 7.6715897,231.77433 -50.162629,384.90931 251.05198,788.10486 409.29107,769.36838 567.53016,750.63191 741.03401,291.22505 640.62914,156.82654 Z" />
                                </clipPath>
                            </defs><!--
                            <path style="opacity:0.66;fill:#A0D083" d="M 316.48987,30.525525 C 152.61225,47.062973 -40.131673,474.99583 59.497981,601.103 159.12763,727.21017 650.75852,677.59582 715.00649,534.9552 779.25446,392.31458 480.3665,13.986076 316.48987,30.525525 Z" />
                            <path style="opacity:0.66;fill:#57C0A5" d="M 219.86266,61.585625 C 56.640735,133.44764 1.3400928,638.61878 146.13386,735.14539 290.92762,831.67199 780.59751,616.08565 799.03328,447.69455 817.46904,279.30344 383.09029,-10.27825 219.86266,61.585625 Z" />
                            <g clip-path="url(#header-image-image-frame-large-clip-path)">
                                <image x="-14" y="75" xlink:href="{{ Voyager::image($about->img1) }}" width="700" height="700" preserveAspectRatio="xMidYMid slice" />
                            </g>-->
                        </svg>
                    </div> 
                    <!-- end imageFrameLarge -->
                </div>
                
            </div>
            
        </div>
    </div>
    <!-- end largeCircles -->








    <div class="iconTextGrid">
        <div class="container">
            <div class="iconTextGrid__inner">
                <div class="iconTextGrid__info">
                    <!-- begin textContent -->
                    <div class="textContent textContent--line">
                        <h2 class="textContent__title">
                            @lang('site.values')                      
                        </h2>
                    </div>
                    <!-- end textContent -->
                </div>
                <div class="iconTextGrid__grid">
                    <div class="iconTextGrid__items">
                            
                        @foreach ($values as $item)
                        <div class="iconTextGrid__item">
                            <div class="iconTextGrid__itemContent">
                                <div class="iconTextGrid__itemIcon">
                                    <img class="iconTextGrid__itemIconImg" src="{{ asset('public/src/images/iconTextGrid03.png') }}" alt="" />
                                </div>
                                <p class="iconTextGrid__itemText">
                                    @if (app()->getLocale()=='ar')
                                        {{ $item->value_ar }}
                                    @else
                                        {{ $item->value_en }}
                                    @endif
                                </p>
                            </div>
                        </div>
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- begin iconTextGrid -->
    <div class="iconTextGrid">
        <div class="container">
            <div class="iconTextGrid__inner">
                <div class="iconTextGrid__info">
                    <!-- begin textContent -->
                    <div class="textContent textContent--line">
                        <h2 class="textContent__title">
                            @lang('site.Our_Goals')
                        </h2>
                    </div>
                    <!-- end textContent -->
                </div>
                <div class="iconTextGrid__grid">
                    <div class="iconTextGrid__items">
                        @foreach ($goals as $item)
                        <div class="iconTextGrid__item">
                            <div class="iconTextGrid__itemContent">
                                <div class="iconTextGrid__itemIcon">
                                    <img class="iconTextGrid__itemIconImg" src="{{ asset('public/src/images/iconTextGrid04.png') }}" alt="" />
                                </div>
                                <p class="iconTextGrid__itemText">
                                    @if (app()->getLocale()=='ar')
                                        {{ $item->name_ar }}
                                    @else
                                        {{ $item->name_en }}
                                    @endif
                                </p>
                            </div>
                        </div>
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end iconTextGrid -->
    <!-- begin iconTextGrid -->
    <div class="iconTextGrid">
        <div class="container">
            <div class="iconTextGrid__inner">
                <div class="iconTextGrid__info">
                    <!-- begin textContent -->
                    <div class="textContent textContent--line">
                        <h2 class="textContent__title">
                            @lang('site.Our_fields')
                        </h2>
                    </div>
                    <!-- end textContent -->
                </div>
                <div class="iconTextGrid__grid">
                    <div class="iconTextGrid__items">
                        @foreach ($fields as $item)
                        <div class="iconTextGrid__item">
                            <div class="iconTextGrid__itemContent">
                                <div class="iconTextGrid__itemIcon">
                                    <img class="iconTextGrid__itemIconImg" src="{{ asset('public/src/images/iconTextGrid02.png') }}" alt="" />
                                </div>
                                <p class="iconTextGrid__itemText">
                                    @if (app()->getLocale()=='ar')
                                        {{ $item->name_ar }}
                                    @else
                                        {{ $item->name_en }}
                                    @endif
                                </p>
                            </div>
                        </div>
                        
                      
                        
                        
                        
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end iconTextGrid -->
    
    {{-- <div class="largeCircles__info">
        <!-- begin textContent --> 
        <div class="textContent textContent--line">
            <h2 class="textContent__title">
                @lang('site.project_support')
            </h2>
            <p class="textContent__text">
                @if (app()->getLocale()=='ar')
                    {{ $about->support_ar }}
                @else
                    {{ $about->support_en }}
                @endif
            </p>
        </div>
        <!-- end textContent -->
    </div> --}}
    <!-- begin contactBanner -->
    <div class="contactBanner">
        <div class="container container--full">
            <div class="contactBanner__inner">
                <div class="contactBanner__info">
                    <h2 class="contactBanner__title">
                        @lang('site.project_support')</h2>
                    <p class="contactBanner__text">
                        @if (app()->getLocale()=='ar')
                        {{ $about->support_ar }}
                    @else
                        {{ $about->support_en }}
                    @endif</p>
                    <div class="contactBanner__button">
                        <!-- begin button -->
                        <a href="{{ route('supports') }}" class="button button--white">
                            <span class="button__text">@lang('site.more')</span>
                        </a>
                        <!-- end button -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contactBanner -->

</main>

@endsection
