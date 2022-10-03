<?php
include("./functions.php");
include("./connect_db.php");

var_dump($_POST);
$vraag1 = $_POST["vraag1"];
$vraag2 = $_POST["vraag2"];
$vraag3 = $_POST["vraag3"];
$vraag4 = $_POST["vraag4"];
$vraag5 = $_POST["vraag5"];
//echo "mijn voleddige naam is: " . $_POST["firstname"] . " " . $_POST["subject"] . " " . $_POST["lastname"]. " " . $_POST["email"]. "jaar oud". $_POST["woonplaats"];

echo "<hr>";
//  hier worden de gegevens die nodig voor verbinding met de 



// $sql ="INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `age`,`woonplaats`,`gender`)
//          VALUES (NULL, '$firstname', '$infix', '$lastname', '$age','$woonplaats','$gender');";
 $sql= "INSERT INTO `enquete-veranderen` (`id`,
                                    `vraag1`, 
                                    `vraag2`,
                                    `vraag3`,   
                                    `vraag4`,
                                    `vraag5`)
                                        VALUES 
                                        ( NULL, 
                                        '$vraag1', 
                                        '$vraag2',
                                        '$vraag3',
                                        '$vraag4',
                                        '$vraag5');";
$result = mysqli_query($conn,$sql);

if($result){
    header("refresh:0.1; url=./index.php?content=message&alert=message-succes");  
}
else{
    header("refresh:0.1; url=./index.php?content=message&alert=message-error");
}

?>

