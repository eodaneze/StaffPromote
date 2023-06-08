<?php 
   require("./header.php");
   require("./navbar.php");
   require("./sidebar.php")
?>


<main class="main" id="main">
    <h4>Add Member </h4>

    <div class="member-form  bg-white container p-3 border">
        <form action="../includes/addmember.php" method="POST" enctype="multipart/form-data">
            <div class="form-input mb-4">
                <input type="text" class="form-control" placeholder="Enter Staff Name" name="name" required>
            </div>
            <div class="form-input mb-4">
                <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-input mb-4">
                <input type="phone" class="form-control" placeholder="Enter member number" name="phone" required>
            </div>
            <div class="form-input mb-4">
                <input type="text" class="form-control" placeholder="Enter members address" name="address2" required>
            </div>
            <div class="form-input mb-4">
                <select name="title" id="" class="form-control">
                    <option value="">Select members Title</option>
                    <option value="Master">Master</option>
                    <option value="Miss">Miss</option>
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Prof">Prof</option>
                </select>
            </div>
            <div class="form-input mb-4">
                <select name="level" id="" class="form-control">
                    <option value="">Select members Current Level</option>
                    <option value="Graduate Assistant">Graduate Assistant</option>
                    <option value="Lecturer One (L1)">Lecturer One (L1)</option>
                    <option value="Lecturer Two (L2)">Lecturer Two (L2)</option>
                    <option value="Associate Prof">Associate Prof</option>
                    <option value="Prof">Prof</option>
                </select>
            </div>
            <div class="form-input mb-4">
                <input type="text" class="form-control" placeholder="Enter member role" name="role " required>
            </div>
            <div class="form-input mb-4">
                <label for="">Year Of Employment</label>
                <input type="date" name="sdate" id="" class="form-control" required>
            </div>
            <div class="form-input mb-4">
                <label for="">Upload profile pricture</label>
                <input type="file" name="file" id="" class="form-control" required>
            </div>
            <div class="add">
                <button class="btn btn-secondary btn-block w-100" name="submit">ADD MEMBER
                </button>
            </div>
            <div class="form-group">

            </div>
        </form>
    </div>
</main>

<?php require("./footer.php") ?>