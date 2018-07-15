<?php
require_once 'connectDB.php';
try{
    $pdo = new PDO(DB_CONNECT_STRING, DB_USR, DB_PWD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die($e->getMessage());
}



$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phoneNumber'];
$school = $_POST['school'];
$allergies = $_POST['allergy'];
$allergyDescription = $_POST['allergyDescription'];
$shirtSize = $_POST['shirt_size'];
$sql = "INSERT INTO `wecode_studentregistration` (`SID`,  `First_Name`, `Last_Name`, `Email`, `Phone`, `School`, `Allergies`, `Allergy_Description`, `Shirt Size`) VALUES (NULL, '".htmlspecialchars($firstName)."', '" . htmlspecialchars($lastName) . "', '" . htmlspecialchars($email) . "', '" . htmlspecialchars($phone) . "', '" . htmlspecialchars($school) . "', '" . htmlspecialchars($allergies) . "', '" . htmlspecialchars($allergyDescription) . "', '" . htmlspecialchars($shirtSize) . "');";
$pdo->exec($sql);


?>
<h2><a href = "index.html"> Thank you for registering! Your application has been submitted. Click here to go back to the home page. </a> </h2>

