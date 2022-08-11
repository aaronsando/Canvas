<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Canvas</title>
	<style type="text/css">
		canvas{
			background-color: rgb(135, 135, 210);
		}
	</style>

</head>
<body>
	<canvas id="canvas" width="500" height="500">
		Hola tu navegador no funciona
	</canvas>

	<script type="text/javascript">
		var cv = document.getElementsById('canvas');
		var ctx = cv.getContext('2d');

		ctx.fillStyle = "rgb(200,0,0)";
		ctx.fillRect(10,10,55,50);

		ctx.fillStyle = "rgb(0,0,200,0.5)";
		ctx.fillRect(30,30,55,60);
	</script>

</body>
</html>