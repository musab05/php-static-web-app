<?php
// student_portal/index.php
session_start();

// Dummy user session (replace with actual authentication)
$_SESSION['user_id'] = 1;
$_SESSION['user_name'] = "John Doe";

// Dummy data (replace with database queries)
$courses = ["Math 101", "Physics 202", "History 303"];
$attendance = ["Math 101" => "Present", "Physics 202" => "Absent", "History 303" => "Present"];
$schedule = ["Math 101" => "Mon 10AM", "Physics 202" => "Wed 2PM", "History 303" => "Fri 1PM"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>

        <h3>Your Courses</h3>
        <ul class="list-group">
            <?php foreach ($courses as $course): ?>
                <li class="list-group-item"><?php echo htmlspecialchars($course); ?></li>
            <?php endforeach; ?>
        </ul>

        <h3 class="mt-4">Attendance</h3>
        <ul class="list-group">
            <?php foreach ($attendance as $course => $status): ?>
                <li class="list-group-item"><?php echo htmlspecialchars($course . " - " . $status); ?></li>
            <?php endforeach; ?>
        </ul>

        <h3 class="mt-4">Schedule</h3>
        <ul class="list-group">
            <?php foreach ($schedule as $course => $time): ?>
                <li class="list-group-item"><?php echo htmlspecialchars($course . " - " . $time); ?></li>
            <?php endforeach; ?>
        </ul>

        <a href="#" class="btn btn-danger mt-4">Logout</a>
    </div>
</body>
</html>
