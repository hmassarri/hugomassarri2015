<?php include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/assets/head.php'; ?>


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
						    <?php get_img(); ?>
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
				include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/public/lib/custom.js';
				include '../../assets/footer.php';
			?>