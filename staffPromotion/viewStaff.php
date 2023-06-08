<?php
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $staff = "SELECT * FROM staffs WHERE id = '$id'";
    $srun = mysqli_query($connect, $staff);
    $sget = mysqli_fetch_assoc($srun);
    $name = $sget['name'];
    $email = $sget['email'];
    $snum = $sget['snum'];
    $sadd = $sget['sadd'];
    $slvl = $sget['slvl'];
    $dpt = $sget['dpt'];
    $fac = $sget['fac'];
    $title = $sget['stitle'];
    $sphoto = $sget['sphoto'];
    $sdate = $sget['sdate'];

    $emp = '';
    for($i = 0; $i < strlen($sdate); $i++){
        if($i <=3){
            $emp .= $sdate[$i];
        }
    }
    $current =  date("Y");
    
    $current = intval($current);
    $emp = intval($emp);
    
    $years = $current - $emp;
    
  }else{
    header('location: index.php');
    return false;
  }

?>


<body>





    <main id="main" class="main">
        <?php if(isset($_GET['error'])) {?>
        <div class="alert alert-danger">
            <?=urldecode($_GET['error'])?>
        </div>
        <?php } elseif(isset($_GET['success'])) { ?>
        <div class="alert alert-success text-center">
            <?=urldecode($_GET['success'])?>
        </div>
        <?php } ?>
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./AdminPanel.php">Home</a></li>
                    <li class=" breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="./includes/staffdp/<?=$sphoto?>" alt="Profile" class="rounded-circle"
                                style="width: 9rem; height: 9rem;">
                            <h2><?=$name?></h2>
                            <h3><?=$slvl?></h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                                <!-- <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-settings">Settings</button>
                                </li> -->

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">


                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Title</div>
                                        <div class="col-lg-9 col-md-8"><?=$title?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8"><?=$name?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?=$email?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Department</div>
                                        <div class="col-lg-9 col-md-8"><?=$dpt?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Faculty</div>
                                        <div class="col-lg-9 col-md-8"><?=$fac?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8"><?=$snum?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Current Level</div>
                                        <div class="col-lg-9 col-md-8"><?=$slvl?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Year Of Employment</div>
                                        <div class="col-lg-9 col-md-8"><?=$sdate?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Years Of Service</div>
                                        <div class="col-lg-9 col-md-8">
                                            <?php if($years == 0){ ?>
                                            not up to a year
                                            <?php }else if($years == 1){ ?>
                                            <?=$years?> year
                                            <?php }else{ ?>
                                            <?=$years?> years
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <div class="row mb-3">
                                        <!-- <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                            Image</label> -->
                                        <div class="col-md-8 col-lg-9">
                                            <img src="./includes/staffdp/<?=$sphoto?>" alt="Profile">
                                        </div>
                                    </div>

                                    <!-- Profile Edit Form -->
                                    <form action="includes/editstaff.php" method="POST" enctype="multipart/form-data">


                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
                                                Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="fullName"
                                                    value="<?=$name?>" required>
                                                <input type="hidden" name="id" value="<?=$id?>">
                                                <input type="hidden" name="photo" value="<?=$sphoto?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Title</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="title" type="text" class="form-control" id="fullName"
                                                    value="<?=$title?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="email"
                                                    value="<?=$email?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Department</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="dpt" type="text" class="form-control" id="dept"
                                                    value="<?=$dpt?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country"
                                                class="col-md-4 col-lg-3 col-form-label">Faculty</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fac" type="text" class="form-control" id="faculty"
                                                    value="<?=$fac?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address"
                                                class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address2" type="text" class="form-control" id="Address"
                                                    value="<?=$sadd?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone"
                                                    value="<?=$snum?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Current
                                                Level</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="level" type="text" class="form-control" id="Email"
                                                    value="<?=$slvl?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Picture</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="file" type="file" class="form-control" id="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">

                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" name="edit">Save
                                                Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form action="includes/editstaff.php" method="POST">

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="newPassword" required>
                                                <input type="hidden" name="id" value="<?=$id?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="conpassword" type="password" class="form-control"
                                                    id="renewPassword" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <?php if(isset($_GET['error'])) {?>
                                            <div class="alert alert-danger">
                                                <?=urldecode($_GET['error'])?>
                                            </div>
                                            <?php } elseif(isset($_GET['success'])) { ?>
                                            <div class="alert alert-success">
                                                <?=urldecode($_GET['success'])?>
                                            </div>
                                            <?php } ?>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" name="editpass" class="btn btn-primary">Change
                                                Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?php
      require("./footer.php")
    
    ?>

</body>

</html>