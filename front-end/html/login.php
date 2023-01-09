<?php
  include "header.php";

  ?>
  <body class="container-fluid m-1 p-1">
    <header>
      <div class="col-2">
        <a class="" href="home.html"
          ><img src="../images/laravel.png" alt="logo" class="img-fluid logo"
        /></a>
      </div>
      <div>
        <h1 class="pt-3">JEPPE PRIMARY SCHOOL</h1>
      </div>
    </header>
 
    <hr>
    <main class="login_page">
      <div>
        <h1>WELCOME</h1>
      </div>
      <form action="../../backend/handle_login.php" method="POST">
      <div class="card text-center mt-5">
       
        <div class="card-header">Registered Students</div>
        <div class="card-body">
          <form action="" class="m-1">
            <div class="m-1">Email : <input type="email" name="email" required/></div>
            <div class="m-1">
              Password : <input type="password" name="password" id="" minlength="6" required/>
            </div>
            <div>
              <input type="submit" name="login" value="Sign in" />
            </div>
          </form>
        </div>
        <div class="card-footer"><b>Thank you!</b></div>
      </div>
      </form>
    </main>
 
<?php
include './footer.php';
?>
  </body>
</html>
