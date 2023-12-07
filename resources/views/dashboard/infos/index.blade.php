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
                            <h4 class="m-t-0 header-title mb-4"><b>معلومات الموقع</b></h4>
                            <div class="font-13 m-b-30 ">
                                <button class="btn btn-success text-right waves-effect waves-light" data-toggle="modal" data-target="#create-modal">إضافة جديد</button>
                            </div>
                            <br>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="text-center">رقم</th>
                                        <th class="text-center">العنوان</th>
                                        <th class="text-center">العنوان</th>
                                        <th class="text-center">البريد الإلكتروني</th>
                                        <th class="text-center">التحكم</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($infos->count() > 0)
                                        @foreach ($infos as $key => $info)
                                            <tr>
                                                <td class="text-center">{{$key + 1}}</td>
                                                <td class="text-center">{{$info->address}}</td>
                                                <td class="text-center">{{$info->phone}}</td>
                                                <td class="text-center">{{$info->email}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('infos.edit' ,$info->id )}}">
                                                      <button type="button" class="btn btn-primary waves-effect width-md waves-light">تعديل</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger waves-effect width-md waves-light" alt="default" data-toggle="modal" data-target="#delete-modal{{$key}}"
                                                                    data-id="{{$info->id}}"> حذف </button>


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
                                                                    <form action="{{route('infos.destroy' ,$info->id )}}" method="POST" enctype="multipart/form-data" id="userForm">
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
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="mySmallModalLabelcenter">إضافة جديد</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="parsley-examples" method="POST" action="{{route('infos.store')}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="userName">العنوان<span class="text-danger">*</span></label>
                                <input type="text" name="address" required placeholder="العنوان" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="userName">البريد الإلكتروني<span class="text-danger">*</span></label>
                                <input type="email" name="email" required placeholder="البريد الإلكتروني" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="userName">الهاتف<span class="text-danger">*</span></label>
                                <input type="number" name="phone" required placeholder="الهاتف" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="userName">فيسبوك<span class="text-danger">*</span></label>
                                <input type="url" name="facebook" required placeholder="فيسبوك" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="userName">يوتيوب<span class="text-danger">*</span></label>
                                <input type="url" name="youtube" required placeholder="يوتيوب" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="userName">تويتر<span class="text-danger">*</span></label>
                                <input type="url" name="twitter" required placeholder="تويتر" class="form-control">
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

