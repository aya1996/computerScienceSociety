</div>


        <script src="{{asset('dashboard/js/vendor.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('dashboard/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/datatables/buttons.print.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('dashboard/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <script src="{{asset('dashboard/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/datatables/dataTables.select.min.js')}}"></script>

        <!-- Datatables init -->
        <script src="{{asset('dashboard/js/pages/datatables.init.js')}}"></script>


        <script src="{{asset('dashboard/libs/moment/moment.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/jquery-scrollto/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('dashboard/js/pages/jquery.chat.js')}}"></script>
        <script src="{{asset('dashboard/js/pages/jquery.todo.js')}}"></script>
        <script src="{{asset('dashboard/libs/morris-js/morris.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('dashboard/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('dashboard/js/pages/dashboard.init.js')}}"></script>
        <script src="{{asset('dashboard/libs/custombox/custombox.min.js')}}"></script>

        <script src="{{asset('dashboard/js/app.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
        @include('shared.toastr')
        @yield('js')

</body>
</html>
