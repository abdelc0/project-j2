<?php

var_dump($_POST);
include 'connect_db.php';

$rating = $_POST['rating'];

$hoezo_mboutrecht = $_POST['hoezo-mboutrecht'];

$lokaal_te_vinden = $_POST['lokaal-te-vinden'];

$voornaam = $_POST['voornaam'];

$achternaam = $_POST['achternaam'];

$sql = "INSERT INTO enquete (rating, waarommbou, lokaaltevinden, voornaam, achternaam) VALUES (:rating, :hoezo_mboutrecht, :lokaal_te_vinden, :voornaam, :achternaam)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':rating', $rating);
$stmt->bindParam(':hoezo_mboutrecht', $hoezo_mboutrecht);
$stmt->bindParam(':lokaal_te_vinden', $lokaal_te_vinden);
$stmt->bindParam(':voornaam', $voornaam);
$stmt->bindParam(':achternaam', $achternaam);

$stmt->execute();

// select all

$sql = "SELECT * FROM enquete";


$stmt = $conn->prepare($sql);
$stmt->execute();
// show result  
$result = $stmt->fetchAll();

//display result
foreach ($result as $row) {
    echo $row['rating'] . " " . $row['waarommbou'] . " " . $row['lokaaltevinden'] . ""  . $row['voornaam']. "" . $row['achternaam'] ."<br>";
}
