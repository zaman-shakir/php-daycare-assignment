<?php
session_start();
include 'header.php';
include_once("connection.php");

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $fatherName = $_POST['father_name'];
    $motherName = $_POST['mother_name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $mobileNo = $_POST['mobile_no'];
    $loginId = $_SESSION['id'] ?? '1';

    if (empty($name) || empty($qty) || empty($price) || empty($fatherName) || empty($motherName) || empty($birthday) || empty($address) || empty($mobileNo)) {
        $errorMsg = "Please fill all the fields.";
    } else {
        $result = mysqli_query($mysqli, "INSERT INTO baby(name, qty, price, father_name, mother_name, birthday, address, mobile_no, login_id)
        VALUES('$name','$qty','$price', '$fatherName', '$motherName', '$birthday', '$address', '$mobileNo', '$loginId')");

        if ($result) {
            $successMsg = "Admission success! We will contact you later. Please make sure you prepare all the required documents in the meantime.";
            $_POST = array(); // Clear form data after submission
        } else {
            $errorMsg = "Error adding data. Please try again.";
        }
    }
}
?>

<div class="container" style="margin-top: 130px; min-height: 800px;">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Admission Form</h1>
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
                <!-- Additional Fields -->
                <div class="form-group">
                    <label for="father_name">Father's Name</label>
                    <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo isset($_POST['father_name']) ? $_POST['father_name'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="mother_name">Mother's Name</label>
                    <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo isset($_POST['mother_name']) ? $_POST['mother_name'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo isset($_POST['birthday']) ? $_POST['birthday'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" name="address"><?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="mobile_no">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo isset($_POST['mobile_no']) ? $_POST['mobile_no'] : ''; ?>">
                </div>
                <!-- End Additional Fields -->
                <button type="submit" class="btn btn-primary" name="Submit">Add</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
