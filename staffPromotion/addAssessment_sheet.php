<?php
require("./header.php");
require("./navbar.php");
require("./sidebar.php");

?>
<main class="main" id="main">
    <h5>Add Assessment Sheet And Grades</h5>
    <div class="all-form">
        <form action="./includes/addAssessment_sheet.php" method="post">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <input type="text" name="ass_name" placeholder="Enter Assessment" class="form-control">
                </div>
            </div>
            <div>
                <button class="btn btn-secondary" name="add">Add Now</button>
            </div>
        </form>
    </div>
</main>

<?php require_once("./footer.php") ?>