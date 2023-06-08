<?php 
   require("./header.php");
   require("./navbar.php");
   require("./sidebar.php");
   require("../includes/connection.php");
?>

<main class="main" id="main">
    <div class="table-responsive text-nowrap">
        <table class="table table-borderless datatable">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $uploads = "SELECT DISTINCT staffid FROM staffdoc WHERE seen = 0 AND facseen = 1 AND deleted = 1";
                    $urun = mysqli_query($connect, $uploads);
                    if(mysqli_num_rows($urun) > 0){
                        $num = 1;
                        while($uget = mysqli_fetch_assoc($urun)){ 
                            $staffid = $uget['staffid'];

                            $sread = "SELECT id,name FROM staffs WHERE id = '$staffid'";
                            // $sread = "SELECT * from staffs WHERE name = 'name' and id = 'id'";
                            $srun = mysqli_query($connect, $sread);
                            $sget = mysqli_fetch_assoc($srun);
                            $id = $sget['id'];
                            $name = $sget['name'];

                ?>
                <tr>
                    <th scope="row"><a href="#"><?=$num++?></a></th>
                    <td><?=$name?></td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$id?>">

                            <span class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View Uploaded
                                Document</span>
                        </a>
                        <a href="../includes/sendadmin.php?staffid=<?=$staffid?>">

                            <span class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Send to
                                Admin</span>
                        </a>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?=$id?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Staff Documents</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php 
                                        $doc = "SELECT * FROM staffdoc WHERE staffid = '$staffid' AND seen = 0 AND facseen = 1 AND deleted = 1";
                                        $docrun = mysqli_query($connect, $doc);
                                        while($docget = mysqli_fetch_assoc($docrun)){ 
                                    ?>
                                    <div class="row">
                                        <div class="col">
                                            <h5><?=$docget['doc']?></h5>
                                        </div>
                                        <div class="col">
                                            <a href="../includes/staffdoc/<?=$docget['doc']?>" class="btn btn-link">view
                                                doc</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of  view upload model -->
                </tr>
                <?php } }else{ ?>
                <tr>
                    <td>no documents uploaded yet.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <!-- view upload model -->
    <!-- Button trigger modal -->



    <?php
      require("./footer.php")
    
    ?>
</main>