<?php
session_start();
include 'header.php';
include_once("connection.php");

if (isset($_SESSION['valid'])) {
    // Total number of babies in the system
    $totalBabiesResult = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM baby");
    if ($totalBabiesResult) {
        $totalBabiesData = mysqli_fetch_assoc($totalBabiesResult);
        $totalBabies = $totalBabiesData['total'];
    } else {
        echo "Error fetching total number of babies: " . mysqli_error($mysqli);
        $totalBabies = "N/A";
    }

    // Babies in different age groups
    $ageGroup1to4Result = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM baby WHERE qty >= 1 AND qty <= 4");
    if ($ageGroup1to4Result) {
        $ageGroup1to4Data = mysqli_fetch_assoc($ageGroup1to4Result);
        $ageGroup1to4 = $ageGroup1to4Data['total'];
    } else {
        echo "Error fetching number of babies in age group 1-4: " . mysqli_error($mysqli);
        $ageGroup1to4 = "N/A";
    }

    $ageGroup5to7Result = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM baby WHERE qty >= 5 AND qty <= 7");
    if ($ageGroup5to7Result) {
        $ageGroup5to7Data = mysqli_fetch_assoc($ageGroup5to7Result);
        $ageGroup5to7 = $ageGroup5to7Data['total'];
    } else {
        echo "Error fetching number of babies in age group 5-7: " . mysqli_error($mysqli);
        $ageGroup5to7 = "N/A";
    }
}
?>

<div class="container-fluid" style="margin-top: 150px;min-height:800px">
    <div class="alert alert-success alert-dismissible fade show" style="margin-top:130px; " role="alert">
        Welcome <?php echo $_SESSION['name'] ?>!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Babies</h5>
                    <p class="card-text">Total number of babies in the system:
                        <?php echo $totalBabies; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Babies Age Group 1-4</h5>
                    <p class="card-text">Number of babies in age group 1-4:
                        <?php echo $ageGroup1to4; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Babies Age Group 5-7</h5>
                    <p class="card-text">Number of babies in age group 5-7:
                        <?php echo $ageGroup5to7; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
