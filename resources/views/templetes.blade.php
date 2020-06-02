<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Texas</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li @if(isset($studentFunction)) class="active" @endif>
				<a class="nav-link" href="{{url('students/detail')}}">Student<span class="sr-only">(current)</span></a>
			</li>
			<li @if(isset($studentPostFunction)) class="active" @endif>
				<a class="nav-link" href="{{url('students/Post')}}">Student Post</a>
			</li>
		</ul>
	</div>
</nav>
@yield('body')


