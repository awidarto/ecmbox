@extends('layout.front')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="profile-nav alt">
            <section class="panel">
                <div class="user-heading alt clock-row terques-bg">
                    <h1>December 14</h1>
                    <p class="text-left">2014, Friday</p>
                    <p class="text-left">7:53 PM</p>
                </div>
                <ul id="clock">
                    <li id="sec"></li>
                    <li id="hour"></li>
                    <li id="min"></li>
                </ul>

                <ul class="clock-category">
                    <li>
                        <a href="#" class="active">
                            <i class="ico-clock2"></i>
                            <span>Clock</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ico-alarm2 "></i>
                            <span>Alarm</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ico-stopwatch"></i>
                            <span>Stop watch</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class=" ico-clock2 "></i>
                            <span>Timer</span>
                        </a>
                    </li>
                </ul>

            </section>

        </div>
    </div>

    <div class="col-md-4">
        <!--todolist start-->
        <section class="panel">
            <header class="panel-heading">
                To Do List <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <ul class="to-do-list" id="sortable-todo">
                    <li class="clearfix">
                        <span class="drag-marker">
                        <i></i>
                        </span>
                        <div class="todo-check pull-left">
                            <input type="checkbox" value="None" id="todo-check"/>
                            <label for="todo-check"></label>
                        </div>
                        <p class="todo-title">
                            Donec quam libero, rutrum non gravida ut
                        </p>
                        <div class="todo-actionlist pull-right clearfix">
                            <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                            <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                            <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="drag-marker">
                        <i></i>
                        </span>
                        <div class="todo-check pull-left">
                            <input type="checkbox" value="None" id="todo-check1"/>
                            <label for="todo-check1"></label>
                        </div>
                        <p class="todo-title">
                            Donec quam libero, rutrum non gravida
                        </p>
                        <div class="todo-actionlist pull-right clearfix">
                            <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                            <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                            <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="drag-marker">
                        <i></i>
                        </span>
                        <div class="todo-check pull-left">
                            <input type="checkbox" value="None" id="todo-check2"/>
                            <label for="todo-check2"></label>
                        </div>
                        <p class="todo-title">
                            Donec quam libero, rutrum non gravida ut
                        </p>
                        <div class="todo-actionlist pull-right clearfix">
                            <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                            <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                            <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="drag-marker">
                        <i></i>
                        </span>
                        <div class="todo-check pull-left">
                            <input type="checkbox" value="None" id="todo-check3"/>
                            <label for="todo-check3"></label>
                        </div>
                        <p class="todo-title">
                            Donec quam libero, rutrum non gravida ut
                        </p>
                        <div class="todo-actionlist pull-right clearfix">
                            <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                            <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                            <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="drag-marker">
                        <i></i>
                        </span>
                        <div class="todo-check pull-left">
                            <input type="checkbox" value="None" id="todo-check4" />
                            <label for="todo-check4"></label>
                        </div>
                        <p class="todo-title">
                            Donec quam libero, rutrum non gravida ut
                        </p>
                        <div class="todo-actionlist pull-right clearfix">
                            <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                            <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                            <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="drag-marker">
                        <i></i>
                        </span>
                        <div class="todo-check pull-left">
                            <input type="checkbox" value="None" id="todo-check5"/>
                            <label for="todo-check5"></label>
                        </div>
                        <p class="todo-title">
                            Donec quam libero, rutrum non gravida ut
                        </p>
                        <div class="todo-actionlist pull-right clearfix">
                            <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                            <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                            <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="drag-marker">
                        <i></i>
                        </span>
                        <div class="todo-check pull-left">
                            <input type="checkbox" value="None" id="todo-check6" />
                            <label for="todo-check6"></label>
                        </div>
                        <p class="todo-title">
                            Donec quam libero, rutrum non gravida ut
                        </p>
                        <div class="todo-actionlist pull-right clearfix">
                            <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                            <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                            <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                        </div>
                    </li>
                </ul>
                <div class="todo-action-bar">
                    <div class="row">
                        <div class="col-xs-4 btn-todo-select">
                            <button type="submit" class="btn btn-default"><i class="fa fa-check"></i> Select All</button>
                        </div>
                        <div class="col-xs-4 todo-search-wrap">
                            <input type="text" class="form-control search todo-search pull-right" placeholder=" Search">
                        </div>
                        <div class="col-xs-4 btn-add-task">
                            <button type="submit" class="btn btn-default btn-primary"><i class="fa fa-plus"></i> Add Task</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--todolist end-->
    </div>

    <div class="col-md-4">
        <!--notification start-->
        <section class="panel">
            <header class="panel-heading">
                Notification <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="alert alert-info clearfix">
                    <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                    <div class="notification-info">
                        <ul class="clearfix notification-meta">
                            <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                            <li class="pull-right notification-time">1 min ago</li>
                        </ul>
                        <p>
                            Urgent meeting for next proposal
                        </p>
                    </div>
                </div>
                <div class="alert alert-success ">
                    <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                    <div class="notification-info">
                        <ul class="clearfix notification-meta">
                            <li class="pull-left notification-sender">You have 5 message unread</li>
                            <li class="pull-right notification-time">1 min ago</li>
                        </ul>
                        <p>
                            <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                        </p>
                    </div>
                </div>
                <div class="alert alert-warning ">
                    <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                    <div class="notification-info">
                        <ul class="clearfix notification-meta">
                            <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                            <li class="pull-right notification-time">5 Days Ago</li>
                        </ul>
                        <p>
                            Next 5 July Thursday is the last day
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--notification end-->
    </div>

</div>

<div class="row">
    <div class="col-md-8">
        <div class="event-calendar clearfix">
            <div class="col-lg-7 calendar-block">
                <div class="cal1 ">
                </div>
            </div>
            <div class="col-lg-5 event-list-block">
                <div class="cal-day">
                    <span>Today</span>
                    Friday
                </div>
                <ul class="event-list">
                    <li>Lunch with jhon @ 3:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                    <li>Coffee meeting with Lisa @ 4:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                    <li>Skypee conf with patrick @ 5:45 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                    <li>Gym @ 7:00 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                    <li>Dinner with daniel @ 9:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>

                </ul>
                <input type="text" class="form-control evnt-input" placeholder="NOTES">
            </div>
        </div>
    </div>
    <div class="col-md-4">



    </div>
</div>


@stop