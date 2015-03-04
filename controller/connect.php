<?php
	function get_menu() {

		include $_SERVER['DOCUMENT_ROOT'] . '/hugomassarri2015/assets/assets.php';

		//Create connection
		$conn = new mysqli($servername, $username, $password, $db);

		//Check
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		//Debug
		//echo 'Connected to: ' . $db . '<br />';

		$get_menu = "SELECT menu_name, menu_url FROM menu";
		$result = $conn->query($get_menu);

		if ($result->num_rows > 0) {
			//output result
			while($row = $result->fetch_assoc()) {
				echo '<a href="' . $portfolioPath . $row['menu_url'] . '">' . $row['menu_name'] . '</a><br />';
			}
		}
		else {
			echo "No results";
		}

		$conn->close();

		return false;
	}

?>