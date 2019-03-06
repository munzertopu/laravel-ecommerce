@extends('layout.main')

@section('body')
<body>
	<center>
		<div class = "container" id="login-panel">
			<form method="post">
				<h3><img src="{{asset('images')}}/login-icon.png" height="100px" width="100px"></h3>
				{{csrf_field()}}
			    <div class="form-group" style="width:400px">
			      <label for="username">User Name:</label>
			      <input type="username" class="form-control" name="username" placeholder="User name" value="{{session('username')}}">
			    </div>
			    <div class="form-group" style="width:400px">
			      <label for="pwd">Password:</label>
			      <input type="password" class="form-control" name="password" placeholder="password">
			    </div>
			   <!--  <div class="form-check">
			      <label class="form-check-label">
			        <input class="form-check-input" type="checkbox"> Remember me
			      </label>
			    </div> -->
		    	<button type="submit" class="btn btn-success">LOGIN</button>
		  	</form>
		  	@if(session('message'))
		        <p class="text-danger">{{session('message')}}</p>
		    @endif
		</div>
		<div id="link-section">
			<a href="{{route('registration.index')}}"><img src="{{asset('images')}}/register-icon.png" style="height: 50px; width: 200px"></a> |
			<a href="/"><img src="{{asset('images')}}/home.png" style="height: 50px; width: 50px"></a>
		</div>
	</center>
</body>
@endsection