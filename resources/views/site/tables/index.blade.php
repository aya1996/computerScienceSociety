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
                            <h3>حجز موعد مع الدكتور  </h3>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">
                                        الرئيسية
                                    </a>
                                </li>
                                <li>
                                    <span>حجز موعد مع الدكتور  </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <section>
            <div class="container">
                <div class="contact-form">
                    <form action="{{route('table-store')}}" method="post" class="contact">
                        @csrf
                        @method('POST')
                        <!-- Form-group -->
                       
                        <div class="form-group">
                            <label for="">المبني </label>
                            <select name="building_id" class="form-control" id="building_id" required>
                                @if ($buildings->count() > 0)
                                    <option value="" selected >اختر المبني ........</option>
                                    @foreach ($buildings as $building)
                                        <option value="{{$building->id}}">{{$building->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">الدور</label>
                            <select name="level_id" class="form-control"  id="level_id" required>
                                @if ($levels->count() > 0)
                                    <!-- <option value="" selected >اختر الدور ........</option> -->
                                    <!-- @foreach ($levels as $level)
                                        <option value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach
                                @endif   -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">المكتب</label>
                            <select name="hall_id" class="form-control"  id="hall_id" required>
                            @if ($halls->count() > 0)
                                    <!-- <option value="" selected >اختر المكتب ........</option> -->
                                    <!-- @foreach ($halls as $hall)
                                        <option value="{{$hall->id}}">{{$hall->name}}</option>
                                    @endforeach
                                    @endif   -->
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="">عضو هيئة التدرس</label>
                            <select name="teacher_id" class="form-control" id="teacher_id"  required>
                            @if ($teachers->count() > 0)
                                    <option value="" selected >اختر الدكتور ........</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @endforeach
                                    @endif  
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">الساعات المكتبية المتاحة</label>
                            <select name="officeHours_id" class="form-control"  id="officeHours_id" required>
                            <!-- @if ($officeHours->count() > 0)
                                    <option value="" selected >اختر الساعة ........</option>
                                    @foreach ($officeHours as $officeHour)
                                        <option value="{{$officeHour->id}}">{{$officeHour->day}}-الساعه-{{$officeHour->time}}</option>
                                    @endforeach
                                    @endif   -->
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="more"> <button type="submit" class="btn"> ارسال</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <div class="map">
        </div>


@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(document).on('change','#building_id',function(e){
                var building_id = e.target.value;
                $.ajax({
                      url:"{{ route('get-levels') }}",
                      type:"POST",
                      data: {
                           building_id: building_id,
                           _token: '{!! csrf_token() !!}',
                       },
                      success:function (data) {

                           $('#level_id').empty();

                           if(data.levels.length > 0){
                               $('#level_id').append('<option value="" selected disabled>اختر الدور ...</option>');
                               $.each(data.levels,function(index,level){
                                    $('#level_id').append('<option value="'+level.id+'">'+level.name+'</option>');
                                })
                           }

                      }
                })
            });
            $(document).on('change','#level_id',function(e){
                var level_id = e.target.value;
                $.ajax({
                      url:"{{ route('get-hall') }}",
                      type:"POST",
                      data: {
                        level_id: level_id,
                           _token: '{!! csrf_token() !!}',
                       },
                      success:function (data) {

                           $('#hall_id').empty();

                           if(data.halls.length > 0){
                               $('#hall_id').append('<option value="" selected disabled>اختر المكتب ...</option>');
                               $.each(data.halls,function(index,hall){
                                    $('#hall_id').append('<option value="'+hall.id+'">'+hall.name+'</option>');
                                })
                           }

                      }
                })
            });
            $(document).on('change','#teacher_id',function(e){
                var teacher_id = e.target.value;
                $.ajax({
                      url:"{{ route('get-officeHours') }}",
                      type:"POST",
                      data: {
                        teacher_id: teacher_id,
                           _token: '{!! csrf_token() !!}',
                       },
                      success:function (data) {

                           $('#officeHours_id').empty();

                           if(data.officeHours.length > 0){
                            $('#officeHours_id').append('<option value="" selected disabled>اختر الساعة ...</option>');

                               $.each(data.officeHours,function(index,officeHour){
                                    $('#officeHours_id').append('<option value="'+officeHour.id+'">'+officeHour.day+'- '+officeHour.time+'</option>');
                                })
                           }

                      }
                })
            });
        });
    </script>
@endsection
