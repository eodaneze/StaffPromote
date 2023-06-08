<?php
require("./header.php");

?>
<link rel="stylesheet" href="../assets/css/index.css">

<body class=""
    style=' background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url("../assets/img/hero-2.jpg") center/cover fixed no-repeat; height: 100vh; width: 100%;'>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="../assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block text-white">HOD Login</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate action="../includes/hodlogin.php"
                                        method="POST">

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="email" name="email" class="form-control" id="yourEmail"
                                                    required>
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <div class="d-flex"
                                                style="border: 1px solid #ccc; width: 100%; padding: 8px; border-radius: 10px">
                                                <input style="  border: none;
                                                    outline: none; width:100%" type="password" name="password" class=""
                                                    id="password" required>
                                                <i class="bi bi-eye-slash fw-bolc" id="togglePassword"></i>
                                            </div>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
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
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit"
                                                name="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div>
                                <a href="../index.php" class="text-white">
                                    <span><i class="fa fa-arrow-left"></i></span>
                                    <span>Back To Home</span>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



    <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function() {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });
    </script>

    <?php
    require("./footer.php")
?>

</body>

</html>