<?php session_start(); ?>
<?php include 'header.php'; ?>


<div class="container-fluid" style="margin-top:150px; min-height:800px">

    <div class="container">

        <div class="mt-3">
            <?php
            include("connection.php");

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $user = $_POST['username'];
                $pass = $_POST['password'];

                if ($user == "" || $pass == "" || $name == "" || $email == "") {
                    echo "<div class='alert alert-danger' role='alert'>All fields should be filled. Either one or many fields are empty.</div>";
                } else {
                    mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
                        or die("Could not execute the insert query.");

                    echo "<div class='alert alert-success' role='alert'>Registration successfully</div>";
                    echo "<a href='login.php' class='btn btn-primary'>Login</a>";
                }
            } else {
            ?>
            <h2 class="text-center">Register</h2>
            <form name="form1" method="post" action="">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name"
                        name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"
                        name="email">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username"
                        name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password"
                        name="password">
                </div>
                <button type="submit" class="btn btn-primary"
                    name="submit">Submit</button>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
