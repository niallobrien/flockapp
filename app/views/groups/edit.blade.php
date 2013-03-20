@extends('layouts.app')

@section('content')
<div class="span8">
    {{ Form::open(['method' => 'PUT', 'action' => ['GroupsController@update', $group->id], 'class' => 'form-signin']) }}

    <fieldset>
        {{-- Check for validation errors and group them in a single alert box --}}
        {{ $errors->any() ? '<div class="alert alert-error"><li>' . $errors->first('name') . '</li></div>' : '' }}
        <h2 class="form-signin-heading">Edit {{ $group->title }}</h2>
        <div class="control-group {{ $errors->has('name') ? 'error' : '' }} ">
            {{ Form::label('title', 'Title', array('class' => '')) }}
            {{ Form::text( 'title', $group->title, array('class' => 'input-block-level') ) }}
        </div>
        {{ Form::label('description', 'Description', array('class' => '')); }}
        {{ Form::textarea( 'description', $group->description, array('class' => 'input-block-level') ) }}
        {{ Form::label('category', 'Category', array('class' => '')) }}
        {{ Form::select('category', array('select' => 'Select...', 'Business' => 'Business', 'Client/Service' => 'Client/Service', 'Club/Association' => 'Club/Association', 'Educational' => 'Educational', 'Other' => 'Other' )) }}
        {{ Form::submit('Update', array('class' => 'btn btn-large btn-success pull-right')) }}
</div>
@stop