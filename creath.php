<?php
var_dump($_POST);
echo $_POST["firstname"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$subjects = $_POST["subjects"];
//echo "mijn voleddige naam is: " . $_POST["firstname"] . " " . $_POST["subject"] . " " . $_POST["lastname"]. " " . $_POST["email"]. "jaar oud". $_POST["woonplaats"];

echo "<hr>";
//  hier worden de gegevens die nodig voor verbinding met de 
$dbserver = "localhost";
$dbuser = "root";
$password = "";
$dbname = "opendag";

$conn = mysqli_connect($dbserver, $dbuser, $password, $dbname);


// $sql ="INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `age`,`woonplaats`,`gender`)
//          VALUES (NULL, '$firstname', '$infix', '$lastname', '$age','$woonplaats','$gender');";
 $sql= "INSERT INTO `messageuss` (`id`,
                                    `firstname`, 
                                    `lastname`,
                                    `email`, 
                                    `phonenumber`, 
                                    `subjects`)
                                        VALUES 
                                        ( NULL, 
                                        '$firstname', 
                                        '$lastname', 
                                        '$email',
                                        '$phonenumber', 
                                        '$subjects');";
$result = mysqli_query($conn,$sql);

if($result){
    header("Location: index.php");  
}

?>
