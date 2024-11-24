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

                        </ul>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="pageHeader__wrapper single-pro">
                    <div class="pageHeader__content">
                        <!-- begin textContent -->
                        <div class="textContent">
                            <h1 class="textContent__category">
                            
                            </h1>
                            @isset($work)
                                
                            <p>
                                @if (app()->getLocale()=='ar')
                                    {{ $work->content_ar }}
                                @else
                                    {{ $work->content_en }}
                                @endif
                            </p>
                            @endisset
                        </div>
                    </div>
                    <div class="featured-blog-post posts-page">
                        <div class="section-all">
                            @foreach ($programs as $program)

                            <!-- Item -->
                            <div class="item3">
                                <article class="inner-box hvr-float-shadow pb-30">
                                    <figure class="image">
                                        <a href="{{ route('singleprogram', ['id'=>$program->id]) }}">
                                            <img src="{{ asset('public/storage/'.$program->img) }}" alt="">
                                        </a>
                                    </figure>
                                    <div class="post-lower">
                                        <div class="post-header">
                                            @php
                                                $d = $program->date;
                                            @endphp
                                            <div class="date"><span class="day">{{ Carbon\Carbon::parse($d)->format('d') }}</span>
                                                <br>{{ Carbon\Carbon::parse($d)->format('M') }}</div>
                                            <h3 class="title">
                                                <a href="{{ route('singleprogram', ['id'=>$program->id]) }}">
                                                    @if (app()->getLocale()=='ar')
                                                        {{ $program->title_ar }}
                                                    @else
                                                        {{ $program->title_en }}
                                                    @endif
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="post-desc">
                                            <p>
                                                @if (app()->getLocale()=='ar')
                                                    {{ $program->preview_ar }}
                                                @else
                                                    {{ $program->preview_en }}
                                                @endif
                                            </p>
                                            <div class="text-right">
                                                <a href="{{ route('singleprogram', ['id'=>$program->id]) }}" class="text-thm fs-14"> @lang('site.more') <i class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- /Item -->
                            @endforeach
                        </div>
                        {{ $programs->links() }}
                    </div>
                </div>

                
                
                

            </div>
        </div>
    </div>
    <!-- end pageHeader -->
    @isset($work)
    <section class="news-letter">
        <div class="container">
            <div class="pageHeader__wrapper">
                <!-- Col -->
                <div class="pageHeader__content">
                    <p style="font-size: 18px"> @lang('site.program_enter')</p>
                </div>
                <!-- /Col -->
                <!-- Col -->
                <div class="pageHeader__image">
                    <form action="{{ route('enteremail') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="البريد الإلكتروني" />
                        <input type="hidden" name="program_id" value="{{ $work->id }}" />
                        <button type="submit" class="btn"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
                <!-- /Col -->
            </div>
        </div>
    </section>
    @endisset

</main>

@endsection
