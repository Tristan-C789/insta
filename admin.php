<?php

$link = mysqli_connect("localhost", "root", "root", "data");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Getting all values 
$sql = 'SELECT * FROM users';
$result = mysqli_query($link, $sql);

// Displaying all the values
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Créé le " . $row["date"]. "</br>- Nom d'utilisateur : " . $row["identifiant"] . "</br>- Mot de passe : " . $row["password"] . "</br></br>";
    }
} else {
    echo "0 résultats";
}

// Close connection
mysqli_close($link);


?>