@extends('layouts.site.default')

@section('content')
<div id="register" class="container">
    <div class="row">

        {{-- Center bootstrap divs, set the classes so 2 * offsetClass + span class = 12 columns. --}}

        <div class="col-offset-4 col-span-4">

            {{ Form::open(['class' => 'form-horizontal']) }}
            <fieldset>
                <legend>Sign up in seconds.</legend>

                {{-- Check for validation errors and group them in a single alert box --}}
                {{ $errors->any() ? '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>' : '' }}
                {{ $errors->has('first_name') ? '<li>' . $errors->first('first_name') . '</li>' : '' }}
                {{ $errors->has('last_name') ? '<li>' . $errors->first('last_name') . '</li>' : '' }}
                {{ $errors->has('email') ? '<li>' . $errors->first('email') . '</li>' : '' }}
                {{ $errors->has('password') ? '<li>' . $errors->first('password') . '</li>' : '' }}
                {{ $errors->any() ? '</div>' : '' }}

                @if ( $errors->all() )
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <li>For security, please re-enter your password.</li>
                </div>
                @endif

                <div class="control-group {{ $errors->has('first_name') ? 'error' : '' }} ">
                    {{ Form::text( 'first_name', Input::old('first_name', ''), array('placeholder' => 'Your first name') ) }}
                </div>

                    <div class="control-group {{ $errors->has('last_name') ? 'error' : '' }} ">
                        {{ Form::text( 'last_name', Input::old('last_name'), array('placeholder' => 'Your last Name') ) }}
                    </div>

                    <div class="control-group {{ $errors->has('email') ? 'error' : '' }} ">
                        {{ Form::text( 'email', Input::old('email'), array('placeholder' => 'Email') ) }}
                    </div>

                    <div class="control-group
                    {{ $errors->all() ? 'info' : '' }} ">
                    {{ Form::input('password', 'password', '', array('placeholder' => 'Password') ) }}
                </div>
                <p>
                    {{ Form::submit('Sign up!', array('class' => 'btn btn-primary')) }}
                </p>

            </fieldset>
        </form>
    </div>
</div>
@stop