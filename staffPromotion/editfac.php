<?php 
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $staff = "SELECT * FROM faculty WHERE id = '$id'";
    $srun = mysqli_query($connect, $staff);
    $sget = mysqli_fetch_assoc($srun);
    $name = $sget['name'];
    $email = $sget['email'];
    $sphoto = $sget['ssphoto'];
    
  }else{
    header('location: index.php');
    return false;
  }
?>



<main class="main" id="main">
    <div class="mt-5">
        <h5>Edit Faculty</h5>

        <form action="./includes/editfac.php" method="POST" enctype="multipart/form-data">
            <div class="form-input mb-4">
                <input type="text" class="form-control" value="<?=$name?>" name="name" required>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="hidden" name="photo" value="<?=$sphoto?>">
            </div>
            <div class="form-input mb-4">
                <input type="email" class="form-control" value="<?=$email?>" name="email" required>
            </div>
            <div class="form-input mb-4">
                <label for="">Faculty Profile Picture</label>
                <input type="file" name="file" id="" class="form-control">
            </div>
            <div class="add">
                <button class="btn btn-primary btn-block w-100" name="editfac">Edit Faculty
                </button>
            </div>
        </form>
    </div><br><br>
    <div class="mt-5">
        <h5>Edit Faculty Password</h5>

        <form action="./includes/editfac.php" method="POST">
            <div class="form-input mb-4">
                <input type="password" class="form-control" value="Enter Password" name="password" required>
                <input type="hidden" name="id" value="<?=$id?>">
            </div>
            <div class="add">
                <button class="btn btn-primary btn-block w-100" name="editpas">Update Password
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