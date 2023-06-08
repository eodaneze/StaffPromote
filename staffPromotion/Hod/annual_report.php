<?php
require("./header.php");
require("./navbar.php");
require("./sidebar.php");

?>

<main class="main" id="main">
    <h1>Annual Performance Report</h1>
    <div class="table-responsive text-nowrap bg-white border p-3">
        <table class="table table-borderless datatable">
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
                $reportsql = "SELECT * FROM report WHERE deleted = 1";
                $reportrun = mysqli_query($connect, $reportsql);
                if(mysqli_num_rows($reportrun) > 0){ 
                    $num = 1;
                    while($reportres = mysqli_fetch_assoc($reportrun)){
            ?>
                <tr>
                    <th scope="row"><a href="./viewSingleReport.php?=<?=$reportres['id']?>"><?=$num++?></a></th>
                    <td><?=$reportres['name']?></td>
                    <td><a href="./viewSingleReport.php?=<?=$reportres['id']?>"
                            class="text-primary"><?=$reportres['email']?></a>
                    </td>
                    <td><?=$reportres['dept']?></td>
                    <td><?=$reportres['faculty']?></td>
                    <td><?=$reportres['mobileno']?></td>
                    <td>

                        <a href="./viewSingleReport.php?id=<?=$reportres['id']?>"><span class="btn btn-primary"><i
                                    class="fa fa-eye" aria-hidden="true"></i>
                                View</span></a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr>
                    <td>No Performance Report Yet...</td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</main>
</div>
</div>
</main>
<?php 
  require_once("./footer.php");
?>