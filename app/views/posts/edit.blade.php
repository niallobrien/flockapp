@extends('layouts.app')

@section('content')
<div class="lg lg-col-8">
    {{ Form::open(['action' => ['PostsController@update', Group::current()->id, Discussion::current()->id, $post->id], 'method' => 'put', 'class' => 'center']) }}
    <form>
        <fieldset>
            <legend>Edit a post.</legend>
            {{-- Check for validation errors and group them in a single alert box --}}
            {{ $errors->any() ? '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>' : '' }}
                {{ $errors->has('content') ? '<li>' . $errors->first('content') . '</li>' : '' }}
                {{ $errors->any() ? '</div>' : '' }}

            <div class="control-group {{ $errors->has('content') ? 'error' : '' }} ">
                {{ Form::textarea( 'content', $post->content, ['placeholder' => 'Content']) }}
            </div>
            <p>
                {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
            </p>
        </fieldset>
        {{ Form::close() }}
</div>
@stop