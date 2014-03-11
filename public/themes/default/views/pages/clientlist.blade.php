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
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Contacts
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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th class="hidden-phone">Title</th>
                        <th class="hidden-phone">Company</th>
                        <th class="hidden-phone">Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>Aston</td>
                        <td><a href="{{ URL::to('client/profile') }}">Tukimin</a></td>
                        <td class="hidden-phone">Product & Property Rights Manager</td>
                        <td class="center hidden-phone">PT. Holycow ! International</td>
                        <td class="center hidden-phone">08564975353</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John</td>
                        <td><a href="{{ URL::to('client/profile') }}">McNamara</a></td>
                        <td class="hidden-phone">Head of General Litigation</td>
                        <td class="center hidden-phone">Senior Associate</td>
                        <td class="center hidden-phone">08564975353</td>
                    </tr>
                    <tr class="gradeX">
                        <td>Anthony</td>
                        <td><a href="{{ URL::to('client/profile') }}">Collins</a></td>
                        <td class="hidden-phone">Head of General Litigation</td>
                        <td class="center hidden-phone">Senior Associate</td>
                        <td class="center hidden-phone">08564975353</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John</td>
                        <td><a href="{{ URL::to('client/profile') }}">McNamara</a></td>
                        <td class="hidden-phone">Head of General Litigation</td>
                        <td class="center hidden-phone">Senior Associate</td>
                        <td class="center hidden-phone">08564975353</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John</td>
                        <td><a href="{{ URL::to('client/profile') }}">McNamara</a></td>
                        <td class="hidden-phone">Head of General Litigation</td>
                        <td class="center hidden-phone">Senior Associate</td>
                        <td class="center hidden-phone">08564975353</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John</td>
                        <td><a href="{{ URL::to('client/profile') }}">McNamara</a></td>
                        <td class="hidden-phone">Head of General Litigation</td>
                        <td class="center hidden-phone">Senior Associate</td>
                        <td class="center hidden-phone">08564975353</td>
                    </tr>
                    <tr class="gradeX">
                        <td>John</td>
                        <td><a href="{{ URL::to('client/profile') }}">McNamara</a></td>
                        <td class="hidden-phone">Head of General Litigation</td>
                        <td class="center hidden-phone">Senior Associate</td>
                        <td class="center hidden-phone">08564975353</td>
                    </tr>
                    </tbody>
                    </table>

                    </div>
                    </div>
                </section>
            </div>
        </div>


@stop