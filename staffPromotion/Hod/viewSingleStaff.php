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

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./hodDashboard.php">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="../includes/staffdp/<?=$sphoto?>" alt="Profile" class="rounded-circle">
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