@extends('layout.signin')

@section('content')



{{ Form::open(array('url' => 'login','class'=>'form-signin')) }}
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            @if (Session::get('loginError'))
                <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif
            <div class="user-login-info">
                <input type="text" name="email" class="form-control" placeholder="User ID" autofocus>
                <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            {{--
            <div class="registration">
                Don't have an account yet?
                <a class="" href="registration.html">
                    Create an account
                </a>
            </div>
            --}}

        </div>
{{ Form::close() }}

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->



{{--


            <!-- if there are login errors, show them here -->
@if(Auth::check())
    <p class="navbar-text pull-right">
        Hello {{ Auth::user()->fullname }}
        <a href="{{ URL::to('logout')}}" >Logout</a>
    </p>
@endif

        <h2 class="form-signin-heading">Please sign in</h2>
            @if (Session::get('loginError'))
                <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                     <button type="button" class="close" data-dismiss="alert"></button>
            @endif
        <p>
            {{ $errors->first('email') }}
            {{ $errors->first('password') }}
        </p>

        <p>
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email', Input::old('email')) }}
        </p>
        <p>
            {{ Form:: label('password', 'Password') }}
            {{ Form::password('password') }}
        </p>

        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>


    <p>{{ Form::submit('Submit!',array('class'=>'btn btn-primary')) }}</p>

    --}}

@stop