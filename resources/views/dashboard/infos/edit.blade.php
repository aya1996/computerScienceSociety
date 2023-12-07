@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">معلومات الموقع</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>تعديل معلومات الموقع</b></h4>

                            <form  method="POST" action="{{route('infos.update',$info->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="userName">العنوان<span class="text-danger">*</span></label>
                                            <input type="text" name="address" required value="{{$info->address}}" placeholder="العنوان" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">البريد الإلكتروني<span class="text-danger">*</span></label>
                                            <input type="email" name="email" required value="{{$info->email}}" placeholder="البريد الإلكتروني" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">الهاتف<span class="text-danger">*</span></label>
                                            <input type="number" name="phone" required value="{{$info->phone}}" placeholder="الهاتف" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">فيسبوك<span class="text-danger">*</span></label>
                                            <input type="url" name="facebook" required value="{{$info->facebook}}" placeholder="فيسبوك" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">يوتيوب<span class="text-danger">*</span></label>
                                            <input type="url" name="youtube" required value="{{$info->youtube}}" placeholder="يوتيوب" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">تويتر<span class="text-danger">*</span></label>
                                            <input type="url" name="twitter" required value="{{$info->twitter}}" placeholder="تويتر" class="form-control">
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

