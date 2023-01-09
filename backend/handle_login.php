

<?php
include "config.php";

if (isset($_POST['login'])) {

    $user_email = $_POST["email"];
    $user_password = $_POST["password"];

     //compare
     $sql = "SELECT * FROM `users` WHERE email='$user_email'";

    $result = mysqli_query($link, $sql);

//if  query runs
    if ($result) {

        $data = mysqli_num_rows($result);


        if ($data == 1) {

            while ($row = mysqli_fetch_array($result)) {

                $id = $row['id'];
                $first_name = $row["first_name"];
                $second_name = $row["second_name"];
                $date_of_birth = $row["date_of_birth"];
                $class = $row["class"];
                $gender = $row["gender"];
                $phone = $row["phone"];
                $email = $row["email"];
                $password = $row["password"];
                $role = $row["role"];

                // verify the password
                if (password_verify($userPassword, $password)) {
                                  
                // check for user type if its superadmin or just user
                    if ($row['role'] == 'student') {

                        session_start();
                        $_SESSION["loggedin"]=true;
                        $_SESSION["id"] = $id;
                        $_SESSION["first_name"]=$first_name;
                        $_SESSION["second_name"]=$second_name;
                        $_SESSION["date_of_birth"]=$date_of_birth;
                        $_SESSION["class"]=$class;
                        $_SESSION["gender"]=$gender;
                        $_SESSION["phone"]=$phone;
                        $_SESSION["email"]=$email;
                        $_SESSION["role"]=$role;


                        header("location:../front-end/html/students/student_accounts.php");

                    }
                    elseif ($row['role'] == 'admin') {

                        session_start();
                        $_SESSION["loggedin"]=true;
                        $_SESSION["id"] = $id;
                        $_SESSION["first_name"]=$first_name;
                        $_SESSION["second_name"]=$second_name;
                        $_SESSION["date_of_birth"]=$date_of_birth;
                        $_SESSION["class"]=$class;
                        $_SESSION["gender"]=$gender;
                        $_SESSION["phone"]=$phone;
                        $_SESSION["email"]=$email;
                        $_SESSION["role"]=$role;

                        header("location:../front-end/html/admission/admin.php");

                    }elseif($row['role'] == 'staff'){
                        session_start();
                        $_SESSION["loggedin"]=true;
                        $_SESSION["id"] = $id;
                        $_SESSION["first_name"]=$first_name;
                        $_SESSION["second_name"]=$second_name;
                        $_SESSION["date_of_birth"]=$date_of_birth;
                        $_SESSION["class"]=$class;
                        $_SESSION["gender"]=$gender;
                        $_SESSION["phone"]=$phone;
                        $_SESSION["email"]=$email;
                        $_SESSION["role"]=$role;

                        header("location:../front-end/html/admission/all_staff.php");
                    }
                    else {
                        echo "Please assign a user role";
                    }
                }
                else {
                    echo "Wrong password!";
                }

            }
        }
        else {
            echo "No such email address found";

        }
    }


}