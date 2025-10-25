<?php
include 'db.php';

if(isset($_POST['submit'])){
    $id = intval($_POST['course_id']);
    $name = $_POST['course_name'];
    $lecture = $_POST['lecture'];

    $mysqli->query("INSERT INTO courses (course_id, course_name, lecture) VALUES ($id,'$name','$lecture')");
    header("Location: view_course.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Course</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Add Course</h2>
    <form method="post">
        <div class="mb-3">
            <label>Course ID</label>
            <input type="number" name="course_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="course_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Lecture</label>
            <input type="text" name="lecture" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Add Course</button>
        <a href="view_course.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
