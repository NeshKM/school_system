<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../bootstrap-5.2.2-dist//css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="../../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
      integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>
<body>
<header>
      <div class="col-2">
         <a class="" href="home.html"><img src="../../images/laravel.png" alt="logo" class="img-fluid logo"></a>

      </div>
      <div>
         <h1>JEPPE PRIMARY SCHOOL</h1>
      </div>
      <div>
         <h1>
            <?php echo $_SESSION['first_name']." ".$_SESSION['second_name']; ?>
         </h1>
      </div>
   </header>
   <hr>
   <hr>
<?php


include "../../../backend/config.php";
// include "classes/classes_header.php";



if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $up_first_name = $_POST["first_name"];
    $up_second_name = $_POST["second_name"];
    $up_date_of_birth = $_POST["date_of_birth"];
    $up_email = $_POST["email"];
    $up_phone = $_POST["phone"];
    $up_gender = $_POST["gender"];
    $up_role = $_POST["role"];



    $up_sql = "UPDATE `users` SET `first_name`='$up_first_name',`second_name`='$up_second_name ',`date_of_birth`='$up_date_of_birth',`email`='$up_email',`phone`='$up_phone',`gender`='$up_gender',`role`='$up_role'   WHERE id ='$id'";

    $up_result = mysqli_query($link, $up_sql);

    if ($up_result) {

        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-success'>Records have been updated!</p>";
        echo "<a class='btn btn-primary col-md-4' href='all_staff.php'>BACK</a>";
        echo "</div>";
    } else {
        echo "Error executing query $up_sql" . mysqli_error($link);
    }
} else {

    if (isset($_GET["id"]) and !empty($_GET["id"])) {

        $id = $_GET["id"];

        $sql = "SELECT * FROM `users` WHERE id='$id'";

        $result = mysqli_query($link, $sql);

        if ($result) {

            $data = mysqli_num_rows($result);

            if ($data == 1) {

                $row = mysqli_fetch_array($result);

                $first_name = $row["first_name"];
                $second_name = $row["second_name"];
                $date_of_birth = $row['date_of_birth'];
                $email = $row["email"];
                $phone = $row["phone"];
                $gender = $row["gender"];
                $role = $row["role"];


?>
<div class="row m-2">
    <div class="text-primary h3">Update the Record</div>
</div>
<div class="row m-2">
    <div class="card">
        <div class="card-body">
            <form action="update_profile.php" method="post"
                enctype="multipart/form-data">
                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">First Name</label>
                        <input class="form-control" type="text" name="first_name" value="<?php echo $first_name; ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Second Name</label>
                        <input class="form-control" type="text" name="second_name" value="<?php echo $second_name; ?>">
                    </div>

                </div>
                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Date Of Birth</label>
                        <input class="form-control" type="date" name="date_of_birth"
                            value="<?php echo $date_of_birth; ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Email</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Phone</label>
                        <input class="form-control" type="tel" name="phone" value="<?php echo $phone; ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Gender</label>
                        <div class="col-sm-10">
                            <select name="gender" id="gender" class="form-control form-control-lg">
                                <option value="male" name="gender">Male</option>
                                <option value="female" name="gender">Female</option>
                                <option value="other" name="gender">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Gender</label>
                        <div class="col-sm-10">
                            <select name="gender" id="gender" class="form-control form-control-lg">
                                <option value="admin" name="role">Admin</option>
                                <option value="staff" name="role">Staff</option>
                                <option value="student" name="role">Student</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div>
                    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                </div>

                <div class="row p-2">
                    <div class="col-md-12">

                        <input class="btn btn-primary col-md-4" type="submit" name="update" value="UPDATE">
                        <a  class="btn btn-primary col-md-4" href="./all_staff.php">Back</a>
                    

                    </div>

                </div>


            </form>


        </div>
    </div>
</div>
<?php
   include '../footer.php';
   ?>
</body>
<?php

            } else {
                echo "No record was found";
            }
        } else {
            echo "error executing query $sql" . mysqli_error($link);
        }
    } else {
        echo "id value not picked";
    }
}