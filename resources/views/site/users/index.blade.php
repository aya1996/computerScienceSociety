@extends('site.includes.app')

@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb">
    <div class="img-overlay"><img src="{{asset('site/images/bg_1.jpg')}}" alt="#" /></div>
    <div class="container">
        <div class="row">
            <!-- Col -->
            <div class="col-md-12">
                <div class="text-bread">
                    <h3>الصفحة الشخصية</h3>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">
                                الرئيسية
                            </a>
                        </li>
                        <li>
                            <span>{{auth()->user()->name}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Col -->
        </div>
    </div>
</section>
<!-- End Breadcrumb -->

<!-- Start Profile-page -->
<section class="profile-page body-inner">
    <div class="container">
        <div class="row">
            <!-- Col -->
            <div class="col-md-4">
                <div class="side-profile">
                    <div class="img-profile">
                        <div class="profile-pic">
                            <img src="{{asset(auth()->user()->image)}}" id="output" width="200" />
                        </div>
                    </div>
                    <div class="name-profile">
                        <h3>{{auth()->user()->name}}</h3>
                        <span>{{auth()->user()->email}}</span>
                    </div>
                    <div class="tabs-profile">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <button class="nav-link active" data-toggle="tab" data-target="#myInfo" type="button">معلوماتي الشخصية</button>
                            </li>
                            {{--  <li class="nav-item">
                                <button class="nav-link" data-toggle="tab" data-target="#myServ" type="button">جدول</button>
                            </li>  --}}
                            <li class="nav-item">
                                <button class="nav-link" data-toggle="tab" data-target="#changePass" type="button">تغيير كلمة المرور</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Col -->

            <!-- Col -->
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="myInfo">
                        <div class="tabs-content-profile">
                            <form action="{{route('profile_updates',auth()->id())}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-profile">
                                <div class="form-group">
                                        <label>الرقم المدني</label>
                                        <input type="number" name="national_id" value="{{auth()->user()->national_id}}" placeholder="الرقم المدني" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>الإسم</label>
                                        <input type="text" name="name" value="{{auth()->user()->name}}" placeholder="الإسم" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>البريد الإليكتروني</label>
                                        <input type="text" name="email" value="{{auth()->user()->email}}" placeholder="البريد الإليكتروني" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>الصورة</label>
                                        <input type="file" name="image" accept="image/*" class="form-control" />
                                        <span style="color:red">اختياري ......</span>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-form" type="submit">
                                            <span>تعديل المعلومات الشخصية</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="changePass">
                        <div class="tabs-content-profile">
                            <div class="form-req">
                                <div class="form-inner">
                                    <h3>تغيير كلمة السر</h3>

                                    <form action="{{route('change_password')}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="password" placeholder="كلمة المرور القديمة" class="form-control" id="password-field" name="current-password" required/>
                                            <i class="fa fa-lock"></i>
                                            <span toggle="#password-field" class="fa fa-eye-slash toggle-password"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" placeholder="كلمة المرور الجديدة" name="new-password" required class="form-control" id="password-field2" />
                                            <i class="fa fa-lock"></i>
                                            <span toggle="#password-field2" class="fa fa-eye-slash toggle-password"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" placeholder="تأكيد كلمة المرور الجديدة" class="form-control" id="password-field3" name="new-password_confirmation" required />
                                            <i class="fa fa-lock"></i>
                                            <span toggle="#password-field3" class="fa fa-eye-slash toggle-password"></span>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-form" type="submit">
                                                <span>حفظ التعديلات</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Col -->
        </div>
    </div>
</section>
<!-- End Profile-page -->


@endsection
