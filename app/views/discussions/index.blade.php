@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts._sidebar-left')
        <div class="span8">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Discussions</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
        </div>
        @include('layouts._sidebar-right')
    </div>
    @stop