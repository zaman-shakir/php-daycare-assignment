<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for header */
        .navbar {
            background-color: #f8f9fa;
            /* Set background color for navbar */
        }

        .navbar-toggler {
            margin-left: auto;
            /* Align toggler to the right */
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['valid'])) {
                            echo '<a class="nav-link" href="logout.php">Logout</a>';
                        } else {
                            echo '<a class="nav-link" href="login.php">Login</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['valid'])) {
                            echo '<a class="nav-link" href="view.php">View and Add Products</a>';
                        } else {
                            echo '<a class="nav-link" href="register.php">Register</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">

        <div class="mt-3">
            <?php
            include("connection.php");

            if (isset($_POST['submit'])) {
                $user = mysqli_real_escape_string($mysqli, $_POST['username']);
                $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

                if ($user == "" || $pass == "") {
                    echo "<div class='alert alert-danger' role='alert'>Either username or password field is empty.</div>";
                } else {
                    $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
                        or die("Could not execute the select query.");

                    $row = mysqli_fetch_assoc($result);

                    if (is_array($row) && !empty($row)) {
                        $validuser = $row['username'];
                        $_SESSION['valid'] = $validuser;
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Invalid username or password.</div>";
                    }

                    if (isset($_SESSION['valid'])) {
                        header('Location: index.php');
                    }
                }
            } else {
            ?>
                <h2 class="text-center">Login</h2>
                <form name="form1" method="post" action="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>
