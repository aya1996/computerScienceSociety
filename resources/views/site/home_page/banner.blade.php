
    @if ($sliders->count() > 0)
        <section class="banner-home">
            <div class="home-slider owl-carousel owl-theme">
                @foreach ($sliders as $key => $slider)
                    <div class="item" data-dot="<button class='nub-dot'>{{$key + 1}}</button>">
                        <div class="img-overlay">
                            <img src="{{asset($slider->image)}}" alt="#" />
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-banner">
                                        <h1>{{$slider->title}}</h1>
                                        <p>{{$slider->description}}</p>
                                        {{--  <div class="btn-group">
                                            <a href="#" class="btn-sec">
                                                <span>اقرأ المزيد</span>
                                            </a>
                                        </div>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
