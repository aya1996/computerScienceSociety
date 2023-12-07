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
                    <h3>الاخبار</h3>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">
                                الرئيسية
                            </a>
                        </li>
                        <li>
                            <span>الاخبار</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Col -->
        </div>
    </div>
</section>
<!-- End Breadcrumb -->

<!-- Start Single-page -->
        <section class="single-page body-inner">
            <div class="container">
                <div class="row">

                    <!-- Col -->
                    <div class="col-md-6 col-sm-12">
                        <div class="text-single">
                            <h3>{{$blog->title}}</h3>
                            <p>{{$blog->description}}</p>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-md-6 col-sm-12">
                        <div class="slider-single-pro">

                            <div class="slider slider-for">
                                <div class="slider-banner-image">
                                    <div class="blokc-single-g">
                                        <img src="{{asset($blog->image)}}" alt="#">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                </div>
            </div>
        </section>
        <!-- End Single-page -->

        @if ($related_blogs->count() > 0)
            <!-- Start More-pro -->
            <section class="more-serv more-pro">
                <div class="container">
                    <div class="row">
                        <!-- Col -->
                        <div class="col-md-12">
                            <div class="title-page">
                                <h3> أخبار ذات صلة</h3>
                            </div>
                        </div>
                        <!-- /Col -->
                        <!-- Col -->
                        <div class="col-md-12">

                            <div class="pro-slider owl-carousel owl-theme">
                                @foreach ($related_blogs as $item)
                                    <div class="item">
                                        <div class="pro-block">
                                            <div class="img-block">
                                                <a href="{{route('single-blog',$item->id)}}">
                                                    <img src="{{asset($item->image)}}" alt="#" />
                                                </a>
                                            </div>
                                            <div class="details">
                                                <a href="{{route('single-blog',$item->id)}}" class="name">
                                                    {{$item->title}}
                                                </a>
                                                <p>{!! \Illuminate\Support\Str::limit($item->description, 80, '') !!}</p>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <!-- /Col -->
                    </div>
                </div>
            </section>
            <!-- End More-pro -->

        @endif


@endsection
