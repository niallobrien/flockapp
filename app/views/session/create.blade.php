@extends('layouts.site.default')

@section('content')
<div id="login" class="container">
    <div class="row">

        {{-- Center bootstrap divs, set the classes so 2 * offsetClass + span class = 12 columns. --}}

        <div class="offset4 span4">

            {{{ Form::open(null, 'POST', array('class' => 'form-signin')) }}}

            <fieldset>
                <h2 class="form-signin-heading">Please sign in</h2>

                {{-- If there was a failed login, display the error --}}
                @if (Session::has('loginErrors'))
                <div class="alert alert-error">
                    <li>Invalid username or password.</li>
                </div>
                @endif

                @if (Session::has('logout'))
                <div class="alert alert-success">
                    Logged out.
                </div>
                @endif

                {{-- Check for validation errors and group them in a single alert box --}}

                {{{ $errors->any() ? '<div class="alert alert-error">' : '' }}}
                    {{{ $errors->has('first_name') ? '<li>' . $errors->first('first_name') . '</li>' : '' }}}
                    {{{ $errors->has('last_name') ? '<li>' . $errors->first('last_name') . '</li>' : '' }}}
                    {{{ $errors->has('email') ? '<li>' . $errors->first('email') . '</li>' : '' }}}
                    {{{ $errors->has('password') ? '<li>' . $errors->first('password') . '</li>' : '' }}}
                    {{{ $errors->any() ? '</div>' : '' }}}

                <div class="control-group {{ $errors->has('email') ? 'error' : '' }} ">
                    {{{ Form::text( 'email', '', array('placeholder' => 'Email', 'class' => 'input-block-level') ) }}}
                </div>
                <div class="control-group {{ $errors->has('password') ? 'error' : '' }} ">
                    {{{ Form::password( 'password', array('placeholder' => 'Password', 'class' => 'input-block-level') ) }}}
                </div>
                <p>
                    {{{ Form::submit('Log in', array('class' => 'btn btn-large btn-primary')) }}}
                    {{{ Form::close() }}}
                </p>
            </fieldset>
        </div>
    </div>
    @stop