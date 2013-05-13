@extends('layouts.app')

@section('content')
<div class="col col-lg-8">
    <div class="well">
        <div class="well-header">
            <div class="row">
                <div class="col col-lg-2">
                    <div id="quick-add">
                        <button class="btn btn-primary icon-plus-sign"> Add</button>
                    </div>
                </div>
                <div class="col col-lg-8">
                    {{ Form::open() }}
                    <div id="search" class="col col-lg-12 input-group">
                        {{ Form::text('text', '', ['placeholder' => 'Search by flocks, tasks, events, people or #tags']) }}
                        {{ Form::close() }}
                    </div>
                </div>

                <div class="col col-lg-2">
                    <div id="sort-activity" class="pull-right">
                        <!-- Single button -->
                        <div class="btn-group">
                            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">
                                Newest posts <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Newest posts</a></li>
                                <li><a href="#">Oldest posts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($posts as $post)
    <div class="well">
        <p>
            <strong>{{ $post->user->fullName() }}</strong> posted to the
            <a href="{{ URL::action('DiscussionsController@show', [$post->postable->group->id, $post->postable->id]) }}">
                {{ $post->postable->title }} discussion</a> in the
                <a href="{{ URL::action('GroupsController@show', [$post->postable->group->id]) }}">{{ $post->postable->group->title }} flock</a>.
            </p>
        </div>
        @endforeach
</div>
@stop