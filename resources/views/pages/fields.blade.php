@extends('layouts.master')
<?php
$info = DB::table('infos')->first();
?>
@section('content')

<section class="fields-page body-inner">
    <div class="container">
        <div class="col-md-12 title-top">
            <h2 class="homeSolutions__title"> @lang('site.Our_fields')</h2>
            <p class="homeSolutions__text">
                @if (app()->getLocale()=='ar')
                {{ $info->field_ar }}
                @else
                {{ $info->field_en }}
                @endif
            </p>
        </div>
        <div class="col-md-12">
            <div class="homeSolutions__tiles">
                @foreach ($works as $work)
                <!-- Col -->
                <div class="col-md-3">
                    <div class="homeSolutions__tile"> 
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
                    </div>
                </div>
                <!-- /Col -->
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection