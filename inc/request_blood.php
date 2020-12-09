<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/27/15
 * Time: 12:34 AM
 */


include_once('../init.php');


$name = mysql_real_escape_string($_POST["name"]);
$email = mysql_real_escape_string($_POST["email"]);
$address = mysql_real_escape_string($_POST["address"]);
$phone = mysql_real_escape_string($_POST["phone"]);
$area = mysql_real_escape_string($_POST["area"]);
$group = mysql_real_escape_string($_POST["group"]);
$amount = mysql_real_escape_string($_POST["amount"]);
$hospital = mysql_real_escape_string($_POST["hospital"]);



$query = "INSERT INTO blood_request (RQSTR_NAME, RQSTR_ADD, AREA, RQSTR_PHONE, RQSTR_EMAIL, BLOOD_GROUP, blood_amount, hospital)
        VALUES('$name', '$address', '$area', '$phone', '$email',  '$group' , $amount, '$hospital')";


$result = mysql_query($query, $bd);


if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $bd->error;
}

header("Location: ../index.php");



