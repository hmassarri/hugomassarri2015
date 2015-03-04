<?php
		//Local
		$basePath = "/hugomassarri2015/";

		//Production
		//$basePath = 'http://www.hugomassarri.com/';
		$publicPath = $basePath . "public/";
		$menuPath = $basePath . "public/menu.php";
		$portfolioPath = $publicPath . "portfolio/";
?>


<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Hugo M. | Visual Design | Front End Engineer</title>
		<meta name="description" content="Blueprint: Slide and Push Menus" />
		<meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo $publicPath; ?>css/custom.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $publicPath; ?>css/menu.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $publicPath; ?>css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $publicPath; ?>css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $publicPath; ?>css/magnific-popup.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
		<script src="<?php echo $publicPath; ?>lib/bootstrap.js"></script>
		<script src="<?php echo $publicPath; ?>lib/modernizr.custom.js"></script>
		<script src="<?php echo $publicPath; ?>lib/jquery.magnific-popup.js"></script>
	</head>

	<body class="sidebar-push">


		<div class="container">


			<?php include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/public/menu.php';	?>


			<div class="row headFix">
				<div id="brandlogo" class="col-md-6 pull-left">
					<a href="<?php echo $basePath; ?>"><img src="<?php echo $publicPath . 'images/brandlogo.png'; ?>" class="img-responsive" /></a>
				</div>
				<div id="menuButtonContainer" class="col-md-6 pull-right">
					<p class="text-right">
						<button type="button" id="showSidebar" class="menuButton">
							<a href="#">Menu</a>
						</button>
					</p>
				</div>
			</div>