@if ($colleges->count() > 0)
<!-- Start Products-h -->
<section class="products-h sch-h" id="colleges">
    <div class="container">
        <div class="row">
            <!-- Col -->
            <div class="col-md-12">
                <div class="title title-center">
                    <h3>الكليات</h3>
                </div>

                <div class="pro-slider owl-carousel owl-theme">
                    @foreach ($colleges as $item)
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
