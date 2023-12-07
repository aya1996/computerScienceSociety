@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">المقررات</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>تعديل المقرر</b></h4>

                            <form  method="POST" action="{{route('courses.update',$course->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                            <div class="form-group">
                                                <label for="userName">الإسم<span class="text-danger">*</span></label>
                                                <input type="text" name="name" parsley-trigger="change" required placeholder="الاسم" class="form-control" id="userName" value="{{$course->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">الكلية<span class="text-danger">*</span></label>
                                                <select name="college_id" parsley-trigger="change" required class="form-control">
                                                    @if ($colleges->count() > 0)
                                                        @foreach ($colleges as $college)
                                                            <option value="{{$college->id}}" {{$college->id == $course->college_id ? 'selected' : ''}}>{{$college->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">الصورة الشخصية<span class="text-danger">*</span></label>
                                                <input type="file" name="image" accept="images/*" class="form-control">
                                                <span style="color:red">اختياري .........</span>
                                                <br>
                                                @if ($course->image)
                                                    <img class="img-thumbnail" src="{{asset($course->image)}}" style="width: 100px; height: 100px; border-radius: 50%">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-right mb-0">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">تعديل</button>
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

