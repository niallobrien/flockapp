@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.groups._sidebar-left')
        <div class="span8">
            {{{ Form::open(action('DiscussionsController@store', [Group::current()->id]), 'POST', ['class' => 'center']) }}}
            <form>
                <fieldset>
                    <legend>Start a new discussion.</legend>
                    {{-- Check for validation errors and group them in a single alert box --}}
                    {{{ $errors->any() ? '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>' : '' }}}
                        {{{ $errors->has('title') ? '<li>' . $errors->first('title') . '</li>' : '' }}}
                        {{{ $errors->has('post') ? '<li>' . $errors->first('post') . '</li>' : '' }}}
                        {{{ $errors->any() ? '</div>' : '' }}}

                    <div class="control-group {{ $errors->has('title') ? 'error' : '' }} ">
                        {{{ Form::text( 'title', Input::old('title', ''), ['placeholder' => 'Title'] ) }}}
                    </div>

                    <div class="control-group {{ $errors->has('post') ? 'error' : '' }} ">
                        {{{ Form::textarea( 'post', Input::old('post'), ['placeholder' => 'Start a discussion'] ) }}}
                    </div>
                    <p>
                        {{{ Form::submit('Post', array('class' => 'btn btn-primary')) }}}
                    </p>
                </fieldset>
                {{{ Form::close() }}}
        </div>
        @include('layouts.groups._sidebar-right')
    </div>
    @stop