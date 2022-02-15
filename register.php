<?php
	// instantiate variables 
	// variableName = $_HTTPrequest['db_tableName']'

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	// Database connection
	// Establish connection - new mysqli('localhost','DBusername','DBpassword','DBname',)
	$conn = new mysqli('localhost','root','','registerform');


	// If else statement handles errors 
	// IF DB connection fails. Then "echo" (print,console.log) $conn->connect_error 
	if($conn->connect_error){

		echo "$conn->connect_error";
		// die() - kills connection
		die("Connection Failed : ". $conn->connect_error);

		// else (if connection is successful)
	} else {
		// prepare insert statement
		$stmt = $conn->prepare("insert into reg(firstname, lastname, email, password) values(?, ?, ?, ?)");

		// bind variables to parameters ("ssss") = string && i = integer 
		$stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

		// execute the statement
		$execval = $stmt->execute();
		
		// print success message to page
		echo "Registration successful...";

		// Kill connection
		$stmt->close();
		$conn->close();

		// refresh page & redirect to home
		header("Refresh:1; url=registration.php");
	}

	// reviewing 

	// are commits working?
