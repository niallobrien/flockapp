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

    public function index()
    {
        if (Auth::check())
        {
            return Redirect::action('UsersController@show', [Auth::user()->id]);
        }
        else
        {
            return View::make('site.index');
        }
    }

    public function tour()
    {
        return View::make('site.tour');
    }

    public function pricing()
    {
        return View::make('site.pricing');
    }

    public function blog()
    {
        return View::make('site.blog');
    }

    public function help()
    {
        return View::make('site.help');
    }

}