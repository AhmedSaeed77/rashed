@extends('layouts.master')
<?php
$info = DB::table('infos')->first();
$about = DB::table('abouts')->first();
?>
@section('content')

<section class="supports-page body-inner">
    <div class="container">
        <div class="col-md-12 title-top">
            <h2 class="homeSolutions__title">@lang('site.project_support')</h2> 
            <p class="homeSolutions__text">
                @if (app()->getLocale()=='ar')
                        {{ $about->support_ar }}
                    @else
                        {{ $about->support_en }}
                    @endif
            </p>
        </div>
        <!-- Col -->
        <div class="col-md-12">
            <div class="img-gif">
                <img src="{{ asset('public/storage/'.$about->support_img) }}" alt="#" />
            </div>
            <div class="text-gif">
                <p>
                    @if (app()->getLocale()=='ar')
                        {!! $about->support_text_ar !!}
                    @else
                        {!! $about->support_text_en !!}
                    @endif
                </p>
            </div>
        </div>
    </div>
</section>

@endsection