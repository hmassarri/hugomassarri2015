<?php

	/* Set the connnection environment variable */
	$myENV = 'local';

	/* Localhost DB Connection Settings */
	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = 'root';
	$dbName = 'hugo2015';

	/* Production DB Connection Settings */
	$dbHostProd = '';
	$dbUserProd = '';
	$dbPassProd = '';
	$dbNameProd = '';


	/* If myENV is set to Prod, use the Production connection settings, otherwise, default to localhost */
	if ($myENV == 'Prod')
	{
		$connectProd = mysqli_connect($dbHostProd, $dbUserProd, $dbPassProd, $dnNameProd);
		if (!$connectProd)
		{
			die('Error:  Cannot connect to database: ' . mysqli_error());

		}
		else
		{
			echo "Connected to " . $dbHostProd . " Database";
		}
	}
	else
	{
		$connectLocal = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
		/*
		if ($connectLocal)
		{
			echo "Connected to " . $dbName;
		}
		else
		{
			echo "You are not connected";
		}
		*/
	}
?>