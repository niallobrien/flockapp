@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.discussions._sidebar-left')
        <div class="span8">
            <h2><a href="{{ Url::action('GroupsController@show', [Group::current()->id]) }}">{{ Group::current()->name }}</a></h2>
            <a href="{{ Url::action('DiscussionsController@destroy', [Group::current()->id, $discussion->id]) }}" data-method="delete">Delete discussion</a>
            <div class="well">
                Discussion title: {{ $discussion->title }}
            </div>
            @foreach ($discussion->posts as $post)
            <div class="well">
                Post content: {{ $post->content }}
                <a href="{{ Url::action('PostsController@destroy', [Group::current()->id, $discussion->id, $post->id]) }}" data-method="delete">Delete Post</a>
            </div>
            @endforeach
        <p>
            {{{ Form::open(action('PostsController@store', [Group::current()->id, Discussion::current()->id]), 'POST') }}}
            {{{ Form::textarea('content', '', ['class' => 'input-block-level', 'placeholder' => 'Comment']) }}}
            {{{ Form::submit('Reply', ['class' => 'btn btn-small btn-success']) }}}
            {{{ Form::close() }}}
        </p>
    </div>
    @include('layouts.discussions._sidebar-right')
</div>
@stop