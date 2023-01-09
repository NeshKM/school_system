<?php

// include '../../../backend/handle_login.php';

// session_start();

// // check if user has looged in?

// if ($_SESSION["loggedin"]!==true ){

//    header("location:../login.php");
//    exit();
// }


// $_SESSION["first_name"];
// $_SESSION["second_name"];
// $_SESSION["date_of_birth"];
// $_SESSION["class"];
// $_SESSION["gender"];
// $_SESSION["phone"];
// $_SESSION["email"];
// $_SESSION["role"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../bootstrap-5.2.2-dist/css/bootstrap.min.css">
  <script src="../../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/styles.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>Accounts</title>
</head>

<body class="m-1 p-1">
  <header>
    <div class="col-2">
      <a class="" href="home.html"><img src="../../images/laravel.png" alt="logo" class="img-fluid logo"></a>

    </div>
    <div>
      <h1>JEPPE PRIMARY SCHOOL</h1>
    </div>
    <div>
      <h1>
        <?php echo $_SESSION["first_name"] ." ". $_SESSION["second_name"] ?>
      </h1>
    </div>
  </header>
  <hr>
  <hr>
  <main>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="notice-tab" data-bs-toggle="tab" data-bs-target="#notice-tab-pane"
          type="button" role="tab" aria-controls="notice-tab-pane" aria-selected="true">Notice Board</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="classmate-tab" data-bs-toggle="tab" data-bs-target="#classmate-tab-pane"
          type="button" role="tab" aria-controls="classmate-tab-pane" aria-selected="false">My Classmates</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="subject-tab" data-bs-toggle="tab" data-bs-target="#subject-tab-pane" type="button"
          role="tab" aria-controls="subject-tab-pane" aria-selected="false">My Subject</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="assignments-tab" data-bs-toggle="tab" data-bs-target="#assignments-tab-pane"
          type="button" role="tab" aria-controls="assignments-tab-pane" aria-selected="false">Assignments</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="fees-tab" data-bs-toggle="tab" data-bs-target="#fees-tab-pane" type="button"
          role="tab" aria-controls="fees-tab-pane" aria-selected="false">Fees</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="results-tab" data-bs-toggle="tab" data-bs-target="#results-tab-pane" type="button"
          role="tab" aria-controls="results-tab-pane" aria-selected="false">Results</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
          role="tab" aria-controls="profile-tab-pane" aria-selected="false">My Profile</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="message-tab" data-bs-toggle="tab" data-bs-target="#message-tab-pane" type="button"
          role="tab" aria-controls="message-tab-pane" aria-selected="false">Contact Us</button>
      </li>

    </ul>
    <div class="tab-content mb-2" id="myTabContent">
      <div class="tab-pane fade show active" id="notice-tab-pane" role="tabpanel" aria-labelledby="notice-tab"
        tabindex="0">
        <h3 class="text-center">Notice Board</h3>
        <table class="table text-center table-bordered table-hover">
          <tbody>

            <tr>
              <th scope="row"><b>S/NO</b></th>
              <td colspan="3"><b>NOTICE</b></td>
              <td><b>RELEASE DATE</b></td>
              <td><b>LINK</b></td>
              <td><b>STATUS</b></td>
            </tr>
            <tr>
              <th scope="row"">1</th>
                    <td colspan=" 3"><a href="#">NOTICE TO ALL STUDENTS - FEE COMPLIANCE</a></td>
              <td>5th Oct 2022</td>
              <td><a href="#">View Notice</a></td>
              <td>Active</td>
            </tr>
            <tr>
              <td scope="row"">2</td>
                    <td colspan=" 3"><a href="#">NOTICE TO ALL STUDENTS - FEE COMPLIANCE</a></td>
              <td>5th Oct 2022</td>
              <td><a href="#">View Notice</a></td>
              <td>Active</td>
            </tr>
            <tr>
              <td scope="row"">3</td>
                    <td colspan=" 3"><a href="#">NOTICE TO ALL STUDENTS - FEE COMPLIANCE</a></td>
              <td>5th Oct 2022</td>
              <td><a href="#">View Notice</a></td>
              <td>Active</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="classmate-tab-pane" role="tabpanel" aria-labelledby="classmate-tab" tabindex="0">
        <h3 class="text-center">Classmates</h3>
        <div class="row">
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Name:PETER MUNENE</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text"> User ID dhrm202061565</p>

              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="tab-pane fade" id="subject-tab-pane" role="tabpanel" aria-labelledby="subject-tab" tabindex="0">
        <h3 class="text-center">Subject</h3>
        <div class="row">
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Kiswahili</p>
              </div>
              <div class="card-body">
                <img src="../../images/laravel.png" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">English</p>
              </div>
              <div class="card-body">
                <img src="../../../images/laravel.png" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">CRE</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Social studies</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Science</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Kiswahili</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">English</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">CRE</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Social studies</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="height: 75%;">
              <div class="card-header">
                <p class="card-text">Science</p>
              </div>
              <div class="card-body">
                <img src="../../../images/undraw_profile.svg" class="card-img-top" alt="..." height="40%">
                <p class="card-text">Teacher</p>
                <p class="card-text">Peter Munene</p>

              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="tab-pane fade" id="assignments-tab-pane" role="tabpanel" aria-labelledby="assignments-tab"
        tabindex="0">
        <h3 class="text-center">Assignment</h3>
        <table class="table text-center table-bordered table-hover">

          <tbody>

            <tr>
              <th scope="row"><b>#</b></th>
              <td><b><a href="#">Assignment Title</a></b></td>
              <td><b><a href="#">Status</a></b></td>
              <td><b><a href="#">Open Date</a></b></td>
              <td><b><a href="#">Due Date</a></b></td>
            </tr>
            <tr>
              <th scope="row"><b>1</b></th>
              <td><b><a href="#">CAT 2</a></b></td>
              <td class="text-success"><b>Open</b></td>
              <td><b>Mar 10, 2021 6:45 AM</b></td>
              <td class="text-danger"><b>Apr 16, 2021 11:55 PM</b></td>
            </tr>
            <tr>
              <th scope="row"><b>2</b></th>
              <td><b><a href="#">CAT 2</a></b></td>
              <td class="text-danger"><b>Returned</b></td>
              <td><b>Mar 10, 2021 6:45 AM</b></td>
              <td class="text-danger"><b>Apr 16, 2021 11:55 PM</b></td>
            </tr>
            <tr>
              <th scope="row"><b>3</b></th>
              <td><b><a href="#">CAT 2</a></b></td>
              <td class="text-danger"><b>Returned</b></td>
              <td><b>Mar 10, 2021 6:45 AM</b></td>
              <td class="text-danger"><b>Apr 16, 2021 11:55 PM</b></td>
            </tr>
            <tr>
              <th scope="row"><b>4</b></th>
              <td><b><a href="#">CAT 2</a></b></td>
              <td class="text-danger"><b>Returned</b></td>
              <td><b>Mar 10, 2021 6:45 AM</b></td>
              <td class="text-danger"><b>Apr 16, 2021 11:55 PM</b></td>
            </tr>
            <tr>
              <th scope="row"><b>5</b></th>
              <td><b><a href="#">CAT 2</a></b></td>
              <td class="text-success"><b>Open</b></td>
              <td><b>Mar 10, 2021 6:45 AM</b></td>
              <td class="text-danger"><b>Apr 16, 2021 11:55 PM</b></td>
            </tr>


          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="fees-tab-pane" role="tabpanel" aria-labelledby="fees-tab" tabindex="0">
        <h3 class="text-center">Fees</h3>
        <table class="table text-center table-bordered table-hover">

          <tbody>

            <tr>
              <th scope="row"><b>Transaction/Receipt Number</b></th>
              <td><b>Date</b></td>
              <td><b>Description</b></td>
              <td><b>Debits DR</b></td>
              <td><b>Credits CR</b></td>
              <td><b>Balance</b></td>
            </tr>
            <tr>
              <th scope="row">2020/2021-Jan/Apr Fees</th>
              <td>10-FEB-2021</td>
              <td>Fees Payable</td>
              <td>37,550.00</td>
              <td></td>
              <td>37,550.00</td>
            </tr>
            <tr>
              <th scope="row">2020/2021-Jan/Apr Fees</th>
              <td>10-FEB-2021</td>
              <td>Fees Payable</td>
              <td>37,550.00</td>
              <td></td>
              <td>37,550.00</td>
            </tr>
            <tr>
              <th scope="row">2020/2021-Jan/Apr Fees</th>
              <td>10-FEB-2021</td>
              <td>Fees Payable</td>
              <td>37,550.00</td>
              <td></td>
              <td>37,550.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="results-tab-pane" role="tabpanel" aria-labelledby="results-tab" tabindex="0">
        <h3 class="text-center">Results</h3>
        <table class="table text-center table-bordered table-hover">

          <tbody>
            <tr>
              <td colspan="100%">
                2021/2022 May/Aug
              </td>

            </tr>

            <tr>
              <th><b>Cumulative</b></th>
              <td><b>Code</b></td>
              <td colspan="4"><b>Course Title</b></td>
              <td><b>Marks</b></td>
              <td><b>Grade</b></td>
            </tr>
            <tr>
              <th scope="row"><b>1</b></th>
              <td><b>DAF1104</b></td>
              <td colspan="4"><b>Quantitative Methods </b></td>
              <td><b>80</b></td>
              <td><b>A</b></td>
            </tr>
            <tr>
              <th scope="row"><b>2</b></th>
              <td><b>DAF1104</b></td>
              <td colspan="4"><b>Quantitative Methods </b></td>
              <td><b>80</b></td>
              <td><b>A</b></td>
            </tr>
            <tr>
              <th scope="row"><b>3</b></th>
              <td><b>DAF1104</b></td>
              <td colspan="4"><b>Quantitative Methods </b></td>
              <td><b>80</b></td>
              <td><b>A</b></td>
            </tr>
            <tr>
              <th scope="row"><b>4</b></th>
              <td><b>DAF1104</b></td>
              <td colspan="4"><b>Quantitative Methods </b></td>
              <td><b>80</b></td>
              <td><b>A</b></td>
            </tr>


          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

        <h3 class="text-center">My Profile</h3>
        <table class="table text-center table-bordered table-hover">

          <tbody>



            <tr>
              <td colspan="100%"><img src="../../images/undraw_profile.svg" alt="" class="img-fluid"
                  style="height: 150px;"></td>
            </tr>
            <tr>
              <td>First Name :</td>
              <td> <?php echo $_SESSION["first_name"];?></td>
            </tr>
            <tr>
              <td>Second Name :</td>
              <td><?php echo $_SESSION["second_name"];?></td>
            </tr>
            <tr>
              <td>Class :</td>
              <td><?php echo $_SESSION["class"];?></td>
            </tr>
            <tr>
              <td>Gender :</td>
              <td><?php echo $_SESSION["gender"];?></td>
            </tr>
            <tr>
              <td>Date of Birth :</td>
              <td><?php $_SESSION["date_of_birth"] ;?></td>
            </tr>
            <tr>
              <td>Phone :</td>
              <td><?php echo $_SESSION["phone"];?></td>
            </tr>
            <tr>
              <td>Email :</td>
              <td><?php echo $_SESSION["email"];?></td>
            </tr>



          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="message-tab-pane" role="tabpanel" aria-labelledby="message-tab" tabindex="0">

        <h3 class="text-center">Contact Us</h3>

        <form action="../../../backend/handle_messages.php" method="POST">
          <div class="card text-center" style="margin-left: auto;margin-right:auto;">

            <div class="card-header">Messages</div>
            <div class="card-body ">
              <div class="form-group row m-2">
                <label for="first_name" class="col-sm-2 col-form-label col-form-label-lg">Name </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="first_name" placeholder="Name"
                    name="first_name" required>
                </div>
              </div>

              <div class="form-group row m-2">
                <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email </label>
                <div class="col-sm-10">
                  <input type="email" class="form-control form-control-lg" id="email" placeholder="Email" name="email"
                    required>
                </div>
              </div>
              <div class="form-group row m-2">
                <label for="subject" class="col-sm-2 col-form-label col-form-label-lg">Subject </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-lg" id="subject" placeholder="Subject"
                    name="subject" required>
                </div>
              </div>
              <div class="form-group row m-2">
                <label for="message" class="col-sm-2 col-form-label col-form-label-lg">Message </label>
                <div class="form-outline col-sm-10 mb-4">
                  <textarea class="form-control form-control-lg" id="message" rows="4"
                    placeholder="Message...."></textarea>

                </div>
              </div>


              <button type="submit" name="send" class="btn btn-primary btn-block mb-4">
                Send
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </main>

  <?php
  include '../footer.php';
  ?>

</body>

</html>