    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{URL::to('/')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('calendar')}}">
                        <i class="fa fa-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                {{--

                <li>
                    <a href="{{URL::to('timesheet')}}">
                        <i class="fa fa-calendar"></i>
                        <span>Timesheet Recorder</span>
                    </a>
                </li>
                --}}
                <li>
                    <a href="{{URL::to('documents')}}">
                        <i class="fa fa-file-text"></i>
                        <span>Document Library</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('locator')}}">
                        <i class="fa fa-envelope"></i>
                        <span>Team Locator</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('message')}}">
                        <i class="fa fa-envelope"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('project')}}">
                        <i class="fa fa-file-text"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('hr')}}">
                        <i class="fa fa-users"></i>
                        <span>Human Resources</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-star"></i>
                        <span>Client & Investor Relation</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('client')}}"><i class="fa fa-user"></i>Contacts</a></li>
                        <li><a href="{{ URL::to('client/company')}}"><i class="fa fa-users"></i>Company</a></li>
                        <li><a href="{{ URL::to('correspondence')}}"><i class="fa fa-user"></i>Correspondes</a></li>
                        <li><a href="{{ URL::to('press')}}"><i class="fa fa-user"></i>Press Releases</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-money"></i>
                        <span>Billing & Invoices</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{URL::to('finance/invoice')}}">
                                <i class="fa fa-money"></i>
                                <span>Receivables</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{URL::to('finance/billing')}}">
                                <i class="fa fa-money"></i>
                                <span>Payables</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-gears"></i>
                        <span>System</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ URL::to('user')}}"><i class="fa fa-users"></i>Users</a></li>
                        <li><a href="{{ URL::to('option')}}"><i class="fa fa-wrench"></i>Options</a></li>

                    </ul>
                </li>

            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
