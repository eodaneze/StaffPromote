<?php 
   require("./header.php");
   require("./navbar.php");
   require("./sidebar.php")
?>
<main class="main" id="main">
    <div class="table-responsive text-nowrap">
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
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $staffsql = "SELECT * FROM staffs WHERE deleted = 1";
                $staffrun = mysqli_query($connect, $staffsql);
                if(mysqli_num_rows($staffrun) > 0){ 
                    $num = 1;
                    while($staffres = mysqli_fetch_assoc($staffrun)){
            ?>
               <tr>
                    <th scope="row"><a href="viewSingleStaff.php?id=<?=$staffres['id']?>"><?=$num++?></a></th>
                    <td><?=$staffres['name']?></td>
                    <td><a href="viewSingleStaff.php?id=<?=$staffres['id']?>" class="text-primary"><?=$staffres['email']?></a></td>
                    <td><?=$staffres['dpt']?></td>
                    <td><?=$staffres['fac']?></td>
                    <td><?=$staffres['slvl']?></td>
                    <td><?=$staffres['snum']?></td>
                    <td><?=$staffres['slvl']?></td>
                    <td>

                        <a href="viewSingleStaff.php?id=<?=$staffres['id']?>"><span class="btn btn-primary"><i class="fa fa-eye"
                                    aria-hidden="true"></i>
                                View</span></a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr>
                    <td>No staff added yet...</td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</main>

<?php
    require("./footer.php")
?>