<?php 
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php")
?>

<main class="main" id="main">
    <div class="table-responsive text-nowrap">
        <table class="table table-borderless datatable bg-white p-4 border shadow">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">Current Level</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hodsql = "SELECT * FROM hod WHERE deleted = 1";
                    $hodrun = mysqli_query($connect, $hodsql);
                    if(mysqli_num_rows($hodrun) > 0){ 
                        $num = 1;
                        while($hodres = mysqli_fetch_assoc($hodrun)){
                ?>
                <tr>
                    <th scope="row"><a href="#"><?=$num++?></a></th>
                    <td><?=$hodres['name']?></td>
                    <td><a href="viewHod.php?id=<?=$hodres['id']?>" class="text-primary"><?=$hodres['email']?></a></td>
                    <td><?=$hodres['dpt']?></td>
                    <td><?=$hodres['fac']?></td>
                    <td><?=$hodres['slvl']?></td>
                    <td>

                        <a href="viewHod.php?id=<?=$hodres['id']?>"><span class="btn btn-primary"><i class="fa fa-eye"
                                    aria-hidden="true"></i>
                                View</span></a>
                        <a href="viewHod.php?id=<?=$hodres['id']?>"><span class="btn btn-secondary"><i
                                    class="fa fa-edit"></i>
                                Update</span></a>
                        <a href="includes/deletehod.php?id=<?=$hodres['id']?>"><span class="btn btn-danger"><i
                                    class="fa fa-trash"></i>
                                Delete</span></a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr>
                    <td>No HOD added yet...</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php
    require("./footer.php")
?>