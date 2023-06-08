<?php 
  require("./header.php");
  require("./navbar.php");
  require("./sidebar.php")
?>

<main class="main row" id="main">
    <h6>Assessment Sheet -- Grade</h6>
    <div class="table-responsive text-nowrap col-lg-8">
        <table class="table table-bordered datatable p-4 border ">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php 
$sql = "SELECT * FROM assessment_grade where deleted = 1";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result) > 0){
    $num = 1;
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['ass_name'];
        ?>
                <tr>
                    <th scope="row"><?=$num++?></th>
                    <td><?=$name?></td>
                </tr>
                <?php
    }
}

?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-4 bg-white shadow p-3" style="height: fit-content;">
        <div class="mb-4">
            A = Very Good
        </div>
        <div class="mb-4">
            B = Good
        </div>
        <div class="mb-4">
            C = Satisfactory
        </div>
        <div class="mb-4">
            D = Fair
        </div>
        <div class="mb-4">
            E = Poor
        </div>
    </div>
</main>

<?php
    require("./footer.php")
?>