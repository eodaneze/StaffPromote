<?php 
require("./header.php");
require("./navbar.php");
require("./sidebar.php")
?>
<link rel="stylesheet" href="../assets/css/index.css">
<main class="main" id="main">
    <h4 class="mb-5">Annual Performance Report - Academic Staff</h4>
    <div class="all-form">
        <h6 class="text-primary" style="font-size:20px ;">Personal Information</h6>
        <div class="p-info">
            <form action="../includes/report.php" method="post" enctype="multipart/form-data">
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <label for="">Fullname</label><br>
                        <input type="text" name="name" class="form-control" placeholder="" value="<?=$name ?>">
                    </div>
                    <div class="col-lg-6">
                        <label for="">Date Of Birth</label><br>
                        <input type="date" name="dob" class="form-control">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <label for="">Email Address</label><br>
                        <input type="email" name="email" class="form-control" placeholder="" value="<?= $email ?>">
                    </div>
                    <div class="col-lg-6">
                        <label for="">Phone Number</label><br>
                        <input type="number" name="phone" class="form-control" value="<?=$snum ?>">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <label for="">Date of Compulsory Retirement: </label><br>
                        <input type="date" name="docr" class="form-control" placeholder="">
                    </div>
                    <div class="col-lg-6">
                        <label for="">Faculty/College</label><br>
                        <input type="text" name="faculty" class="form-control" placeholder="" value="<?=$fac ?>">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <label for="">Department</label><br>
                        <input type="text" name="dept" class="form-control" placeholder="" value="<?=$dpt ?>">
                    </div>
                    <div class="col-lg-3">
                        <label for="">Date Of First Appointment</label><br>
                        <input type="date" name="dofa" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        <label for="">Grade of First Appointment</label><br>
                        <select name="gofa" id="" class="form-control">
                            <option>Select Grade</option>
                            <option>A</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-3">
                        <label for="">Date Of Current Appointment</label><br>
                        <input type="date" name="doca" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        <label for="">Grade Of Current Appointment</label><br>
                        <select name="goca" id="" class="form-control">
                            <option>Select Grade</option>
                            <option>A</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label for="">Confrimed</label><br>
                        <select name="aconfirm" id="" class="form-control">
                            <option>--Select Confirmation--</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label for="">Date of Confirmation</label><br>
                        <input type="date" name="doc" class="form-control">
                    </div>
                    <div class="col-lg-2">
                        <label for="">Salary</label><br>
                        <input type="number" name="salary" class="form-control">
                    </div>
                </div>
                <div class="row mb-4" style="border-bottom: 2px solid #6675F4 ; padding: 20px">
                    <h6 class="text-primary" style="font-size:20px ;">Academic Qualification</h6>
                    <div class="col-lg-3">
                        <select name="aqualification" id="" class="form-control">
                            <option>--Select Highest Degree--</option>
                            <option>BSC</option>
                            <option>Diploma</option>
                            <option>Master's Degree</option>
                            <option>Doctoral Degree</option>
                            <option>PhD</option>
                            <option>Bachelor of Arts</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select name="dclass" id="" class="form-control">
                            <option>--Degree Class--</option>
                            <option>First Class</option>
                            <option>Second Class Upper</option>
                            <option>Second Class Lower</option>
                            <option>Third Class</option>
                            <option>Pass</option>

                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select name="dinstitution" id="" class="form-control">
                            <option>--Select Institution--</option>
                            <option>University Of Nigeria</option>
                            <option>Federal University Of Technology Owerri</option>
                            <option>University Of Nigeria</option>
                            <option>University Of Nigeria</option>
                            <option>University Of Nigeria</option>

                        </select>
                    </div>
                    <div class="col-lg-3">
                        <input type="date" name="adate" id="" class="form-control">
                    </div>

                </div>

                <div class="row mb-4" style="border-bottom: 2px solid #6675F4 ; padding: 20px">
                    <div class="col-lg-4">
                        <label for="" class="text-primary" style="font-size:20px ;">Professional
                            Qualification</label><br>
                        <select name="pqualification" id="" class="form-control">
                            <option>--Select Qalification--</option>
                            <option>Certified ScrumMaster (CSM)</option>
                            <option>Chartered Financial Analyst (CFA)</option>
                            <option>Certified Supply Chain Professional (CISCP)</option>
                            <option>Certified Manufacturing Engineer (CMfgE)</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Awarding Body</label><br>
                        <select name="abody" id="" class="form-control">
                            <option>--Select Awarding body--</option>
                            <option>National Awarding Body Of Nigeria</option>
                            <option>Chartered Financial Analyst (CFA)</option>
                            <option>Certified Supply Chain Professional (CISCP)</option>
                            <option>Certified Manufacturing Engineer (CMfgE)</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Date Awarded</label>
                        <input type="date" name="adate2" id="" class="form-control">
                    </div>

                </div>
                <div class="">
                    <h6 class="text-primary" style="font-size:20px ;">Experience</h6>
                    <p>University Teaching Experience: (Please indicate, Institution, your designation, Area of
                        Specialization, Subject taught and dates). </p>
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <label for="">Institution</label><br>
                            <select name="einstitution" id="" class="form-control">
                                <option>--Select Institution--</option>
                                <option>University Of Nigeria</option>
                                <option>Federal University Of Technology Owerri</option>
                                <option>University Of Nigeria</option>
                                <option>University Of Nigeria</option>
                                <option>University Of Nigeria</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label for="">Designation</label><br>
                            <select name="role" id="" class="form-control">
                                <option>--Select Role--</option>
                                <option>Lecturer</option>
                                <option>Departmental Officer</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label for="">Specialization</label><br>
                            <select name="specialization" id="" class="form-control">
                                <option>--Select specialization--</option>
                                <option>Database Management
                                </option>
                                <option>Organic Chemistry</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label for="">Subject Taught</label><br>
                            <select name="subject" id="" class="form-control">
                                <option>--Select Subject--</option>
                                <option>CSC 333
                                </option>
                                <option>CSS 455</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label for="">Days Taught</label><br>
                            <select name="days" id="" class="form-control">
                                <option>--Select Subject--</option>
                                <option>Monday
                                </option>
                                <option>Tuesday</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <button class="btn btn-secondary btn-block" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
    require("./footer.php")
?>