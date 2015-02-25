<?php	include '../../assets/head.php';	?>

			<div class="row rowFix">
				<div class="col-md-12">
					<p>&nbsp;</p>
					<h1>Chad Saharic</h1>
					<h3 class="text-muted">Freelance Graphic Designer</h3>
					<p>&nbsp;</p>
				</div>
			</div>


			<div id="projectContainerRow" class="row rowFix">
				<div id="mainContent" class="col-md-8">
					<div id="myCarousel" class="carousel fade" data-interval="7000" data-ride="carousel" style="margin-top: 0px;">
						<!-- Carousel indicators -->
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    </ol>

					   <!-- Carousel items -->
					    <div class="carousel-inner">
					        <div class="active item">
					            <a href="http://www.chadsaharic.com" target="_blank"><img src="<?php echo $publicPath . "/"; ?>images/chad.png" /></a>
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


			<?php
				include '../../controller/projectControls.php';
				include '../../controller/controller.php';
				include '../../assets/footer.php';
			?>