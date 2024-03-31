<?php
session_start();
include 'header.php';
// Check if user is logged in
if (!isset($_SESSION['valid'])) {
    header('Location: login.php');
}

// Include database connection file
include_once("connection.php");

// Define variables for search query
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

// Fetching data based on search query
$query = "SELECT * FROM baby WHERE login_id=" . $_SESSION['id'];
if (!empty($search)) {
    $query .= " AND (name LIKE '%$search%' OR father_name LIKE '%$search%' OR mother_name LIKE '%$search%' OR birthday LIKE '%$search%' OR address LIKE '%$search%' OR mobile_no LIKE '%$search%')";
}
$query .= " ORDER BY id DESC";
$result = mysqli_query($mysqli, $query);
?>

<div class="container mt-10" style="margin-top: 130px; min-height:700px;">
    <div class="row">
        <div class="col">
            <h1 class="text-center">All Babies</h1>
            <br>
            <div class="row mb-3">
                <div class="col-md-6">
                    <form action="view.php" method="GET" class="form-inline">
                        <input type="text" name="search"
                            class="form-control mr-2"
                            placeholder="Search by name, father's name, mother's name, birthday, address, or mobile number"
                            value="<?php echo $search; ?>">
                        <button type="submit"
                            class="btn btn-primary">Search</button>
                        <?php if (!empty($search)) : ?>
                        <a href="view.php"
                            class="btn btn-secondary ml-2">Reset</a>
                        <?php endif; ?>
                    </form>
                </div>
            </div>

            <a href="add.php" class="btn btn-success">Add New Baby</a>
            <br><br>

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Sl No.</th>
                        <th>Baby Name</th>
                        <th>Age</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Mobile No.</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1; // Counter variable to track serial number
                    while ($res = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $count . "</td>"; // Display serial number
                        echo "<td>" . $res['name'] . "</td>";
                        echo "<td>" . $res['qty'] . "</td>";
                        echo "<td>" . $res['father_name'] . "</td>";
                        echo "<td>" . $res['mother_name'] . "</td>";
                        echo "<td>" . $res['birthday'] . "</td>";
                        echo "<td>" . $res['address'] . "</td>";
                        echo "<td>" . $res['mobile_no'] . "</td>";
                        echo "<td>
                            <a href=\"delete.php?id=$res[id]\" class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
                        </td>";
                        echo "</tr>";
                        $count++; // Increment counter
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
