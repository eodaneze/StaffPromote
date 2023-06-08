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
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $staffsql = "SELECT * FROM faculty WHERE deleted = 1";
                    $staffrun = mysqli_query($connect, $staffsql);
                    if(mysqli_num_rows($staffrun) > 0){ 
                        $num = 1;
                        while($staffres = mysqli_fetch_assoc($staffrun)){
                ?>
                <tr>
                    <th scope="row"><a href="#"><?=$num++?></a></th>
                    <td><?=$staffres['name']?></td>
                    <td>
                        <a href="editfac.php?id=<?=$staffres['id']?>"><span class="btn btn-secondary"><i
                                    class="fa fa-edit"></i>
                                Update</span></a>
                        <a href="includes/deletefac.php?id=<?=$staffres['id']?>"><span class="btn btn-danger"><i
                                    class="fa fa-trash"></i>
                                Delete</span></a>
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