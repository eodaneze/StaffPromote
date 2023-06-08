<?php require("./header.php") ?>

<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="logo">
                    <img src="./assets/img/logo.png" alt="">
                    <h5><span>Staff Promote</span></h5>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-list">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./staff/login.php">STAFF</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./Hod/login.php">HOD</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./faculty/login.php">FACULTY</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>










    <!-- hero -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider-inner">
                    <div class="hero-header container">
                        <div>
                            <h1 class="mb-3">Welcome to staff promote</h1>
                            <p class="lead">Staff promote is the best online staff promotion system for Nigerian
                                institutions. Staff Promote system is a software platform or application that enables
                                organizations to manage the promotion process for their employees in a more efficient
                                and streamlined manner</p>
                            <button>Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-item active">
                    <div class="slider-inner inner-2">
                        <div class="hero-header container">
                            <div>
                                <h1 class="mb-3">The Best Online Staff Promotion System</h1>
                                <p class="lead">The main goal of staff promote system is to automate and digitize the
                                    promotion process, thereby reducing the administrative burden on HR departments and
                                    ensuring that the promotion process is fair, transparent, and consistent. By using
                                    such a system, organizations can also ensure that promotions are based on merit and
                                    performance rather than subjective factors.</p>
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <!-- about staff promote -->
    <div class="about" id="about">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <img class="img-fluid" src="./assets/img/team.png" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h5>About Staff Promote</h5>
                        <p>Staff Promote is an online staff promotion system that is intended to improve the manuel
                            method of promotion in Nigerian Universities.</p>
                    </div>
                    <div class="mb-4">
                        <h5>Our Goal</h5>
                        <p>The goal of this system is Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Laboriosam fuga voluptates magni velit corrupti. In numquam et obcaecati laboriosam cum at
                            velit soluta harum nulla? Illum adipisci cum aperiam odit.</p>
                    </div>
                    <div class="mb-4">
                        <h5>Aims And Objecive</h5>
                        <p><i class="fa fa-check text-primary"></i> Reduce the bias action of the promotion committee
                            members</p>
                        <p><i class="fa fa-check text-primary"></i> Eliminate heavy paper processing during promotion
                        </p>
                        <p><i class="fa fa-check text-primary"></i> Provide a more efficient and simpler means of
                            handling and updating staff promotion and other records</p>
                        <p><i class="fa fa-check text-primary"></i> To provide solution to the problems of inaccuracy,
                            alteration, delay, loss of documents and irregularities in the manual system of promotion.
                        </p>
                    </div>
                    <div class="download mb-5">
                        <a href="./includes/staffdoc/chapter-1.643409e6794d84.02325493.docx" download="">
                            <button class="btn text-white p-3" style="background-color: #6675F4;"><i
                                    class="fa fa-download"></i>
                                Download
                                Promotion
                                Creteria</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require("./footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>