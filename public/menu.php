			<div class="row">
				<nav id="sidebar" class="sidebar sidebar-vertical sidebar-right">
					<div id="menuCloseButton" class="col-md-4 pull-right closeButton">
						<p>Close</p>
					</div>
					<h3>Menu</h3>
					<a href="<?php echo $basePath; ?>">Home</a>
					<h3>Media</h3>
					<a href="<?php echo $portfolioPath . 'media.php'; ?>">Digital Art</a>
					<h3>Web</h3>
					<?php
						include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/assets/assets.php';
						include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/controller/connect.php';
						get_menu();

					?>
				</nav>
			</div>