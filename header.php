<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
			<title><?php print $title; ?></title>
			<!-- Bootstrap -->
			<link href="css/vendor/bootstrap.min.css" rel="stylesheet">

			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		
			<!-- Custom CSS -->
			<link href="css/custom.css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	</head>

	<body>
		<nav class="navbar navbar-fixed-top navbar-inverse">
			<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
          		</button>
			</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li<?php if ($title == "piemonte") { print ' class="active"';}?>><a href="index.php">Home</a></li>
						<li<?php if ($title == "alpi") { print ' class="active"';}?>><a href="alpi.php">alpi</a></li>
						<li<?php if ($title == "novara") { print ' class="active"';}?>><a href="novara.php">novara</a></li>
						<li<?php if ($title == "lago_maggiore") { print ' class="active"';}?>><a href="lago_maggiore.php">lago_maggiore</a></li>
					</ul>
				</div>
			</div>
    	</nav>
