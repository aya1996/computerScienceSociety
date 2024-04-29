@extends('dashboard.includes.app')


@section('contnet')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">مرحبا بك !</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Computer Science Society</a></li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                                <li class="breadcrumb-item active">لوحة تحكم المشرف</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-pink">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">
                                        {{\App\Models\User::get()->count()}}
                                    </span></h2>
                                    <p class="mb-0">المستخدمين</p>
                                </div>
                                <i class="ion-md-person"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-purple">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white">
                                        <span data-plugin="counterup">
                                            {{\App\Models\Contact::get()->count()}}
                                        </span>
                                    </h2>
                                    <p class="mb-0">رسائل تواصل معنا </p>
                                </div>
                                <i class="ion-md-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-info">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">
                                        {{\App\Models\Event::get()->count()}}</span></h2>
                                    <p class="mb-0">أهم الأحداث</p>
                                </div>
                                <i class="ion-ios-book"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-primary">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">
                                        {{\App\Models\Course::get()->count()}}</span></h2>
                                    <p class="mb-0">المقررات</p>
                                </div>
                                <i class="mdi mdi-pen"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->



    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                كل الحقوق محفوظة لدى موقع Computer Science Society &copy;<script>document.write(new Date().getFullYear());</script>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

@endsection

