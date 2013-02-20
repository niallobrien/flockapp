@extends('layouts.app')

@section('content')
<div class="span8">
    <h1>Activity Stream</h1>
    <div class="well">
        @foreach ($posts as $post)
        <p>
            <strong>{{ $post->user->fullName() }}</strong> posted to the
            <a href="{{ URL::action('DiscussionsController@show', [$post->discussion->group->id, $post->discussion->id]) }}">
                {{ $post->discussion->title }} discussion</a> in the
            <a href="{{ URL::action('GroupsController@show', [$post->discussion->group->id]) }}">{{ $post->discussion->group->title }} flock</a>.
        </p>
        @endforeach
    </div>
</div>
@stop