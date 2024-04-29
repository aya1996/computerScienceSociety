@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">المحاضرة</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>تعديل المحاضرة</b></h4>

                            <form  method="POST" action="{{route('schedules.update',$schedule->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="userName">القسم<span class="text-danger">*</span></label>
                                            <select name="department_id" parsley-trigger="change" required class="form-control" id="department_id">
                                                @if ($departments->count() > 0)
                                                    <option value="#" selected disabled>اختر ...</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{$department->id}}" {{$department->id == $schedule->department_id ? 'selected' : ''}}>{{$department->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">القاعة<span class="text-danger">*</span></label>
                                            <select name="hall_id" parsley-trigger="change" required class="form-control" id="hall_id">
                                                @if ($halls->count() > 0)
                                                    <option value="#" selected disabled>اختر ...</option>
                                                    @foreach ($halls as $hall)
                                                        <option value="{{$hall->id}}" {{$hall->id == $schedule->hall_id ? 'selected' : ''}}>{{$hall->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">المادة<span class="text-danger">*</span></label>
                                            <select name="course_id" parsley-trigger="change" required class="form-control" id="course_id">
                                                @if ($courses->count() > 0)
                                                    <option value="#" selected disabled>اختر ...</option>
                                                    @foreach ($courses as $course)
                                                        <option value="{{$course->id}}" {{$course->id == $schedule->course_id ? 'selected' : ''}}>{{$course->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">اليوم<span class="text-danger">*</span></label>
                                            <select name="day" parsley-trigger="change" required class="form-control">
                                                    @foreach ($days as $day)
                                                        <option value="{{$day}}" {{$schedule->day == $day ? 'selected' : ''}}>{{$day}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">الفصل الدراسي<span class="text-danger">*</span></label>
                                            <select name="semester_id" parsley-trigger="change" required class="form-control">
                                                @if ($semesters->count() > 0)
                                                    <option value="#" selected disabled>اختر ...</option>
                                                    @foreach ($semesters as $semester)
                                                        <option value="{{$semester->id}}" {{$semester->id == $schedule->semester_id ? 'selected' : ''}}>{{$semester->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">من<span class="text-danger">*</span></label>
                                            <input type="time" name="time_from" value="{{$schedule->time_from}}" parsley-trigger="change" required class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">إلي<span class="text-danger">*</span></label>
                                            <input type="time" name="time_to" value="{{$schedule->time_to}}" parsley-trigger="change" required class="form-control" >
                                        </div>
                                        <div class="form-group text-right mb-0">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">تعديل</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $(document).on('change','#department_id',function(e){
                var department_id = e.target.value;
                $.ajax({
                      url:"{{ route('get-halls') }}",
                      type:"POST",
                      data: {
                           department_id: department_id,
                           _token: '{!! csrf_token() !!}',
                       },
                      success:function (data) {

                           $('#hall_id').empty();
                           $('#course_id').empty();

                           if(data.halls.length > 0){
                               $.each(data.halls,function(index,hall){
                                    $('#hall_id').append('<option value="'+hall.id+'">'+hall.name+'</option>');
                                })
                           }
                           if(data.courses.length > 0){
                               $.each(data.courses,function(index,course){
                                    $('#course_id').append('<option value="'+course.id+'">'+course.name+'</option>');
                                })
                           }

                      }
                })
            });
        });
    </script>
@endsection

