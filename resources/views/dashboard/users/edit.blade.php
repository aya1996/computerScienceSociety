@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">المستخدمين</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>تعديل المستخدم</b></h4>

                            <form class="parsley-examples" method="POST" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="userName">الإسم<span class="text-danger">*</span></label>
                                                <input type="text" name="name" parsley-trigger="change" required placeholder="الاسم" class="form-control" id="userName" value="{{$user->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">البريد الإلكتروني<span class="text-danger">*</span></label>
                                                <input type="email" name="email" parsley-trigger="change" required placeholder="البريد الإلكتروني" class="form-control" id="emailAddress" value="{{$user->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="pass1">الرقم السري<span class="text-danger">*</span></label>
                                                <input id="pass1" name="password" type="password" placeholder="الرقم السري" class="form-control">
                                                <span style="color:red">اختياري .........</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">الصورة الشخصية<span class="text-danger">*</span></label>
                                                <input type="file" name="image" accept="images/*" class="form-control">
                                                <span style="color:red">اختياري .........</span>
                                                <br>
                                                @if ($user->image)
                                                    <img class="img-thumbnail" src="{{asset($user->image)}}" style="width: 100px; height: 100px; border-radius: 50%">
                                                @endif
                                            </div>
                                        </div>
                                        <input type="hidden" name="user" value="{{$user->id}}">
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

