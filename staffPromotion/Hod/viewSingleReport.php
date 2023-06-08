<?php
require("./header.php");
require("./navbar.php");
// require("../includes/connection.php");
require("./sidebar.php");

if(isset($_GET['id'])){
     $id = $_GET['id'];
     $sql = "SELECT * FROM report WHERE id = '$id'";
     $result = mysqli_query($connect, $sql);
     $row = mysqli_fetch_assoc($result);
     $name = $row['name'];
     $email = $row['email'];
     $dob = $row['dob'];
     $mobileno = $row['mobileno'];
     $docr = $row['docr'];
     $faculty = $row['faculty'];
     $md = $row['createddate'];
     $dept = $row['dept'];
     $dofa = $row['dofa'];
     $gofa =  $row['gofa'];
     $doca =  $row['doca'];
     $goca = $row['goca'];
     $aconfirm =  $row['confirmed'];
     $doc =  $row['doc'];
     $salary =  $row['salary'];
     $aqualification =  $row['aqualification'];
     $dclass =  $row['dclass'];
     $dinstitution =  $row['dinstitution'];
     $adate =  $row['dodaward'];
     $pqualification =  $row['pqualification'];
     $abody =  $row['abody'];
     $adate2 =  $row['daward'];
     $einstitution = $row['einstitution'];
     $role =  $row['role'];
     $specialization = $row['specialization'];
     $subject = $row['subject'];
     $days =  $row['days'];
     
}

?>
<div class="main" id="main">
    <div class="row">
        <div class="container alert alert-success text-center">
            This form was submitted by
            <?= $name ?> on <?= $md ?>
        </div>
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered justify-content-bewteen">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link " data-bs-toggle="tab"
                                data-bs-target="#acafemic-qualification">Qualifications</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">


                            <h5 class="card-title">Personal Infomation</h5>

                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label ">Name</div>
                                <div class="col-lg-9 col-md-8"><?=$name?>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label ">Email</div>
                                <div class="col-lg-9 col-md-8"><?=$email?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                                <div class="col-lg-9 col-md-8"><?=$dob?></div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8"><?=$mobileno?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Date of Compulsory Retirement</div>
                                <div class="col-lg-9 col-md-8"><?=$docr?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Faculty/College</div>
                                <div class="col-lg-9 col-md-8"><?=$faculty?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Department</div>
                                <div class="col-lg-9 col-md-8"><?=$dept?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Date of First Appointment</div>
                                <div class="col-lg-9 col-md-8"><?=$dofa?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Grade of First Appointment</div>
                                <div class="col-lg-9 col-md-8"><?=$gofa?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Date Of Current Appointment</div>
                                <div class="col-lg-9 col-md-8"><?=$doca?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Grade Of Current Appointment</div>
                                <div class="col-lg-9 col-md-8"><?=$goca?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Has Appointment been confirmed</div>
                                <div class="col-lg-9 col-md-8"><?=$aconfirm?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Date of Confirmation</div>
                                <div class="col-lg-9 col-md-8"><?=$doc?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Salary</div>
                                <div class="col-lg-9 col-md-8">$<?=$salary?></div>
                            </div>
                            <h5 class="card-title">Academic Qualification</h5>

                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label ">Highest Degree</div>
                                <div class="col-lg-9 col-md-8"><?=$aqualification?>
                                </div>
                            </div>
                            <div class="row mb-2 mb-2">
                                <div class="col-lg-3 col-md-4 label ">Degree Class</div>
                                <div class="col-lg-9 col-md-8"><?=$dclass?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label">Institution</div>
                                <div class="col-lg-9 col-md-8"><?=$dinstitution?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Data Awarded</div>
                                <div class="col-lg-9 col-md-8"><?=$adate?></div>
                            </div>
                            <h5 class="card-title">Professional Qualification</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Professional Qualification</div>
                                <div class="col-lg-9 col-md-8"><?=$pqualification?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Awarding Body</div>
                                <div class="col-lg-9 col-md-8"><?=$abody?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Date Awarded</div>
                                <div class="col-lg-9 col-md-8"><?=$adate2?>
                                </div>
                            </div>
                            <h5 class="card-title">University Teaching Experence</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Institution</div>
                                <div class="col-lg-9 col-md-8"><?=$einstitution?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Designation</div>
                                <div class="col-lg-9 col-md-8"><?=$role?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Specialization</div>
                                <div class="col-lg-9 col-md-8"><?=$specialization?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Subject Taught</div>
                                <div class="col-lg-9 col-md-8"><?=$subject?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Date</div>
                                <div class="col-lg-9 col-md-8"><?=$days?> by <?= date('h-m-s') ?>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <a href="../includes/sendReport_toFaculty.php?id=<?=$id?>"><button
                                        class="btn btn-secondary btn-block btn-js">Send To
                                        Faculty</button></a>
                            </div>
                        </div>


                    </div>




                </div><!-- End Bordered Tabs -->

            </div>
        </div>

    </div>
</div>
</div>

<?php require_once("./footer.php") ?>