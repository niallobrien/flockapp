<div class="col-span-2">
    <p>
        Flocks
        <a href="{{ URL::action('GroupsController@create') }}" class="btn btn-small">Create</a>
    </p>
    <ul class="pull-left">
        @foreach ($groups as $group)
        <li>
            <a href="{{ URL::action('GroupsController@show', [$group->id]) }}" tabindex="-1">{{ $group->title }}</a>
        </li>
        @endforeach
    </ul>
</div>
