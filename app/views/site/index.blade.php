@extends('layouts.site.default')

@section('content')
<div class="container">
    {{-- Main hero unit for a primary marketing message or call to action --}}
    <div class="hero-unit">
        <h1>Simple collaboration.</h1>
        <p><h3>Flock is a super simple collaboration tool with a simple twist.</h3></p>
        <p>Flock enables collaborative discussions to have meaningful conclusions, where decisions can be made. These decisions can generate actionable tasks & events. Collaborators can even spin-out a discussion and maintain collaborative discussion, even if things go off-track.
        </p>
        <p>
            <a href="{{ URL::action('UsersController@create') }}" class="btn btn-primary btn-large">Try now! &raquo;</a>
        </p>
        <p>
            Already have an account?
        <a href="{{ URL::action('SessionController@create') }}">Sign in</a>
        </p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
    </div>
@stop