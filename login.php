<?php

//Include database connection details
include 'init.php';

if (empty($_POST) === false) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) === true || empty($password) === true) {
        die();
    }

    //Create query
    $qry = "SELECT * FROM employee_info WHERE EMAIL='$username' AND E_Pass='$password'";
    $result = mysql_query($qry);


    if ($result) {
        if (mysql_num_rows($result) > 0) {
            //Login Successful
            session_regenerate_id();
            $member = mysql_fetch_assoc($result);

            $_SESSION['loggedin'] = true;
            $_SESSION['SESS_MEMBER_ID'] = $member['E_ID'];
            $_SESSION['SESS_NAME'] = $member['E_NAME'];
            $_SESSION['SESS_PASS'] = $member['E_Pass'];

            session_write_close();

            header("location: admin.php");
            exit();
        }
        else {
            //Login failed
            $errmsg_arr[] = 'user name and password not found';
            $errflag = true;

            if ($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();

                exit();
            }
        }
    }
    else {
        die("Query failed");
    }
}