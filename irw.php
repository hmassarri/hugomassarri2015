<?php include 'head.php'; ?>

	<body class="sidebar-push">


		<div class="container">


			<?php include 'menu.php'; ?>


			<div class="row rowFix">
				<div id="brandlogo" class="col-md-6 pull-left">
					<img src="images/brandlogo.png" class="img-responsive" />
				</div>
				<div id="menuButtonContainer" class="col-md-6 pull-right">
					<p class="text-right">
						<button type="button" id="showSidebar" class="menuButton">
							<a href="#">Menu</a>
						</button>
					</p>
				</div>
			</div>


			<div class="row rowFix">
				<div class="col-md-12">
					<p>&nbsp;</p>
					<h1>IRW</h1>
					<h3 class="text-muted">Rutgers, Institute for Research on Women</h3>
					<p>&nbsp;</p>
				</div>
			</div>


			<div id="projectContainerRow" class="row rowFix">
				<div id="mainContent" class="col-md-8">
					<div id="myCarousel" class="carousel fade" data-interval="7000" data-ride="carousel" style="margin-top: 0px;">
						<!-- Carousel indicators
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					        <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>-->

					   <!-- Carousel items -->
					    <div class="carousel-inner">
					        <div class="active item">
					            <a href="http://irw.rutgers.edu" target="_blank"><img src="images/irw.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
				    	</div>
					</div>
				</div>


				<div id="projectDesc" class="col-md-4">
					<h3 class="text-left">Design & Development</h3>
					<h4 class="text-muted">I was responsible for the layout, design, and development for this site.</h4>
					<p>&nbsp</p>
					<p><a href="http://irw.rutgers.edu">/portfolio/irw</a></p>
				</div>
			</div>


			<?php include 'projectControls.php'; ?>


		</div><!-- END CONTAINER -->
		<?php include 'controller.php'; ?>
	</body>
</html>