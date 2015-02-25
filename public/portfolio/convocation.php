<?php	include '../../assets/head.php';	?>

			<div class="row rowFix">
				<div class="col-md-12">
					<p>&nbsp;</p>
					<h1>SAS Convocation</h1>
					<h3 class="text-muted">Rutgers, School of Arts and Sciences</h3>
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
					            <a href="http://convocation.sas.rutgers.edu" target="_blank"><img src="<?php echo $publicPath; ?>images/convocation.png" /></a>
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
					<p class="text-muted">I was responsible for the layout, design, development, and user experience.</p>
					<p>&nbsp</p>
					<p><a href="http://convocation.sas.rutgers.edu" target="_blank">/portfolio/convocation</a></p>
				</div>
			</div>


			<?php
				include '../../controller/projectControls.php';
				include '../../controller/controller.php';
				include '../../assets/footer.php';
			?>
