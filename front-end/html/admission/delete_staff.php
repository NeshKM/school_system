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
session_start();

$sql = "SELECT * FROM `users` ";
#execute query
$result = mysqli_query($link, $sql);

#check
if ($result) {
    $data = mysqli_num_rows($result);
    #is there data here?
    if ($data > 0) {


        while ($row = mysqli_fetch_array($result)) {


            $id = $row['id'];
            $first_name = $row["first_name"];
            $second_name = $row["second_name"];
            $date_of_birth = $row["date_of_birth"];
            $email = $row["email"];
            $phone = $row["phone"];
            $gender = $row["gender"];
            $role = $row["role"];

        }
    }
}

if (isset($_POST["submit_delete"]) and !empty($_POST["id"])) {
    $id = $_POST["id"];
    $sql_delete = "DELETE FROM `users` WHERE id='$id' ";
    $result = mysqli_query($link, $sql_delete);

m



    if ($result) {
        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-danger'>Record deleted Successfully</p>";
        echo "</div>";
        header("Location: {$_SERVER['HTTP_REFERER']}");
    } else {
        echo "Error executing query $sql" . mysqli_error($link);
    }
} else {
}

?>


<body>
    <div class="container">


        <div class="row m-2">
            <div class="alert alert-warning">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <div class="p-2 text-center">
                        <label class="form-label">Are you sure you want to delete this record?</label> <br>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    </div>
                    <div class="p-2 text-center">
                        <input type="submit" name="submit_delete" value="YES" class="btn btn-danger col-md-3">
                        <input  class="btn btn-primary col-md-3" type="button" value="NO" onclick="history.back()">
                        
                    </div>
                </form>

            </div>
        </div>

    </div>
</body>

<?php
include '../../footer.php'
?>
</html>