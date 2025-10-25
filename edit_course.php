<?php
include 'db.php';
$id = intval($_GET['id']);
$res = $mysqli->query("SELECT * FROM courses WHERE course_id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['course_name'];
    $lecture = $_POST['lecture'];
    $mysqli->query("UPDATE courses SET course_name='$name', lecture='$lecture' WHERE course_id=$id");
    header("Location: view_course.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Course</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Course</h2>
    <form method="post">
        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="course_name" class="form-control" value="<?= $res['course_name'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Lecture</label>
            <input type="text" name="lecture" class="form-control" value="<?= $res['lecture'] ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="view_course.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
