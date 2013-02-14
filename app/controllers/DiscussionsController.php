<?php

class DiscussionsController extends BaseController {

    /**
     * Instantiate a new DiscussionsController instance.
     */
    public function __construct()
    {
        $this->beforeFilter('hasAccessToDiscussion');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('discussions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('discussions.create')
            ->with('group', Group::current());
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
        $postContent = $input['post'];

        /*
        * 	TODO: Learn how to refactor validations into their own methods
        */

        // Validation rules
        $rules = ['title'=> 'required', 'post' => 'required'];
        $validation = Validator::make($input, $rules);

        // If input fails redirect with errors and old input
        if ($validation->fails()) {
            return Redirect::back()
                ->withErrors($validation)
                ->withInput();
        }
        else {
            // Insert new discussion
            $discussion  = new Discussion(['title' => $title]);
            $group = Group::current();
            $discussion = $group->discussions()->save($discussion);

            // Insert first post to discussion
            $post = new Post(['content' => $postContent, 'user_id' => Auth::user()->id]);
            $post = $discussion->posts()->save($post);

            return Redirect::action('DiscussionsController@show', [Group::current()->id, $discussion->id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show($groupId, $discussionId)
    {
        if ( Auth::user()->hasAccessToDiscussion($discussionId) ) {
            $discussion = Discussion::find($discussionId);
            return View::make('discussions.show')
                ->with('discussion', $discussion);
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
    public function destroy($groupId, $discussionId)
    {
        $discussion = Discussion::find($discussionId);
        $discussion->delete();
        return Redirect::action('GroupsController@show', [Group::current()->id]);
    }
}