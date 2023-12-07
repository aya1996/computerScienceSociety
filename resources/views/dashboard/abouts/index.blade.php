@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">من نحن</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>من نحن </b></h4>
                            <div class="font-13 m-b-30 text-right">
                                <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#create-modal">إضافة جديد</button>
                            </div>
                            <br>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="text-center">رقم</th>
                                        <th class="text-center">الوصف</th>
                                        <th class="text-center">رؤيتنا</th>
                                        <th class="text-center">قيمنا</th>
                                        <th class="text-center">رسالتنا</th>
                                        <th class="text-center">الصورة</th>
                                        <th class="text-center">التحكم</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($abouts->count() > 0)
                                        @foreach ($abouts as $key => $about)
                                            <tr>
                                                <td class="text-center">{{$key + 1}}</td>
                                                <td class="text-center">{!! \Illuminate\Support\Str::limit($about->description, 20, '') !!}</td>
                                                <td class="text-center">{!! \Illuminate\Support\Str::limit($about->vision, 20, '') !!}</td>
                                                <td class="text-center">{!! \Illuminate\Support\Str::limit($about->values, 20, '') !!}</td>
                                                <td class="text-center">{!! \Illuminate\Support\Str::limit($about->message, 20, '') !!}</td>
                                                <td class="text-center">
                                                    <img src="{{asset($about->image)}}" style="width: 50px; height: 50px; border-radius: 50%">
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{route('abouts.edit' ,$about->id )}}">
                                                      <button type="button" class="btn btn-primary waves-effect width-md waves-light">تعديل</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger waves-effect width-md waves-light" alt="default" data-toggle="modal" data-target="#delete-modal{{$key}}"
                                                                    data-id="{{$about->id}}"> حذف </button>


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
                                                                    <form action="{{route('abouts.destroy' ,$about->id )}}" method="POST" enctype="multipart/form-data" id="userForm">
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
                        <form class="parsley-examples" method="POST" action="{{route('abouts.store')}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="userName">الوصف<span class="text-danger">*</span></label>
                                <textarea rows="4" name="description" parsley-trigger="change" required placeholder="الوصف" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="userName">رؤيتنا<span class="text-danger">*</span></label>
                                <textarea rows="4" name="vision" parsley-trigger="change" required placeholder="رؤيتنا" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="userName">قيمنا<span class="text-danger">*</span></label>
                                <textarea rows="4" name="values" parsley-trigger="change" required placeholder="قيمنا" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="userName">رسالتنا<span class="text-danger">*</span></label>
                                <textarea rows="4" name="message" parsley-trigger="change" required placeholder="رسالتنا" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="passWord2">الصورة <span class="text-danger">*</span></label>
                                <input type="file" name="image" required accept="images/*" class="form-control">
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

