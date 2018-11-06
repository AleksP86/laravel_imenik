<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<body>
		<script src="{{asset('js/jscolor.js')}}"></script>
		<button class="btn btn-info btn-sm" onclick="document.getElementById('foo').jscolor.show()">Selekcija boja</button><br>
		<input id="foo" class="jscolor btn" style="display:none;" value="">

		<div align='center'>
			<div class="col-md-10" style="padding-top:10%;max-width:300px;">
				<div style="border:1px solid gray;margin-left:auto;margin-right:auto;">
					<form method='post' action='/login'>
						{{csrf_field()}}
						<div class="form-group">
							<label for="user_name">User name</label><br>
							<input type='text' id="user_name" name="user_name" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="user_pass">Password</label><br>
							<input type="password" id="user_pass" name="user_pass" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary btn-sm">Submit</button>
					</form>
					<div>
						@if(Session::has('login_mess'))
						    {{ Session::get('login_mess') }}
						@else
							<br/>
						@endif
					</div>
				</div>
			</div>
		</div>
	</body>
</html>