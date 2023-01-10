<?php
include 'config.php';
include '../front-end/html/admission/classes/classes_header.php'
?>

<body>

<header>
    <div class="col-2">
      <a class="" href="home.html"><img src="../../../images/laravel.png" alt="logo" class="img-fluid logo"></a>

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
	$query = $_GET['query']; 
	// gets value sent over search form

	
	if($query){ 
		
		$query = htmlspecialchars($query); 
		
	
        $sql = "SELECT * FROM `users` WHERE (`first_name` LIKE '%".$query."%') OR (`second_name` LIKE '%".$query."%')";
		
        $result=mysqli_query($link,$sql);

		
			
		
		
	  #check
      if ($result) {
        $data = mysqli_num_rows($result);
        #is there data here?
        if ($data > 0) {
            ?>
            <table class="table table-strip m-3 p-2 text-center">
                <tr>
                    <th>#</th>
                    <th>FIRST NAME</th>
                    <th>SECOND NAME</th>
                    <th>DATE OF BIRTH</th>
                    <th>EMAIL ADDRESS</th>
                    <th>PHONE</th>
                    <th>GENDER</th>
                    <th>ROLE</th>
                    <th>DELETE</th>
                    <th>UPDATE</th>
                </tr>

                <?php

                while ($row = mysqli_fetch_array($result)) {
                    
                    $id = $row['id'];
                    $first_name = $row["first_name"];
                    $second_name = $row["second_name"];
                    $date_of_birth = $row["date_of_birth"];
                    $email = $row["email"];
                    $phone = $row["phone"];
                    $gender = $row["gender"];
                    $role = $row["role"];
                   
                ?>
                    <tr>
                        <td>
                            <?php echo $id ?>
                        </td>
                        <td>
                            <?php echo $first_name ?>
                        </td>
                        <td>
                            <?php echo $second_name ?>
                        </td>
                        <td>
                            <?php echo $date_of_birth ?>
                        </td>
                        <td>
                            <?php echo $email ?>
                        </td>
                     
                        <td>
                            <?php echo $phone ?>
                        </td>
                        <td>
                            <?php echo $gender ?>
                        </td>
                        <td>
                            <?php echo $role ?>
                        </td>
                        <td>
                            <a href="delete_staff.php?id=<?php echo $id  ?>"><span class='fa fa-trash'></span></a>
                        </td>
                        <td>
                            <a href="update_profile.php?id=<?php echo $id  ?>"><span class='fa fa-refresh'></span></a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </table>
</div>

<?php
        } else {
            echo "no records were found in your database!";

        }
    } else {
        echo "no query was sent!";
    }
}


?>

<?php
include '../front-end/html/footer.php';
?>

</body>
</html>