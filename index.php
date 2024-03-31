<?php session_start(); ?>
<?php include 'header.php'; ?>

<div class="container-fluid" style="margin-top: 70px;">

    <?php
    if (isset($_SESSION['valid'])) {
        include("connection.php");
        $result = mysqli_query($mysqli, "SELECT * FROM login");
    ?>

        <div class="alert alert-success alert-dismissible fade show" style="margin-top:130px;" role="alert">
            Welcome <?php echo $_SESSION['name'] ?>!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <a href='logout.php' class="alert-link">Logout</a>
        </div>




    <?php
    }
    //  else {
    //     echo "<div class='alert alert-warning' role='alert'>You must be logged in to view this page.</div><br/>";
    //     echo "<a href='login.php' class='btn btn-primary'>Login</a> | <a href='register.php' class='btn btn-secondary'>Register</a>";
    // }
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="10">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="11">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="12">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="13">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="14">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="15">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="16">
            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/bg_body_ChildCheer-1.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_E6888-scaled.jpg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/home_slide-show-6-e1671954380720.jpg" class="d-block w-100" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0206.jpg" class="d-block w-100" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0239.jpg" class="d-block w-100" alt="Image 5">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0234.jpg" class="d-block w-100" alt="Image 6">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0237.jpg" class="d-block w-100" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/Home_kids-corner-4-scaled.jpg" class="d-block w-100" alt="Image 8">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0238.jpg" class="d-block w-100" alt="Image 9">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0171-1.jpg" class="d-block w-100" alt="Image 10">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_E6854-scaled.jpg" class="d-block w-100" alt="Image 11">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0245.jpg" class="d-block w-100" alt="Image 12">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/Activiies_Social-Skills-scaled.jpg" class="d-block w-100" alt="Image 13">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0236.jpg" class="d-block w-100" alt="Image 14">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0241.jpg" class="d-block w-100" alt="Image 15">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0169-1.jpg" class="d-block w-100" alt="Image 16">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0164.jpg" class="d-block w-100" alt="Image 17">
            </div>
            <div class="carousel-item">
                <img src="https://childcheer.org/wp-content/uploads/2022/12/IMG_0195.jpg" class="d-block w-100" alt="Image 18">
            </div>
            <!-- Add more carousel items with the provided image links -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Section 1 -->
    <div class="container-fluid comment-about-us" style="padding-left: 100px; padding-right: 100px;">
        <!-- Section 1 -->
        <div class="row section align-items-center" style="margin-bottom: 20px;">
            <h2 style="color: #333; font-weight: bold; margin-top:100px">
                WHAT DO PARENTS
                SAY ABOUT US</h2>
        </div>
        <div class="row section align-items-center">
            <div class="col-md-6" style="    display: flex;
    flex-direction: column;
    /* align-items: center; */
    align-content: center;
    justify-content: center;">
                <!-- Content column 1 -->
                <p style="font-style: italic; color: #666;">Happy
                    Parents</p>
                <p>I am getting adequate support from the daycare center
                    for doing my professional work without any tension
                    for my daughter. Though, my child is passing huge
                    time staying away from family members, in
                    ChildCheer, her upbringing is going in a planned
                    manner with some other children. Her education,
                    psychological, emotional, physical care, and
                    language development are happening in a right
                    process.</p>
                <p><strong style="color: #333;">MD. SHARFARAZ
                        NAWAZ</strong></p>
            </div>
            <div class="col-md-6 text-center">
                <!-- Content column 2 -->
                <?php
                $random_image = "https://childcheer.org/wp-content/uploads/2022/12/IMG_0234.jpg";
                ?>
                <img src="<?php echo $random_image; ?>" class="img-fluid rounded-circle" alt="Random Image" style="max-width: 500px;">
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row section" style="margin-top: 50px;">
            <div class="col-md-6 text-center">
                <!-- Content column 1 -->
                <?php
                // Random image generation
                $random_image = "https://childcheer.org/wp-content/uploads/2022/12/home_slide-show-6-e1671954380720.jpg";
                ?>
                <img src="<?php echo $random_image; ?>" class="img-fluid rounded-circle" alt="Random Image" style="max-width: 500px;">
            </div>
            <div class="col-md-6" style="    display: flex;
    flex-direction: column;
    /* align-items: center; */
    align-content: center;
    justify-content: center;">
                <!-- Content column 2 -->
                <p>My friends and family members are surprised observing
                    the language skills and capacity of doing different
                    activities in an organized manner of my son. His
                    friendly attitude is also surprising which he has
                    learnt from this institute.</p>
                <p><strong>ISMOT ARA</strong></p>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="row section" style="margin-top: 50px;">
            <div class="col-md-6" style="    display: flex;
    flex-direction: column;
    /* align-items: center; */
    align-content: center;
    justify-content: center;">
                <!-- Content column 1 -->
                <p>I am getting adequate support from the daycare center
                    for doing my professional work without any tension
                    for my daughter. Though, my child is passing huge
                    time staying away from family members, in
                    ChildCheer, her upbringing is going in a planned
                    manner with some other children. Her education,
                    psychological, emotional, physical care, and
                    language development are happening in a right
                    process.</p>
                <p><strong>MD. SHARFARAZ NAWAZ</strong></p>
            </div>
            <div class="col-md-6 text-center">
                <!-- Content column 2 -->
                <?php
                // Random image generation
                $random_image = "https://childcheer.org/wp-content/uploads/2022/12/Home_kids-corner-4-scaled.jpg";
                ?>
                <img src="<?php echo $random_image; ?>" class="img-fluid rounded-circle" alt="Random Image" style="max-width: 500px;">
            </div>
        </div>
    </div>




    <!-- <img width="100%" style="height:700px" src="https://e0.pxfuel.com/wallpapers/817/435/desktop-wallpaper-preschool-daycare.jpg" alt="Placeholder Image" class="img-fluid"> -->
</div>
</div>
</div>
<?php include 'footer.php'; ?>
