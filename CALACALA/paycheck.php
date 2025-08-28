<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Registration Successful</h4>
        </div>
        <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_POST['fullname'];
                        $totaldays = $_POST['days'];
                        $rate = $_POST['rate'];
                        $cashadvance = $_POST['cashadvance'];
                    }
                    else {
                        echo "<div class='alert-danger'>NO DATA RECEIVED. </div>";
                        exit;
                    }

                    
                    ?>
            <p class="lead">Here are the details you submitted:</p>
            <ul class="list-group"></ul>
                <li class="list-group-item"><strong>Employee Name:</strong> <?= $name; ?></li>
                <li class="list-group-item"><strong>Total Days Worked:</strong> <?= $email; ?> </li>
                <li class="list-group-item"><strong>Daily Rate:</strong> <?= $address; ?> </li>
                <hr>
                <li class="list-group-item"><strong>Gross Pay:</strong> <?= $birthdate; ?> </li>
                <li class="list-group-item"><strong>Tax:</strong> <?= $course; ?> </li>
                <li class="list-group-item"><strong>SSS:</strong> <?= $gender; ?> </li>
                <li class="list-group-item"><strong>Pag-IBIG:</strong> <?= $gender; ?> </li>
                <li class="list-group-item"><strong>Cash Advance:</strong> <?= $gender; ?> </li>
                <hr>
                <li class="list-group-item"><strong>Total Deductions:</strong> <?= $gender; ?> </li>
            </ul>

            <div class="mt-4">
                <a href="wtry.php" class="btn btn-primary">Register Another Student</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>