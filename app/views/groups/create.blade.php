@extends('layouts.app')

@section('content')
<div class="span8">

    {{ Form::open('flocks', 'POST', ['class' => 'form-signin']) }}
    <fieldset>

        {{-- Check for validation errors and group them in a single alert box --}}
        {{ $errors->any() ? '<div class="alert alert-error"><li>' . $errors->first('name') . '</li></div>' : '' }}

        <h2 class="form-signin-heading">Create a new flock</h2>
        <div class="control-group {{ $errors->has('name') ? 'error' : '' }} ">
            {{ Form::label('title', 'Title', array('class' => '')) }}
            {{ Form::text( 'title', '', array('class' => 'input-block-level') ) }}
        </div>
        {{ Form::label('description', 'Description', array('class' => '')) }}
        {{ Form::textarea( 'description', '', array('class' => 'input-block-level') ) }}
        {{ Form::label('category', 'Category', array('class' => '')) }}
        {{ Form::select('category', array('select' => 'Select...', 'Business' => 'Business', 'Client/Service' => 'Client/Service', 'Club/Association' => 'Club/Association', 'Educational' => 'Educational', 'Other' => 'Other' )) }}
        {{ Form::submit('Create', array('class' => 'btn btn-large btn-success pull-right')) }}
        {{ Form::close() }}
</div>
@stop