@extends('layouts.app')

@section('content')
<div class="span8">
    <p>
        This discussion could not be found. It may have been deleted.
        <a href="{{ URL::previous() }}">Return to previous page.</a>
</div>
@stop