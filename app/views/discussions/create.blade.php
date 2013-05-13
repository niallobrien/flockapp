@extends('layouts.app')

@section('content')
<div class="col col-lg-8 well">
    {{ Form::open(['action' => ['DiscussionsController@store', Group::current()->id], 'class' => 'center']) }}
    <fieldset>
        <legend>Start a new discussion.</legend>
        {{-- Check for validation errors and group them in a single alert box --}}
        {{ $errors->any() ? '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>' : '' }}
        {{ $errors->has('title') ? '<li>' . $errors->first('title') . '</li>' : '' }}
        {{ $errors->has('post') ? '<li>' . $errors->first('post') . '</li>' : '' }}
        {{ $errors->any() ? '</div>' : '' }}

        <p>
            {{ Form::text( 'title', Input::old('title', ''), ['placeholder' => 'Title',
            'class' => $errors->has('title') ? 'form-alert-danger' : '' ] ) }}
        </p>

        <p>
            {{ Form::textarea( 'post', Input::old('post'), ['placeholder' => 'Start a discussion',
            'class' => $errors->has('post') ? 'form-alert-danger' : '' ] ) }}
        </p>
        <p>
            <a href="{{ URL::previous() }}" class="btn btn-large pull-left">Cancel</a>
        {{ Form::submit('Post', array('class' => 'btn btn-large btn-success pull-right')) }}
    </p>
</fieldset>
{{ Form::close() }}
</div>
@stop