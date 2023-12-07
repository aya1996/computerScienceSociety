@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">الخبر </h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>تعديل الخبر </b></h4>

                            <form  method="POST" action="{{route('blogs.update',$blog->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                            <div class="form-group">
                                                <label for="userName">العنوان<span class="text-danger">*</span></label>
                                                <input type="text" name="title" parsley-trigger="change" required placeholder="العنوان" class="form-control" id="usertitle" value="{{$blog->title}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">الوصف<span class="text-danger">*</span></label>
                                                <textarea rows="4" name="description" parsley-trigger="change" required placeholder="الوصف" class="form-control">{{$blog->description}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">الصورة الشخصية<span class="text-danger">*</span></label>
                                                <input type="file" name="image" accept="images/*" class="form-control">
                                                <span style="color:red">اختياري .........</span>
                                                <br>
                                                @if ($blog->image)
                                                    <img class="img-thumbnail" src="{{asset($blog->image)}}" style="width: 100px; height: 100px; border-radius: 50%">
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

