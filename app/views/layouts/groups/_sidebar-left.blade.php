<div class="span2">
    <p>
        <img src="http://placehold.it/100x100" alt="" class="center">
    </p>
    <p>{{ Group::current()->description }}</p>
    <ul class="nav">
        <li class="dropdown">
            <a id="profile-dropdown-link" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                Options
                <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="profile-dropdown-link">
                <li>
                    <a href="{{ URL::action('GroupsController@edit', [Group::current()->id]) }}">Edit flock</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ URL::action('GroupsController@destroy', [Group::current()->id]) }}" data-method="delete">Delete flock</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
