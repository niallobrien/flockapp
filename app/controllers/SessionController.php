<?php

class SessionController extends BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('session.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        // Get POST data
        $input = Input::get();

        // Get $email and $password from $input
        $email = String::lower($input['email']);
        $password = $input['password'];

        // Validation rules
        $rules = array(
            'email'     => 'required|email',
            'password'  => 'required'
        );

        $validation = Validator::make($input, $rules);

        // If input fails
        if ($validation->fails()) {
            return Redirect::action('SessionController@create')->withErrors($validation);
        }

        // Now we try to authenticate the user
        if (Auth::attempt(['email' => $email, 'password'  => $password]))
        {
            // We are now logged in
            return Redirect::action('UsersController@show', [Auth::user()->id]);
        }
        else
        {
            // Auth failure
            return Redirect::back()->with('loginErrors', true);
        }

    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
        return Redirect::action('SessionController@create');
	}

}