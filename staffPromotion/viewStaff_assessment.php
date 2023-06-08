<?php
  require_once("./includes/connection.php");
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php");

  $sql = "SELECT * FROM promtion_form WHERE deleted = 1";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $faculty = $row['faculty'];
    $dept = $row['dept'];

?>

<main class="main" id="main">
    <div class="row my-5">
        <div class="col-lg-5 bg-white border p-3">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h6>Name of assessed Staff: </h6>
                </div>
                <div class="col-lg-6">
                    <?=$name ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h6>Email of assessed Staff: </h6>
                </div>
                <div class="col-lg-6">
                    <?=$email ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h6>Department: </h6>
                </div>
                <div class="col-lg-6">
                    <?=$dept ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h6>Faculty: </h6>
                </div>
                <div class="col-lg-6">
                    <?=$faculty ?>
                </div>
            </div>
        </div>
        <div class="col-lg-7"></div>
    </div>

    <div class="table-responsive nowrap">
        <table class="table table-bordered datatable p-4 border">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Assessment Creteria</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql1 = "SELECT * FROM faculty_promotionassessment WHERE deleted = 1";
                    $result2 = mysqli_query($connect, $sql1);
                    $num = 1;
                    while($row = mysqli_fetch_assoc($result2)){
                        $ass_name = $row['ass_name'];
                        $grade = $row['grade'];
                         ?>

                <tr>
                    <th scope="row"><?=$num++?></th>
                    <td><?=$ass_name?></td>
                    <td><?=$grade?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php
require("./footer.php")
?>