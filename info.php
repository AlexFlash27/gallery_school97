<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-Control" content="no-cache">

	<link rel="stylesheet" href="css/info.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
	<script	type="text/javascript" charset="utf-8" src="js/slider_info.js" ></script>

	<title>info</title>
</head>

<body>

<div class="container-fluid">
		<div class="row">

			<?php 
			if (date('W')%2==1) { //ЕСЛИ НЕЧЕТНАЯ НЕДЕЛЯ - ВИДЫ
				echo '<div id="left_1">ВИДЫ ИЗОБРАЗИТЕЛЬНОГО ИСКУССТВА</div>';
    		} else { //ЕСЛИ ЧЕТНАЯ НЕДЕЛЯ - ЖАНРЫ
				echo '<div id="left_1">ЖАНРЫ ИЗОБРАЗИТЕЛЬНОГО ИСКУССТВА</div>';
			}
			?>
				
				<div id="right"></div>

				<div id="left"></div>

				<div id="right_1"></div>

				<div id="left_2"></div>
		</div>
</div>

</body>
</html>