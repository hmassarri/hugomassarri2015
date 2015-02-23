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
					<h1>Media</h1>
					<h3 class="text-muted">Digital Art</h3>
					<p>&nbsp;</p>
				</div>
			</div>


			<div id="projectContainerRow" class="row rowFix">
				<div id="mainContent" class="col-md-8">
					<div id="myCarousel" class="carousel fade" data-interval="8000" data-ride="carousel" style="margin-top: 0px;">
						<!-- Carousel indicators -->
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					        <li data-target="#myCarousel" data-slide-to="3"></li>
					        <li data-target="#myCarousel" data-slide-to="4"></li>
					        <li data-target="#myCarousel" data-slide-to="5"></li>
					        <li data-target="#myCarousel" data-slide-to="6"></li>
					        <li data-target="#myCarousel" data-slide-to="7"></li>
					    </ol>

					   <!-- Carousel items -->
					    <div class="carousel-inner">
					        <div class="active item lightbox hide fade">
					            <a class="media" href="images/que_olor.png"><img src="images/que_olor.png"></a>
								<div class="carousel-caption img-responsive">
									<h3></h3>
								<p></p>
					            </div>
					        </div>
					        <div class="item">
					            <a class="media" href="images/electrohouse.png"><img src="images/electrohouse.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <a class="media" href="images/catforce.png"><img src="images/catforce.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <a class="media" href="images/drum_bass.png"><img src="images/drum_bass.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <a class="media" href="images/spacescapes.png"><img src="images/spacescapes.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>

					        <div class="item">
					            <a class="media" href="images/banner3.png"><img src="images/banner3.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>

					        <div class="item">
					            <a class="media" href="images/banner4.png"><img src="images/banner4.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>

					        <div class="item">
					            <a class="media" href="images/banner6.png"><img src="images/banner6.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
				    	</div>
					</div>
				</div>


				<div id="projectDesc" class="col-md-4">
					<h3 class="text-left">Visual Design</h3>
					<h4 class="text-muted">Mostly a collection of my work from 2000-2015.  PS, IL, and really good stories were responsible for these.</h4>
					<p>&nbsp</p>
					<p><a href="http://www.hugomassarri.com/portfolio/wram2013/">/portfolio/digitalart</a></p>
				</div>
			</div>


		</div><!-- END CONTAINER -->
		<?php include 'controller.php'; ?>
	</body>
</html>