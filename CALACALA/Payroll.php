<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0" style="font-size: 40px; text-align: center;">Payroll Calculator</h4>
        </div>
        <div class="card-body">
            <form action="Paycheck.php" method="POST">
                <div class="mb-3">
                    <label for="fullname" class="form-label"><strong>Employee Name</strong></label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required> <br>
                </div>
                <div class="mb-3">
                    <label for="days" class="form-label"><strong>Total Days of Work</strong></label>
                    <input type="number" name="days" id="days" class="form-control" placeholder="Enter your total days of work" required> <br>
                </div>
                <div class="mb-3">
                    <label for="rate" class="form-label"><strong>Daily Rate</strong></label>
                    <textarea type= number name="rate" id="rate" class="form-control" placeholder="Enter your daily rate" required></textarea> <br>
                </div>
                <div class="mb-3">
                    <label for="cashadvance" class="form-label"><strong>Cash Advance</strong></label>
                    <input type="number" name="cashadvance" id="cashadvance" class="form-control" required> <br>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success"><strong>Generate Payslip</strong></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>