<?php

function getAllStudents() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM paarden";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
