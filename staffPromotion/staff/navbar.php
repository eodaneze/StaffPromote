<?php
	require_once('../includes/connection.php');
	session_start();
	if(isset($_SESSION['staffid'])){
		$staffid = $_SESSION['staffid'];
        $ad = "SELECT * FROM staffs WHERE id = '$staffid'";
        $adrun = mysqli_query($connect, $ad);
        $sget = mysqli_fetch_assoc($adrun);
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
        $pdate = $sget['pdate'];

        $emp = '';
        for($i = 0; $i < strlen($pdate); $i++){
            if($i <=3){
                $emp .= $pdate[$i];
            }
        }
        $current =  date("Y");
        
        $current = intval($current);
        $emp = intval($emp);
        
        $years = $current - $emp;
	}else{
		header('location: ../index.php');
        return false;
	}
?>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="staffDashboard.php" class="logo d-flex align-items-center">
            <img src="../assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Staff Dashboard</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->




            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="../includes/staffdp/<?=$sphoto?>" alt="Profile" class="rounded-circle"
                        style="width: 2rem; height: 2rem;">

                    <span class="d-none d-md-block dropdown-toggle ps-2"><?=$name?></span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">

                        <h6><?=$name?></h6>
                        <!-- <span>Web Designer</span> -->
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <!-- <li>
                          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                              <i class="bi bi-person"></i>
                              <span>My Profile</span>
                          </a>
                      </li> -->
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="../includes/logout.php">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->