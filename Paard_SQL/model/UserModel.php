<?php

function createUser($data)
{
	try
	{
		$conn=openDatabaseConnection();

		$name = $data['name'];
		$lastName = $data['lastName'];
		$phoneNumber = $data['phoneNumber'];
		$email = $data['email'];
		$password = $data['password'];


		$stmt = $conn->prepare("INSERT INTO `user`(`name`, `lastName`, `phoneNumber`, `email`, `password`) VALUES (:name, :lastName, :phoneNumber, :email, :password)");

		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":lastName", $lastName);
		$stmt->bindParam(":phoneNumber", $phoneNumber);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":password", $password);

		$stmt->execute();

		$url = URL;

		header("Location: $url/home/index");
	}

	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
 
	$conn = null;
 
	return $result;
}
