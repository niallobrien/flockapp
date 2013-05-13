@extends('layouts.app')

@section('content')
<div class="col col-lg-8 well">

    {{ Form::open(['url' => 'flocks']) }}
    <fieldset>
        {{-- Check for validation errors and group them in a single alert box --}}
        {{ $errors->any() ? '<div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <li>' . $errors->first('title') . '</li></div>' : '' }}

        <h2>Create a new flock</h2>
            <p>
                {{ Form::text( 'title', '', ['placeholder' => 'Name your new flock', 'class' => $errors->has('title') ? 'form-alert-danger' : ''] ) }}
            </p>
        <div class="{{ $errors->has('name') ? 'error' : '' }} ">
            <p>
                {{ Form::textarea( 'description', '', ['placeholder' => 'Describe your flock for collaborators'] ) }}
            </p>
        </div>
        <div class="{{ $errors->has('name') ? 'error' : '' }} ">
            <p>
                {{ Form::select('category', [
                    'select' => 'Select a category for your new flock', 
                    'Business' => 'Business', 
                    'Client/Service' => 'Client/Service', 
                    'Club/Association' => 'Club/Association', 
                    'Educational' => 'Educational', 
                    'Other' => 'Other'
                    ], [], [
                        'class' => ''
                        ]
                    ) }}
            </p>
        </div>
        <p>
            <a href="{{ URL::previous() }}" class="btn btn-large pull-left">Cancel</a>
            {{ Form::submit('Create', array('class' => 'btn btn-large btn-success pull-right')) }}
        </p>
    </fieldset>
    {{ Form::close() }}
</div>
@stop