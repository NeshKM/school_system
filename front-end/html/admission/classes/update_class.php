<?php

include "./classes_header.php";

include "../../../../backend/config.php";



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
        echo "<a class='btn btn-primary col-md-4' href='view.php'>BACK</a>";
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"
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
                        <input  class="btn btn-primary col-md-4" type="button" value="Go back!" onclick="history.back()">

                    </div>

                </div>


            </form>


        </div>
    </div>
</div>
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