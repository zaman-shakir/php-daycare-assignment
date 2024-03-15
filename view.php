<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['valid'])) {
    header('Location: login.php');
}

// Include database connection file
include_once("connection.php");

// Fetching data in descending order (latest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE login_id=" . $_SESSION['id'] . " ORDER BY id DESC");
?>

<?php include 'header.php'; ?>

<div class="container mt-10" style="margin-top: 70px;">
    <div class="row">
        <div class="col">
            <h1 class="text-center">All Babies</h1>
            <br>
            <a href="add.php" class="btn btn-success">Add New Baby</a>
            <br><br>

            <table class="table table-striped">
                <thead class="thead-dark">

                    <tr>
                        <th>Sl No.</th>
                        <th>Baby Name</th>
                        <th>Age</th>
                        <th>Price</th>
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
            echo "<td>" . $res['price'] . "</td>";
            echo "<td>
                    <a href=\"delete.php?id=$res[id]\" class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
                  </td>";
            echo "</tr>";
            $count++; // Increment counter
        }
                    //     echo "<tr>";
                    //     echo "<td>" . $res['name'] . "</td>";
                    //     echo "<td>" . $res['qty'] . "</td>";
                    //     echo "<td>" . $res['price'] . "</td>";
                    //     echo "<td>
                    //             <a href=\"edit.php?id=$res[id]\" class='btn btn-primary'>Edit</a>
                    //             <a href=\"delete.php?id=$res[id]\" class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
                    //           </td>";
                    //     echo "</tr>";
                    // }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
