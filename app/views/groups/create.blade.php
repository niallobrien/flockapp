@extends('layouts.app')

@section('content')
<div class="col-span-8">

    {{ Form::open(['url' => 'flocks']) }}
    <fieldset>
        {{-- Check for validation errors and group them in a single alert box --}}
        {{ $errors->any() ? '<div class="alert alert-error"><li>' . $errors->first('name') . '</li></div>' : '' }}

        <h2>Create a new flock</h2>
        <div class="{{ $errors->has('name') ? 'error' : '' }} ">
            <p>
                {{ Form::text( 'title', '', ['placeholder' => 'Name your new flock'] ) }}
            </p>
        </div>
        <div class="{{ $errors->has('name') ? 'error' : '' }} ">
            <p>
                {{ Form::textarea( 'description', '', ['placeholder' => 'Describe your flock for collaborators'] ) }}
            </p>
        </div>
        <div class="{{ $errors->has('name') ? 'error' : '' }} ">
            <p>
                {{ Form::select('category', ['select' => 'Select a category for your new flock', 'Business' => 'Business', 'Client/Service' => 'Client/Service', 'Club/Association' => 'Club/Association', 'Educational' => 'Educational', 'Other' => 'Other']) }}
            </p>
        </div>
        <p>
            {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
        </p>
    </fieldset>
    {{ Form::close() }}
</div>
@stop