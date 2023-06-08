<?php
require("./header.php");
require("./navbar.php");
require("./sidebar.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM promtion_form WHERE id = '$id'";
     $result = mysqli_query($connect, $sql);
     $row = mysqli_fetch_assoc($result);
     
     $name = $row['name'];
     $email = $row['email'];
      $faculty = $row['faculty'];
      $dept = $row['dept'];
      $paf = $row['position'];
      $noa = $row['noa'];
      $noj = $row['noj'];
      $url = $row['url1'];
      $url1 = $row['url2'];
      $topic = $row['topic'];
      $place = $row['place'];
      $topic1 = $row['topic1'];
      $place1 = $row['place1'];
      $md = $row['createddate'];
      $id = $row['id'];
}

?>

<main class="main" id="main">
    <div class="col-xl-12">

        <div class="card">
            <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered justify-content-bewteen">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#profile-overview">Overview</button>
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
                            <div class="col-lg-3 col-md-4 label">Department</div>
                            <div class="col-lg-9 col-md-8"><?=$dept?></div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-3 col-md-4 label">Faclty</div>
                            <div class="col-lg-9 col-md-8"><?=$faculty?></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-3 col-md-4 label">Position Assessed For</div>
                            <div class="col-lg-9 col-md-8"><?=$paf ?></div>
                        </div>

                        <h5 class="card-title">Journal Paper</h5>
                        <div class="row mb-2">
                            <div class="col-lg-3 col-md-4 label ">Name of Author</div>
                            <div class="col-lg-9 col-md-8"><?=$noa?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-3 col-md-4 label ">Name of Journal</div>
                            <div class="col-lg-9 col-md-8"><?=$noj?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-3 col-md-4 label ">URL of TR impact factor</div>
                            <div class="col-lg-9 col-md-8"><a href=""><?=$url?></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-3 col-md-4 label ">URL of Published Journal</div>
                            <div class="col-lg-9 col-md-8"><a href=""><?=$url1?></a>
                            </div>
                        </div>
                        <h5 class="card-title">Conferences</h5>
                        <div class="row mb-2">
                            <div class="col-lg-12 col-md-4 label table-responsive text-nowrap">
                                <table class="table table-bordered datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Conference Place</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?=$topic?></td>
                                            <td><?=$place?></td>
                                        </tr>
                                        <tr>
                                            <td><?=$topic1?></td>
                                            <td><?=$place1?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <a href="./gradeStaff.php?id=<?=$id?>"><button class="btn btn-secondary btn-block">Grade
                                        Staff</button></a>
                            </div>
                        </div>
                    </div>



                </div>




            </div><!-- End Bordered Tabs -->

        </div>
    </div>
</main>

<?php require_once('./footer.php') ?>