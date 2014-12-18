@extends('_1_base_view')

@section('body')

	<div class="container">
		<div class="page-header" role="navigation">
	  		<ul class="nav nav-pills pull-right">
	  			<li>
	  				<a href="/log-out">Log out</a>
	  			</li>
	  		</ul>
			<h3><a href='/'><img src='/restricted_images/header.jpg' width=100 height=100></img></a></h3>
	    </div>
	</div>

  	@yield('content')


@stop