@extends('site.includes.app')

@section('content')

       <!-- Start Breadcrumb -->
        <section class="breadcrumb">
            <div class="img-overlay"><img src="{{asset('site/images/bg_1.jpg')}}" alt="#" /></div>
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="text-bread">
                            <h3>من نحن</h3>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">
                                        الرئيسية
                                    </a>
                                </li>
                                <li>
                                    <span>من نحن</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        @if($about)
        <!-- Start About-h -->
        <section class="about-h about-page body-inner">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-7 col-sm-12">
                        <div class="title">
                            <h3> من نحن</h3>
                        </div>
                        <div class="text-about">
                            <p>{{$about->description}}</p>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-md-5 col-sm-12">
                        <div class="img-about">
                            <div class="img">
                                <img src="{{asset($about->image)}}" alt="#" />
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End About-h -->

        <!-- Start More-about -->
        <section class="more-about">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-4 col-sm-12">
                        <div class="about-block">
                            <div class="title-block">
                                <div class="icon">
                                    <img src="{{asset('site/images/icon11.png')}}" />
                                </div>
                                <h3>رؤيتنا</h3>
                            </div>
                            <div class="details">
                                <p>{{$about->vision}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-md-4 col-sm-12">
                        <div class="about-block">
                            <div class="title-block">
                                <div class="icon">
                                    <img src="{{asset('site/images/icon11.png')}}" />
                                </div>
                                <h3>رسالتنا</h3>
                            </div>
                            <div class="details">
                                <p>{{$about->message}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-md-4 col-sm-12">
                        <div class="about-block">
                            <div class="title-block">
                                <div class="icon">
                                    <img src="{{asset('site/images/icon22.png')}}" />
                                </div>
                                <h3>قيمنا</h3>
                            </div>
                            <div class="details">
                                <p>{{$about->values}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End More-about -->
        @endif

@endsection
