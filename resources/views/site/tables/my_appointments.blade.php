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
                            <h3> مواعيدي  </h3>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">
                                        الرئيسية
                                    </a>
                                </li>
                                <li>
                                    <span> مواعيدي  </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->


        <section class="about-h about-page body-inner">
            <div class="container">
                <div class="row">
                    <div class="tabs-content-profile table-h">
                        <table>
                            <thead>
                            <th class="text-center">رقم</th>
                                        <th class="text-center">المبني</th>
                                        <th class="text-center">الدور</th>
                                        <th class="text-center">القاعة</th>
                                        <th class="text-center">اليوم</th>
                                        <th class="text-center">الساعة</th>
                                        <th class="text-center">الطالب</th>
                                        <th class="text-center">قبول الموعد</th>
                                        <th class="text-center">التحكم</th>
                            </thead>
                            <tbody>
                                @if($student_appointments->count() > 0)
                                    @foreach ($student_appointments as $key => $appointment)
                                        <tr>
                                        <td class="text-center">{{$key + 1}}</td>
                                                <td class="text-center">{{$appointment->building->name}} </td>
                                                <td class="text-center">{{$appointment->level->name}} </td>
                                                <td class="text-center">{{$appointment->hall->name}} </td>
                                                <td class="text-center">{{$appointment->officeHour->day}} </td>
                                                <td class="text-center">{{$appointment->officeHour->time_from}} </td>
                                                <td class="text-center">{{$appointment->officeHour->time_to}} </td>
                                                <td class="text-center">{{$appointment->user->name}} </td>
                                                @if($appointment->accepted == 0)
                                                <td class="text-center">لم يتم قبول الموعد</td>
                                                
                                                @else
                                                <td class="text-center"> تم قبول الموعد</td>
                                                @endif
                                            <td>
                                                <a href="{{route('delete-appointment',$appointment->id)}}"><button type="button" class="btn"> حذف</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
@endsection

