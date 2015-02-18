<?php include 'head.php'; ?>

	<body class="sidebar-push">


		<div class="container">

			<?php include 'menu.php'; ?>

		</div>

		<div id="mainBody" class="container">

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
				<div id="mainContent" class="col-md-12">


					<div id="myCarousel" class="carousel fade" data-interval="6000" data-ride="carousel">
						<!-- Carousel indicators
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					    </ol> -->

					   <!-- Carousel items -->
					    <div class="carousel-inner" role="listbox">
					        <div class="item active">
					            <img src="images/banner2.png" />
					            <div class="carousel-caption img-responsive">
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <img src="images/banner5.png" />
					            <div class="carousel-caption img-responsive">
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <img src="images/banner7.png" />
					            <div class="carousel-caption img-responsive">
					              <p></p>
					            </div>
					        </div>
					    </div>

					</div>


				</div>
			</div>


			<div class="row rowFix">
				<div class="col-md-12 email">
					<a href="mailto:hugo@hugomassarri.com">hugo@hugomassarri.com</a><br />
					<p class="text-muted">Copyright &copy; 2010-<?php echo date('Y'); ?> </p>
				</div>
			</div>


		</div> <!-- END CONTAINER -->
		<?php include 'controller.php'; ?>
	</body>
</html>