<!DOCTYPE html>
<?php
$rules = DB::table('rules')->get();
$info = DB::table('infos')->first();
$popup = DB::table('popups')->first();
?>
@if (app()->getLocale()=='ar')
<html lang="ar" dir="rtl">

@else
<html lang="en" dir="ltr">

@endif
 

<head>
    <meta charset="utf-8" />
    <style>
        .js img.lazyload:not([src]) {
            visibility: hidden;
        }

        .js img.lazyloaded[data-sizes=auto] {
            display: block;
            width: 100%;
        }

        .js .lazyload,
        .js .lazyloading {
            opacity: 0;
        }

        .js .lazyloaded {
            opacity: 1;
            -webkit-transition: opacity 2000ms;
            transition: opacity 2000ms;
        }
    </style>
    <style>
        .reload {
            font-family: Lucida Sans Unicode
        }
    </style>
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@lang('site.rashid')</title>
    <link rel="stylesheet" media="all" href="{{ asset('public/src/css/progress-bar.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/src/css/style.css') }}" />

    <link rel="shortcut icon" href="{{ asset('public/src/images/favicon.ico') }}">
</head>

<body class="path--view-frontpage-page-1 front rtl ar page-home">
    <a href="#main-content" class="visually-hidden focusable skip-link">
        @lang('site.skipto')
    </a>

    <div class="dialog-off-canvas-main-canvas d-flex flex-column h-100" data-off-canvas-main-canvas>



        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__logo">
                        <!-- begin logo -->
                        <a href="{{ route('index') }}" class="logo">
                            <span class="logo__svg">
                                <img src="{{ asset('public/storage/'.$info->logo) }}" alt="" />
                            </span>
                        </a>
                        <!-- end logo -->
                    </div>


                    <div class="header__menu">
                        <!-- begin menu -->
                        <nav class="menu">

                            <ul class="menu__items">
                                <li class="menu__item link-submenu">
                                    <a href="{{ route('aboutus') }}" class="menu__link">
                                        <span>@lang('site.aboutf') </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ route('president') }}">@lang('site.president')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('managers') }}">@lang('site.managers')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('teams') }}">@lang('site.team')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('fields') }}">@lang('site.fields')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('gifts') }}">@lang('site.gifts')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('actions') }}">@lang('site.actions')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('stories') }}">@lang('site.stories')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('reports') }}">@lang('site.reports')</a>
                                        </li>
                                        <!--<li>-->
                                        <!--    <a href="{{ route('v_2030') }}">@lang('site.v_2030')</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>
                                <li class="menu__item link-submenu">
                                    <a href="{{ route('rules') }}" class="menu__link">
                                        <span>@lang('site.rules') </span>
                                    </a>
                                    <ul class="sub-menu">
                                        @foreach ($rules as $rule)
                                        <li>
                                            <a href="{{ route('singlerule', ['id'=>$rule->id]) }}">
                                                @if (app()->getLocale()=='ar')
                                                    {{ $rule->title_ar }}
                                                @else
                                                    {{ $rule->title_en }}
                                                @endif    
                                            </a>
                                        </li>
                                        
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="menu__item">
                                    <a href="{{ route('news') }}" class="menu__link">
                                        <span>@lang('site.news') </span>
                                    </a>
                                </li>
                                <li class="menu__item">
                                    <a href="{{ route('programs') }}" class="menu__link">
                                        <span>@lang('site.programs') </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- end menu -->
                    </div>



                    <div class="header__mobileMenu">
                        <div class="container">
                            <div class="header__mobileMenuInner">
                                <!-- begin mobileMenu -->
                                <nav class="mobileMenu">
                                    <ul class="mobileMenu__items">
                                        <li class="mobileMenu__item">
                                            <a href="{{ route('aboutus') }}" class="mobileMenu__link">
                                                <span>@lang('site.aboutf') </span>
                                            </a>
                                        </li>
                                        <li class="mobileMenu__item">
                                            <a href="{{ route('teams') }}" class="mobileMenu__link">
                                                <span>@lang('site.team') </span>
                                            </a>
                                        </li>
                                        <li class="mobileMenu__item">
                                            <a href="{{ route('rules') }}" class="mobileMenu__link">
                                                <span>@lang('site.rules') </span>
                                            </a>
                                        </li>
                                        <li class="mobileMenu__item">
                                            <a href="{{ route('news') }}" class="mobileMenu__link">
                                                <span>@lang('site.news') </span>
                                            </a>
                                        </li>
                                        <li class="mobileMenu__item">
                                            <a href="{{ route('aboutus') }}#footer" class="mobileMenu__link">
                                                <span>@lang('site.contactus') </span>
                                            </a>
                                        </li>
                                    </ul>

                                </nav>
                                <!-- end mobileMenu -->
                            </div>
                        </div>
                    </div>


                    <div class="header__lang">


                        <!--Block Classes :  role="navigation" class="block block-language block-language-blocklanguage-interface"-->


                        <ul class="language-switcher-language-url">
                            <!-- <a href="/en" class="language-link" hreflang="en" data-drupal-link-system-path="&lt;front&gt;">English</a> -->
                            <!-- begin button -->
                            @if (app()->getLocale()=='ar')
                            <a href="{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}" class="button">
                                <span class="button__text">English</span>
                            </a>
                            @else
                            <a href="{{ LaravelLocalization::getLocalizedURL("ar", null, [], true) }}" class="button">
                                <span class="button__text">العربية</span>
                            </a>
                            @endif

                            <!-- end button -->
                        </ul>
                    </div>
                    <button class="header__mobileMenuButton"></button>
                </div>
            </div>

        </header>

        <!-- end header -->



        <!-- begin homeSections -->
        @yield('content')
        <!-- end homeSections -->
        <!-- begin footer -->
        <footer class="footer" id="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__head" id="contactus">
                        <div class="item__footer" id="contactus">
                            <div class="form-f" id="contactus">
                                <h3>@lang('site.complain')</h3>
                                <form action="{{ route('contactus') }}" method="POST">
                                    @csrf
                                    <div class="flex-d">
                                        <input type="text" name="name" placeholder="@lang('site.name')" class="form-control" />
                                        <input type="email" name="email" placeholder="@lang('site.email')" class="form-control" />
                                    </div>
                                    <div class="flex-d">
                                        <input type="text" name="phone" placeholder="@lang('site.mobile')" class="form-control" />
                                        <select name="type" id="">
                                            <option value="شكوى"> @lang('site.comp')</option>
                                            <option value="مقترح"> @lang('site.sugg')</option>
                                        </select>
                                    </div>
                                    <textarea name="msg" placeholder="@lang('site.msgbody')" class="form-control"></textarea>
                                        <div class="captcha">
                                            <span>{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-danger" style="font-family: Lucida Sans Unicode" id="reload">
                                                &#x21bb;
                                            </button>
                                        </div>
                                        <input id="captcha" type="text" class="form-control" placeholder="@lang('site.checkcode')" name="captcha">
                                    <input type="submit" value="@lang('site.send')" class="btn" />
                                </form>
                            </div>
                        </div>
                        <div class="item__footer">
                            <div class="map-f">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.849580912568!2d49.56046748498617!3d25.409845183797668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e3797ff55a738f9%3A0xed3bf94e5dd6a11d!2sAbdulmonem%20Alrashed%20Humanitarian%20Foundation!5e0!3m2!1sar!2seg!4v1615881163456!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="footer__body">

                        <div class="footer__menu">
                            <h3>@lang('site.short_links')</h3>
                            <ul class="footer__menuItems">
                                <li class="">
                                    <a href="{{ route('aboutus') }}" class="footer__menuLink">
                                        <span>@lang('site.aboutus')</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('managers') }}" class="footer__menuLink">
                                        <span>@lang('site.managers')</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('teams') }}" class="footer__menuLink">
                                        <span>@lang('site.team')</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('aboutus') }}#footer" class="footer__menuLink">
                                        <span>@lang('site.contactus')</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__menu">
                            <h3>@lang('site.important_links')</h3>
                            <ul class="footer__menuItems">
                                <li class="">
                                    <a href="{{ route('rules') }}" class="footer__menuLink">
                                        <span>@lang('site.rules')</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('news') }}" class="footer__menuLink">
                                        <span>@lang('site.news')</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('programs') }}" class="footer__menuLink">
                                        <span>@lang('site.programs')</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('actions') }}" class="footer__menuLink">
                                        <span>@lang('site.actions')</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__contact">
                            <h3>@lang('site.tocontact')</h3>
                            <ul class="footer__menuItems">
                                <li class="">
                                    <a href="mailto:{{ $info->email }}" class="footer__menuLink">
                                        <span>{{ $info->email }}</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ $info->website }}" class="footer__menuLink">
                                        <span>{{ $info->website }}</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="tel:{{ $info->phone }}" class="footer__menuLink">
                                        <span>@lang('site.mobile') : {{ $info->phone }}</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="tel:{{ $info->tele }}" class="footer__menuLink">
                                        <span>@lang('site.phone') : {{ $info->tele }}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="footer__socials">
                                @if (!empty($info->instagram))
                                <a href="{{ $info->instagram }}" class="footer__social icon-instagram"></a> 
                                @endif
                                @if (!empty($info->twitter))
                                <a href="{{ $info->twitter }}" class="footer__social icon-twitter"></a>
                                @endif
                                @if (!empty($info->facebook))
                                <a href="{{ $info->facebook }}" class="footer__social fab fa-snapchat-ghost"></a>
                                @endif
                                @if (!empty($info->whatsapp))
                                <a href="{{ $info->whatsapp }}" class="footer__social fab fa-whatsapp"></a>
                                @endif
                                @if (!empty($info->youtube))
                                <a href="{{ $info->youtube }}" class="footer__social icon-youtube"></a>
                                @endif
                                @if (!empty($info->linkedin))
                                <a href="{{ $info->linkedin }}" class="footer__social icon-linkedin"></a>
                                @endif
                                
                                </div>
                        </div>
                    </div>
                    <div class="footer__foot">
                        <div class="footer__copy">
                            @lang('site.All_rights_reserved') @lang('site.rashid') 2021
                        </div>
                        <div class="fotter__company">
                            <a href="https://elryad.com/ar/">@lang('site.reyadco')</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- begin tooltip -->
        <div class="tooltip tooltip--hidden">
            <div class="tooltip__box">
                <div class="tooltip__title"></div>
                <div class="tooltip__text"></div>
            </div>
        </div>
        <!-- end tooltip -->
        <!-- begin popup -->
        <!--<div class="popup popup--hidden">-->
        <!--    <div class="container container--full">-->
        <!--        <div class="popup__inner">-->
        <!--            <div class="popup__box">-->
        <!--                <button class="popup__close"></button>-->
        <!--                <div class="popup__content">-->
                            <!-- popup content -->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- end popup -->

    </div>
    @if ($popup->show == 1)
        
    <div id="hideDiv" class="desktop">
        <div class="img">
            <div class="close-ss"><i class="fa fa-times"></i></div>
            
            <div class="modal-block">
                <div class="img">
                    <img src="{{ asset('public/storage/'.$popup->image) }}" alt="" />
                </div>
                <div class="details">
                    <p>
                        @if (app()->getLocale()=='ar')
                        {{ $popup->text_ar }}   
                        @else
                        {{ $popup->text_en }}  
                        @endif    
                        
                    </p>
                    <a href="{{ $popup->link }}" class="btn" target="_blanck">@lang('site.more')</a>
                </div>
            </div>
            
        </div>
    </div>
    @endif

    
    
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


    <script src="{{ asset('public/src/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/src/js/js_OSQHSO9WD2x6BhuZgeLRX8v0rUur0j1Dbb8th3j2EsE.js') }}"></script>
    <!--<script src="{{ asset('public/src/js/js_ysgO93VxiV_52R9FHiOGXMlxWZ6ff-I_LoFBkBzDFbY.js') }}"></script>-->
    <!--<script src="{{ asset('public/src/js/js_41QYwNmfIGEJF9dMTZmVN2Csgw1Dr1oKvieS3tjqeko.js') }}"></script>-->
    <script src="{{ asset('public/src/js/script-h.js') }}"></script>
    <script src="{{ asset('public/src/js/js_24UoPTVcif9r7nk8BVizxgM8KgrSCAlJ9J3nHOuOJ2k.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: '{{ route('reloadCaptcha') }}',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    
    </script>
    <script src="{{ asset('public/src/js/owl.carousel.min.js') }}"></script>
    <script>
    jQuery(function ($) {
            $(".clients-slider").owlCarousel({
                nav: true,
                loop: false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                autoplay: 4000,
                items: 1,
                autoplayHoverPause: true,
                center: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            
            $(".solution-slider").owlCarousel({
                nav: true,
                loop: false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                autoplay: 4000,
                items: 1,
                autoplayHoverPause: true,
                center: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 4
                    }
                }
            });
            
            
            $(".img-slider").owlCarousel({
                nav: true,
                loop: false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                autoplay: 4000,
                items: 1,
                autoplayHoverPause: true,
                center: false,
                responsiveClass: true,
            });
        });
        // Hide Div
        $(function() {
            setTimeout(function(){
                $('#hideDiv').fadeIn();  
            }, 20000);
            $('.close-ss').click(function(){
             $('#hideDiv').addClass("slow"),1000;
            })
        })
        
        $(window).ready(function(){
          setInterval(function(){ 
            $('#hideDiv').addClass("test")
          }, 3000);
        
        });
        
        
        $(function () {
        
            $(window).bind("resize", function () {
                console.log($(this).width())
                if ($(this).width() < 767) {
                    $('#hideDiv').removeClass('desktop').addClass('mobile')
                } else {
                    $('#hideDiv').removeClass('mobile').addClass('desktop')
                }
            }).trigger('resize');
        })
        
    </script>

</body>

</html>
