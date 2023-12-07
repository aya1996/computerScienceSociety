@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">تواصل معنا</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>تعديل تواصل معنا</b></h4>

                            <form  method="POST" action="{{route('contacts.update',$contact->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="userName">الإسم<span class="text-danger">*</span></label>
                                            <input type="text" name="name"  required placeholder="الاسم" class="form-control" id="userName" value="{{$contact->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">البريد الإلكتروني<span class="text-danger">*</span></label>
                                            <input type="email" name="email"  required placeholder="البريد الإلكتروني" class="form-control" id="userName" value="{{$contact->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName"> الهاتف<span class="text-danger">*</span></label>
                                            <input type="number" name="phone"  required placeholder=" الهاتف" class="form-control" id="userName" value="{{$contact->phone}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">الرسالة<span class="text-danger">*</span></label>
                                            <textarea rows="4" name="msg" p required placeholder="الرسالة" class="form-control">{{$contact->msg}}</textarea>
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

