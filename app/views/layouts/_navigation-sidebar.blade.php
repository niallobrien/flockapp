<div id="sidebar-nav" class="hidden-phone">

	<div id="profile-pic">
		<img src="http://placehold.it/100x100" class="img-circle">
		<span class="badge">42</span>
	</div>
	<div id="dashboard-menu">

		<p>
			<span class="icon-circle"></span>
			<span class="icon-circle"></span>
			<span class="icon-circle"></span>
		</p>
		<a href="{{ URL::action('UsersController@show', [Auth::user()->id]) }}" class="{{ ($activeMenuItem == 'home') ? 'active' : '' }}">
			<span class="icon-dashboard"></span>
			<h5>Board</h5>
		</a>

		<p>
			<span class="icon-circle"></span>
			<span class="icon-circle"></span>
			<span class="icon-circle"></span>
		</p>
		<a href="" class="{{ ($activeMenuItem == 'groups') ? 'active' : '' }}">
			<span class="icon-th-list"></span>
			<h5>Flocks</h5>
		</a>

		<p>
			<span class="icon-circle"></span>
			<span class="icon-circle"></span>
			<span class="icon-circle"></span>
		</p>
		<a href="">
			<span class="icon-group"></span>
			<h5>People</h5>
		</a>


		<div id="logout">
			<a href="{{ URL::action('SessionController@destroy') }}" tabindex="-1">
				<span class="icon-off"></span>
				<h5>Logout</h5>
			</a>
		</div>
	</div>
</div>