<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller('products', 'ProductsController');
Route::controller('documents', 'DocumentsController');
Route::controller('home', 'HomeController');
Route::controller('user', 'UserController');
Route::controller('project', 'ProjectController');
Route::controller('hr', 'HrController');


Route::controller('upload', 'UploadController');
Route::controller('ajax', 'AjaxController');

/*
Route::get('/', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

	return View::make('home')->with('crumb',$crumb);
});
*/

Route::get('/','DocumentsController@getIndex');

Route::get('barcode/dl/{txt}',function($txt){
    $barcode = new Barcode();
    $barcode->make($txt,'code128',60, 'horizontal' ,true);
    return $barcode->render('jpg',$txt,true);
});

Route::get('barcode/{txt}',function($txt){
    $barcode = new Barcode();
    $barcode->make($txt,'code128',60, 'horizontal' ,true);
    return $barcode->render('jpg',$txt);
});


Route::get('calendar', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );
    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Calendar', '/calendar');
    Breadcrumb::addBreadcrumb('Assignments');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();


    return View::make('pages.calendar')->with('crumb',$crumb);
});

Route::get('timesheet', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );
    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Timesheet Recorder');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();


    return View::make('pages.timesheet')->with('crumb',$crumb);
});

/*
Route::get('projects/detail', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('projects', '/projects');
    Breadcrumb::addBreadcrumb('View');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.projectdetail')->with('crumb',$crumb);
});

Route::get('projects', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Projects', '/projects');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.projects')->with('crumb',$crumb);
});

Route::get('documents/detail', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Document Library', '/document');
    Breadcrumb::addBreadcrumb('View');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.docdetail')->with('crumb',$crumb);
});

Route::get('documents', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Document Library', '/document');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.document')->with('crumb',$crumb);
});
*/

Route::get('finance/timebilling', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Document Library', '/document');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.timebilling')->with('crumb',$crumb);
});

Route::get('finance/billing', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Document Library', '/document');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.billing')->with('crumb',$crumb);
});

Route::get('locator', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Team Locator', '/locator');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.locator')->with('crumb',$crumb);
});

/*
Route::get('hr/profile', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Human Resources', '/hr');
    Breadcrumb::addBreadcrumb('Employee Profile');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.hrprofile')->with('crumb',$crumb);
});

Route::get('hr', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Human Resources', '/hr');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();


    return View::make('pages.hrlist')->with('crumb',$crumb);
});

*/

Route::get('client/profile', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Client ', '/hr');
    Breadcrumb::addBreadcrumb('Client Profile');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.clientprofile')->with('crumb',$crumb);
});

Route::get('client/company', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Client Relation', '/hr');
    Breadcrumb::addBreadcrumb('Company');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.clientlist')->with('crumb',$crumb);
});

Route::get('client', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    Breadcrumb::addBreadcrumb('Home', '/');
    Breadcrumb::addBreadcrumb('Client Relation', '/hr');
    Breadcrumb::addBreadcrumb('Contacts');
    Breadcrumb::setSeperator('');

    $crumb = Breadcrumb::generate();

    return View::make('pages.clientlist')->with('crumb',$crumb);
});

Route::get('message/compose', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    return View::make('pages.compose');
});


Route::get('message', function()
{
    Theme::setCurrentTheme( Config::get('ecm.active_theme') );

    return View::make('pages.inbox');
});



Route::get('inc/{entity}',function($entity){

    $seq = new Sequence();
    print_r($seq->getNewId($entity));

});

Route::get('last/{entity}',function($entity){

    $seq = new Sequence();
    print( $seq->getLastId($entity) );

});

Route::get('init/{entity}/{initial}',function($entity,$initial){

    $seq = new Sequence();
    print_r( $seq->setInitialValue($entity,$initial));

});

Route::get('hashme/{mypass}',function($mypass){

    print Hash::make($mypass);
});

/* Login Logout */
Route::get('login',function(){
    return View::make('login');
});

Route::post('login',function(){

    // validate the info, create rules for the inputs
    $rules = array(
        'email'    => 'required|email',
        'pass' => 'required|alphaNum|min:3'
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
        return Redirect::to('login')->withErrors($validator);
    } else {

        $userfield = Config::get('kickstart.user_field');
        $passwordfield = Config::get('kickstart.password_field');

        // find the user
        $user = User::where($userfield, '=', Input::get('email'))->first();

        //print_r($user->toArray());

        //exit();

        // check if user exists
        if ($user) {
            // check if password is correct
            if (Hash::check(Input::get('pass'), $user->{$passwordfield} )) {

                //print $user->{$passwordfield};
                //exit();
                // login the user
                Auth::login($user);

                return Redirect::to('/');

            } else {
                // validation not successful
                // send back to form with errors
                // send back to form with old input, but not the password
                return Redirect::to('login')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            }

        } else {
            // user does not exist in database
            // return them to login with message
            Session::flash('loginError', 'This user does not exist.');
            return Redirect::to('/');
        }

    }

});

Route::get('logout',function(){
    Auth::logout();
    return Redirect::to('/');
});


Route::get('pullcsv/{filename?}/{delimiter?}',function($filename='', $delimiter=','){

    if(!file_exists(public_path().'/'.$filename) || !is_readable(public_path().'/'.$filename)){
        return FALSE;
    }

    print public_path().'/'.$filename;

    $header = NULL;
    $data = array();
    $idx = 0;

    if (($handle = fopen(public_path().'/'.$filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            print_r($row);

            if($idx == 0){
                $header = $row;
            }else{
                //$data[] = array_combine($header, $row);
            }

            $idx++;
        }
        fclose($handle);
    }

    print_r($data);

});

