<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Arboon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0D3558">
    <title>Computer Science Society</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('site/images/logo.png')}}" />
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('site/css/mobile.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

</head>

<body>

    <!-- Start Header -->
    <header>
        @php
            $info = \App\Models\Info::first();
        @endphp
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('site/images/logo.png')}}" />
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="head-top">
                        <ul>
                            <li>
                                <a href="mailto:{{$info->email ?? ''}}">
                                    <i class="fa fa-envelope"></i>
                                    <span>{{$info->email ?? ''}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:{{$info->phone ?? ''}}">
                                    <i class="fa fa-phone"></i>
                                    <span>{{$info->phone ?? ''}}</span>
                                </a>
                            </li>
                        </ul>

                        @if(auth()->check())
                            <div class="user-name">
                                <div class="img">
                                    <img src="{{asset(auth()->user()->image)}}" alt="#">
                                </div>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{route('profile')}}">
                                            الملف الشخصي
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('my-table')}}">
                                            محاضراتي
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('my-appointments')}}">
                                            مواعيدي
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <span>تسجيل الخروج</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @else

                            <div class="btn-group">
                                <a href="{{route('login')}}" class="btn btn-border">
                                    <span>تسجيل الدخول</span>
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="head-bottom">
                        <div class="nav-menu">
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">
                                        الرئيسية
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">
                                        من نحن
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('all-blogs')}}">
                                        كل الأخبار
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home')}}#events">
                                        أهم الأحداث
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('create-table')}}">
                                         حجز موعد
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">
                                        تواصل معنا
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{--  <div class="menu-left">
                            <div class="search-box-btn search-box-outer">
                                <i class="las la-search"></i>
                            </div>
                            <div class="info-inner">
                                <div class="mobile-nav-toggler">
                                    <span class="icon flaticon-menu">
                                        <i class="fal fa-bars"></i>
                                    </span>
                                </div>
                            </div>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header-->

    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
        <button class="close-search"><span class="flaticon-up-arrow-1 las la-times"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="اكتب هنا" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <a id="button"></a>

    <main class="main-content">
