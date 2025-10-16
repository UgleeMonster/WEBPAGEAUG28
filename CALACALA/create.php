Try AI directly in your favourite apps … Use Gemini to generate drafts and refine content, plus get Gemini Pro with access to Google's next-gen AI for ₱1,100 ₱0 for 1 month
<?php
include "db/db_connect.php"; // include database connection

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_no = $_POST['student_no']; 
    $fullname = $_POST['fullname']; 
    $course = $_POST['course']; 
    $year_level = $_POST['year_level']; 

     // ✅ Check if student number already exists
     $check_sql = "SELECT student_no FROM mysqlexample WHERE student_no = '$student_no'";
     $check_result = mysqli_query($conn, $check_sql);

     if (mysqli_num_rows($check_result) > 0) {
        echo "<div class='alert alert-warning text-center'>
                Student number <b>$student_no</b> already exists!
              </div>";
    } else {
        // ✅ Insert query
        $sql = "INSERT INTO mysqlexample (student_no, fullname, course, year_level) 
                VALUES ('$student_no', '$fullname', '$course', '$year_level')";

        if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success text-center'>New student added successfully!</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Student</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New Student</h4>
        </div>
        <div class="card-body">
            <form method="POST">
                <!-- Student Number -->
                <div class="mb-3">
                    <label class="form-label">Student No.</label>
                    <input type="text" name="student_no" class="form-control" required>
                </div>

                <!-- Fullname -->
                <div class="mb-3">
                    <label class="form-label">Fullname</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>

                <!-- Course (Dropdown) -->
                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <select name="course" class="form-select" required>
                        <option value="">-- Select Course --</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSOA">BSOA</option>
                        <option value="ACT">ACT</option>
                    </select>
                </div>

                <!-- Year Level -->
                <div class="mb-3">
                    <label class="form-label">Year Level</label>
                    <input type="text" name="year_level" class="form-control" placeholder="e.g. 1st Year" required>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Add Student</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>