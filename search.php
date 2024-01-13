<?php
//connection to server with animal info
$servername = "";
$database = "";
$username = "";
$password = "";

echo "Connection Completed";

//array that holds animalhabits
$animalhabits=array();

//query that generates animal id for specific animal name their likes and dislikes
$sql="SELECT id, name, likes, dislikes FROM animalhabits";
$results=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($results)) {
	array_push($animalhabits, $row);
}

//array that holds animalinfo
$animalinfo=array();

//query that generates animal id for specific animal name, sex and age
$sql="SELECT id, name, sex, age,  FROM animalinfo";
$results=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($results)) {
	array_push($animalinfo, $row);
}

//array that holds animalhabits
$animalrecords=array();

//query that generates animal id for specific animal name, the shots they have recieve and how often they have been to the doc
$sql="SELECT id, name, shots, docvisits FROM animalrecords";
$results=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($results)) {
	array_push($animalrecords, $row);
}

mysqli_close($conn);
?>

