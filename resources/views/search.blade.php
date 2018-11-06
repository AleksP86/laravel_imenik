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
		<button class="btn btn-info btn-sm" onclick="document.getElementById('foo').jscolor.show()">Show Picker</button><br>
		<input id="foo" class="jscolor btn" style="display:none;" value="">

		<div class="col-md-10 navh" >
			<div class="row links" align="center">
				@foreach($links as $link)
				<div class="col-md-3"><a href="{{$link['url']}}">{{$link['name']}}</a></div>
				@endforeach
				<div class="col-md-3 user_n" align="right">{{$user}}</div>
	        </div>
	        <hr>
	        <div id="search_holder" class="col-md-10">
	        	<h4>Pretraga imenika</h4>
	        	<form id="search_form">
	        		<div class="form-group">
						<label>Grad</label>
						<input type="text" class="form-control" name="grad" id="grad" placeholder="Grad">
						<div class="suggestion-box" id="grad-box"></div>
					</div>
					<div class="form-group">
						<label>Ulica</label>
						<input type="text" class="form-control" name="ulica" id="ulica" placeholder="Ulica">
						<div class="suggestion-box" id="ulica-box"></div>
					</div>
					<div class="form-group">
						<label>Prezime</label>
						<input type="text" class="form-control" name="prezime" id="prezime" placeholder="Prezime">
						<div class="suggestion-box" id="prezime-box"></div>
					</div>
					<div class="form-group">
						<label>Ime</label>
						<input type="text" class="form-control" name="ime" id="ime" placeholder="Ime">
						<div class="suggestion-box" id="ime-box"></div>
					</div>
					<div class="form-group">
						<label>Telefonski broj</label>
						<input type="text" class="form-control" name="tel_broj" id="tel_broj" placeholder="Telefonski broj">
						<div class="suggestion-box" id="tel_broj-box"></div>
					</div>
					<div>
						<button type="button" class="btn btn-primary btn-sm" onclick="searchEntry();">Pretrazi</button>
					</div>
	        	</form>
	        </div>
			<div id="insert-holder" class="col-md-10">
				<div id="message_holder"></div>
				<hr>
			</div>
			<br/>
			<div id="table-holder" class="col-md-8"></div>
		</div>
	</body>
</html>
<script>
$('#message_holder').html('');
$('#grad, #ulica, #prezime, #ime, #tel_broj').on('keyup',function()
{
	var ids=$(this).attr('id');
	var valu=$(this).val();
	$.ajax({
			url:'/search/browse',
			type:"post",
			data: {type:ids, val:valu},
			dataType:'json',
			success: function(data)
			{
				if(data.res.length>0)
				{
					$("#"+ids+"-box").show();
					var drop='<ul id="country-list">';
					$.each(data.res, function(index, val)
					{
						$.each(val, function(ind ,vred)
						{
							drop+='<li onClick="selectDrop(\''+ids+'\',\''+vred+'\');">'+vred+'</li>';
						});
					});
					drop+='</ul>';
					$("#"+ids+"-box").html(drop);
				}
			}
		});
});
</script>