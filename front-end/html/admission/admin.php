<?php
include './admin_header.php';
?>

<body>
    <main>
        <div class="row">
            <div class="col-3 bg-primary">
                <ul class="nav flex-column">
                    <li class="nav-item stylenav ">
                        <a aria-current="page" class="nav-link active" href="#">
                            <img src="../../images/undraw_profile_2.svg" class="img-fluid admin-profile" alt="...">
                            <span class="h4 text-white"> ADMIN </span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">

                    <li class="nav-item stylenav">
                        <a class="nav-link" href="#">
                            <i class="fa fa-dashboard fa-lg text-white"></i>
                            <span class="text-white">Dashboard</span>

                        </a>
                    </li>

                    <hr class="sidebar-divider">
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="./classes/main_class.php">
                            <i class="fa fa-users fa-lg text-white"></i>
                            <span class="text-white">Classes</span>


                        </a>
                    </li>
                    <hr class="sidebar-divider">

                    <li class="nav-item stylenav">
                        <a class="nav-link" href="./admision_page.php">
                            <i class="fa fa-file fa-lg text-white"></i>
                            <span class="text-white">Admission</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="./messages.php">
                            <i class="fa fa-envelope fa-lg text-white"></i>
                            <span class="text-white">Messages</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">
                    <li class="nav-item stylenav">
                        <a class="nav-link" href="./all_staff.php">
                            <i class="fa fa-users fa-lg text-white"></i>
                            <span class="text-white">Staff</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">

                    <li class="nav-item stylenav">
                        <a class="nav-link" href="./fees.php">
                            <i class="fa fa-dollar fa-lg text-white"></i>
                            <span class="text-white">Fees</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">

                    <li class="nav-item stylenav">
                        <a class="nav-link" href="./update_profile.php">
                            <i class="fa fa-wrench fa-lg text-white"></i>
                            <span class="text-white">Settings</span>

                        </a>
                    </li>
                    <hr class="sidebar-divider">

                    <li class="nav-item stylenav">
                        <a class="nav-link" href="#">
                            <i class="fa fa-sign-out fa-lg text-white"></i>
                            <span class="text-white">Log out</span>

                        </a>
                    </li>

                </ul>

            </div>

            <div class="col-9">
                <div class="row bg-white p-2">

                    <div class="col-7">
                        <nav class="navbar navbar-light">
                            <div class="container-fluid">
                                <form class="d-flex">
                                    <input class="col-8 form-control me-2" type="search" placeholder="Search for ... "
                                        aria-label="Search">
                                    <button class="btn btn-outline-primary" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>

                    </div>
                    <div class="col-5">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="./messages.html">
                                                <i class="fa fa-bell fa-lg"></i>
                                                <span class="badge rounded-pill bg-danger ">3+</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample"
                                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="fa fa-envelope fa-lg"></i>
                                                <span class="badge rounded-pill bg-danger">8+</span>

                                            </a>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <ul class="list-group">
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                            No Response?
                                                            <span class="badge bg-primary rounded-pill">14</span>
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                            Hi
                                                            <span class="badge bg-primary rounded-pill">2</span>
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                            Okay
                                                            <span class="badge bg-primary rounded-pill">1</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                John Doe |
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#">
                                                <img class="rounded-circle" src="../../images/undraw_profile.svg"
                                                    alt="Loading" height="50" width="50">
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>


                    </div>
                </div>

                <div class="row m-2 p-2 ">

                    <div class="col-4 ">
                        <p class="h3 grey">Dashboard</p>
                    </div>
                    <div class="col-8 float-end">
                        <div class="col-8">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Admit student
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Admission</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">

                                                <div class="card-header">Admit Student</div>
                                                <div class="card-body">
                                                    <form action="../../../backend/handle_user_registration.php" class="m-1" method="POST">
                                                        <div class="m-1">First Name : <input type="text"
                                                                name="first_name" /></div>
                                                        <div class="m-1">Second Name : <input type="text"
                                                                name="second_name" /></div>
                                                        <div class="m-1">Date of Birth : <input type="date"
                                                                name="date_of_birth" /></div>
                                                        <div class="m-1">Grade :
                                                            <select name="class">
                                                                <option value="pp1" name="class">PP 1</option>
                                                                <option value="pp2" name="class">PP 2</option>
                                                                <option value="pp3" name="class">PP 3</option>
                                                                <option value="grade_1" name="class">Grade 1</option>
                                                                <option value="grade_2" name="class">Grade 2</option>
                                                                <option value="grade_3" name="class">Grade 3</option>
                                                                <option value="grade_4" name="class">Grade 4</option>
                                                                <option value="grade_5" name="class">Grade 5</option>
                                                                <option value="grade_6" name="class">Grade 6</option>
                                                                <option value="grade_7" name="class">Grade 7</option>
                                                            </select>
                                                        </div>
                                                        <div class="m-1">Gender :
                                                            <select name="gender">
                                                                <option value="male" name="gender">Male</option>
                                                                <option value="female" name="gender">Female</option>
                                                                <option value="other" name="gender">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="m-1">Phone No : <input type="tel" name="phone" />
                                                        </div>
                                                        <div class="m-1">Email : <input type="email" name="email" />
                                                        </div>
                                                        <div class="m-1">
                                                            Password : <input type="password" name="password"
                                                                id="password" />
                                                        </div>
                                                        <div class="m-1">
                                                            Cornfirm Password : <input type="confirm_pass" name="confirm_pass"
                                                                id="confirm_pass" />
                                                        </div>
                                                </div>
                                                <div class="card-footer"><b>Click admit to continue!</b></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="admit" class="btn btn-primary">Admit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-4">


                    </div>


                </div>
                <hr>
                <div class="row m-2">
                    <div class="col-4">

                    </div>

                    <div class="col-4">

                    </div>
                </div>


    </main>


    </div> -->
    <?php
   include '../footer.php';
   ?>
</body>

</html>