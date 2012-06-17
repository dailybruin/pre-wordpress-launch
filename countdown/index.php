<!DOCTYPE html>
<html>
<head>
	<title>Days until the Gryphon Apocalypse</title>
	<style type="text/css">
		h1 {
			font-family: helvetica,arial;
			font-weight: 800;
			font-size: 30em;
			margin: 0;
			padding: 0;
			text-align: center;
			line-height:0.8em;
		}
		h2 {
		    text-align: center;
		    text-transform: uppercase;
		    font-family: helvetica, arial;
		    font-weight: 300;
		    letter-spacing: .2em;.em;
		    padding: 0;
		    margin: 0;
		}
	</style>
</head>

<body>

<?php 
	$birthday = "August 6";
	$days = round(abs(strtotime($birthday)-time()) / 86400);
?>
<h1><?php echo $days; ?></h1>
<h2>Days until Wordpress Launch</h2>

</body>
</html>
