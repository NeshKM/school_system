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
            <?php echo $_SESSION['first_name']." ".$_SESSION['second_name']; ?>
         </h1>
      </div>
   </header>
   <hr>
   <hr>
   <div>
      <div class="row">
         <div class="col-md-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-start" data-bs-toggle="modal"
               data-bs-target="#exampleModal">
               peter munene
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">peter munene</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <div class="card">

                           <div class="card-header">Subject:Inquiry about Fee</div>
                           <div class="card-body">
                              Name:peter munene
                              Subject:Inquiry about Fee
                              Message:Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                           </div>

                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <a href="./create_message.php" class="btn btn-primary">Reply</a>
                        <!-- <a href="">Reply</button> -->
                     </div>

                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   </div>
   </div>


   <?php
   include '../footer.php';
   ?>
</body>

</html>