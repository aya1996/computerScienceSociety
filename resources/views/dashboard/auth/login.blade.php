<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Login Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{asset('dashboard/images/favicon.ico')}}">
        <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('dashboard/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard/css/app-rtl.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    <body class="authentication-page">

        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-header p-4  bg-gradient" style="background-color:#51be78;">
                                <h4 class="text-white text-center mb-0 mt-0">تسجيل الدخول</h4>
                            </div>
                            <div class="card-body">
                                    <form class="p-2" method="POST" action="{{ route('admin.login.submit') }}">
                                        @csrf

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">البريد الإلكتروني :</label>
                                        <input type="email" placeholder="Example@example.com" class="form-control"
                                         name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">الرقم السري :</label>
                                        <input type="password" placeholder="@lang('lang.password')" class="form-control" name="password" required autocomplete="current-password" id="password-field">
                                    </div>


                                    <div class="form-group row text-center mt-4 mb-4">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block  waves-effect waves-light" type="submit" style="background-color:#51be78;">تسجيل الدخول</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('dashboard/js/vendor.min.js')}}"></script>
        <script src="{{asset('dashboard/js/app.min.js')}}"></script>

    </body>
</html>
