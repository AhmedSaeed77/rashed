@extends('layouts.master')
<?php
$info = DB::table('infos')->first();
?>
@section('content')
<main class="sections" style="color: #0088DB;">
    <!-- begin pageHeader -->
    <div class="pageHeader pageHeader--invert" style=" color: #0088DB;">
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
                                <a href="{{ route('programs') }}">@lang('site.programs')</a>
                            </li>
                            <li class="breadcrumbs__item ">
                                <a href="">
                                    @if (app()->getLocale()=='ar')
                                        {{ $program->title_ar }}
                                    @else
                                        {{ $program->title_en }}
                                    @endif
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="pageHeader__wrapper single-text">
                    <div class="pageHeader__content">
                        <!-- begin textContent -->
                        <div class="textContent">
                            <h1 class="textContent__category">

                            </h1>
                            <h2 class="textContent__title">
                                @if (app()->getLocale()=='ar')
                                    {{ $program->title_ar }}
                                @else
                                    {{ $program->title_en }}
                                @endif
                            </h2>
                            <p class="textContent__text">
                                @if (app()->getLocale()=='ar')
                                    {!! $program->content_ar !!}
                                @else
                                    {!! $program->content_en !!}
                                @endif

                            </p>
                            <div class="btn-group">
                                @php
                                    $file = json_decode($program->file);
                                @endphp
                                @if (!empty($file[0]))
                                <a href="{{ Voyager::image($file[0]->download_link) }}"  class="button">
                                    <span class="button__text">@lang('site.download')</span>
                                </a>
                                @endif
                            </div>
                        </div>
                        <!-- end textContent -->

                    </div>
                    <!--<div class="pageHeader__image">-->
                        <!-- begin imageFrame -->
                        <!--<div class="imageFrame">-->
                        <!--    <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="450" height="450" viewBox="0 0 450 450" version="1.1">-->
                        <!--        <defs>-->
                        <!--            <clipPath id="header-image-image-frame-clip-path" clipPathUnits="userSpaceOnUse">-->
                        <!--                <path style="fill:#000000" d="M 361.1271,61.820457 C 286.9842,-3.171827 20.949473,87.147517 6.4149643,182.24908 -8.1195446,277.35066 214.30696,472.32954 302.9821,442.22509 391.65722,412.12064 435.26994,126.81414 361.1271,61.820457 Z" />-->
                        <!--            </clipPath>-->
                        <!--        </defs>-->
                        <!--        <path style="opacity:0.66;fill:#65C79B" d="M 198.76644,4.9740999 C 97.713328,15.171775 -21.139832,279.05137 40.295231,356.81422 101.73029,434.57707 404.88765,403.98503 444.50768,316.02451 484.12772,228.06398 299.81955,-5.2235748 198.76644,4.9740999 Z" />-->
                        <!--        <path style="opacity:0.66;fill:#96D87F" d="M 313.7872,17.490465 C 221.1738,-24.204646 -13.695846,144.8952 0.62705383,242.95734 14.949954,341.01947 292.78794,466.10467 371.08016,409.73864 449.37238,353.37261 406.4006,59.185576 313.7872,17.490465 Z" />-->
                        <!--        <g clip-path="url(#header-image-image-frame-clip-path)">-->
                        <!--            <image x="-8" y="32" xlink:href="{{ asset('public/storage/'.$program->img) }}" width="420" height="420" preserveAspectRatio="xMidYMid slice" />-->
                        <!--        </g>-->
                        <!--    </svg>-->
                        <!--</div> -->
                        <!-- end imageFrame -->
                    <!--</div>-->
                </div>

            </div>
        </div>
    </div>
    <!-- end pageHeader -->
    
    <section class="form-bottom">
        <div class="container">
            <div class="form-pro">
                <h2 class="ttitle">@lang('site.rashid_program')</h2>
                <form action="{{ route('programrequest') }}" method="POST">
                    @csrf
                    <!-- Form-group -->
                    <div class="form-group">
                        <input type="text" name="name" placeholder="@lang('site.name')" class="form-control" required />
                        <input name="program_id" type="hidden" class="form-control" value="{{ $program->id }}" required />
                    </div>
                    <!-- Form-group -->
                    <div class="form-group">
                        <input type="email" name="email" placeholder="@lang('site.email')" class="form-control" required />
                    </div>
                    <!-- Form-group -->
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="@lang('site.mobile')" class="form-control" required />
                    </div>
                    <!-- Form-group -->
                    <!-- Form-group -->
                    <div class="form-group">
                        <input type="number" name="age" placeholder="@lang('site.age')" class="form-control"  />
                    </div>
                    <!-- Form-group -->
                    <div class="form-group">
                        <textarea name="notes" placeholder="@lang('site.notes')" class="form-control"></textarea>
                    </div>
                    <!-- Form-group -->
                    <div class="form-group">
                        <input type="submit" value="@lang('site.send')" class="btn" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Start News-letter -->
    {{-- <section class="news-letter">
        <div class="container">
            <!--<div class="pageHeader__wrapper">-->
                <!-- Col -->
            <!--    <div class="pageHeader__content">-->
            <!--        <p style="font-size: 18px"> @lang('site.program_enter')</p>-->
            <!--    </div>-->
                <!-- /Col -->
                <!-- Col -->
            <!--    <div class="pageHeader__image">-->
            <!--        <form action="{{ route('enteremail') }}" method="POST">-->
            <!--            @csrf-->
            <!--            <input type="email" name="email" placeholder="البريد الإلكتروني" />-->
            <!--            <input type="hidden" name="program_id" value="{{ $program->id }}" />-->
            <!--            <button type="submit" class="btn"><i class="fas fa-paper-plane"></i></button>-->
            <!--        </form>-->
            <!--    </div>-->
                <!-- /Col -->
            <!--</div>-->
        </div>
    </section> --}}
    <!-- End News-letter -->

</main>



@endsection
