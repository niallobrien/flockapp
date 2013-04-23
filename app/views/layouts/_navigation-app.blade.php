<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="{{ URL::action('UsersController@show', [Auth::user()->id]) }}" class="navbar-brand">FlockApp</a>
            <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class="nav hidden-desktop">
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
                                <a href="{{ URL::action('GroupsController@show', [$group->id]) }}" tabindex="-1">{{ $group->title }}</a>
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
                <ul class="nav pull-left hidden-desktop">
                    <li class="dropdown">
                        <a id="profile-dropdown-link" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->fullName() }}
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