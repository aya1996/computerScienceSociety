@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">جدول المحاضرات </h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>جدول المحاضرات </b></h4>
                            <div class="font-13 m-b-30 ">
                                <button class="btn btn-success text-right waves-effect waves-light" data-toggle="modal" data-target="#create-modal">إضافة جديد</button>
                            </div>
                            <br>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="text-center">رقم</th>
                                        <th class="text-center">اليوم</th>
                                        <th class="text-center">القاعة</th>
                                        <th class="text-center">القسم</th>
                                        <th class="text-center">المادة الدراسية</th>
                                        <th class="text-center">الفصل الدراسي</th>
                                        <th class="text-center">من</th>
                                        <th class="text-center">إلي</th>
                                        <th class="text-center">التحكم</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($schedules->count() > 0)
                                        @foreach ($schedules as $key => $schedule)
                                            <tr>
                                                <td class="text-center">{{$key + 1}}</td>
                                                <td class="text-center">{{$schedule->day}}</td>
                                                <td class="text-center">{{$schedule->hall->name ?? ''}}</td>
                                                <td class="text-center">{{$schedule->department->name ?? ''}}</td>
                                                <td class="text-center">{{$schedule->course->name ?? ''}}</td>
                                                <td class="text-center">{{$schedule->semester->name ?? ''}}</td>
                                                <td class="text-center">{{$schedule->time_from}}</td>
                                                <td class="text-center">{{$schedule->time_to}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('schedules.edit' ,$schedule->id )}}">
                                                      <button type="button" class="btn btn-primary waves-effect width-md waves-light">تعديل</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger waves-effect width-md waves-light" alt="default" data-toggle="modal" data-target="#delete-modal{{$key}}"
                                                                    data-id="{{$schedule->id}}"> حذف </button>


                                                    <div class="modal fade bs-example-modal-center" id="delete-modal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabelcenter" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h2 class="modal-title" id="mySmallModalLabelcenter">حذف العنصر</h2>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h3>هل أنت متأكد من حذف العنصر !!</h3>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{route('schedules.destroy' ,$schedule->id )}}" method="POST" enctype="multipart/form-data" id="userForm">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">إغلاق</button>
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">حذف</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-center" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabelcenter" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="mySmallModalLabelcenter">إضافة جديد</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="parsley-examples" method="POST" action="{{route('schedules.store')}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')


                            <div class="form-group">
                                <label for="userName">القسم<span class="text-danger">*</span></label>
                                <select name="department_id" parsley-trigger="change" required class="form-control" id="college_id">
                                    @if ($departments->count() > 0)
                                        <option value="#" selected disabled>اختر ...</option>
                                        @foreach ($departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="userName">القاعة<span class="text-danger">*</span></label>
                                <select name="hall_id" parsley-trigger="change" required class="form-control" id="hall_id">
                                @if ($halls->count() > 0)
                                        <option value="#" selected >اختر ...</option>
                                        @foreach ($halls as $hall)
                                            <option value="{{$hall->id}}">{{$hall->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="userName">المادة<span class="text-danger">*</span></label>
                                <select name="course_id" parsley-trigger="change" required class="form-control" id="course_id">
                                @if ($courses->count() > 0)
                                        <option value="#" selected >اختر ...</option>
                                        @foreach ($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="userName">اليوم<span class="text-danger">*</span></label>
                                <select name="day" parsley-trigger="change" required class="form-control">
                                        @foreach ($days as $day)
                                            <option value="{{$day}}">{{$day}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="userName">الفصل الدراسي<span class="text-danger">*</span></label>
                                <select name="semester_id" parsley-trigger="change" required class="form-control">
                                    @if ($semesters->count() > 0)
                                        <option value="#" selected disabled>اختر ...</option>
                                        @foreach ($semesters as $semster)
                                            <option value="{{$semster->id}}">{{$semster->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="userName">من<span class="text-danger">*</span></label>
                                <input type="time" name="time_from" parsley-trigger="change" required class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="userName">إلي<span class="text-danger">*</span></label>
                                <input type="time" name="time_to" parsley-trigger="change" required class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">إغلاق</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light">إرسال</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(document).on('change','#department_id',function(e){
                var college_id = e.target.value;
                $.ajax({
                      url:"{{ route('get-halls') }}",
                      type:"POST",
                      data: {
                        course_id:course_id,
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

