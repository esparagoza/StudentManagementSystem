<?php
include 'connection.php';
include 'topnav.php';


$student_query = "SELECT COUNT(*) as total_students FROM student";
$student_result = mysqli_query($db, $student_query);
$student_count = mysqli_fetch_assoc($student_result)['total_students'];


$enrollment_query = "SELECT COUNT(*) as total_enrollments FROM enrollment";
$enrollment_result = mysqli_query($db, $enrollment_query);
$enrollment_count = mysqli_fetch_assoc($enrollment_result)['total_enrollments'];
?>

<div class="container text-center">
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Students</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $student_count; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Enrollments</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $enrollment_count; ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
