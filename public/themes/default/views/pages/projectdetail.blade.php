@extends('layout.front')

@section('content')

<div class="row">
    <div class="col-md-6">
        <!--notification start-->
        <section class="panel">
            <header class="panel-heading">
                Project Description <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
               <div class="profile-desk">
                   <h3>Apple Store @ CityWalk Project</h3>
                   <span class="text-muted">Opening of new Apple Store @ CityWalk Square</span>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
                   </p>
                   <a href="#" class="btn btn-primary">Full Description</a>
               </div>
            </div>
        </section>
        <!--notification end-->
    </div>

    <div class="col-md-6">
        <!--notification start-->
        <section class="panel">
            <header class="panel-heading">
                Personnel Involved <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <aside class="profile-nav alt">
                    <section class="panel">
                        <div class="user-heading alt gray-bg">
                            <a href="#">
                                <img alt="" src="{{URL::to('bucket') }}/images/lock_thumb.jpg">
                            </a>
                            <h1>Jim Doe</h1>
                            <p>
                                Project Manager <br />
                                <i class="fa fa-envelope-o"></i>
                            </p>
                        </div>

                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="javascript:;"> <i class="fa fa-envelope-o"></i> Jacky O. <span class="badge label-success pull-right r-activity">10</span></a></li>
                            <li><a href="javascript:;"> <i class="fa fa-envelope-o"></i> Abdullah Ben Khalif Ezab <span class="badge label-success pull-right r-activity">10</span></a></li>
                            {{--
                            <li><a href="javascript:;"> <i class="fa fa-envelope-o"></i> John Secada <span class="badge label-success pull-right r-activity">10</span></a></li>
                            <li><a href="javascript:;"> <i class="fa fa-envelope-o"></i> Tommy Page <span class="badge label-success pull-right r-activity">10</span></a></li>
                            --}}
                        </ul>

                    </section>
                </aside>
            </div>
        </section>
        <!--notification end-->
    </div>

</div>

<div class="row">
    <div class="col-md-6">
        <!--todolist start-->
        <section class="panel">
            <header class="panel-heading">
                Schedules & Milestones <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="timeline">
                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show first">
                                <a href="#" class="btn btn-primary">Today</a>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon red">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <span class="timeline-date">08:25 am</span>
                                    <h1 class="red">1 hour ago</h1>
                                    <p>Purchased new stationary items for head office </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item ">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon green">
                                        <i class="fa fa-beer"></i>
                                    </span>
                                    <span class="timeline-date">10:00 am</span>
                                    <h1 class="green">2 hours ago</h1>
                                    <p>Completed Coffee meeting with <a href="#">Stive Martin</a> regarding the Product Promotion</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon blue">
                                        <i class="fa fa-tags"></i>
                                    </span>
                                    <span class="timeline-date">11:35 am</span>
                                    <h1 class="blue">10 hours ago</h1>
                                    <p>3 new photo Uploaded on facebook fan page</p>
                                    <div class="album">
                                        <a href="#">
                                            <img alt="" src="images/sm-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="images/sm-img-2.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="images/sm-img-3.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="images/sm-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="images/sm-img-2.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon purple">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <span class="timeline-date">3:20 pm</span>
                                    <h1 class="purple">4:30</h1>
                                    <p>Outdoor visit at California State Route 85 with John Boltana & Harry Piterson regarding to setup a new show room.</p>
                                    <p>
                                        <i class=" fa fa-exclamation-sign"></i> New task added for <span><a href="#" class="purple">Denial Collins</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon light-green">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="light-green">10 June | Friday</h1>
                                    <p>Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show">
                                <a href="#" class="btn btn-default">Yesterday</a>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon yellow">
                                        <i class="fa fa-comments-o"></i>
                                    </span>
                                    <span class="timeline-date">3:20 pm</span>
                                    <h1 class="yellow">4:30</h1>
                                    <p>Montly Regular Medical check up at Greenland Hospital by the doctor <span><a href="#" class="yellow">  Berry Moor </a></span> </p>

                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon ">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="">4:55</h1>
                                    <p>Download the new updates of SAP ERP Solution</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>

                                    <span class="timeline-icon blue">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="blue">10 June | Friday</h1>
                                    <p>Jonatha Smith added new milestone <span><a class="blue" href="#">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show">
                                <a href="#" class="btn btn-default">20 December 2013</a>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon ">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="">13 March | Sunday</h1>
                                    <p>Download the new updates of SAP ERP Solution</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>

                                    <span class="timeline-icon red">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="red">5:33</h1>
                                    <p>Jonatha Smith added new milestone <span><a class="red" href="#">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>

            </div>
        </section>
        <!--todolist end-->
    </div>
    <div class="col-md-6">
        <!--todolist start-->
        <section class="panel">
            <header class="panel-heading">
                Actual Progress <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="timeline">
                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show first">
                                <a href="#" class="btn btn-primary">Today</a>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon red">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <span class="timeline-date">08:25 am</span>
                                    <h1 class="red">1 hour ago</h1>
                                    <p>Purchased new stationary items for head office </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item ">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon green">
                                        <i class="fa fa-beer"></i>
                                    </span>
                                    <span class="timeline-date">10:00 am</span>
                                    <h1 class="green">2 hours ago</h1>
                                    <p>Completed Coffee meeting with <a href="#">Stive Martin</a> regarding the Product Promotion</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon blue">
                                        <i class="fa fa-tags"></i>
                                    </span>
                                    <span class="timeline-date">11:35 am</span>
                                    <h1 class="blue">10 hours ago</h1>
                                    <p>3 new photo Uploaded on facebook fan page</p>
                                    <div class="album">
                                        <a href="#">
                                            <img alt="" src="images/sm-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="images/sm-img-2.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="images/sm-img-3.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="images/sm-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="images/sm-img-2.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon purple">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <span class="timeline-date">3:20 pm</span>
                                    <h1 class="purple">4:30</h1>
                                    <p>Outdoor visit at California State Route 85 with John Boltana & Harry Piterson regarding to setup a new show room.</p>
                                    <p>
                                        <i class=" fa fa-exclamation-sign"></i> New task added for <span><a href="#" class="purple">Denial Collins</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon light-green">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="light-green">10 June | Friday</h1>
                                    <p>Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show">
                                <a href="#" class="btn btn-default">Yesterday</a>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon yellow">
                                        <i class="fa fa-comments-o"></i>
                                    </span>
                                    <span class="timeline-date">3:20 pm</span>
                                    <h1 class="yellow">4:30</h1>
                                    <p>Montly Regular Medical check up at Greenland Hospital by the doctor <span><a href="#" class="yellow">  Berry Moor </a></span> </p>

                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon ">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="">4:55</h1>
                                    <p>Download the new updates of SAP ERP Solution</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>

                                    <span class="timeline-icon blue">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="blue">10 June | Friday</h1>
                                    <p>Jonatha Smith added new milestone <span><a class="blue" href="#">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="text-right">
                            <div class="time-show">
                                <a href="#" class="btn btn-default">20 December 2013</a>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>

                                    <span class="timeline-icon ">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="">13 March | Sunday</h1>
                                    <p>Download the new updates of SAP ERP Solution</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>

                                    <span class="timeline-icon red">
                                        <i class="fa fa-user-md"></i>
                                    </span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="red">5:33</h1>
                                    <p>Jonatha Smith added new milestone <span><a class="red" href="#">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>

            </div>
        </section>
        <!--todolist end-->
    </div>
</div>


@stop