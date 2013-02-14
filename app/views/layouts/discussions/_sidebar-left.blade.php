<div class="span2">
    <p>
        <a href="{{ URL::action('GroupsController@show', ['flocks' => Group::current()->id]) }}">
            <img src="http://placehold.it/100x100" alt="" class="center">
        </a>
    </p>
    <p>{{ Group::current()->description }}</p>
    <ul class="nav">
        <li class="dropdown">
            <a id="profile-dropdown-link" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                Options
                <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="profile-dropdown-link">
                <li>{{ HTML::to(action('GroupsController@edit', [Group::current()->id]), 'Edit flock') }}</li>
                <li class="divider"></li>
                <li>
                    {{ HTML::to(action('GroupsController@destroy', [Group::current()->id]), 'Delete flock', ['data-method' => 'delete']) }}
                </li>
            </ul>
        </li>
    </ul>
</div>
