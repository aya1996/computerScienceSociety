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
                            <h3> جدولي  </h3>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">
                                        الرئيسية
                                    </a>
                                </li>
                                <li>
                                    <span> جدولي  </span>
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
                                <th>اليوم</th>
                                <th>الكلية</th>
                                <th>المقرر</th>
                                <th>القاعة</th>
                                <th>الفصل الدراسي</th>
                                <th>المحاضر</th>
                                <th>من</th>
                                <th>إلي</th>
                                <th>التحكم</th>
                            </thead>
                            <tbody>
                                @if($schedules->count() > 0)
                                    @foreach ($schedules as $item)
                                        <tr>
                                            <td>{{$item->day}}</td>
                                            <td>{{$item->college->name ?? ''}}</td>
                                            <td>{{$item->course->name ?? ''}}</td>
                                            <td>{{$item->hall->name ?? ''}}</td>
                                            <td>{{$item->semester->name ?? ''}}</td>
                                            <td>{{$item->teacher->name ?? ''}}</td>
                                            <td>{{$item->time_from}}</td>
                                            <td>{{$item->time_to}}</td>
                                            <td>
                                                <a href="{{route('delete-schedule',$item->id)}}"><button type="button" class="btn"> حذف</button></a>
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

