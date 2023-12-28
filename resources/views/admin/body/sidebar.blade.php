@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    $usertype = auth()->user()->usertype;

@endphp
{{-- @dd($prefix) --}}
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ url('/') }}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-end justify-content-center">
                        <img src="{{ asset('images/logo.svg') }}" alt="" width="80px">
                        {{-- <h4>{{Auth::user()->usertype}}</h4> --}}
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            @if ($usertype == 'admin')
                <li class= "sr-only {{ $route == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="pie-chart"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sr-only treeview {{ $prefix == '/users' ? 'active' : '' }}">
                    <a href="#">
                        <i data-feather="message-circle"></i>
                        <span>Manage User</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
                        <li><a href="{{ route('user.add') }}"><i class="ti-more"></i>Add User</a></li>
                    </ul>
                </li>

                <li class="treeview  {{ $prefix == '/profile' ? 'active' : '' }}">
                    <a href=" #">
                        <i data-feather="mail"></i> <span>Manage Profile</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
                        <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change password</a></li>
                    </ul>
                </li>

                <li class="treeview  {{ $prefix == '/setups' ? 'active' : '' }}">
                    <a href=" #">
                        <i data-feather="mail"></i> <span>Setup Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        {{-- <li><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Student Class</a>
                    </li>
                    <li><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Student Year</a>
                    </li>
                    <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Student Group</a>
                    </li>
                    <li><a href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Student Shift</a>
                    </li>
                    <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a>
                    </li>
                    <li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category
                            Amount</a>
                    </li>
                    <li><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exam Type</a></li>
                    <li><a href="{{ route('school.subject.view') }}"><i class="ti-more"></i>School Subject</a>
                    </li>
                    <li><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Assign Subject</a>
                    </li> --}}
                        <li><a href="{{ route('office.view') }}"><i class="ti-more"></i>Office</a></li>
                        <li><a href="{{ route('department.view') }}"><i class="ti-more"></i>Department</a></li>
                        <li><a href="{{ route('designation.view') }}"><i class="ti-more"></i>Designation</a></li>

                    </ul>
                </li>

                <li class="treeview  {{ $prefix == '/employees' ? 'active' : '' }}">
                    <a href=" #">
                        <i data-feather="mail"></i> <span>Employee Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ $route == 'employee.registration.view' ? 'active' : '' }}"><a
                                href="{{ route('employee.registration.view') }}"><i class="ti-more"></i>Employee
                                Registration</a></li>
                        {{-- <li class="{{ $route == 'employee.salary.view' ? 'active' : '' }}"><a href="{{ route('employee.salary.view') }}"><i class="ti-more"></i>Employee  Salary</a></li>
                    <li class="{{ $route == 'employee.leave.view' ? 'active' : '' }}"><a href="{{ route('employee.leave.view') }}"><i class="ti-more"></i>Employee  leave</a></li>
                    <li class="{{ $route == 'employee.attendance.view' ? 'active' : '' }}"><a href="{{ route('employee.attendance.view') }}"><i class="ti-more"></i>Employee  Attendance</a></li>
                    <li class="{{ $route == 'monthly.salary.view' ? 'active' : '' }}"><a href="{{ route('monthly.salary.view') }}"><i class="ti-more"></i>Employee  Monthly Salary</a></li> --}}
                        <li class="{{ $route == 'monthly.salary.manage' ? 'active' : '' }}"><a
                                href="{{ route('monthly.salary.manage') }}"><i class="ti-more"></i>Employee Monthly
                                Salary</a></li>


                    </ul>
                </li>


                <li class="header nav-small-cap">News</li>

                <li class="d-none treeview {{ $prefix == '/news' ? 'active' : '' }}">
                    <a href="#">
                        <i data-feather="grid"></i>
                        <span>News Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ $route == 'news.view' ? 'active' : '' }}">
                            <a href="{{ route('news.view') }}"><i class="ti-more"></i>News Room</a>
                        </li>
                        {{-- <li><a href="{{ route('marksheet.generate.view')}}"><i class="ti-more"></i>MarkSheet Generate</a></li>
                    <li><a href="{{ route('student.result.view')}}"><i class="ti-more"></i>Student Result</a></li> --}}
                    </ul>
                </li>
                <li class="d-none treeview {{ $prefix == '/gallery' ? 'active' : '' }}">
                    <a href="#">
                        <i data-feather="grid"></i>
                        <span>Gallery Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ $route == 'gallery.view' ? 'active' : '' }}">
                            <a href="{{ route('gallery.view') }}"><i class="ti-more"></i>Gallery</a>
                        </li>
                        {{-- <li><a href="{{ route('marksheet.generate.view')}}"><i class="ti-more"></i>MarkSheet Generate</a></li>
                    <li><a href="{{ route('student.result.view')}}"><i class="ti-more"></i>Student Result</a></li> --}}
                    </ul>
                </li>
                <li class="header nav-small-cap">Notice</li>
                <li class="treeview {{ $prefix == '/notice' ? 'active' : '' }}">
                    <a href="#">
                        <i data-feather="grid"></i>
                        <span>Notice Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ $route == 'notice.index' ? 'active' : '' }}">
                            <a href="{{ route('notice.index') }}"><i class="ti-more"></i>Notice</a>
                        </li>
                        {{-- <li><a href="{{ route('marksheet.generate.view')}}"><i class="ti-more"></i>MarkSheet Generate</a></li>
                    <li><a href="{{ route('student.result.view')}}"><i class="ti-more"></i>Student Result</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}">
                        <i data-feather="lock"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            @elseif ($usertype == 'employee')
                <li class="treeview  {{ $prefix == '/profile' ? 'active' : '' }}">
                    <a href=" #">
                        <i data-feather="mail"></i> <span>Manage Profile</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
                        <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change password</a></li>
                    </ul>
                </li>
                <li class="{{ $route == 'monthly.salary.manage' ? 'active' : '' }}"><a
                        href="{{ route('monthly.salary.manage') }}"><i class="ti-more"></i> Monthly
                        Salary</a></li>
                        <li class="{{ $route == 'notice.index' ? 'active' : '' }}">
                            <a href="{{ route('notice.index') }}"><i class="ti-more"></i>Notice</a>
                        </li>
                <li>
                    <a href="{{ route('admin.logout') }}">
                        <i data-feather="lock"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            @endif

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title=""
            data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
