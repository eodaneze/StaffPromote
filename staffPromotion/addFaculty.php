<?php 
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php")
?>



<main class="main" id="main">
    <div class="mt-5">
        <h5>Add Faculty</h5>

        <form action="./includes/addfaculty.php" method="POST" enctype="multipart/form-data">
            <div class="form-input mb-4">
                <select name="title" id="" class="form-control">
                    <option value="">Select Dean Title</option>
                    <option value="Master">Master</option>
                    <option value="Miss">Miss</option>
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Prof">Prof</option>
                </select>
            </div>
            <div class="form-input mb-4">
                <input type="text" class="form-control" placeholder="Enter Dean's Name" name="dname" required>
            </div>
            <div class="form-input mb-4">
                <input type="text" class="form-control" placeholder="Enter Faculty Name" name="name" required>
            </div>
            <div class="form-input mb-4">
                <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-input mb-4">
                <label for="">Faculty Profile Picture</label>
                <input type="file" name="file" id="" class="form-control" required>
            </div>
            <div class="form-input mb-4">
                <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
            </div>
            <div class="add">
                <button class="btn btn-primary btn-block w-100" name="submit">ADD Faculty
                </button>
            </div>
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