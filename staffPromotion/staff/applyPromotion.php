<?php 
require("./header.php");
require("./navbar.php");
require("./sidebar.php")
?>

<main class="main" id="main">
    <h5>Apply for promotion</h5>
    <div class="all-form">
        <form action="../includes/apply_promotion.php" method="post">
            <div class="form-1">
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <label for="">Name</label><br>
                        <input type="text" name="name" id="" class="form-control" value="<?=$name?>">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Email</label><br>
                        <input type="email" name="email" id="" class="form-control" value="<?=$email?>">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Department</label><br>
                        <input type="text" name="dept" id="" class="form-control" value="<?=$dpt?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="">Faculty</label><br>
                        <input type="text" name="faculty" id="" class="form-control" value="<?=$fac?>">
                    </div>
                    <div class="col-lg-6">
                        <label for="">Position Assessed For</label><br>
                        <select name="paf" id="" class="form-control">
                            <option value="">--Select Position--</option>
                            <option value="">Assistent Lecturer</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h5 class="card-title">Journal Paper</h5>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="">Name Of Author</label><br>
                            <input type="text" name="noa" id="" class="form-control" value="<?=$name?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Name of Journal</label><br>
                            <input type="text" name="noj" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="">Url showing TR Impact Factor in the home page of the journal</label><br>
                            <input type="text" name="url" id="" class="form-control"
                                placeholder="https://doi.org/10.48198/NJPAS/22.A21.">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Url showing the paper published in the journal</label><br>
                            <input type="text" name="url1" id="" class="form-control"
                                placeholder="https://doi.org/10.48198/NJPAS/22.A21.">
                        </div>
                    </div>
                </div>
                <div>
                    <h5 class="card-title">Conferences</h5>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="">Topics</label><br>
                            <input type="text" name="topic" id="" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Conference Place</label><br>
                            <input type="text" name="place" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for=""></label><br>
                            <input type="text" name="topic1" id="" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for=""></label><br>
                            <input type="text" name="place1" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <button class="btn btn-secondary btn-block" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

</main>
<?php
    require("./footer.php")
?>