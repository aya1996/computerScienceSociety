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

@if($blogs->count() > 0)
<section class="products-page body-inner">
    <div class="container">
        <div class="row">

            @foreach ($blogs as $blog)
                <div class="col-md-4 col-sm-6">
                    <div class="pro-block">
                        <div class="img-block">
                            <a href="{{route('single-blog',$blog->id)}}">
                                <img src="{{asset($blog->image)}}" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="{{route('single-blog',$blog->id)}}" class="name">
                                {{$blog->title}}
                            </a>
                            <p>{!! \Illuminate\Support\Str::limit($blog->description, 80, '') !!}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
