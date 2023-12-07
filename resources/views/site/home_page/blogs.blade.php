@if ($blogs->count() > 0)
<!-- Start Products-h -->
<section class="products-h">
    <div class="container">
        <div class="row">
            <!-- Col -->
            <div class="col-md-12">
                <div class="title title-center">
                    <h3>الاخبار</h3>
                </div>

                <div class="pro-slider owl-carousel owl-theme">
                    @foreach ($blogs as $blog)
                    <div class="item">
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
            <!-- /Col -->
        </div>
    </div>
</section>
<!-- End Products-h -->

@endif
