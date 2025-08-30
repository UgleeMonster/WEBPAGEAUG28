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
            <p class="mb-0" style="font-size: 40px; text-align: center;"><strong>Employee Payslip</strong></p>
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
                    $grosspay = $rate * $totaldays;
                    $tax = $grosspay * 0.02;
                    $sss = $grosspay * 0.015;
                    $pag_ibig = 50;
                    $total_deductions = $tax + $sss + $pag_ibig + $cashadvance;
                    $Net_pay = $grosspay - $total_deductions;                               
                    ?>
            <p class="lead"></p>
            <ul class="list-group"></ul>
                <li class="list-group-item"><strong>Total Days Worked:</strong> <?= $totaldays; ?> </li> <br>
                <li class="list-group-item"><strong>Daily Rate: ₱</strong> <?= $rate; ?> </li> <br>
                <hr>
                <li class="list-group-item"><strong>Gross Pay: ₱</strong> <?= $grosspay; ?> </li> <br>
                <li class="list-group-item"><strong>Tax: ₱</strong> <?= $tax; ?> </li> <br>
                <li class="list-group-item"><strong>SSS: ₱</strong> <?= $sss; ?> </li> <br>
                <li class="list-group-item"><strong>Pag-IBIG: ₱</strong> <?= $pag_ibig; ?> </li> <br>
                <li class="list-group-item"><strong>Cash Advance: ₱</strong> <?= $cashadvance; ?> </li> <br>
                <hr>
                <li class="list-group-item"><strong>Total Deductions: ₱</strong> <?= $total_deductions; ?> </li> <br>
                <li class="list-group-item" style="color: green; font-size: 20px;"><strong> Net Pay: ₱</strong> <?= $Net_pay; ?> </li> <br>
            </ul>

            <div class="mt-4">
                <a href="Payroll.php" class="btn btn-primary">Another Employee Payroll</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>