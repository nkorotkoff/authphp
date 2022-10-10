<?php
    require_once (dirname(__FILE__,2) ."../config/db.php");
global $success_msg, $email_exist, $emptyError1, $emptyError2;

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $emailCheck = $connection->query("SELECT * FROM users WHERE email = '{$email}' ");
    $rowCount = $emailCheck->fetchColumn();

    if (!empty($email) && !empty($password)) {
        if ($rowCount > 0) {
            $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
        } else {

            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = $connection->query("INSERT INTO users (email,password, date_time) 
            VALUES ( '{$email}','{$password_hash}', now())");

            if (!$sql) {
                die("MySQL query failed!" . mysqli_error($connection));
            } else {
                $success_msg = '<div class="alert alert-success">
                        User registered successfully!
                </div>';
            }
        }
    }
}else {
        if(empty($email)){
            $emptyError1 = '<div class="alert alert-danger">
                    Email is required.
                </div>';
        }
        if(empty($password)){
            $emptyError2 = '<div class="alert alert-danger">
                    Password is required.
                </div>';
        }
    }
