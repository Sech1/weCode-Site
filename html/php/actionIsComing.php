<?php
/**
 * Created by PhpStorm.
 * User: jaredmschooley
 * Author: Jared M Schooley
 * Date: 2/3/18
 * Time: 2:07 AM
 */
include("connectDB.php");
include("email.php");
include("redirect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $firstName = strip_tags($_POST['firstText']);
    $lastName = strip_tags($_POST['lastText']);
    $tel = strip_tags($_POST['telText']);
    $email = strip_tags($_POST['emailText']);
    $allergy = strip_tags($_POST['allergyText']);
    $eduIns = strip_tags($_POST['educationalSelect']);
    $gender = strip_tags($_POST['gender']);
    $shirt = strip_tags($_POST['shirtSize']);
    $code = strip_tags($_POST['coding']);
    $file = $_FILES['resumeUpload']['name'];

    if( !((trim($firstName) === '') && (trim($lastName) === '') && (trim($tel) === '') &&
        (trim($eduIns) === '') && (trim($gender) === '') && (trim($shirt) === '')) ) {

    $firstName = str_replace('\'', '', $firstName);
    $lastName = str_replace('\'', '', $lastName);
    $allergy = str_replace('\'', '', $allergy);
    $eduIns = str_replace('\'', '', $eduIns);
    $file = str_replace('\'', '', $file);
    $file = str_replace('\"', '', $file);

    if(!($_FILES["resumeUpload"]["error"] == 4)) {
        $target = "../2018Documents/";
        $target = $target . $firstName . $lastName . '/';
        $target = $target . basename($_FILES['resumeUpload']['name']);
        $dir = "../2018Documents/";
        $dir = $dir . $firstName . $lastName;
        mkdir($dir, 0777, true); //create the directory

        if (move_uploaded_file($_FILES['resumeUpload']['tmp_name'], $target)) {
            //Tells you if its all ok
            // echo "The file ". basename( $_FILES['resumeUpload']['name']). " has been uploaded, and your information has been added to the directory";
        } else {
            //Gives and error if its not
            //  echo "Sorry, there was a problem uploading your file.";
        }
    }

    connect($firstName, $lastName, $tel, $email, $allergy, $eduIns, $gender, $shirt, $code, $file);
    emailReg($firstName, $lastName, $email);

    redirect();
    echo REDIRECT;
    scrollIntoView();
    exit();

    } else {
        echo "Something went wrong, please resubmit form - You must have javascript enabled.";
    }
} else {
    echo "Something went wrong, Please resubmit form";
}

function redirect()
{

    header(header("refresh:5;url=https://wecode.cs.siue.edu/")); /* Redirect browser */
}

function scrollIntoView()
{
     echo "<script>
            var elmnt = document.getElementById(\"register\");
            elmnt.scrollIntoView();
          </script>";
}

function connect($first, $last, $tel, $email, $allergy, $edu, $gender, $shirt, $code, $file)
{

    //$phone = "000-000-0000";
    //$allergies = "NUL";
    //$allDesc = "NONE";
    //$file = "NULL";

    $conn = new mysqli(DB_HOST, DB_USR, DB_PWD);
    $conn->select_db(DB_NAME);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //  print_r("CONNECTED SUCCESSFULLY");

    // $test = ("SELECT * FROM ehacks2018_registration");
    // print_r($conn->query($test));
    $insertData = "INSERT INTO wecode2018(
                          FirstName, LastName, Tel, Email, School, Gender, ShirtSize, Exp, PermissionSlip, Allergies)
                   VALUES ('$first','$last','$tel','$email','$edu','$gender','$shirt','$code','$file', '$allergy')";


    //$insertData = "INSERT INTO ehacks2018_registration ()
    //              VALUES ('$first', '$last', '$email', '$phone', '$edu', '$gender', '$eth', '$shirt', '$allergies', '$allDesc', '$file');";

    $conn->query($insertData);
}

function emailReg($firstName, $lastName, $email)
{

    $headers = "From: no-reply@wecode.cs.siue.edu" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    // $admin_email = "no-reply@ehacks.cs.siue.edu";
    $subject = "weCode 2018 Registration";

    $message = '<html><body>';
    $message .= EMAIL_HEADER;
    $message .= $firstName;
    $message .= ' ';
    $message .= $lastName;
    $message .= ' ';
    $message .= SIUE_BUS_EMAIL;

    //send email
    mail("$email", "$subject", "$message", "$headers");

    //Email response
    //echo "Thank you for contacting us!";
}


