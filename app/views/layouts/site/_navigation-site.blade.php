<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a href="{{ URL::action('HomeController@index') }}" class="navbar-brand">FlockApp</a>
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
        </div>
    </div>
</div>
