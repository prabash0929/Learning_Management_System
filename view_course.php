<?php
include 'db.php';

if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    $mysqli->query("DELETE FROM courses WHERE course_id=$id");
}

$result = $mysqli->query("SELECT * FROM courses");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Courses</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Courses</h2>
    <a href="add_course.php" class="btn btn-primary mb-3">Add Course</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th><th>Course Name</th><th>Lecture</th><th>Action</th>
        </tr>
        <?php while($row=$result->fetch_assoc()){ ?>
        <tr>
            <td><?= $row['course_id'] ?></td>
            <td><?= $row['course_name'] ?></td>
            <td><?= $row['lecture'] ?></td>
            <td>
                <a href="edit_course.php?id=<?= $row['course_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="view_course.php?delete=<?= $row['course_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="index.php" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>
</body>
</html>
