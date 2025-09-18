
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-3">Submitted Information</h3>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fullname'];
            $age = $_POST['age'];
            $grade = $_POST['grade'];
            $course = $_POST['course'];
            $gender = $_POST['gender'];
        }
        else {
            echo "<div class='alert-danger'>NO DATA RECEIVED. </div>";
            exit;
        }
        if ($course == "ACT") {
            $tuition_fee = 15000;
        }
        elseif ($course == "HM") {
            $tuition_fee = 20000;
        }
        elseif ($course == "BSOA") {
            $tuition_fee = 18000;
        }
        else {
            $tuition_fee = 0;
        }
        $grade_discount = 0;
        $age_discount = 0;
        if ($grade >= 95) {
            $grade_discount = $tuition_fee * 0.20;
        }
        if ($age >= 26 && $age <= 30) {
            $age_discount = $tuition_fee * 0.05;
        }
        $total_discount = $grade_discount + $age_discount;
        $final_tuition_fee = $tuition_fee - $total_discount;

        ?>
        <p><strong>Full Name:</strong><?= $name; ?></p>
        <p><strong>Age:</strong> <?= $age; ?></p>
        <p><strong>Average Grade:</strong> <?= $grade; ?></p>
        <p><strong>Course:</strong> <?= $course; ?></p>
        <p><strong>Gender:</strong> <?= $gender; ?></p><hr>
        <p><strong>Tuition Fee:</strong> <?= $tuition_fee; ?></p>
        <?php
        if ($grade_discount > 0) {
            echo "<p class='text-success'><strong>Grade Discount:</strong>".number_format($grade_discount)."</p>";
        }
        if ($age_discount > 0) {
            echo "<p class='text-success'><strong>Age Discount:</strong>".number_format($age_discount)."</p>";
        }
        else {
            echo "<p class='text-danger'><strong>No Discounts Applied</strong></p>";
        }
        ?>
        <p class='text-primary'><strong>Total Discounts:</strong> <?= $total_discount; ?></p>
        <h5><strong>Final Tuition Fee:</strong> <?= $final_tuition_fee; ?>
    </h5>        
        <a href="registration.php" class="btn btn-secondary mt-3">Go Back</a>
    </div>
</div>

</body>
</html>
