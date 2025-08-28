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
            <h4 class="mb-0">Student Registration</h4>
        </div>
        <div class="card-body">
            <form action="justpasteit2.php" method="POST">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Employee Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label for="days" class="form-label">Total Days of Work</label>
                    <input type="number" name="days" id="days" class="form-control" placeholder="Enter your total days of work" required>
                </div>
                <div class="mb-3">
                    <label for="rate" class="form-label">Daily Rate</label>
                    <textarea type= number name="rate" id="rate" class="form-control" placeholder="Enter your daily rate" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="cashadvance" class="form-label">Cash Advance</label>
                    <input type="number" name="cashadvance" id="cashadvance" class="form-control" required>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>