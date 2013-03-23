@extends('layouts.app')

@section('content')
<div class="span8">
    {{ Form::open(['action' => ['DiscussionsController@fork', Group::current()->id], 'class' => 'center']) }}
    <form>
        <fieldset>
            <legend>Fork a discussion.</legend>
            <p>
                You are forking the <a href="{{ URL::action('DiscussionsController@show', [$group->id, $discussion->id]) }}">
                {{ $discussion->title }}</a> discussion from the following post:
                {{ $post->content }}
            </p>
            {{-- Check for validation errors and group them in a single alert box --}}
            {{ $errors->any() ? '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>' : '' }}
                {{ $errors->has('title') ? '<li>' . $errors->first('title') . '</li>' : '' }}
                {{ $errors->has('post') ? '<li>' . $errors->first('post') . '</li>' : '' }}
                {{ $errors->any() ? '</div>' : '' }}

            <div class="control-group {{ $errors->has('title') ? 'error' : '' }} ">
                {{ Form::text( 'title', Input::old('title', ''), ['placeholder' => 'Title'] ) }}
            </div>

            <div class="control-group {{ $errors->has('post') ? 'error' : '' }} ">
                {{ Form::textarea( 'post', Input::old('post'), ['placeholder' => 'Start a discussion'] ) }}
            </div>
            <p>
                {{ Form::hidden('parentDiscussionId', $discussion->id) }}
                {{ Form::hidden('parentPostId', $post->id) }}
                {{ Form::submit('Post', array('class' => 'btn btn-primary')) }}
            </p>
        </fieldset>
        {{ Form::close() }}
</div>
@stop