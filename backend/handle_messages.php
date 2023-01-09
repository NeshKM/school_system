<?php

include "config.php";


if (isset($_POST["send"]) ){

    $name = $_POST["name"];
    $email =$_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    $sql = "INSERT INTO `messages`(`name`, `email`, `subject`, `message`)  VALUES ('$name','$email','$subject','$message')";

    $result=mysqli_query($link,$sql);

        if ($result){
            echo "Message sent";
            header("Location: {$_SERVER['HTTP_REFERER']}");

        }else{
            echo "Error executing query".mysqli_error($link);
        }


    
    mysqli_close($link);

}