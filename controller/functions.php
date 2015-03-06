<?php //Menu

	function get_web() {
		$basePath = "/hugomassarri2015/";
		$publicPath = $basePath . "public/";
		$portfolioPath = $publicPath . "portfolio/";
		include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/config/config.php';
		//Create connection
		$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
		//Check
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//Debug
		//echo 'Connected to: ' . $dbName . '<br />';
		$get_menu = "SELECT menu_name, menu_url, category FROM menu";
		$result = $conn->query($get_menu);
		if ($result->num_rows > 0) {
			//output result
			while($row = $result->fetch_assoc()) {
				if ($row['category'] == 'web') {
					echo '<a href="' . $portfolioPath . $row['menu_url'] . '">' . $row['menu_name'] . '</a>';
				}
			}
		}
		else {
			echo "No results";
		}
		$conn->close();
		return false;
	}

	function get_media() {
		$basePath = "/hugomassarri2015/";
		$publicPath = $basePath . "public/";
		$portfolioPath = $publicPath . "portfolio/";
		include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/config/config.php';
		$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$get_menu = "SELECT menu_name, menu_url, category FROM menu";
		$result = $conn->query($get_menu);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if ($row['category'] == 'media') {
					echo '<a href="' . $portfolioPath . $row['menu_url'] . '">' . $row['menu_name'] . '</a>';
				}
			}
		}
		else {
			echo "No results";
		}
		$conn->close();
		return false;
	}


	function get_home() {
		$basePath = "/hugomassarri2015/";
		$publicPath = $basePath . "public/";
		$portfolioPath = $publicPath . "portfolio/";
		include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/config/config.php';
		//Create connection
		$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
		//Check
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$get_menu = "SELECT menu_name, menu_url, category FROM menu";
		$result = $conn->query($get_menu);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if ($row['category'] == 'home') {
					echo '<a href="' . $basePath . $row['menu_url'] . '">' . $row['menu_name'] . '</a>';
				}
			}
		}
		else {
			echo "No results";
		}
		$conn->close();
		return false;
	}



    function get_img() {

		$basePath = "/hugomassarri2015/";
		$publicPath = $basePath . "public/";
		$imagePath = $publicPath . "images/";
		$portfolioPath = $publicPath . "portfolio/";

		include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/config/config.php';

		//Create connection
		$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

		//Check
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		//Debug
		//echo 'Connected to: ' . $dbName . '<br />';

		$get_menu = "SELECT img_name, img_cat FROM images";

		$result = $conn->query($get_menu);

		if ($result->num_rows > 0) {
			//output result
			while($row = $result->fetch_assoc()) {
				if ($row['img_name'] == 'que_olor.png') {
					echo '<div class="active item hide fade">';
					echo '<a class="media" href="' . $imagePath . $row['img_name'] . '"><img src="' . $imagePath  . $row['img_name'] .'"></a>';
					echo '<div class="carousel-caption img-responsive">';
					echo '<h3></h3>';
					echo '<p></p>';
					echo '</div>';
					echo '</div>';
				}

				if ($row['img_name'] != 'que_olor.png') {
					echo '<div class="item">';
					echo '<a class="media" href="' . $imagePath . $row['img_name'] . '"><img src="' . $imagePath  . $row['img_name'] .'"></a>';
					echo '<div class="carousel-caption img-responsive">';
					echo '<h3></h3>';
					echo '<p></p>';
					echo '</div>';
					echo '</div>';
				}
			}
		}
		else {
			echo "No results";
		}
		$conn->close();
		return false;
	}

?>

