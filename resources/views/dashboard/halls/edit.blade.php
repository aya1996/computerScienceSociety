@extends('dashboard.includes.app')

@section('contnet')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">القاعه</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>تعديل القاعه</b></h4>

                            <form  method="POST" action="{{route('halls.update',$hall->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                            <div class="form-group">
                                                <label for="userName">الإسم<span class="text-danger">*</span></label>
                                                <input type="text" name="name" parsley-trigger="change" required placeholder="الاسم" class="form-control" id="userName" value="{{$hall->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">المبني <span class="text-danger">*</span></label>
                                                <select name="building_id" parsley-trigger="change" required class="form-control">
                                                    @if ($buildings->count() > 0)
                                                        @foreach ($buildings as $building)
                                                            <option value="{{$building->id}}" {{$building->id == $hall->building_id ? 'selected' : ''}}>{{$building->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">الدور <span class="text-danger">*</span></label>
                                                <select name="level_id" parsley-trigger="change" required class="form-control">
                                                    @if ($levels->count() > 0)
                                                        @foreach ($levels as $level)
                                                            <option value="{{$level->id}}" {{$level->id == $hall->level_id ? 'selected' : ''}}>{{$level->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
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

