  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="./adminPanel.php">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-menu-button-wide"></i><span>Staffs</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="./viewAllStaff.php">
                          <i class="bi bi-circle"></i><span>View Staff</span>
                      </a>
                  </li>
                  <li>
                      <a href="./AddStaff.php">
                          <i class="bi bi-circle"></i><span>AddStaff Staff</span>
                      </a>
                  </li>

              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-journal-text"></i><span>HOD</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="./addHod.php">
                          <i class="bi bi-circle"></i><span>Add HOD</span>
                      </a>
                  </li>
                  <li>
                      <a href="./viewAllHod.php">
                          <i class="bi bi-circle"></i><span>View HOD</span>
                      </a>
                  </li>
              </ul>
          </li>



          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#faculty-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-journal-text"></i><span>Faculty</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="faculty-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="./addFaculty.php">
                          <i class="bi bi-circle"></i><span>Add Faculty</span>
                      </a>
                  </li>
                  <li>
                      <a href="./viewFaculty.php">
                          <i class="bi bi-circle"></i><span>View Faculty</span>
                      </a>
                  </li>
              </ul>
          </li>

          <!-- promotion -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="./promotions.php">
                  <i class="bi bi-person"></i>
                  <span>Promotions</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="./promoted.php">
                  <i class="bi bi-person"></i>
                  <span>Promoted</span>
              </a>
          </li>
          <!-- End promotion Page Nav -->

          <!-- assessment sheet -->
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#admin-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-journal-text"></i><span>Assessment Sheet</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="admin-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="./addAssessment_sheet.php">
                          <i class="bi bi-circle"></i><span>Add Assessment Sheet</span>
                      </a>
                  </li>
                  <li>
                      <a href="./viewAssessment.php">
                          <i class="bi bi-circle"></i><span>ViewAssessment Sheet</span>
                      </a>
                  </li>
              </ul>
          </li>
          <!--end of
           assessment sheet -->

          <!--  assessment from faculty-->
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#admin-navs" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-journal-text"></i><span>Assessments</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="admin-navs" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="./viewStaff_assessment.php">
                          <i class="bi bi-circle"></i><span>Staff Faculty Assessment</span>
                      </a>
                  </li>

              </ul>
          </li>
          <!--  view assessment from faculty-->

          <!-- submitted forms -->
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#admin-navss" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-journal-text"></i><span>Submitted Forms</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="admin-navss" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="./viewStaff_assessment.php">
                          <i class="bi bi-circle"></i><span>Assessement Form</span>
                      </a>
                  </li>
                  <li>
                      <a href="./promotion_form.php">
                          <i class="bi bi-circle"></i><span>Promotion Form</span>
                      </a>
                  </li>

              </ul>
          </li>
          <!--end of submitted forms -->

      </ul>

  </aside><!-- End Sidebar-->