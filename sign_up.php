<?php

//Include database connection details
include 'init.php';

if (empty($_POST) === false) {
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $name = mysql_real_escape_string($_POST["name"]);
    $branch = mysql_real_escape_string($_POST["branch"]);

    if($_POST['branch'] == 'Mohakhali') {
        $branch = 1;
    }
    elseif ($_POST['branch'] == 'Banani') {
        $branch = 2;
    }
    elseif ($_POST['branch'] == 'Dhanmondi') {
        $branch = 3;
    }
    elseif ($_POST['branch'] == 'Gulshan') {
        $branch = 4;
    }


    if (empty($username) === true || empty($password) === true) {
        die();
    }

    //Create query
    $qry = "INSERT INTO employee_info(EMAIL,E_PASS, E_NAME, BRN_ID)
          VALUES('$username', '$password', '$E_NAME', $branch )";
    $result = mysql_query($qry);

}




    if ($result ) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $bd->error;
    }

    header("Location: ../admin.php");
