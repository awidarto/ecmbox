@extends('layout.front')

@section('content')

    <!--dynamic table-->
    <link href="{{ URL::to('bucket') }}/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="{{ URL::to('bucket') }}/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::to('bucket') }}/assets/data-tables/DT_bootstrap.css" />

    <style type="text/css">
        td.center{
            width:20px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="{{ URL::to('bucket') }}/assets/fuelux/css/tree-style.css" />

        <div class="row">
            <div class="col-sm-3">
                <div class="panel">
                    <div class="panel-heading">
                        Time Billings
                     <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                            <a class="fa fa-cog" href="javascript:;"></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="FlatTree2" class="tree">
                            <div class = "tree-folder" style="display:none;">
                                <div class="tree-folder-header">
                                    <i class="fa fa-folder"></i>
                                    <div class="tree-folder-name"></div>
                                </div>
                                <div class="tree-folder-content"></div>
                                <div class="tree-loader" style="display:none"></div>
                            </div>
                            <div class="tree-item" style="display:none;">
                                <i class="tree-dot"></i>
                                <div class="tree-item-name"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">
                <section class="panel">
                    <header class="panel-heading">
                        Personnel
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                    <thead>
                    <tr>
                        <th>Personnel Name</th>
                        <th>Client Name</th>
                        <th class="hidden-phone">Time</th>
                        <th class="hidden-phone">Duration</th>
                        <th class="hidden-phone">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>John McNamara</td>
                        <td><a href="{{ URL::to('hr/profile') }}">ACME Corp.</a></td>
                        <td class="hidden-phone">2013-12-01 12:02:05</td>
                        <td class="center hidden-phone">01:35</td>
                        <td class="center hidden-phone">$2195</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John McNamara</td>
                        <td><a href="{{ URL::to('hr/profile') }}">ACME Corp.</a></td>
                        <td class="hidden-phone">2013-12-01 12:02:05</td>
                        <td class="center hidden-phone">01:35</td>
                        <td class="center hidden-phone">$2195</td>
                    </tr>
                    <tr class="gradeX">
                        <td>Anthony Collins</td>
                        <td><a href="{{ URL::to('hr/profile') }}">Apple Inc</a></td>
                        <td class="hidden-phone">2013-12-01 12:02:05</td>
                        <td class="center hidden-phone">01:35</td>
                        <td class="center hidden-phone">$2195</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John McNamara</td>
                        <td><a href="{{ URL::to('hr/profile') }}">ACME Corp.</a></td>
                        <td class="hidden-phone">2013-12-01 12:02:05</td>
                        <td class="center hidden-phone">01:35</td>
                        <td class="center hidden-phone">$2195</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John McNamara</td>
                        <td><a href="{{ URL::to('hr/profile') }}">ACME Corp.</a></td>
                        <td class="hidden-phone">2013-12-01 12:02:05</td>
                        <td class="center hidden-phone">01:35</td>
                        <td class="center hidden-phone">$2195</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John McNamara</td>
                        <td><a href="{{ URL::to('hr/profile') }}">ACME Corp.</a></td>
                        <td class="hidden-phone">2013-12-01 12:02:05</td>
                        <td class="center hidden-phone">01:35</td>
                        <td class="center hidden-phone">$2195</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John McNamara</td>
                        <td><a href="{{ URL::to('hr/profile') }}">ACME Corp.</a></td>
                        <td class="hidden-phone">2013-12-01 12:02:05</td>
                        <td class="center hidden-phone">01:35</td>
                        <td class="center hidden-phone">$2195</td>
                    </tr>
                    </tbody>
                    </table>

                    </div>
                    </div>
                </section>
            </div>
        </div>


@stop