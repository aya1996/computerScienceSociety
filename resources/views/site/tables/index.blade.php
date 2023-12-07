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
                            <h3>إنشاء جدول </h3>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">
                                        الرئيسية
                                    </a>
                                </li>
                                <li>
                                    <span>إنشاء جدول </span>
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
                            <label for="">الفصل الدراسي</label>
                            <select name="semester_id" class="form-control" id="semester_id" required>
                                @if ($semesters->count() > 0)
                                    <option value="" selected disabled>اختر الفصل الدراسي ........</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{$semester->id}}">{{$semester->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">الكلية</label>
                            <select name="college_id" class="form-control"  id="college_id" required>
                                {{--  @if ($colleges->count() > 0)
                                    <option value="" selected disabled>اختر الكلية ........</option>
                                    @foreach ($colleges as $college)
                                        <option value="{{$college->id}}">{{$college->name}}</option>
                                    @endforeach
                                @endif  --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">المقرر</label>
                            <select name="course_id" class="form-control"  id="course_id" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">عضو هيئة التدرس</label>
                            <select name="teacher_id" class="form-control" id="teacher_id"  required>
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
            $(document).on('change','#semester_id',function(e){
                var semester_id = e.target.value;
                $.ajax({
                      url:"{{ route('get-colleges') }}",
                      type:"POST",
                      data: {
                           semester_id: semester_id,
                           _token: '{!! csrf_token() !!}',
                       },
                      success:function (data) {

                           $('#college_id').empty();

                           if(data.colleges.length > 0){
                               $('#college_id').append('<option value="" selected disabled>اختر الكلية ...</option>');
                               $.each(data.colleges,function(index,college){
                                    $('#college_id').append('<option value="'+college.id+'">'+college.name+'</option>');
                                })
                           }

                      }
                })
            });
            $(document).on('change','#college_id',function(e){
                var college_id = e.target.value;
                $.ajax({
                      url:"{{ route('get-courses') }}",
                      type:"POST",
                      data: {
                           college_id: college_id,
                           _token: '{!! csrf_token() !!}',
                       },
                      success:function (data) {

                           $('#course_id').empty();

                           if(data.courses.length > 0){
                               $('#course_id').append('<option value="" selected disabled>اختر المقرر ...</option>');
                               $.each(data.courses,function(index,course){
                                    $('#course_id').append('<option value="'+course.id+'">'+course.name+'</option>');
                                })
                           }

                      }
                })
            });
            $(document).on('change','#course_id',function(e){
                var course_id = e.target.value;
                $.ajax({
                      url:"{{ route('get-teachers') }}",
                      type:"POST",
                      data: {
                           course_id: course_id,
                           _token: '{!! csrf_token() !!}',
                       },
                      success:function (data) {

                           $('#teacher_id').empty();

                           if(data.teachers.length > 0){
                               $.each(data.teachers,function(index,teacher){
                                    $('#teacher_id').append('<option value="'+teacher.id+'">'+teacher.name+'</option>');
                                })
                           }

                      }
                })
            });
        });
    </script>
@endsection
