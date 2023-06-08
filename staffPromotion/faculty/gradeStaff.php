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
}else{
    header("../index.php");
}


?>
<main class="main" id="main">
    <h5>Faculty Assessment</h5>
    <div class="container alert alert-success text-center">
        Promotion assessment for <?=$name ?>
    </div>
    <div class="all-form">
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
        <form action="../includes/facultySubmit_PromotionAssessment.php" method="post">
            <div class="row mb-4">
                <div class="col-lg-6">
                    <label for="">Select Assessment Creteria</label>
                    <select name="ass_name" id="" class="form-control">
                        <?php
                        $sql = "SELECT * FROM assessment_grade WHERE deleted = 1";
                        $result = mysqli_query($connect, $sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                               $name=  $row['ass_name']
                                ?>
                        <option><?=$name?></option>
                        <?php
                            }
                        }
?>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="">Select Grade</label>
                    <select name="grade" id="" class="form-control">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-secondary" name="submit">Submit Assessment</button>
            </div>
        </form>
    </div>
</main>

<?php require_once("./footer.php") ?>