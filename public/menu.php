<?php include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/controller/functions.php'; ?>

			<div class="row">
				<nav id="sidebar" class="sidebar sidebar-vertical sidebar-right">
					<div id="menuCloseButton" class="col-md-4 pull-right closeButton">
						<p>Close</p>
					</div>
					<h3>Menu</h3>
					<?php get_home(); ?>
					<h3>Media</h3>
					<?php get_media(); ?>
					<h3>Web</h3>
					<?php get_web(); ?>
				</nav>
			</div>

