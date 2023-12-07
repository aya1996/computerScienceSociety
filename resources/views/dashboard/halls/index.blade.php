@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">القاعات</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>القاعات</b></h4>
                            <div class="font-13 m-b-30 ">
                                <button class="btn btn-success text-right waves-effect waves-light" data-toggle="modal" data-target="#create-modal">إضافة جديد</button>
                            </div>
                            <br>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="text-center">رقم</th>
                                        <th class="text-center">الاسم</th>
                                        <th class="text-center">الكلية</th>
                                        <th class="text-center">التحكم</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($halls->count() > 0)
                                        @foreach ($halls as $key => $hall)
                                            <tr>
                                                <td class="text-center">{{$key + 1}}</td>
                                                <td class="text-center">{{$hall->name}}</td>
                                                <td class="text-center">{{$hall->college->name}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('halls.edit' ,$hall->id )}}">
                                                      <button type="button" class="btn btn-primary waves-effect width-md waves-light">تعديل</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger waves-effect width-md waves-light" alt="default" data-toggle="modal" data-target="#delete-modal{{$key}}"
                                                                    data-id="{{$hall->id}}"> حذف </button>


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
                                                                    <form action="{{route('halls.destroy' ,$hall->id )}}" method="POST" enctype="multipart/form-data" id="userForm">
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
                        <form class="parsley-examples" method="POST" action="{{route('halls.store')}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="userName">الإسم<span class="text-danger">*</span></label>
                                <input type="text" name="name" parsley-trigger="change" required placeholder="الاسم" class="form-control" id="userName">
                            </div>
                            <div class="form-group">
                                <label for="userName">الكلية<span class="text-danger">*</span></label>
                                <select name="college_id" parsley-trigger="change" required class="form-control">
                                    @if ($colleges->count() > 0)
                                        @foreach ($colleges as $college)
                                            <option value="{{$college->id}}">{{$college->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
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

