<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>

<div class="container mt-10 " style="margin-top: 70px;">
    <div class="row">
        <div class="col">
            <?php
            if (isset($_SESSION['valid'])) {
                include("connection.php");
                $result = mysqli_query($mysqli, "SELECT * FROM login");
            ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
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
            <h1 class="text-center">Welcome to Daycare</h1>
            <br>
            <img width="100%" style="height:700px" src="https://e0.pxfuel.com/wallpapers/817/435/desktop-wallpaper-preschool-daycare.jpg" alt="Placeholder Image" class="img-fluid">
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
