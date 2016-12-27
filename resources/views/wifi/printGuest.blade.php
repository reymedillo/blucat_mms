<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
		window.onload = function () {
		  window.print();
		  setTimeout(function(){window.close();}, 1);
		}
	</script>
</head>
    <body>
	    {{$date}} ID: GUEST<h1>{{$pw}}</h1>
<font size="1">Apply for weekly or monthly membership.<br />
Weekly only P{{$weekly_fee}}.<br />
Monthly only P{{$monthly_fee}}.<br /></font>
	</body>
</html>