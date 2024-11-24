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
                                <a href="{{ route('reports') }}">@lang('site.statistics')</a>
                            </li>

                        </ul>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="pageHeader__wrapper">
                    <div class="featured-blog-post posts-page">
                        <div class="section-all-h">
                            
                            <div class="counter-h">
                                <div class="container">
                                    <div class="row">
                                        <!-- Col -->
                                        <div class="col-md-12">
                                            <h2 class="textContent__title">انجازاتنا</h2>
                                        </div>
                                        <!-- /Col -->
                                        
                                        <!-- Col -->
                                        <div class="col-md-2">
                                            <div class="counter-block">
                                                <div class="icon">
                                                    <img src="" alt="" />
                                                </div>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                                <h3><span class="counter">7,300</span></h3>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                            </div>                               
                                        </div>                               
                                        <!-- /Col -->
                                        
                                        <!-- Col -->
                                        <div class="col-md-2">
                                            <div class="counter-block">
                                                <div class="icon">
                                                    <img src="" alt="" />
                                                </div>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                                <h3><span class="counter">7,300</span></h3>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                            </div>                               
                                        </div>                               
                                        <!-- /Col -->
                                        
                                        <!-- Col -->
                                        <div class="col-md-2">
                                            <div class="counter-block">
                                                <div class="icon">
                                                    <img src="" alt="" />
                                                </div>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                                <h3><span class="counter">7,300</span></h3>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                            </div>                               
                                        </div>                               
                                        <!-- /Col -->
                                        
                                        <!-- Col -->
                                        <div class="col-md-2">
                                            <div class="counter-block">
                                                <div class="icon">
                                                    <img src="" alt="" />
                                                </div>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                                <h3><span class="counter">7,300</span></h3>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                            </div>                               
                                        </div>                               
                                        <!-- /Col -->
                                        
                                        <!-- Col -->
                                        <div class="col-md-2">
                                            <div class="counter-block">
                                                <div class="icon">
                                                    <img src="" alt="" />
                                                </div>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                                <h3><span class="counter">7,300</span></h3>
                                                <h4>يوضع عنوان صغير هنا</h4>
                                            </div>                               
                                        </div>                               
                                        <!-- /Col -->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end pageHeader -->

</main>

@endsection
