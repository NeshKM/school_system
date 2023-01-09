<?php

$link = mysqli_connect("localhost","root","","school_peter");

if ($link == false){
    die("Error connecting to server".mysqli_connect_error($link));
}