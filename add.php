<?php
session_start();

// including the database connection file
include_once("connection.php");

if (!isset($_SESSION['valid'])) {
    header('Location: login.php');
}

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $loginId = $_SESSION['id'];

    // checking empty fields
    if (empty($name) || empty($qty) || empty($price)) {

        if (empty($name)) {
            $errorMsg = "Name field is empty.";
        }

        if (empty($qty)) {
            $errorMsg = "Age field is empty.";
        }

        if (empty($price)) {
            $errorMsg = "Price field is empty.";
        }
    } else {
        // if all the fields are filled (not empty)

        // insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO baby(name, qty, price, login_id) VALUES('$name','$qty','$price', '$loginId')");

        if ($result) {
            // display success message
            $successMsg = "Data added successfully.";
            $_POST = array(); // Clear form data after submission
        } else {
            $errorMsg = "Error adding data. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>

<div class="container mt-10" style="margin-top: 70px;">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Add New Baby</h1>
            <br>
            <?php if (isset($successMsg)) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $successMsg; ?></div>
            <?php endif; ?>
            <?php if (isset($errorMsg)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMsg; ?></div>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form1">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="qty">Age (Year)</label>
                    <input type="number" class="form-control" id="qty" name="qty" value="<?php echo isset($_POST['qty']) ? $_POST['qty'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="Submit">Add</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
