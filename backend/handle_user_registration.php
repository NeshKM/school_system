<?php

include "config.php";


if (isset($_POST["admit"]) ){

    $first_name = $_POST["first_name"];
    $second_name =$_POST["second_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $class = $_POST['class'];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_pass = $_POST["confirm_pass"];
    $role = $_POST["role"];


    // Validate

    if (strlen($password)< 6){
        $pass_error = "Password must have more than 6 characters";
        echo $pass_error;
    }else{
        $store_pass = password_hash($password,PASSWORD_DEFAULT);
    }

    if ($confirm_pass != $password){
        $con_pass_err="Passwords did not Match!";
        echo $con_pass_err;
    }


    if (empty($pass_error) and empty($con_pass_err)){

        $sql = "INSERT INTO `users`(`first_name`, `second_name`, `date_of_birth`, `class`, `gender`, `phone`, `email`, `password`,`role`)  
                 VALUES ('$first_name','$second_name','$date_of_birth','$class','$gender','$phone','$email','$role','$storePass')";

        $result=mysqli_query($link,$sql);

        if ($result){
            echo "You have been registered";
            header("location:../front-end/html/admission/admin.php");

        }else{
            echo "Error executing query".mysqli_error($link);
        }


    }
    mysqli_close($link);

}
