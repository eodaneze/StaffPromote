<?php 
   require("./header.php");
   require("./navbar.php");
   require("./sidebar.php");


   if(isset($_GET['id'])){
        
   }
?>
<style>
.member-img {
    width: 12rem;
    height: 12rem;
    border-radius: 50%;
}
</style>

<main class="main" id="main">
    <h5>Departmental Promotion Committee</h5>

    <div class="all-members">
        <div class="row mb-3">
            <?php 
                 $membersql = "SELECT * FROM members WHERE deleted = 1";
                 $result = mysqli_query($connect, $membersql);
                 if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $mphoto = $row['profilepic'];
                        ?>
            <div class="col-lg-4 bg-white border p-4 text-center">
                <img src="../includes/memberdp/<?=$row['profilepic'] ?>" class="img-fluid mb-3 member-img" alt="">
                <div class=" border p-3 mb-3">
                    <h5><?= $row['title'] ?>. <?= $row['name'] ?></h5>
                    <h6>
                        Head Of Department
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, deserunt?</p>
                </div>
                <div>
                    <a href="./viewSingleMember.php?id=<?=$row['id'] ?>">
                        <button class="btn btn-secondary">View Profile</button>
                    </a>
                </div>
            </div>

            <?php
                    }
                 }
                
                ?>
            <!-- <div class="col-lg-4 bg-white border p-4 text-center">
                <img src="../assets/img/profile-img.jpg" class="img-fluid rounded-circle mb-3" alt="">
                <div class="border p-3 mb-3">
                    <h5>Dr. Emmanuel Ezeali</h5>
                    <h6>Head Of Department</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, deserunt?</p>
                </div>
                <div>
                    <button class="btn btn-secondary">View Profile</button>
                </div>
            </div>
            <div class="col-lg-4 bg-white border p-4 text-center">
                <img src="../assets/img/avatar2.jpg" class="img-fluid rounded-circle mb-3" alt="">
                <div class="border p-3 mb-3">
                    <h5>Dr. Johnson Ezeh</h5>
                    <h6>Course Adviser</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, deserunt?</p>
                </div>
                <div>
                    <button class="btn btn-secondary">View Profile</button>
                </div>
            </div>
            <div class="col-lg-4 bg-white border p-4 text-center">
                <img src="../assets/img/avatar3.jpg" class="img-fluid rounded-circle mb-3" alt="">
                <div class="border p-3 mb-3">
                    <h5>Mr. Okoro Monday</h5>
                    <h6>Departmental secretray</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, deserunt?</p>
                </div>
                <div>
                    <button class="btn btn-secondary">View Profile</button>
                </div>
            </div> -->
        </div>
    </div>
</main><?php  require("./footer.php")?>