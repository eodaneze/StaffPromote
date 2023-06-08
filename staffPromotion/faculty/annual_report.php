<?php
require("./header.php");
require("./navbar.php");
require("./sidebar.php");

?>

<main class="main" id="main">
    <div class="table-responsive text-nowrap">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT DISTINCT id FROM report WHERE seen = 1 AND facseen = 1 AND deleted = 1";

                     $result = mysqli_query($connect, $sql);
                     if(mysqli_num_rows($result) > 0){
                         $num = 1;
                      while($row = mysqli_fetch_assoc($result)){
                      $id = $row['id'];
                     // $query = "SELECT id, name FROM promtion_form WHERE id = '$id' ";
                     $query = "SELECT * FROM report WHERE id = '$id' ";
                     $srun = mysqli_query($connect, $query);
                     $sget = mysqli_fetch_assoc($srun);
                     $id = $sget['id'];
                     $name = $sget['name'];
                     $email = $sget['email'];
                     $dept = $sget['dept'];
                     $faculty = $sget['faculty'];
                     $phone = $sget['mobileno'];

                     ?>
                <tr>
                    <th scope="row"><a href=""><?=$num++ ?></a></th>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    <td><?= $dept ?></td>
                    <td><?= $faculty ?></td>
                    <td><?= $phone ?></td>
                    <td><a href="./singleStaff_Report.php?id=<?=$id?>" class="btn btn-primary"><i class="fa fa-eye"></i>
                            View</a>
                    </td>
                </tr>

                <?php
          
   
}
}

?>
            </tbody>
        </table>
    </div>
</main>
<?php  

require_once("./footer.php")
?>