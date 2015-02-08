<?php include 'head.php'; ?>

	<body class="sidebar-push">


		<div class="container">

			<div class="row">

				<nav id="sidebar" class="sidebar sidebar-vertical sidebar-right">
					<div id="menuCloseButton" class="col-md-3 pull-right closeButton">
						<p class="text-right">Close</p>
					</div>
					<h3>Menu</h3>
					<a id="index" href="index.php">index.php</a>
					<a id="link1" href="link1.php">link1.php</a>
					<a href="#">Link 3</a>
					<a href="#">Link 4</a>
					<a href="#">Link 5</a>
					<a href="#">Link 6</a>
				</nav>

			</div>

		</div>

		<div id="mainBody" class="container">

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

			<div id="row1" class="row">
				<div id="mainContent" class="col-md-12">


					<div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel" style="margin-top: 0px;">
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
					              <h3>Red</h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <img src="images/slide2.png" />
					            <div class="carousel-caption img-responsive">
					              <h3>Blue</h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <img src="images/slide3.png" />
					            <div class="carousel-caption img-responsive">
					              <h3>Yellow</h3>
					              <p></p>
					            </div>
					        </div>
					        <div class="item">
					            <img src="images/slide4.png" />
					            <div class="carousel-caption img-responsive">
					              <h3>Green</h3>
					              <p></p>
					            </div>
					        </div>
					    </div>
					</div>


				</div>
			</div>
		</div>
		<?php include 'pushit.php'; ?>
	</body>
</html>