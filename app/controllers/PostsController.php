<?php

class PostsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
        $content = $input['content'];

        /*
        * 	TODO: Learn how to refactor validations into their own methods
        */

        // Validation rules
        $rules = ['content'=> 'required'];
        $validation = Validator::make($input, $rules);

        // If input fails redirect with errors and old input
        if ($validation->fails()) {
            return Redirect::back()
                ->withErrors($validation)
                ->withInput();
        }
        else {
            // Insert new post
            $post = new Post(['content' => $content, 'user_id' => Auth::user()->id]);
            Discussion::current()->posts()->save($post);
            return Redirect::action('DiscussionsController@show', [Group::current()->id, Discussion::current()->id]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show($id)
    {
        //
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
    public function destroy($groupId, $discussionId, $postId)
    {
        // If we're deleting the only post in the discussion, remove the discussion too.
        $discussion = Discussion::find($discussionId);
        if ($discussion->posts()->count() == 1) {
            $discussion->delete();
            return Redirect::action('GroupsController@show', [Group::current()->id]);
        }

        $post = Post::find($postId);
        $post->delete();
        return Redirect::action('DiscussionsController@show', [$groupId, $discussionId]);
    }

}