<?php

class UsersController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Redirect::action('UsersController@show', [Auth::user()->id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
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
        $firstName = $input['first_name'];
        $lastName = $input['last_name'];
        $email = strtolower($input['email']);
        $password = $input['password'];

        /*
        * 	TODO: Learn how to refactor validations into their own methods
        */

        // Validation rules
        $rules = [
            'first_name'	=> 'required',
            'last_name' 	=> 'required',
            'email'     	=> 'required|email|unique:users',
            'password'  	=> 'required|min:10'
        ];

        $validation = Validator::make($input, $rules);

        // If input fails redirect with errors and old input
        if ($validation->fails()) {
            return Redirect::action('UsersController@create')
                ->withErrors($validation)
                ->withInput();
        }
        else {
            // create new user
            $user = User::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'password' => Hash::make($password)
            ]);
            // Log in the new user
            Auth::loginUsingId($user->id);
            return Redirect::action('UsersController@show', [$user->id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show($id)
    {
        if (Auth::user()->id == $id)
        {
            // Get all discussions the user is a member of - Activity Stream
            $posts = Auth::user()->posts()->orderBy('id', 'desc')->get();
            return View::make('users.show')
                ->with('posts', $posts);
        }
        else
        {
            return View::make('errors.denied');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}