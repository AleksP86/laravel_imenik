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
				<div class="col-md-3 user_n" align="right">{{$user}}</div>
	        </div>
	        <hr>
	        <div id="chartContainer">
			</div>
		</div>
	</body>
	<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
	<script>
	window.onload = function () {
	$.ajax({
			url:'/graph/data',
			type:"post",
			dataType:'json',
			success: function(data)
			{
				console.log(data.entries);
				var options = {
							animationEnabled: true,
							title: {
								text:'Broj unosa po gradu'
							},
							axisY: {
								title: "Broj unosa",
								suffix: "",
								includeZero: false
							},
							axisX: {
								title: "Gradovi"
							},
							data: [{
								type: "column",
								yValueFormatString: "#",
								dataPoints:data.entries
							}]
						};
				$("#chartContainer").CanvasJSChart(options);
			}
		});
	}
	</script>
</html>