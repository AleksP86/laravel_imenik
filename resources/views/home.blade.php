<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<script src="{{asset('js/global.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/global.css')}}">
	</head>
	<body>
		<script src="{{asset('js/jscolor.js')}}"></script>
		<button class="btn btn-info btn-sm" onclick="document.getElementById('foo').jscolor.show()">Selekcija boja</button><br>
		<input id="foo" class="jscolor btn" style="display:none;" value="">

		<div class="col-md-10 navh">
			<div class="row links" align="center">
				@foreach($links as $link)
				<div class="col-md-3"><a href="{{$link['url']}}">{{$link['name']}}</a></div>
				@endforeach
				<div class="col-md-3 navh" align="right">{{$user}}</div>
	        </div>
	        <hr>
			<div id="insert-holder" class="col-md-10">
				<h4>Imenik i unos novog broja</h4>
				<form id="insert_form">
					{{csrf_field()}}
						<div class="form-group" >
							<td><label>Ime *</label></td>
							<td><input type="text" class="form-control" name="ime" id="ime" placeholder='Ime'></td>
						</div>
						<div class="form-group">
							<td><label>Prezime *</label></td>
							<td><input type="text" class="form-control" name="prezime" id="prezime" placeholder="Prezime"></td>
						</div>
						<div class="form-group">
							<td><label>Telefonski broj *</label></td>
							<td><input type="text" class="form-control" name="tel_broj" id="tel_broj" placeholder="Tel. broj"></td>
						</div>
						<div class="form-group">
							<td><label>Grad *</label></td>
							<td><input type="text" class="form-control" name="grad" id="grad" placeholder="Grad"></td>
						</div>
						<div class="form-group">
							<td><label>Ulica *</label></td>
							<td><input type="text" class="form-control" name="ulica" id="ulica" placeholder="Ulica"></td>
						</div>
						<div class="form-group">
							<td><label>Kucni broj *</label></td>
							<td><input type="text" class="form-control" name="broj" id="broj" placeholder="Broj"></td>
						</div>
						<button type="button" class="btn btn-primary btn-sm" onclick="CheckInformation();">Snimi</button>
						<span style='padding-left:20px;'>Sva polja su obavezna</span>
				</form>
				<div id="message_holder" class="message_holder"></div>
				<hr>
			</div>
			<br/>
			<div id="table-holder" class="col-md-8"></div>
		</div>
	</body>
</html>
<script>
	loadData();
</script>