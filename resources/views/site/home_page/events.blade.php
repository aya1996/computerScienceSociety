@if ($events->count() > 0)
<!-- Start Products-h -->
<section class="products-h sch-h" id="events">
    <div class="container">
        <div class="row">
            <!-- Col -->
            <div class="col-md-12">
                <div class="title title-center">
                    <h3>أهم الأحداث</h3>
                </div>

                <div class="pro-slider owl-carousel owl-theme">
                    @foreach ($events as $item)
                        <div class="item">
                            <div class="pro-block">
                                <div class="img-block">
                                    <a href="#">
                                        <img src="{{asset($item->image)}}" alt="#" />
                                    </a>
                                </div>
                                <div class="details">
                                    <a href="#" class="name">
                                        {{$item->name}}
                                    </a>
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
