<?php 
   require("./header.php");
   require("./navbar.php");
   require("./sidebar.php")
?>

<main class="main" id="main">

    <?php if($years < 3){ ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Not due for promotion... You can apply for annual increment</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        }else{ 
        $pstat = "SELECT DISTINCT staffid FROM staffdoc WHERE deleted = 1 AND staffid = '$staffid'";
        $prun = mysqli_query($connect, $pstat);
        if(mysqli_num_rows($prun) > 0){     
    ?>
    <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
        <strong>The documents you uploaded is under review... <br>please be patient</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }else{ ?>
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>You are due for promotion, pls upload the following document so to start your promotion process <div>
                <li>Detailed Resume</li>
                <li>Courses Attended During the period of Report (PDF or DOC)</li>
                <li>Statement Of Experience (PDF or DOC)</li>
                <li>Research Grant (PDF or DOC)</li>
            </div>
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } ?>
    <?php } ?>





    <?php require("./footer.php"); ?>
</main>