@if ($teachers->count() > 0)
<section class="clients-h">
    <div class="container">
        <div class="row">
            <!-- Col -->
            <div class="col-md-12">
                <div class="title title-center">
                    <h3>أعضاء هيئة التدريس </h3>
                    <p>
                        نوفر لك أفضل أعضاء هيئة التدريس علي مستوي متقدم من المهارة والحاصلين علي درجات من الماجستير والدكتوراه
                    </p>
                </div>
            </div>
            <!-- /Col -->

            <!-- Col -->
            <div class="col-md-12">
                <div class="clients-slider owl-carousel owl-theme">
                    @foreach ($teachers as $teacher)
                        <div class="item">
                            <div class="block-team">
                                <div class="img">
                                    <img src="{{asset($teacher->image)}}">
                                </div>
                                <div class="details">
                                    <h3>{{$teacher->name}}</h3>
                                    {{--  <span>CEO</span>  --}}
                                    <p>{{$teacher->email}}</p>
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
@endif
