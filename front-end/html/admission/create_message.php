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

    <form action="../../../backend/handle_messages.php" method="POST">
        <div class="card text-center" style="margin-left: auto;margin-right:auto;">

            <div class="card-header">Messages</div>
            <div class="card-body ">
                <div class="form-group row m-2">
                    <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Name </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="name" placeholder="Name"
                            name="name" required>
                    </div>
                </div>

                <div class="form-group row m-2">
                    <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Email"
                            name="email" required>
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
                        <textarea class="form-control form-control-lg" id="message" rows="4" placeholder="Message...."></textarea>

                    </div>
                </div>


                <button type="submit" name="send" class="btn btn-primary btn-block mb-4">
                    Send
                </button>
            </div>
            <div class="card-footer"><b>Thank you!</b></div>
        </div>
    </form>
    </main>


    <?php
   include '../footer.php';
   ?>
</body>

</html>