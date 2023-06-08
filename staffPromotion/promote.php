<?php 
    require("./header.php");
    require("./navbar.php");
    require("./sidebar.php");

    if(isset($_GET['staffid'])){
        $id = $_GET['staffid'];
        $sread = "SELECT * FROM staffs WHERE id = '$id'";
        $srun = mysqli_query($connect, $sread);
        $sget = mysqli_fetch_assoc($srun);
        $id = $sget['id'];
        $name = $sget['name'];
        $email = $sget['email'];
        $slvl = $sget['slvl'];
        $snum = $sget['snum'];
        $title = $sget['title'];
        $fac = $sget['fac'];
    }else{

    }
?>



<main class="main" id="main">
    <div class="mt-5">
        <h5>Promote Staff</h5>
        <div class="mt-5">
            <p><b>Name:</b> <?=$name?></p>
            <p><b>Current Level:</b> <?=$slvl?></p>
        </div>

        <form action="./includes/prostaff.php" method="POST" class="mt-5">
            <div class="form-input mb-4">
                <select name="level" id="" class="form-control">
                    <option value="">Select Staff New Level</option>
                    <option value="Graduate Assistant">Graduate Assistant</option>
                    <option value="Lecturer One (L1)">Lecturer One (L1)</option>
                    <option value="Lecturer Two (L2)">Lecturer Two (L2)</option>
                    <option value="Associate Prof">Associate Prof</option>
                    <option value="Prof">Prof</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="lvl" value="<?=$slvl?>">
            <input type="hidden" name="name" value="<?=$name?>">
            <input type="hidden" name="email" value="<?=$email?>">
            <input type="hidden" name="title" value="<?=$title?>">
            <input type="hidden" name="fac" value="<?=$fac?>">
            <div class="add">
                <button class="btn btn-primary btn-block w-100" name="submit">PROMOTE STAFF
                </button>
            </div><br>
            <div class="form-group">
                <?php if(isset($_GET['error'])) {?>
                <div class="alert alert-danger">
                    <?=urldecode($_GET['error'])?>
                </div>
                <?php } elseif(isset($_GET['success'])) { ?>
                <div class="alert alert-success">
                    <?=urldecode($_GET['success'])?>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>
</main>


<?php
    require("./footer.php")
?>