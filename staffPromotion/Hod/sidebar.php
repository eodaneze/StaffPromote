  <?php
//   require_once("../includes/connection.php");
  //  no of performance report
// $sql = "SELECT COUNT(*) AS report FROM report";
// $result = mysqli_query($connect, $sql);
// $row = mysqli_fetch_assoc($result);
// $reportCount = $row['report'];
  ?>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="./hodDashboard.php">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="./viewStaff.php">
                  <i class="fa fa-eye"></i>
                  <span>View Staff</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="./viewDocument.php">
                  <i class="fa-solid fa-check-double"></i>
                  <span>View Documents</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                  <i class="fa fa-users"></i><span>Members</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="./viewMembers.php">
                          <i class="bi bi-circle"></i><span>View Members</span>
                      </a>
                  </li>
                  <li>
                      <a href="./addMember.php">
                          <i class="bi bi-circle"></i><span>Add Memebers</span>
                      </a>
                  </li>

              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-navs" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-menu-button-wide"></i><span>Applications</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-navs" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="./annual_report.php">
                          <i class="bi bi-circle"></i><span>Annual Performance Report</span>
                      </a>
                  </li>
                  <li>
                      <a href="./promotionForms.php">
                          <i class="bi bi-circle"></i><span>Promotions</span>
                      </a>
                  </li>

              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="./messages.php">
                  <i class="fa fa-envelope"></i>
                  <span>Messages</span>
              </a>
          </li>
      </ul>

  </aside><!-- End Sidebar-->