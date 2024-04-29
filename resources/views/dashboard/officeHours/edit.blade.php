@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">الساعات المكتبية</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>تعديل الساعات المكتبية</b></h4>

                            <form  method="POST" action="{{route('officeHours.update',$officeHour->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                    <div class="form-group">
                                            <label for="userName">اليوم<span class="text-danger">*</span></label>
                                            <select name="day" parsley-trigger="change" required class="form-control">
                                                    @foreach ($days as $day)
                                                        <option value="{{$day}}" {{$officeHour->day == $day ? 'selected' : ''}} > {{$day}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">من الساعة<span class="text-danger">*</span></label>
                                            <input type="time" name="time_from" value="{{$officeHour->time_from}}" parsley-trigger="change" required class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">إلي الساعة<span class="text-danger">*</span></label>
                                            <input type="time" name="time_to" value="{{$officeHour->time_to}}" parsley-trigger="change" required class="form-control" >
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

