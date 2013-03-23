@extends('layouts.app')

@section('content')
<div class="span8">
    <div>
        @if ($forkedDiscussion != null)
            This discussion is forked from <a href="
            {{ URL::action('DiscussionsController@show', [Group::current()->id, $forkedDiscussion->id]) }}">
            {{ $forkedDiscussion->title }}</a>.
        @else
            <a href="{{ URL::action('GroupsController@show', [Group::current()->id]) }}">{{ Group::current()->title }}</a> >
            {{ $discussion->title }}
        @endif
    </div>
    <a href="{{ URL::action('DiscussionsController@destroy', [Group::current()->id, $discussion->id]) }}" data-method="delete">Delete this discussion</a>
    @foreach ($discussion->posts as $post)
    <div class="well discussion-post">
        <strong>{{ $post->user->fullName() }}</strong>
        {{ $post->content }}
        <a href="{{ URL::action('DiscussionsController@getFork', [Group::current()->id, $discussion->id, $post->id]) }}">Fork Discussion</a> |
        <a href="{{ URL::action('PostsController@edit', [Group::current()->id, $discussion->id, $post->id]) }}">Edit Post</a> |
        <a href="{{ URL::action('PostsController@destroy', [Group::current()->id, $discussion->id, $post->id]) }}" data-method="delete">Delete Post</a>
    </div>
    @endforeach
    <p>
        {{ Form::open(['action' => ['PostsController@store', Group::current()->id, Discussion::current()->id]]) }}
        {{ Form::textarea('content', '', ['class' => 'input-block-level', 'placeholder' => 'Comment']) }}
        {{ Form::submit('Reply', ['class' => 'btn btn-small btn-success']) }}
        {{ Form::close() }}
    </p>
</div>
@stop