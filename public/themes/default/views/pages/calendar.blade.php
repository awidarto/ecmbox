@extends('layout.front')

@section('content')
    <!--calendar css-->
    <link href="{{ URL::to('bucket')}}/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />

            <section class="panel">
                    <header class="panel-heading">
                        Assignment Calendar
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <!-- page start-->
                        <div class="row">
                            <aside class="col-lg-9">
                                  <div id="calendar" class="has-toolbar"></div>
                            </aside>
                            <aside class="col-lg-3">
                                <h4 class="drg-event-title"> Assignments</h4>
                                <div id='external-events'>
                                    <div class='external-event label label-primary'>Sending Litigation Documents to PT CGI</div>
                                    <div class='external-event label label-success'>New Apple Store site visit</div>
                                    <p class="border-top drp-rmv">
                                        <input type='checkbox' id='drop-remove' />
                                        remove after drop
                                    </p>
                                </div>
                            </aside>
                        </div>
                        <!-- page end-->
                    </div>
                </section>



@stop