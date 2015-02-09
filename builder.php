<?php
	$menuBlock = '	<div class="row">
				<nav id="sidebar" class="sidebar sidebar-vertical sidebar-right">
					<div id="menuCloseButton" class="col-md-4 pull-right closeButton">
						<p>X</p>
					</div>

					<h3>Menu</h3>
					<a id="index" href="index.php">index.php</a>
					<a id="link1" href="link1.php">link1.php</a>
					<a href="#">Link 3</a>
					<a href="#">Link 4</a>
					<a href="#">Link 5</a>
					<a href="#">Link 6</a>
					<a href="#">Link 7</a>
					<a href="#">Link 8</a>
					<a href="#">Link 9</a>
					<a href="#">Link A</a>
				</nav>

			</div>';

	function printMenu() {
		echo $menuBlock;
	}

	printMenu();
?>