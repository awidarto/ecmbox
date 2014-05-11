@extends('layout.front')

@section('content')

{{ HTML::style('css/leaflet.css')}}
{{ HTML::script('js/leaflet.js')}}

<script>
    $(document).ready(function(){
        var map = L.map('map').setView([-6.2154119,106.8325221], 13);

        // create the tile layer with correct attribution
        var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';

        L.tileLayer(osmUrl, {
            attribution: osmAttrib,
            maxZoom: 18
        }).addTo(map);
    });

</script>


    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Google Map with Tab Location
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-cog"></a>
                 </span>
                </header>
                <div class="panel-body">
                    <div id="map" style="width:100%;height:400px;">

                    </div>
                </div>
            </section>
        </div>
    </div>


@stop