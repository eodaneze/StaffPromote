<?php
	require_once('../includes/connection.php');
	session_start();
	if(isset($_SESSION['hodid'])){
		$hodid = $_SESSION['hodid'];
        $hd = "SELECT * FROM hod WHERE id = '$hodid'";
        $hdrun = mysqli_query($connect, $hd);
        $hget = mysqli_fetch_assoc($hdrun);
        $hname = $hget['name'];
        $hemail = $hget['email'];
        $hslvl = $hget['slvl'];
        $hdpt = $hget['dpt'];
        $hfac = $hget['fac'];
        $hsphoto = $hget['sphoto'];
        $hsdate = $hget['sdate'];
        $hpdate = $hget['pdate'];

        $hemp = '';
        for($i = 0; $i < strlen($pdate); $i++){
            if($i <=3){
                $hemp .= $hpdate[$i];
            }
        }
        $hcurrent =  date("Y");
        
        $hcurrent = intval($hcurrent);
        $hemp = intval($hemp);
        
        $hyears = $hcurrent - $hemp;
	}else{
		header('location: ../index.php');
        return false;
	}
?>
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
          <a href="./hodDashboard.php" class="logo d-flex align-items-center">
              <img src="../includes/hoddp/<?=$hsphoto?>" alt="">
              <span class="d-none d-lg-block">HOD Dashboard</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <!-- <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
              <input type="text" name="query" placeholder="Search" title="Enter search keyword">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
      </div> -->
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

              <li class="nav-item d-block d-lg-none">
                  <a class="nav-link nav-icon search-bar-toggle " href="#">
                      <i class="bi bi-search"></i>
                  </a>
              </li><!-- End Search Icon-->


              <!-- <li class="nav-item dropdown">

                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                      <i class="bi bi-chat-left-text"></i>
                      <span class="badge bg-success badge-number">3</span>
                  </a> -->
                  <!-- End Messages Icon -->

                  <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                      <li class="dropdown-header">
                          You have 3 new messages
                          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="message-item">
                          <a href="#">
                              <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                              <div>
                                  <h4>Admin</h4>
                                  <p>Hello Dr.Hod, this is to inform you that the staff with the name Daniel is due for
                                      promotion. tell him to upload the neccessary credentials so we can process
                                      the promotion
                                  </p>
                                  <p>4 hrs. ago</p>
                              </div>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="message-item">
                          <a href="#">
                              <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                              <div>
                                  <h4>Anna Nelson</h4>
                                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                  <p>6 hrs. ago</p>
                              </div>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="message-item">
                          <a href="#">
                              <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                              <div>
                                  <h4>David Muldon</h4>
                                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                  <p>8 hrs. ago</p>
                              </div>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="dropdown-footer">
                          <a href="#">Show all messages</a>
                      </li>

                  </ul> -->
                  <!-- End Messages Dropdown Items -->

              <!-- </li> -->
              <!-- End Messages Nav -->

              <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      <img src="../includes/hoddp/<?=$hsphoto?>" alt="Profile" class="rounded-circle">
                      <span class="d-none d-md-block dropdown-toggle ps-2"><?=$hname?></span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                      <li class="dropdown-header">
                          <h6><?=$hname?></h6>
                          <span><?=$hslvl?></span>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <!-- <li>
                          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                              <i class="bi bi-person"></i>
                              <span>My Profile</span>
                          </a>
                      </li>
                      <li> -->
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