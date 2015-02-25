<?php include '../../assets/head.php'; ?>


			<div class="row rowFix">
				<div class="col-md-12">
					<h1>Media</h1>
					<h3 class="text-muted">Digital Art</h3>
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
					            <a class="media" href="<?php echo $publicPath; ?>images/que_olor.png"><img src="<?php echo $publicPath; ?>images/que_olor.png"></a>
								<div class="carousel-caption img-responsive">
									<h3></h3>
								<p></p>
					            </div>
					        </div>
					        <div class="item">
					            <a class="media" href="<?php echo $publicPath; ?>images/electrohouse.png"><img src="<?php echo $publicPath; ?>images/electrohouse.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <a class="media" href="<?php echo $publicPath; ?>images/catforce.png"><img src="<?php echo $publicPath; ?>images/catforce.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <a class="media" href="<?php echo $publicPath; ?>images/drum_bass.png"><img src="<?php echo $publicPath; ?>images/drum_bass.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <a class="media" href="<?php echo $publicPath; ?>images/spacescapes.png"><img src="<?php echo $publicPath; ?>images/spacescapes.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>

					        <div class="item">
					            <a class="media" href="<?php echo $publicPath; ?>images/banner3.png"><img src="<?php echo $publicPath; ?>images/banner3.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>

					        <div class="item">
					            <a class="media" href="<?php echo $publicPath; ?>images/banner4.png"><img src="<?php echo $publicPath; ?>images/banner4.png" /></a>
					            <div class="carousel-caption img-responsive">
					              <h3></h3>
					              <p></p>
					            </div>
					        </div>

					        <div class="item">
					            <a class="media" href="<?php echo $publicPath; ?>images/banner6.png"><img src="<?php echo $publicPath; ?>images/banner6.png" /></a>
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
					<p class="text-muted">Mostly a collection of my work from 2000-2015.  PS, IL, and really good stories were responsible for these.</p>
					<p>&nbsp</p>
					<p><a href="<?php echo $publicPath; ?>"></a></p>
				</div>
			</div>


			<?php
				include '../../controller/controller.php';
				include '../../assets/footer.php';
			?>