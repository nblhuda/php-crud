<?php
    session_start();
    // Connect to database
    $db = mysqli_connect('localhost', 'root', '', 'crud');

    // initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

    //if save button is clicked
    if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
    }
    
    //retrieve records
    $results = mysqli_query($db, "SELECT * FROM info")
?>