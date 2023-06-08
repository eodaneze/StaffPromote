<?php
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php")

?><main class="main" id="main">
    <div class="table-responsive text-nowrap">
    <h4>See Promoted Staffs Here</h4><br>
        <table class="table table-borderless datatable">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">Current Level</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Promotion Status</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $uploads = "SELECT DISTINCT staffid FROM staffdoc WHERE seen = 0 AND facseen = 0 AND adminseen = 0 AND deleted = 1";
                $urun = mysqli_query($connect, $uploads);
                if(mysqli_num_rows($urun) > 0){
                    $num = 1;
                    while($uget = mysqli_fetch_assoc($urun)){ 
                        $staffid = $uget['staffid'];

                        $sread = "SELECT * FROM staffs WHERE id = '$staffid'";
                        $srun = mysqli_query($connect, $sread);
                        $sget = mysqli_fetch_assoc($srun);
                        $id = $sget['id'];
                        $name = $sget['name'];
                        $email = $sget['email'];
                        $dpt = $sget['dpt'];
                        $fac = $sget['fac'];
                        $slvl = $sget['slvl'];
                        $snum = $sget['snum'];

            ?>
                <tr>
                <th scope="row"><a href="#"><?=$num++?></a></th>
                    <td><?=$name?></td>
                    <td><?=$email?></td>
                    <td><?=$dpt?></td>
                    <td><?=$fac?></td>
                    <td><?=$slvl?></td>
                    <td><?=$snum?></td>
                    <td>
                        <a class="btn btn-danger w-100" href="./includes/deleteprom.php?staffid=<?=$staffid?>"><i class="fa fa-check-double" aria-hidden="true"></i>
                            Delete Info</a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr>
                    <td>no staff up for promotion yet.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php
       require("./footer.php")
    
    ?>
</main>