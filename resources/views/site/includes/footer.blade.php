</main>

<!-- Start Footer -->
<footer>
    <!-- Start Footer-top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Col -->
                <div class="col-md-12">

                    <div class="logo-f wow animate__animated animate__slideInUp">
                        <a href="{{route('home')}}">
                            <img src="{{asset('site/images/logo.png')}}" alt="#" />
                        </a>
                    </div>
                    <br>

                    <div class="menu-f">
                        <ul>
                            <li class=" wow animate__animated animate__slideInUp">
                                <a href="{{route('home')}}">
                                    الرئيسية
                                </a>
                            </li>
                            <li class=" wow animate__animated animate__slideInUp">
                                <a href="{{route('about')}}">
                                    من نحن
                                </a>
                            </li>
                            <li class=" wow animate__animated animate__slideInUp">
                                <a href="{{route('all-blogs')}}">
                                    كل الأخبار
                                </a>
                            </li>
                            <li class=" wow animate__animated animate__slideInUp">
                                <a href="#">
                                    الكليات
                                </a>
                            </li>
                            <li class=" wow animate__animated animate__slideInUp">
                                <a href="{{route('contact')}}">
                                    تواصل معنا
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="info-f">
                        <ul>
                            @php
                                $info = \App\Models\Info::first();
                            @endphp
                            <li class=" wow animate__animated animate__slideInUp">
                                <a href="mailto:{{$info->email ?? ''}}">
                                    <i class="fa fa-envelope"></i>
                                    <span><u>{{$info->email ?? ''}}</u></span>
                                </a>
                            </li>
                            <li class=" wow animate__animated animate__slideInUp">
                                <a href="tel:{{$info->phone ?? ''}}">
                                    <i class="fa fa-phone"></i>
                                    <span><u>{{$info->phone ?? ''}}</u></span>
                                </a>
                            </li>
                            <li class=" wow animate__animated animate__slideInUp">
                                <a href="#">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>{{$info->address ?? ''}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="social-f">
                        <a href="{{$info->facebook ?? ''}}" target="_blank" class=" wow animate__animated animate__slideInUp">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{$info->youtube ?? ''}}" target="_blank" class=" wow animate__animated animate__slideInUp">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="{{$info->twitter ?? ''}}" target="_blank" class=" wow animate__animated animate__slideInUp">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <!-- /Col -->
            </div>
        </div>
    </div>
    <!-- End Footer-top -->

    <!-- Start Footer-bottom -->
    <div class="footer-botto">
        <div class="container">
            <div class="row">
                <!-- Col -->
                <div class="col-md-6 col-sm-12">
                    <div class="copy-right">
                        <p>
                            كل الحقوق محفوظة لدى موقع Computer Science Society &copy;<script>document.write(new Date().getFullYear());</script>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Footer-bottom -->
</footer>
<!-- End Footer -->

<script src="{{asset('site/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/wow.min.js')}}"></script>
<script src="{{asset('site/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('site/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('site/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('site/js/intlTelInput-jquery.min.js')}}"></script>
<script src="{{asset('site/js/intlTelInput.js')}}"></script>
<script src="{{asset('site/js/odometer.min.js')}}"></script>
<script src="{{asset('site/js/viewport.jquery.js')}}"></script>
<script src="{{asset('site/js/slick.min.js')}}"></script>
<script src="{{asset('site/js/java.js')}}"></script>
@include('shared.toastr')
@yield('js')
<script>
    var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
</script>
</body>

</html>
