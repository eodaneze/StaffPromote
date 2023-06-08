<?php 
   require("./header.php");
   require("./navbar.php");
   require("./sidebar.php");
   require("../includes/connection.php");

   if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM annual_increment WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
   }
?>

<main class="main" id="main">
    <div class="bg-white border p-4">
        <div class="mb-3">
            <h5><span>Name: </span> <span>
                    <?= $name ?></span></h5>
        </div>
        <div>
            <h5><span>Email: </span> <span>
                    <?= $email ?></span></h5>
        </div>
        <div>
            <a href="">
                <button class="btn btn-success">Send To Faculty</button>
            </a>
        </div>
    </div>
</main>


<?php require("./footer.php") ?>