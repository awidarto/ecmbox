<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function getDashboard()
    {
        date_default_timezone_set('Asia/Jakarta');

        Theme::setCurrentTheme( Config::get('ecm.active_theme') );

        Breadcrumb::addBreadcrumb('Home', '/');
        Breadcrumb::setSeperator('');

        $bc = Breadcrumb::generate();

        $this->beforeFilter('auth', array('on'=>'get', 'only'=>array('getIndex','getAdd','getEdit','getDashboard') ));

        Logger::access();

        return View::make('home')->with('bc',$bc);

    }

}