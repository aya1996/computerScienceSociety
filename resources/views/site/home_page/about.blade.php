@if($about)
<section class="about-h">
    <div class="container">
        <div class="row">
            <!-- Col -->
            <div class="col-md-7 col-sm-12">
                <div class="title">
                    <h3> من نحن</h3>
                </div>
                <div class="text-about">
                    <p>{{$about->description}}</p>
                    <a href="{{route('about')}}" class="btn">
                        <span>اقرأ المزيد</span>
                    </a>
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
@endif
