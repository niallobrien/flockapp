@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts._sidebar-left')
        <div class="span8">
        <h1>Activity Stream</h1>
        </div>
        @include('layouts._sidebar-right')
    </div>
    @stop