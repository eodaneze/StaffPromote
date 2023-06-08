<?php 
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php")
?>



<main class="main" id="main">
    <div class="mt-5">
        <?php if(isset($_GET['error'])) {?>
        <div class="alert alert-danger text-center">
            <?=urldecode($_GET['error'])?>
        </div>
        <?php } elseif(isset($_GET['success'])) { ?>
        <div class="alert alert-success text-center">
            <?=urldecode($_GET['success'])?>
        </div>
        <?php } ?>
        <h5>Add Staff</h5>

        <form action="./includes/addstaff.php" method="POST" enctype="multipart/form-data">
            <div class="form-input mb-4">
                <input type="text" class="form-control" placeholder="Enter Staff Name" name="name" required>
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
                    <option value="">Select Staff Faculty</option>
                    <option value="Physical Science">Physical Science</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="English">English</option>
                    <option value="Chemistry">Chemistry</option>
                </select>
            </div>
            <div class="form-input mb-4">
                <input type="phone" class="form-control" placeholder="Enter staff number" name="phone" required>
            </div>
            <div class="form-input mb-4">
                <input type="text" class="form-control" placeholder="Enter staff address" name="address2" required>
            </div>
            <div class="form-input mb-4">
                <select name="title" id="" class="form-control">
                    <option value="">Select Staff Title</option>
                    <option value="Master">Master</option>
                    <option value="Miss">Miss</option>
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Prof">Prof</option>
                </select>
            </div>
            <div class="form-input mb-4">
                <select name="level" id="" class="form-control">
                    <option value="">Select Staff Current Level</option>
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
                <label for="">Staff Profile Picture</label>
                <input type="file" name="file" id="" class="form-control" required>
            </div>
            <div class="form-input mb-4">
                <input type="password" class="form-control" placeholder="Enter staff password" name="password" required>
            </div>
            <div class="add">
                <button class="btn btn-secondary btn-block w-100" name="submit">ADD STAFF
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