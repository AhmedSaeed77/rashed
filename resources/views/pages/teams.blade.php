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
                                <a href="{{ route('teams') }}">@lang('site.team')</a>
                            </li>

                        </ul>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="pageHeader__wrapper">
                    <div class="featured-blog-post posts-page">
                        <div class="section-all">
                            @foreach ($managers as $manager)
                            <!-- Item -->
                            <div class="item4">
                                <div class="single-volenteer pb-sm-30">
                                    <div class="volenteer-image-holder">
                                        <img src="{{ asset('public/storage/'.$manager->img) }}" alt="">
                                        <div class="volenteer-overlay">
                                            <div class="social-links">
                                                <a href="mailto:{{ $manager->facebook }}" class="mysocial_style fas fa-envelope"></a>
                                                <a href="{{ $manager->twitter }}" class="mysocial_style icon-twitter"></a>
                                                <a href="tel:{{ $manager->whatsapp }}" class="mysocial_style fab fa-whatsapp"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="volenteer-name text-center">
                                        <h5>
                                            @if (app()->getLocale()=='ar')
                                                {{ $manager->name_ar }}
                                            @else
                                                {{ $manager->name_en }}
                                            @endif
                                        </h5>
                                        <p>
                                            @if (app()->getLocale()=='ar')
                                                    {{ $manager->title_ar }}
                                                @else
                                                   {{ $manager->title_en }}
                                                @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Item -->
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end pageHeader -->

</main>


@endsection
