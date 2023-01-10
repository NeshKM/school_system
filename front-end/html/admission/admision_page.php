<?php
include './admin_header.php';
?>

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
            PETER MUNENE
         </h1>
      </div>
   </header>
   <hr>
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Admit Staff
   </button>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Admission</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="card">

                  <div class="card-header">Admit staff</div>
                  <div class="card-body">
                     <form action="../../../backend/handle_user_registration.php" method="POST" class="m-1">
                        <div class="m-1">First Name : <input type="text" name="first_name" /></div>
                        <div class="m-1">Second Name : <input type="text" name="second_name" /></div>
                        <div class="m-1">Date of Birth : <input type="date" name="date_of_birth" /></div>
                        <div>

                        </div>
                        <div class="m-1">Gender :
                           <select name="gender">
                              <option value="male" name="gender">Male</option>
                              <option value="female" name="gender">Female</option>
                              <option value="other" name="gender">Other</option>
                           </select>
                        </div>
                        <div class="m-1">Phone No : <input type="tel" name="Phone" /></div>
                        <div class="m-1">Email : <input type="email" name="email" /></div>
                        <div class="m-1">
                           Password : <input type="password" name="password" id="password" />
                        </div>
                        <div class="m-1">
                           Cornfirm Password : <input type="password" name="confirm_pass" id="confirm_pass" />
                        </div>
                        <div>
                           <label for="role">Role :</label>
                           <select name="role" id="role">
                              <option value="admin" name="role">Admin</option>
                              <option value="staff" name="role">Staff</option>

                           </select>
                        </div>
                  </div>
               </div>
               <div class="card-footer"><b>Click admit to continue!</b></div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="admit" class="btn btn-primary">Admit</button>
         </div>
         </form>
      </div>
   </div>
   </div>
   <main class="login_page">

      <form action="../../backend/handle_user_registration.php" method="POST">
         <div class="card text-center " style="margin-left: auto;margin-right:auto;">

            <div class="card-header">Registered staff</div>
            <div class="card-body ">
               <div class="form-group row m-1">
                  <label for="first_name" class="col-sm-2 col-form-label col-form-label-lg">First Name </label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control form-control-lg" id="first_name" placeholder="First Name"
                        name="first_name" required>
                  </div>
               </div>
               <div class="form-group row m-1">
                  <label for="second_name" class="col-sm-2 col-form-label col-form-label-lg">First Name </label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control form-control-lg" id="second_name" placeholder="Second Name"
                        name="second_name" required>
                  </div>
               </div>
               <div class="form-group row m-1">
                  <label for="date_of_birth" class="col-sm-2 col-form-label col-form-label-lg">Date Of Birth </label>
                  <div class="col-sm-10">
                     <input type="date" class="form-control form-control-lg" id="date_of_birth"
                        placeholder="Date Of Birth" name="date_of_birth" required>
                  </div>
               </div>
               <div class="form-group row m-1">
                  <label for="gender" class="col-sm-2 col-form-label col-form-label-lg">Gender </label>
                  <div class="col-sm-10">
                     <select name="gender" id="gender" class="form-control form-control-lg">
                        <option value="male" name="gender">Male</option>
                        <option value="female" name="gender">Female</option>
                        <option value="other" name="gender">Other</option>
                     </select>
                  </div>
               </div>

               <div class="form-group row m-1">
                  <label for="phone" class="col-sm-2 col-form-label col-form-label-lg">Phone No </label>
                  <div class="col-sm-10">
                     <input type="tel" class="form-control form-control-lg" id="phone" placeholder="Phone No"
                        name="phone" required>
                  </div>
               </div>
               <div class="form-group row m-1">
                  <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email </label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control form-control-lg" id="email" placeholder="Email"
                        name="email" required>
                  </div>
               </div>
               <div class="form-group row m-1">
                  <label for="password" class="col-sm-2 col-form-label col-form-label-lg">Password </label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control form-control-lg" id="password" placeholder="Password"
                        name="password" required>
                  </div>
               </div>
               <div class="form-group row m-1">
                  <label for="confirm_pass" class="col-sm-2 col-form-label col-form-label-lg">Confirm Password </label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control form-control-lg" id="confirm_pass" placeholder="Confirm Password"
                        name="confirm_pass" required>
                  </div>
               </div>
               <div class="form-group row m-1">
                  <label for="role" class="col-sm-2 col-form-label col-form-label-lg">Role </label>
                  <div class="col-sm-10">
                     <select name="role" id="role" class="form-control form-control-lg">
                        <option value="admin" name="role">Admin</option>
                        <option value="staff" name="role">Staff</option>
                     </select>
                  </div>
               </div>

               <button type="submit" name="admit" class="btn btn-primary ">Admit</button>
            </div>
         </div>
      </form>
   </main>

   <?php
   include '../footer.php';
   ?>
</body>

</html>