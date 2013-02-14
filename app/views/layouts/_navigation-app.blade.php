<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a href="{{ URL::action('UsersController@show', [Auth::user()->id]) }}" class="brand">FlockApp</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="{{ URL::action('UsersController@show', [Auth::user()->id]) }}">Home</a></li>
                    <li class="divider-vertical"></li>

                    <li class="dropdown">
                        <a id="flocks-dropdown-link" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            Flocks
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="flocks-dropdown-link">

                            @if($groups->isEmpty())
                            <li><a>You have no flocks.</a></li>
                            @else
                            @foreach ($groups as $group)
                            <li>
                                <a href="{{ URL::action('GroupsController@show', [$group->id]) }}" tabindex="-1">{{ $group->name }}</a>
                            </li>
                            @endforeach
                            @endif
                            <li class="divider"></li>
                            <li><a href="{{ URL::action('GroupsController@create') }}" tabindex="-1">Create a new flock</a>
                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li><a href="{{ URL::action('HomeController@blog') }}">People</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="{{ URL::action('HomeController@help') }}">Help</a></li>
                </ul>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a id="profile-dropdown-link" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="profile-dropdown-link">
                            <li><a href="{{ URL::action('UsersController@edit', [Auth::user()->id]) }}" tabindex="-1">Settings</a></li>
                            <li><a tabindex="-1" href="#">Manage my plan</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ URL::action('SessionController@destroy') }}" tabindex="-1">Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
