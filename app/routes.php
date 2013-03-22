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

// Register routes for main site.
Route::get('tour', 'HomeController@tour');
Route::get('pricing', 'HomeController@pricing');
Route::get('blog', 'HomeController@blog');
Route::get('help', 'HomeController@help');
Route::get('/', 'HomeController@index');

Route::get('register', 'UsersController@create');
Route::post('register', 'UsersController@store');

Route::group(['before' => 'guest'], function() {
    Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create']);
    Route::post('login', 'SessionController@store');
});
Route::get('logout', 'SessionController@destroy');

// App secure routes
// Enable https on production
//Route::group(['before' => 'auth', 'https'], function()
Route::group(['before' => 'auth'], function()
{
	Route::get('flocks/{GroupsId}/discussions/{DiscussionsId}/posts/{postsId}/fork', 'DiscussionsController@getFork')
	->where('GroupsId', '\d+')
	->where('DiscussionsId', '\d+')
	->where('PostsId', '\d+');

    // user Resource
    Route::resource('users', 'UsersController');

	// flock Resource
    Route::resource('flocks', 'GroupsController');

	// discusions Resource
    Route::resource('flocks.discussions', 'DiscussionsController');

	// posts Resource
    Route::resource('flocks.discussions.posts', 'PostsController');
});


/*
| View composer to pass group list into the top nav of app for every view.
| This saves having to pass it into the view from each controller.
*/
View::composer(['layouts._navigation-app', 'layouts._sidebar-left'], function($event)
{
    $event->with('groups', Group::sortedList());
});

// Catch 404 errors and use custom page
App::missing(function($exception)
{
    return View::make('errors.missing');
});