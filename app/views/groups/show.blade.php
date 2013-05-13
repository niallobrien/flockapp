@extends('layouts.app')

@section('content')
<div class="col col-lg-8">
    <div class="well">
        <div class="well-header">
            <span class="h2">{{ Group::current()->title }}</span>
            <a href="{{ URL::action('DiscussionsController@create', [$group->id]) }}" class="btn btn-success pull-right">Start a new discussion &raquo;</a>
        </div>
    </div>
    @if($discussions->isEmpty())
    <div class="well">
        <p>
            This group has no discussions. Why not
            <a href="{{ URL::action('DiscussionsController@create', [$group->id]) }}">Create one</a>?
        </p>
    </div>
    @else
    <p>
        @foreach($discussions as $discussion)
    <div class="well">
        {{-- Preview the discussion --}}
        <a href="{{ URL::action('UsersController@show', [$discussion->posts->first()->user->id]) }}">
            {{ $discussion->posts->first()->user->fullName() }}</a>
        <div>
            <a href="{{ URL::action('DiscussionsController@show', [$group->id, $discussion->id]) }}">
                {{ $discussion->title }}</a>
        </div>
        {{ $discussion->posts->first()->content }}
        <div>
            Comments: {{ $discussion->posts->count() }}
        </div>
    </div>
    @endforeach
    @endif
</div>
@stop