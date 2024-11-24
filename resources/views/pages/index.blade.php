@extends('layouts.master2')
<?php
$info = DB::table('infos')->first();
?>
@section('content')
<!-- begin homeLoader -->
<div class="homeLoader"></div>
<!-- end homeLoader -->
<main class="homeSections" data-logo="{{ asset('public/src/images/bg-white3.svg') }}">
    <div class="homeSections__bg">
        <div class="container">
            <div class="homeSections__width"></div>
        </div>
    </div>
    <div class="homeSections__sections">
        <section class="homeSections__section homeSections__section--hideNav">
            <!-- begin homeIntro -->
            <div class="homeIntro">
                <div class="container container--full">
                    <div class="homeIntro__inner">
                        <div class="homeIntro__info">
                            <div class="logo">
                                <span class="logo__svg">
                                    <!--<img src="{{ asset('public/storage/'.$info->logo) }}" alt="" />-->
                                    <img src="{{ asset('public/storage/infos/Logo-2.svg') }}" alt="" />
                                </span>
                            </div>
                            <!--<h2 class="homeIntro__title">-->
                            <!--    @lang('site.rashid')-->
                            <!--</h2>-->
                            <!--<p class="homeIntro__text">-->
                            <!--    @if (app()->getLocale()=='ar')-->
                            <!--    {{ $info->main_title_ar }}-->
                            <!--    @else-->
                            <!--    {{ $info->main_title_en }}-->
                            <!--    @endif-->
                            <!--</p>-->
                            <!--<div class="homeIntro__button">-->
                                <!-- begin button -->
                            <!--    <button class="button" onclick="document.location='{{ route('aboutus') }}'">-->
                            <!--        <span class="button__text">@lang('site.more')</span>-->
                            <!--    </button>-->
                                <!-- end button -->
                            <!--</div>-->
                        </div>
                        <div class="homeIntro__content">
                            <!-- begin logoDragAndDrop -->
                            <div class="logoDragAndDrop">
                               <!-- <img src="{{ asset('public/src/images/logo_2.png') }}" />-->
                                <button class="logoDragAndDrop__button" data-go-to-section="next">
                                    <div class="logoDragAndDrop__text">
                                         <i class="fa fa-angle-down"></i>
                                    </div>
                                </button>
                            </div>
                            <!-- end logoDragAndDrop -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeIntro -->
        </section>
        <section class="homeSections__section">
            <!-- begin homeTimeline -->
            <div class="homeTimeline">
                <div class="container container--full">
                    <div class="homeTimeline__inner">
                        <div class="homeTimeline__info">
                            <h2 class="homeTimeline__title">
                                @lang('site.aboutus')
                            </h2>
                        </div>
                       <div class="homeTimeline__content">
                            <div class="items-block">
                                <!-- Item -->
                                <div class="item">
                                    <div class="icon">
                                       <!-- <img src="{{ asset('public/src/images/item3.svg') }}" /> -->
                                    </div>
                                   <div class="details">
                                        <h3>@lang('site.Our_Vision')</h3>
                                        <p>
                                            @if (app()->getLocale()=='ar')
                                            {{ $info->vision_ar }}
                                            @else
                                            {{ $info->vision_en }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="item">
                                    <div class="icon">
                                      <!--   <img src="{{ asset('public/src/images/item1.svg') }}" /> -->
                                    </div>
                                    <div class="details">
                                        <h3>@lang('site.Our_msg')</h3>
                                        <p>
                                            @if (app()->getLocale()=='ar')
                                            {{ $info->msg_ar }}
                                            @else
                                            {{ $info->msg_en }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="item">
                                    <div class="icon">
                                      <!--   <img src="{{ asset('public/src/images/item2.svg') }}" /> -->
                                    </div>
                                    <div class="details">
                                        <h3>@lang('site.Our_Goals')</h3>
                                        <p>
                                            @if (app()->getLocale()=='ar')
                                            {!! $info->goal_ar !!}
                                            @else
                                            {!! $info->goal_en !!}
                                            @endif
                                        </p>
                                    </div>
                                </div> 
                                <!-- /Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeTimeline -->
        </section>
        
        
        <!--<section class="homeSections__section">-->
            <!-- begin homeSolutions -->
        <!--    <div class="homeSolutions2">-->
        <!--        <div class="container container--full">-->
        <!--            <div class="homeSolutions__inner">-->
        <!--                <div class="homeSolutions__intro">-->
        <!--                    <div class="homeSolutions__introContent">-->
        <!--                        <div class="homeSolutions__content2">-->
        <!--                            <div class="homeSolutions__tiles2">-->
        <!--                                <div class="homeSolutions__tile2">-->
        <!--                                    <div class="items-block">-->
                                                <!-- Item -->
        <!--                                        <div class="item">-->
        <!--                                            <div class="details">-->
        <!--                                                <h3>@lang('site.v_2030')</h3>-->
        <!--                                                <p>-->
        <!--                                                    @if (app()->getLocale()=='ar')-->
        <!--                                                    {{ $info->v2030_ar }}-->
        <!--                                                    @else-->
        <!--                                                    {{ $info->v2030_en }}-->
        <!--                                                    @endif    -->
        <!--                                                </p>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
                                                <!-- /Item -->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="homeSolutions__info2">-->
        <!--                             <div class="homeSolutions__tile2">-->
        <!--                                <div class="items-block">-->
                                            <!-- Item -->
        <!--                                    <div class="item">-->
        <!--                                        <div class="icon">-->
        <!--                                            <img src="{{ asset('public/storage/'.$info->vision_img) }}" />-->
        <!--                                        </div>-->
        <!--                                    </div>-->
                                            <!-- /Item -->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
            <!-- end homeSolutions -->
        <!--</section>-->
        
        
        
        <section class="homeSections__section">
            <!-- begin homeImageText -->
            <div class="homeImageText3">
                <div class="container container--full">
                    <div class="homeImageText__inner">
                        <div class="homeImageText__image3">
                            <img src="{{ asset('public/storage/'.$info->boss_img) }}" alt="" class="homeImageText__img" />
                        </div>
                        <div class="homeImageText__info3">
                            <div class="homeImageText__head">
                                <h2 class="homeImageText__title">
                                   @lang('site.boss')
                                </h2>
                            </div>
                            <div class="homeImageText__text">
                                <p>
                                    @if (app()->getLocale()=='ar')
                                    {{ $info->boss_ar }}
                                    @else
                                    {{ $info->boss_en }}
                                    @endif 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeImageText -->
        </section>
        
        
        
        
        <section class="homeSections__section">
            <!-- begin homeSolutions -->
            <div class="homeSolutions7">
                <div class="container container--full">
                    <div class="homeSolutions__inner">
                        <div class="homeSolutions__intro">
                            <div class="homeSolutions__introContent">
                                <div class="homeSolutions__content7">
                                    <div class="homeSolutions__tiles7">
                                        <div class="homeSolutions__tile7">
                                            <div class="items-block">
                                                <div class="img-slider owl-carousel owl-theme">
                                                    @foreach ($imgs as $item)
                                                    <!-- Item -->
                                                    <div class="item">
                                                        <div class="img-block">
                                                            <div class="img">
                                                                <img src="{{ asset('public/storage/'.$item->img) }}" alt="#" />
                                                            </div>
                                                            {{-- <div class="desc-img">
                                                                <h3>يوضع عنوان هنا</h3>
                                                                <p>
                                                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                                </p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                    <!-- /Item -->
                                                        
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="homeSolutions__info7">
                                     <div class="homeSolutions__tile7">
                                        <div class="items-block">
                                            <!-- Item -->
                                            <div class="item">
                                                <div class="icon">
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeSolutions -->
        </section>
        
        <section class="homeSections__section">
            <!-- begin homeSolutions -->
            <div class="homeSolutions">
                <div class="container container--full">
                    <div class="homeSolutions__inner">
                        <div class="homeSolutions__intro">
                            <div class="homeSolutions__introContent">
                                <div class="homeSolutions__info">
                                    <h2 class="homeSolutions__title">
                                        @lang('site.Our_fields')
                                    </h2>
                                    <p class="homeSolutions__text">
                                        @if (app()->getLocale()=='ar')
                                        {{ $info->field_ar }}
                                        @else
                                        {{ $info->field_en }}
                                        @endif
                                    </p>
                                </div>
                                <div class="homeSolutions__content">
                                    <div class="homeSolutions__tiles">
                                        @foreach ($works as $work)
                                        <div class="homeSolutions__tile">

                                            <!-- begin solutionTile -->
                                            <a href="{{ route('workprograms', ['id'=>$work->id]) }}" class="solutionTile" style="color: #99C97D" data-go-to-solution="0">
                                                <div class="solutionTile__icon">
                                                    <span class="img-icon">
                                                        <img src="{{ asset('public/storage/'.$work->icon) }}" />
                                                    </span>
                                                </div>
                                                <div class="solutionTile__text">
                                                    <h3>
                                                        @if (app()->getLocale()=='ar')
                                                            {{ $work->title_ar }}
                                                        @else
                                                            {{ $work->title_en }}
                                                        @endif
                                                    </h3>
                                                    <p>
                                                        @if (app()->getLocale()=='ar')
                                                            {{ $work->content_ar }}
                                                        @else
                                                            {{ $work->content_en }}
                                                        @endif
                                                    </p>
                                                   <!-- <a href="#" class="more">@lang('site.more')</a> -->
                                                </div>
                                            </a>
                                            <!-- end solutionTile -->
                                        </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeSolutions -->
        </section>
        
        
        <!--<section class="homeSections__section">-->
            <!-- begin homeStory -->
        <!--    <div class="homeStory66">-->
        <!--        <div class="container container--full">-->
        <!--            <div class="homeStory__inner66">-->
        <!--                <div class="homeStory__content66">-->
        <!--                    <h2 class="ttitle">@lang('site.actions')</h2>-->
                            
        <!--                    <div class="section-all">-->
        <!--                            @foreach ($actions as $action)-->
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('singleaction', ['id'=>$action->id]) }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/storage/'.$action->img) }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                                {{ $action->title_ar }}-->
        <!--                                            @else-->
        <!--                                                {{ $action->title_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                                {{ $action->preview_ar }}-->
        <!--                                            @else-->
        <!--                                                {{ $action->preview_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
        <!--                            @endforeach-->
        <!--                        </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
            <!-- end homeStory -->
        <!--</section>-->
        
        
        
        
        <section class="homeSections__section">
            <!-- begin homeSolutions -->
            <div class="homeSolutions66">
                <div class="container container--full">
                    <div class="homeSolutions__inner">
                        <div class="homeSolutions__intro">
                            <div class="homeSolutions__introContent">
                                <div class="homeSolutions__content66">
                                    <div class="homeSolutions__tiles66">
                                        <div class="homeSolutions__tile66">
                                            <h2 class="ttitle">@lang('site.actions')</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="homeSolutions__info66">
                                    <div class="featured-blog-post posts-page">
                                        <div class="section-all solution-slider owl-carousel owl-theme">
                                            @foreach ($actions as $action)
                                             <!--Col -->
                                            <div class="item-5 item">
                                                <a href="{{ route('singleaction', ['id'=>$action->id]) }}" class="productTile productTile--link">
                                                    <div class="productTile__body">
                                                        <img src="{{ asset('public/storage/'.$action->img) }}" class="productTile__logo">
        
                                                        <div class="productTile__line"></div>
                                                        <div class="productTile__title">
                                                            @if (app()->getLocale()=='ar')
                                                                {{ $action->title_ar }}
                                                            @else
                                                                {{ $action->title_en }}
                                                            @endif
                                                        </div>
                                                        <div class="productTile__text">
                                                            @if (app()->getLocale()=='ar')
                                                                {{ $action->preview_ar }}
                                                            @else
                                                                {{ $action->preview_en }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                             <!--/Col -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeSolutions -->
        </section>
        
        
        
        <section class="homeSections__section">
            <!-- begin homeSolutions -->
            <div class="homeSolutions3">
                <div class="container container--full">
                    <div class="homeSolutions__inner">
                        <div class="homeSolutions__intro">
                            <div class="homeSolutions__introContent">
                                <div class="homeSolutions__content3">
                                    <div class="homeSolutions__tiles3">
                                        <div class="homeSolutions__tile3">
                                            <h2 class="ttitle">@lang('site.programs')</h2> <!-- site.programs -->
                                        </div>
                                    </div>
                                </div>
                                <div class="homeSolutions__info3">
                                    <div class="featured-blog-post posts-page">
                                        <div class="section-all">
                                            @foreach ($programs as $program)
                                            <!-- Item -->
                                            <div class="item4">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeSolutions -->
        </section>
        
        
        <section class="homeSections__section">
            <!-- begin homeSolutions -->
            <div class="homeSolutions4">
                <div class="container container--full">
                    <div class="homeSolutions__inner">
                        <div class="homeSolutions__intro">
                            <div class="homeSolutions__introContent">
                                <div class="homeSolutions__content4">
                                    <div class="homeSolutions__tiles4">
                                        <div class="homeSolutions__tile4">
                                            <h2 class="ttitle">@lang('site.news')</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="homeSolutions__info4">
                                    <div class="featured-blog-post posts-page">
                                        <div class="section-all">
                                            @foreach ($newss as $news)
                                            <!-- Item -->
                                            <div class="item4">
                                                <article class="inner-box hvr-float-shadow pb-30">
                                                    <figure class="image">
                                                        <a href="{{ route('singlenews', ['id'=>$news->id]) }}">
                                                            <img src="{{ asset('public/storage/'.$news->img) }}" alt="">
                                                        </a>
                                                    </figure>
                                                    <div class="post-lower">
                                                        <div class="post-header">
                                                            @php
                                                                $d = $news->date;
                                                            @endphp
                                                            <div class="date"><span class="day">{{ Carbon\Carbon::parse($d)->format('d') }}</span>
                                                                <br>{{ Carbon\Carbon::parse($d)->format('M') }}</div>
                                                            <h3 class="title">
                                                                <a href="{{ route('singlenews', ['id'=>$news->id]) }}">
                                                                    @if (app()->getLocale()=='ar')
                                                                        {{ $news->title_ar }}
                                                                    @else
                                                                        {{ $news->title_en }}
                                                                    @endif
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div class="post-desc">
                                                            <p>
                                                                @if (app()->getLocale()=='ar')
                                                                    {{ $news->preview_ar }}
                                                                @else
                                                                    {{ $news->preview_en }}
                                                                @endif
                                                            </p>
                                                            <div class="text-right">
                                                                <a href="{{ route('singlenews', ['id'=>$news->id]) }}" class="text-thm fs-14"> @lang('site.more') <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- /Item -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeSolutions -->
        </section>
        
        
        
        <section class="homeSections__section">
            <!-- begin homeProjects -->
            <div class="homeProjects">
                <div class="container container--full">
                    <div class="homeProjects__inner">
                        <div class="homeProjects__info">
                            <h2 class="homeProjects__title">
                                @lang('site.partners')
                            </h2>
                            <p class="homeProjects__text">
                                @if (app()->getLocale()=='ar')
                                    {{ $info->partners_ar }}
                                    @else
                                        {{ $info->partners_en }}
                                    @endif
                            </p>
                            <div class="homeProjects__button">
                                <!-- begin button -->
                            </div>
                        </div>
                        <div class="homeProjects__content">
                            <div class="homeProjects__tiles">
                                <div class="clients-slider owl-carousel owl-theme">
                                    @foreach ($partners as $partner)
                                    <div class="item">
                                        <div class="homeProjects__tile">
                                            <!-- begin leafTile -->
                                            <button class="leafTile leafTile--button" data-popup="{{ $partner->id }}">
                                                <img src="{{ asset('public/storage/'. $partner->img ) }}" class="leafTile__logo" />
                                                <span class="leafTile__dot"></span>
                                            </button>
        
                                            <script type="text/template" data-popup-tpl="{{ $partner->id }}">
                                                <div class="projectPopup">
                                                    <div class="projectPopup__logo">
                                                        <img src="{{ asset('public/storage/'. $partner->img ) }}" class="projectPopup__logoImg" />
                                                    </div>
                                                    <div class="projectPopup__content">
                                                        <h3 class="projectPopup__title">
                                                            @if (app()->getLocale()=='ar')
                                                            {{ $partner->title_ar }}
                                                            @else
                                                            {{ $partner->title_en }}
                                                            @endif
                                                        </h3>
                                                        <p class="projectPopup__text">
                                                            @if (app()->getLocale()=='ar')
                                                            {{ $partner->content_ar }}
                                                            @else
                                                            {{ $partner->content_en }}
                                                            @endif
                                                        </p>
                                                        <div class="projectPopup__button">
                                                            <a href="{{ $partner->link }}" class="button" target="_blank" >
                                                                <span class="button__text"> @lang('site.more') </span>
                                                            </a>
                                                            <!-- end button -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </script>
                                            <!-- end leafTile -->
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end homeProjects -->
        </section>
        
        <!--<section class="homeSections__section">-->
            <!-- begin homeImageText -->
        <!--    <div class="homeImageText">-->
        <!--        <div class="container container--full">-->
        <!--            <div class="homeImageText__inner">-->
        <!--                <div class="homeImageText__image">-->
        <!--                    <img src="{{ asset('public/storage/'.$about->support_img) }}" alt="" class="homeImageText__img" />-->
        <!--                </div>-->
        <!--                <div class="homeImageText__info">-->
        <!--                    <div class="homeImageText__head">-->
        <!--                        <h2 class="homeImageText__title">-->
        <!--                            @lang('site.project_support')-->
        <!--                        </h2>-->
        <!--                    </div>-->
        <!--                    <div class="homeImageText__text">-->
        <!--                        <p>-->
        <!--                            @if (app()->getLocale()=='ar')-->
        <!--                                {{ $about->support_ar }}-->
        <!--                            @else-->
        <!--                                {{ $about->support_en }}-->
        <!--                            @endif-->
        <!--                        </p>-->
        <!--                    </div>-->
        <!--                    {{-- <div class="homeImageText__button">-->
        <!--                        <a href="#" class="button">-->
        <!--                            <span class="button__text">@lang('site.fodonate')</span>-->
        <!--                        </a>-->
        <!--                    </div> --}}-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
            <!-- end homeImageText -->
        <!--</section>-->
        
        
        <!--<section class="homeSections__section">-->
            <!-- begin homeImageText -->
        <!--    <div class="homeImageText4">-->
        <!--        <div class="container container--full">-->
        <!--            <div class="homeImageText__inner">-->
        <!--                <div class="homeImageText__image4">-->
        <!--                    <img src="{{ asset('public/storage/'.$info->office_img) }}" alt="" class="homeImageText__img" />-->
        <!--                </div>-->
        <!--                <div class="homeImageText__info4">-->
                            
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
            <!-- end homeImageText -->
        <!--</section>-->
        
        <!--<section class="homeSections__section">-->
            <!-- begin homeImageText -->
        <!--    <div class="homeImageText2">-->
        <!--        <div class="container container--full">-->
        <!--            <div class="homeImageText__inner2 all-stories">-->
        <!--                <div class="homeImageText__image2">-->
        <!--                    <h2 class="ttitle">@lang('site.stories')</h2>-->
                            
        <!--                </div>-->
        <!--                <div class="homeImageText__info2">-->
        <!--                    <div class="section-all">-->
        <!--                        @foreach ($stories as $story)-->
                                <!-- Item -->
        <!--                        <div class="item4">-->
        <!--                            <button class="leafTile leafTile--button block-story" data-popup="story1">-->
        <!--                                <div class="img">-->
        <!--                                    <img src="{{ asset('public/storage/'.$story->img) }}" class="leafTile__logo">-->
        <!--                                </div>-->
        <!--                                <div class="details">-->
        <!--                                    <p>-->
        <!--                                        @if (app()->getLocale()=='ar')-->
        <!--                                                {{ $story->title_ar }}-->
        <!--                                            @else-->
        <!--                                                {{ $story->title_en }}-->
        <!--                                            @endif-->
        <!--                                    </p>-->
        <!--                                </div>-->
        <!--                            </button>-->
                                    
        <!--                            <script type="text/template" data-popup-tpl="story1">-->
        <!--                                <div class="projectPopup">-->
        <!--                                    <div class="projectPopup__logo">-->
        <!--                                        <img src="{{ asset('public/storage/'.$story->img) }}" class="projectPopup__logoImg" />-->
        <!--                                    </div>-->
        <!--                                    <div class="projectPopup__content">-->
        <!--                                        <h3 class="projectPopup__title">-->
        <!--                                        @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $story->title_ar }}-->
        <!--                                        @else-->
        <!--                                            {{ $story->title_en }}-->
        <!--                                        @endif</h3>-->
        <!--                                        <p class="projectPopup__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $story->preview_ar }}-->
        <!--                                        @else-->
        <!--                                            {{ $story->preview_en }}-->
        <!--                                        @endif-->
        <!--                                        </p>-->
        <!--                                        <div class="projectPopup__button">-->
        <!--                                            <a href="{{ route('singlestory', ['id'=>$story->id]) }}" class="button">-->
        <!--                                                <span class="button__text">@lang('site.more')</span>-->
        <!--                                            </a>-->
                                                    <!-- end button -->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </script>-->
        <!--                        </div>-->
                                <!-- /Item -->
        <!--                        @endforeach-->
        <!--                    </div>-->
        <!--                    <div class="homeImageText__button3">-->
        <!--                        <a href="{{ route('stories') }}" class="button">-->
        <!--                            <span class="button__text">@lang('site.more')</span>-->
        <!--                        </a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
            <!-- end homeImageText -->
        <!--</section>-->
        
        
        <!--<section class="homeSections__section">-->
            <!-- begin homeStory -->
        <!--    <div class="homeStory2">-->
        <!--        <div class="container container--full">-->
        <!--            <div class="homeStory__inner">-->
        <!--                <div class="homeStory__content2">-->
                            <!-- begin storyPreview -->
        <!--                    <div class="storyPreview">-->
        <!--                        <div class="section-all">-->
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('managers') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.managers')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->managers_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->managers_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('actions') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.actions')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->actions_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->actions_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('programs') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.programs')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->programs_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->programs_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('stories') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.stories')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->stories_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->stories_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('news') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.news')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->news_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->news_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('reports') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.reports')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->reports_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->reports_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('teams') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.team')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->team_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->team_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
        <!--                            {{-- <!-- Col -->-->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('actions') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.cactions')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->cactions_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->cactions_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col --> --}}
                                    <!-- Col -->
        <!--                            <div class="item-5">-->
        <!--                                <a href="{{ route('rules') }}" class="productTile productTile--link">-->
        <!--                                    <div class="productTile__body">-->
        <!--                                        <img src="{{ asset('public/src/images/logo.png') }}" class="productTile__logo">-->

        <!--                                        <div class="productTile__line"></div>-->
        <!--                                        <div class="productTile__title">-->
        <!--                                            @lang('site.rules')-->
        <!--                                        </div>-->
        <!--                                        <div class="productTile__text">-->
        <!--                                            @if (app()->getLocale()=='ar')-->
        <!--                                            {{ $info->rules_t_ar }}-->
        <!--                                            @else-->
        <!--                                            {{ $info->rules_t_en }}-->
        <!--                                            @endif-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </a>-->
        <!--                            </div>-->
                                    <!-- /Col -->
        <!--                        </div>-->
        <!--                    </div>-->
                            <!-- end storyPreview -->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
            <!-- end homeStory -->
        <!--</section>-->

        <section class="homeSections__section" >
            <!-- begin homeContact -->
            <div class="homeContact">
                <div class="container container--full">
                    <div class="homeContact__inner">
                        <div class="homeContact__info">
                            <!--<div class="img">-->
                            <!--    <img src="{{ asset('public/src/images/logo.png') }}" />-->
                            <!--</div>-->
                            
                            <div class="contact-icons">
                                <!-- Item -->
                                @if (!empty($info->instagram))
                                <div class="item">
                                    <a href="{{ $info->instagram }}" target="_blank"><i class="fab fa-instagram"></i> <span>instagram</span></a>
                                </div>
                                @endif
                                @if (!empty($info->twitter))
                                <div class="item">
                                    <a href="{{ $info->twitter }}" target="_blank"><i class="fab fa-twitter"></i> <span>twitter</span></a>
                                </div>
                                @endif
                                @if (!empty($info->facebook))
                                <div class="item">
                                    <a href="{{ $info->facebook }}" target="_blank"><i class="fab fa-snapchat"></i> <span>snapchat</span></a>
                                </div>
                                @endif
                                @if (!empty($info->whatsapp))
                                <div class="item">
                                    <a href="{{ $info->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i> <span>whatsapp</span></a>
                                </div>
                                @endif
                                @if (!empty($info->youtube))
                                <div class="item">
                                    <a href="{{ $info->youtube }}" target="_blank"><i class="fab fa-youtube"></i> <span>youtube</span></a>
                                </div>
                                @endif
                                @if (!empty($info->linkedin))
                                <div class="item">
                                    <a href="{{ $info->youtube }}" target="_blank"><i class="fab fa-youtube"></i> <span>youtube</span></a>
                                </div>
                                @endif
                                <!-- /Item -->
                            </div>
                            
                            <h2 class="homeContact__title">
                                <!--@lang('site.rashid')-->
                            </h2>
                            <div class="homeContact__button">
                                <!-- begin button -->
                                <!--<a href="#footer" class="button button--white">-->
                                <!--    <span class="button__text">@lang('site.contactus')</span>-->
                                <!--</a>-->
                                <!-- end button -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end homeContact -->

        </section>
        <section class="homeSections__section homeSections__section--hideNav homeSections__section--footer">
            <!-- begin homeFooterSection -->
            <div class="homeFooterSection"></div>
            <!-- end homeFooterSection -->
        </section>
    </div>
    <nav class="homeSections__navItems homeSections__navItems--hidden">
        <button class="homeSections__navItem"><span></span></button>
    </nav>

</main>
@endsection
