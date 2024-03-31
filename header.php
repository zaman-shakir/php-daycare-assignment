<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Daycare</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    /* Custom CSS for header */
    <?php if (isset($_SESSION['valid'])) : ?>.navbar {
        background-color: #d8d8ba;
        /* Set background color for navbar */
    }

    <?php else : ?>.navbar {
        background-color: #f8f9fa;
        /* Set background color for navbar */
    }

    <?php endif;

    ?>.navbar-toggler {
        margin-left: auto;
        /* Align toggler to the right */
    }

    .nav-item .nav-link {
        transition: all 0.3s;
        border: 1px solid transparent;
        /* Remove border from nav links */
        border-radius: 5px;
        /* Add border radius */
        padding: 10px 15px;
        /* Add padding */
        margin-right: 10px;
        /* Add margin between nav links */
    }

    .nav-item .nav-link:hover {
        background-color: #0C5ED7;
        border-color: #0C5ED7;
        color: yellow !important;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top header-section"
        id="header">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="https://childcheer.org/wp-content/uploads/2022/12/header.jpg"
                alt="Logo" width="100" style="    width: 300px;
    height: auto;
    padding-left: 35px;
" height="auto">
        </a>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse justify-content-end"
            style="margin-right:100px;" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li
                    class="nav-item <?php echo isset($_SESSION['valid']) ? 'active' : ''; ?>">
                    <?php if (isset($_SESSION['valid'])) {
                        echo '<a class="nav-link" href="dashboard.php">Dashboard</a>';
                    } else {
                        echo '<a class="nav-link" href="index.php">Home</a>';
                    } ?>

                </li>
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['valid'])) {
                        echo '<a class="nav-link" href="view.php">View and Add Babies</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['valid'])) {
                        echo '<a class="nav-link button" href="logout.php">Logout</a>';
                    } else {
                        echo '<a class="nav-link" href="add.php">Admission Request</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if (!isset($_SESSION['valid'])) {
                        echo '<a class="nav-link btn btn-link" href="procedure.php">Admission Procedure</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if (!isset($_SESSION['valid'])) {
                        echo '<a class="nav-link btn btn-link" href="about.php">About Us</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if (!isset($_SESSION['valid'])) {
                        echo '<a class="nav-link btn btn-link" href="contact.php">Contact Us</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if (!isset($_SESSION['valid'])) {
                        echo '<a class="nav-link btn btn-link" href="login.php">Admin login</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
