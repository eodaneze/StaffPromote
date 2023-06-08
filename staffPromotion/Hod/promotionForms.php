<?php
require("./header.php");
require("./navbar.php");
require("./sidebar.php");

?>

<main class="main" id="main">
    <h4>Staff Application for promotion</h4>
    <div class="table-responsive text-nowrap bg-white border p-3">
        <table class="table table-borderless datatable">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">Position Assessed For</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM promtion_form WHERE deleted = 1";
                $result = mysqli_query($connect, $sql);
                if(mysqli_num_rows($result) > 0){ 
                    $num = 1;
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <th scope="row"><a href="./viewSinglePromotion.php?id=<?=$row['id']?>"><?=$num++?></a></th>
                    <td><?=$row['name']?></td>
                    <td><a href="./viewSinglePromotion.php?id=<?=$row['id']?>"
                            class="text-primary"><?=$row['email']?></a>
                    </td>
                    <td><?=$row['dept']?></td>
                    <td><?=$row['faculty']?></td>
                    <td><?=$row['position']?></td>
                    <td>

                        <a href="./viewSinglePromotion.php?id=<?=$row['id']?>"><span class="btn btn-primary"><i
                                    class="fa fa-eye" aria-hidden="true"></i>
                                View</span></a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr>
                    <td>No Promotion Report Yet...</td>
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
  require_once("./footer.php")
?>