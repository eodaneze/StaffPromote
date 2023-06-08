<?php 
    require("./header.php");
    require("./navbar.php");
    require("./sidebar.php");

    //number of staff count
    $sql1 = "SELECT COUNT(*) AS staffs FROM staffs";
    $result1 = mysqli_query($connect, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $staffscount = $row1['staffs'];

    //number of hod count
    $sql1 = "SELECT COUNT(*) AS hod FROM hod";
    $result1 = mysqli_query($connect, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $hodcount = $row1['hod'];

    // number of faculty count
    $sql1 = "SELECT COUNT(*) AS faculty from faculty";
    $result1 = mysqli_query($connect, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $facultycount = $row1['faculty'];
    
    $promote = 0;
    $pstat = "SELECT DISTINCT staffid FROM staffdoc WHERE deleted = 1";
    $prun = mysqli_query($connect, $pstat);
    if(mysqli_num_rows($prun) > 0){
        while($pget = mysqli_fetch_assoc($prun)){
            $promote += 1;
        }
    }
?>


<body>





    <main id="main" class="main">

        <div class="admin-overview d-flex align-items justify-content-between">
            <div class="pagetitle">
                <h1>Overview</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="adminPanel.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="add-admin">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Admin</button>
            </div> -->
        </div>

        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- staff Card -->
                        <div class="col-xxl-3 col-md-6">
                            <a href="./viewAllStaff.php">
                                <div class="card info-card sales-card pt-3">

                                    <div class="card-body">

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>STAFF</h6>
                                                <span class="text-success small pt-1 fw-bold"><?=$staffscount?></span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div><!-- End staff Card -->

                        <!-- HOD Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card pt-3">
                                <a href="./viewAllHod.php">
                                    <div class="card-body">

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>HOD</h6>
                                                <span class="text-success small pt-1 fw-bold"><?=$hodcount?></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div><!-- End HOD Card -->

                        <!-- faculty card  -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card pt-3">
                                <a href="./viewFaculty.php">
                                    <div class="card-body">

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>FACULTY</h6>
                                                <span class="text-success small pt-1 fw-bold"><?=$facultycount?></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <!--end of faculty card  -->

                        <!-- promotion Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                </div>

                                <div class="card-body">

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Promotions</h6>
                                            <span class="text-success small pt-1 fw-bold"><?=$promote?></span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End romotion Card -->



                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">View Staff</span></h5>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-borderless datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Faculty</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Current Level</th>
                                                    <th scope="col">Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $staffsql = "SELECT * FROM staffs WHERE deleted = 1";
                                                $staffrun = mysqli_query($connect, $staffsql);
                                                if(mysqli_num_rows($staffrun) > 0){ 
                                                    $num = 1;
                                                    while($staffres = mysqli_fetch_assoc($staffrun)){
                                            ?>
                                                <tr>
                                                    <th scope="row"><a href="#"><?=$num++?></a></th>
                                                    <td><?=$staffres['name']?></td>
                                                    <td><a href="viewStaff.php?id=<?=$staffres['id']?>"
                                                            class="text-primary"><?=$staffres['email']?></a></td>
                                                    <td><?=$staffres['dpt']?></td>
                                                    <td><?=$staffres['fac']?></td>
                                                    <td><?=$staffres['slvl']?></td>
                                                    <td><?=$staffres['snum']?></td>
                                                    <td><?=$staffres['slvl']?></td>
                                                    <td>
                                                        <a href="viewStaff.php?id=<?=$staffres['id']?>"><span
                                                                class="btn text-white"
                                                                style="background-color:#6675F4;"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>
                                                                View</span></a>
                                                        <a href="viewStaff.php?id=<?=$staffres['id']?>"><span
                                                                class="btn btn-secondary"><i class="fa fa-edit"></i>
                                                                Update</span></a>
                                                        <a href="includes/deletestaff.php?id=<?=$staffres['id']?>"><span
                                                                class="btn btn-danger"><i class="fa fa-trash"></i>
                                                                Delete</span></a>
                                                    </td>
                                                </tr>
                                                <?php } }else{ ?>
                                                <tr>
                                                    <td>No staff added yet...</td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->



                    </div>
                </div><!-- End Left side columns -->



            </div>
        </section>

    </main><!-- End #main -->


    <!-- model for add admin -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Username</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" class="form-control">
                        </div>
                        <button class="btn btn-secondary">Create Admin</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--end of model for add admin -->

    <?php
    require("./footer.php")
?>



</body>

</html>