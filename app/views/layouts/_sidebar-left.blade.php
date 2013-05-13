<div id="user-sidebar" class="col col-lg-2">
    <div id="profile-sidebar">
        <img id="nav-profile-pic" src="http://placehold.it/150x150" class="img-circle">
    </div>
    <div id="flock-list">
        <p>
            <strong>Flocks</strong>
            <a href="{{ URL::action('GroupsController@create') }}" class="btn btn-primary"><span class="icon-plus-sign"></span> Create</a>
        </p>
        <ul class="pull-left">
            @foreach ($groups as $group)
            <li>
                <img src="http://placehold.it/30x30" class="img-circle" />
                <a href="{{ URL::action('GroupsController@show', [$group->id]) }}" tabindex="-1">{{ $group->title }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
