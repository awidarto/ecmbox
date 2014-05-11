@extends('layout.front')


@section('content')

<h3>{{$title}}</h3>

{{Former::open_for_files($submit,'POST',array('class'=>'custom addAttendeeForm'))}}

{{ Former::hidden('id')->value($formdata['_id']) }}
<div class="row">
    <div class="col-md-6">

        {{ Former::select('salutation')->options(Config::get('kickstart.salutation'))->label('Salutation')->class('col-md-6') }}
        {{ Former::text('firstname','First Name') }}
        {{ Former::text('lastname','Last Name') }}
        {{ Former::text('mobile','Mobile') }}

        {{ Former::text('address_1','Address') }}
        {{ Former::text('address_2','Address 2') }}
        {{ Former::text('city','City') }}
        <div class="us" style="display:none;">
            {{ Former::select('state')->class('us')->options(Config::get('country.us_states'))->label('State')->style('display:none;')->id('us_states') }}
        </div>
        <div class="au" style="display:none;">
            {{ Former::select('state')->class('au')->options(Config::get('country.aus_states'))->label('State')->style('display:none;')->id('au_states') }}
        </div>
        <div class="outside">
        </div>

        {{ Former::select('countryOfOrigin')->id('country')->options(Config::get('country.countries'))->label('Country of Origin') }}
    </div>
    <div class="col-md-6">
        {{ Former::text('email','Email') }}

        {{ Former::password('pass','Password')->help('Leave blank for no changes') }}
        {{ Former::password('repass','Repeat Password') }}

        {{ Former::select('role')->options(Config::get('kickstart.admin_roles'))->label('Role')}}
    </div>
</div>

<div class="row right">
    <div class="col-md-12">
        {{ Form::submit('Save',array('class'=>'btn primary'))}}&nbsp;&nbsp;
        {{ HTML::link($back,'Cancel',array('class'=>'btn'))}}
    </div>
</div>
{{Former::close()}}

{{ HTML::script('js/wysihtml5-0.3.0.min.js') }}
{{ HTML::script('js/parser_rules/advanced.js') }}

<script type="text/javascript">


$(document).ready(function() {

    $('#country').on('change',function(){
        var country = $('#country').val();

        if(country == 'Australia'){
            $('.au').show();
            $('.us').hide();
            $('.outside').hide();
        }else if(country == 'United States of America'){
            $('.au').hide();
            $('.us').show();
            $('.outside').hide();
        }else{
            $('.au').hide();
            $('.us').hide();
            $('.outside').show();
        }


    });

    $('#field_role').change(function(){
        //alert($('#field_role').val());
        // load default permission here
    });

    /*
    var editor = new wysihtml5.Editor('ecofriendly', { // id of textarea element
      toolbar:      'wysihtml5-toolbar', // id of toolbar element
      parserRules:  wysihtml5ParserRules // defined in parser rules set
    });
    */

    $('#name').keyup(function(){
        var title = $('#name').val();
        var slug = string_to_slug(title);
        $('#permalink').val(slug);
    });

});

</script>

@stop