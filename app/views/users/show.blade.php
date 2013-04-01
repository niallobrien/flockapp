@extends('layouts.app')

@section('content')
<div class="span8">
    <h1>Activity Stream</h1>
    <div class="well">
        @foreach ($posts as $post)
        <p>
            <strong>{{ $post->user->fullName() }}</strong> posted to the
        </p>
        @endforeach
    </div>
</div>
@stop