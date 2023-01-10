<?php

include "../../../backend/config.php";
include "classes/classes_header.php";
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