<?php

include_once('../init.php');

$date = date("Y-m-d H:i:s");

$name = mysql_real_escape_string($_POST["name"]);
$email = mysql_real_escape_string($_POST["email"]);
$address = mysql_real_escape_string($_POST["address"]);
$phone = mysql_real_escape_string($_POST["phone"]);
$area = mysql_real_escape_string($_POST["area"]);
$group = mysql_real_escape_string($_POST["group"]);
$amount = mysql_real_escape_string($_POST["amount"]);
$age = mysql_real_escape_string($_POST["age"]);
$weight = mysql_real_escape_string($_POST["weight"]);


$query = "INSERT INTO donor_info (DNR_NAME, ADDRESS, AREA, PHONE, EMAIL )
            VALUES ('$name', '$address', '$area', '$phone', '$email'  )";


$result = mysql_query($query, $bd);

$temp = mysql_query("SELECT DNR_ID FROM donor_info WHERE EMAIL = '$email' ", $bd);
$temp = mysql_fetch_row($temp);

$query2 = "INSERT INTO blood_info ( donate_date,age, weight,BLOOD_GROUP,BLOOD_AMOUNT, DNR_ID, branch_name)
            VALUES ('$date', $age, $weight, '$group' ,$amount, $temp[0], '$area' )";


$result2 = mysql_query($query2, $bd);



if ($result && $result2) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $bd->error;
}

header("Location: ../admin.php");
