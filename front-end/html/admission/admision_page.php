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
                     <form action="" class="m-1">
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
                        <label for="role">Role :</label>
                        <select name="role" id="role">
                           <option value="admin" name="role">Admin</option>
                           <option value="staff" name="role">Staff</option>

                        </select>
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



   <h1>Addmission page</h1>

   <?php
   include '../footer.php';
   ?>
</body>

</html>