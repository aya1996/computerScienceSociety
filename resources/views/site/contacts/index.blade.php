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
                            <h3> تواصل معنا</h3>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">
                                        الرئيسية
                                    </a>
                                </li>
                                <li>
                                    <span> تواصل معنا</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <section>
            <div class="container">
                <div class="contact-form">
                    <form action="{{route('send-message')}}" method="post" class="contact">
                        @csrf
                        @method('POST')
                        <!-- Form-group -->
                        <div class="form-group">
                            <label for="">الاسم</label>
                            <input type="text" name="name" placeholder=" الاسم" required/>
                        </div>
                        <div class="form-group mobil">
                            <label for="">الهاتف</label>
                            <input type="number" placeholder="الهاتف" name="phone"  required/>
                        </div>
                        <div class="form-group">
                            <label for="">البريد الالكتروني</label>
                            <input type="email" name="email" placeholder="  البريدالالكتروني" required/>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">الرساله</label>
                                    <textarea name="msg" id="" cols="30" rows="5" placeholder="الرساله" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="more"> <button type="submit" class="btn"> ارسال</button></div>
                    </form>
                </div>
            </div>
        </section>


        <!-- map section -->

        <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27814.42204120186!2d47.9643142297399!3d29.376064050715662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c83ce455983%3A0xc3ebaef5af09b90e!2sKuwait%20City%2C%20Kuwait!5e0!3m2!1sen!2seg!4v1680615704236!5m2!1sen!2seg"
             style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

@endsection
