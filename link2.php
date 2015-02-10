<?php include 'head.php'; ?>

	<body class="sidebar-push">


		<div class="container">


			<?php include 'menu.php'; ?>


			<div id="row1" class="row">
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


			<div class="row">
				<div class="col-md-12">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<h1>Chad Saharic</h1>
					<h3 class="text-muted">Freelance Graphic Designer</h3>
					<p>&nbsp;</p>
				</div>
			</div>


			<div id="projectContainerRow" class="row">
				<div id="mainContent" class="col-md-8">
					<div id="myCarousel" class="carousel fade" data-interval="7000" data-ride="carousel" style="margin-top: 0px;">
						<!-- Carousel indicators -->
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					        <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>

					   <!-- Carousel items -->
					    <div class="carousel-inner">
					        <div class="active item">
					            <img src="images/slide1.png" />
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <img src="images/slide2.png" />
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <img src="images/slide3.png" />
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <img src="images/slide4.png" />
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
					<p class="text-muted">A freelance graphic designer that I know needed some help building his online presence.  I was responsible for visual design and development.  This was a good example of what could be achieved using a very simple one page approach.</p>
					<p>&nbsp</p>
					<p><a href="http://www.hugomassarri.com/portfolio/chadsaharic/">/portfolio/chadsaharic</a></p>
				</div>
			</div>


			<?php include 'projectControls.php'; ?>


		</div><!-- END CONTAINER -->
		<?php include 'controller.php'; ?>
	</body>
</html>