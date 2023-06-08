<?php 
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php")
?>



<main class="main" id="main">
    <div class="mt-5">
        <?php if(isset($_GET['error'])) {?>
        <div class="alert alert-danger">
            <?=urldecode($_GET['error'])?>
        </div>
        <?php } elseif(isset($_GET['success'])) { ?>
        <div class="alert alert-success text-center">
            <?=urldecode($_GET['success'])?>
        </div>
        <?php } ?>
        <h5>Add HOD</h5>

        <form action="./includes/addhod.php" method="POST" enctype="multipart/form-data">
            <div class="form-input mb-4">
                <input type="text" class="form-control" placeholder="Enter Hod Name" name="name" required>
            </div>
            <div class="form-input mb-4">
                <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-input mb-4">
                <select name="dpt" id="" class="form-control">
                    <option value="">Select Staff Department</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="English">English</option>
                    <option value="Chemistry">Chemistry</option>
                </select>
            </div>
            <div class="form-input mb-4">
                <select name="fac" id="" class="form-control">
                    <option value="">Select Hod Faculty</option>
                    <option value="Physical Science">Physical Science</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="English">English</option>
                    <option value="Chemistry">Chemistry</option>
                </select>
            </div>
            <div class="form-input mb-4">
                <select name="level" id="" class="form-control">
                    <option value="">Select Hod Current Level</option>
                    <option value="Graduate Assistant">Graduate Assistant</option>
                    <option value="Lecturer One (L1)">Lecturer One (L1)</option>
                    <option value="Lecturer Two (L2)">Lecturer Two (L2)</option>
                    <option value="Associate Prof">Associate Prof</option>
                    <option value="Prof">Prof</option>
                </select>
            </div>
            <div class="form-input mb-4">
                <label for="">Year Of Employment</label>
                <input type="date" name="sdate" id="" class="form-control" required>
            </div>
            <div class="form-input mb-4">
                <label for="">HOD Profile Picture</label>
                <input type="file" name="file" id="" class="form-control" required>
            </div>
            <div class="form-input mb-4">
                <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
            </div>
            <div class="add">
                <button class="btn btn-secondary btn-block w-100" name="submit">ADD HOD
                </button>
            </div>
            <div class="form-group">

            </div>
        </form>
    </div>
</main>


<?php
    require("./footer.php")
?>