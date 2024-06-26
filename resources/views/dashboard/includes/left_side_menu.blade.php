<!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">

                <li class="menu-title">لوحة التحكم</li>
                @if (auth()->user()->role->name == 'admin')
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-person"></i>
                        <span> المستخدمين </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('users.index')}}">المستخدمين</a></li>
                        <li><a href="{{route('admins.index')}}">أعضاء هيئة التدريس</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> أهم الأحداث </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('events.index')}}">عرض الأحداث</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> الأقسام </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('departments.index')}}">عرض الأقسام</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> تفاصيل المعهد </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('buildings.index')}}">عرض المباني</a></li>
                        <li><a href="{{route('levels.index')}}">عرض الأدوار</a></li>
                        <li><a href="{{route('halls.index')}}">عرض المكاتب</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> الفصول الدراسية </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('semesters.index')}}">عرض الفصول الدراسية</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> المواد الدراسية </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('courses.index')}}">عرض المواد</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> السلايدر </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('sliders.index')}}">عرض السلايدر</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> من نحن </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('abouts.index')}}">عرض من نحن</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> معلومات الموقع </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('infos.index')}}">عرض معلومات الموقع</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> تواصل معنا </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('contacts.index')}}">عرض تواصل معنا</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> الأخبار </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('blogs.index')}}">عرض الأخبار</a></li>
                    </ul>
                </li>
                @endif
                @if (auth()->user()->role->name == 'teacher')
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-edit"></i>
                        <span> المحاضرات </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('schedules.index')}}">المحاضرات</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-edit"></i>
                        <span> الاخبار </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('blogs.index')}}"> عرض الاخبار</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> أهم الأحداث </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('events.index')}}">عرض الأحداث</a></li>
                    </ul>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> الساعات المكتبية </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('officeHours.index')}}">عرض الساعات المكتية </a></li>
                    </ul>
               
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-ion ion-md-list"></i>
                        <span> المواعيد  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('appointments.index')}}">عرض  المواعيد </a></li>
                    </ul>
               
                </li>
                @endif
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>