<?php

function getAllHorses() 
{
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("SELECT * FROM huur");
		$stmt->execute();
		$result = $stmt->fetchAll();
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
 
	$conn = null;
 
	return $result;
}

function getHorse($id)
{
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("SELECT * FROM huur WHERE huurID = :id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		$result = $stmt->fetch();
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
 
	$conn = null;
 
	return $result;
}

function createHorse($data)
{
	try
	{
		$conn=openDatabaseConnection();

		$naam = $data['naam'];
		$image = $data['image'];
		$discription = $data['discription'];
		$lengte = $data['lengte'];
		$tijd = $data['tijd'];
		$ras = $data['ras'];


		$stmt = $conn->prepare("INSERT INTO `huur`(`naam`, `image`, `discription`, `lengte`, `tijd`, `ras`, verhuurd) VALUES (:naam, :image, :discription, :lengte, :tijd, :ras, 0)");

		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":image", $image);
		$stmt->bindParam(":discription", $discription);
		$stmt->bindParam(":lengte", $lengte);
		$stmt->bindParam(":tijd", $tijd);
		$stmt->bindParam(":ras", $ras);

		$stmt->execute();

		$url = URL;

		header("Location: $url paard/huur");
	}

	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
 
	$conn = null;
 
	return $result;
}
