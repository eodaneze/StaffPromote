<?php 
   require("./header.php");
   require("./navbar.php");
   require("./sidebar.php")
?>
<link rel="stylesheet" href="../../assets/css/index.css">
<main class="main" id="main">


    <div class="wrapper">
        <div class="box">
            <div class="input-bx">
                <div class="upload-area-title">
                    <form action="../includes/staffuploads.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="file" id="upload" accept=".doc, .docx, .pdf">
                        <input type="hidden" name="id" id="upload" value="<?=$staffid?>">

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
                        <div class="form-group mt-3">
                            <button class="btn btn-success" name="upload"><span class="fa fa-cloud-upload"></span> Click to upload</button>
                        </div>
                    </form>
                </div>
                <div id="filewrapper" class="mt-5">
                    <h6 class="upload">Uploaded Documents</h6><br>
                    <div class="file-name">
                    <?php
                        $ssql = "SELECT * FROM staffdoc WHERE staffid = '$staffid' AND deleted = 1";
                        $sres = mysqli_query($connect, $ssql);
                        if(mysqli_num_rows($sres) > 0){ 
                            while($sdoc = mysqli_fetch_assoc($sres)){ 
                    ?>
                        <div class="border p-2 mb-3 d-flex justify-content-between">
                            <div class="doc-name">
                                <h4><?=$sdoc['doc']?></h4>
                            </div>
                            <div class="close-btn">
                                <a href="../includes/deletedoc.php?id=<?=$sdoc['id']?>&doc=<?=$sdoc['doc']?>" class="btn btn-primary"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                    <?php } }else{ ?>
                        <div class="border p-2 mb-3 d-flex justify-content-between">
                            <div class="doc-name">
                                <h4>No Document Uploaded Yet</h4>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require("./footer.php")
?>
<script src="../../assets/js/uploadfileLogic.js"></script>