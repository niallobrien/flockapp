<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a href="{{ URL::action('HomeController@index') }}" class="brand">FlockApp</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="{{ URL::action('HomeController@tour') }}">Tour</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="{{ URL::action('HomeController@pricing') }}">Pricing</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="{{ URL::action('HomeController@blog') }}">Blog</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="{{ URL::action('HomeController@help') }}">Help</a></li>
                </ul>
                <ul class="nav pull-right">
                    <li><a href="{{ URL::action('SessionController@create') }}">Login</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
