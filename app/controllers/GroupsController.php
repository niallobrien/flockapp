<?php

class GroupsController extends BaseController {

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
        Return View::make('groups.create');
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

        // Get info from $input
        $title = $input['title'];
        $description = $input['description'];
        $category = $input['category'];

        /*
        * 	TODO: Learn how to refactor validations into their own methods
        */

        // Validation rules
        $rules = ['title'=> 'required'];
        $validation = Validator::make($input, $rules);

        // If input fails redirect with errors and old input
        if ($validation->fails()) {
            return Redirect::back()
                ->withErrors($validation)
                ->withInput();
        }
        else {
            // Insert new group and assign to user
            $group = new Group(['title' => $title, 'description' => $description, 'category' => $category]);
            $group = Auth::user()->groups()->save($group);
            return Redirect::action('GroupsController@show', [$group->id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show($id)
    {
        if (Auth::user()->hasAccessToGroup($id)) {
            $group = Group::find($id);
            $discussions = $group->discussions()->get();

            // Swap out the sidebar defined in our app master layout (also see start/global.php)
            View::share('_sidebarLeft', 'groups._sidebar-left');

            return View::make('groups.show')
                ->with('group', $group)
                ->with('discussions', $discussions);
        } else {
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
        $user = Auth::user();
        if ($user->hasAccessToGroup($id))
        {
            $group = Group::find($id);
            View::share('_sidebarLeft', 'groups._sidebar-left');
            return View::make('groups.edit')
                ->with('group', $group);
        }
        else
        {
            return View::make('errors.denied');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update($id)
    {
        // Get POST data
        $input = Input::get();

        // Get info from $input
        $group = $input['group'];
        $description = $input['description'];
        $category = $input['category'];

        // Validation rules
        $rules = ['group'=> 'required'];
        $validation = Validator::make($input, $rules);

        // If input fails redirect with errors and old input
        if ($validation->fails()) {
            return Redirect::action('GroupsController@edit', [$id])
                ->withErrors($validation)
                ->withInput();
        }
        else {
            // Update group
            $group = Group::find($id);
            $group->group = $group;
            $group->description = $description;
            $group->category = $category;
            $group->save();
            return Redirect::action('GroupsController@show', [$group->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();
        return Redirect::action('UsersController@show', [Auth::user()->id]);
    }
}