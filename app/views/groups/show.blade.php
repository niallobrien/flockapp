@extends('layouts.app')

@section('content')
<div class="span8">
    <h2>{{ Group::current()->title }}</h2>
    @if($discussions->isEmpty())
    <p>
        This group has no discussions. Why not
        <a href="{{ URL::action('DiscussionsController@create', [$group->id]) }}">Create one</a>?
    </p>
    @else
    Discussion list:
    <p>
        @foreach($discussions as $discussion)
        <a href="{{ URL::action('DiscussionsController@show', [$group->id, $discussion->id]) }}">{{ $discussion->title }}</a>
        <br />
        @endforeach
    </p>
    @endif
    <a href="{{ URL::action('DiscussionsController@create', [$group->id]) }}" class="btn btn-success">Start a new discussion &raquo;</a>
</div>
@stop