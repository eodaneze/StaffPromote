<?php
require("./header.php");
require("./navbar.php");
require("./sidebar.php");
// require("../includes/connection.php");

//  no of performance report
$sql = "SELECT COUNT(*) AS report FROM report";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$reportCount = $row['report'];

?>

<main class="main" id="main">
    <div class="alert alert-success">
        <?php
         if(mysqli_num_rows($result) > 0){
            echo $reportCount ?> Staff have submitted his annual report performance form<?php
        }

        ?>
    </div>
</main>

<?php
require_once('./footer.php')

?>