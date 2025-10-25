<?php
include 'db.php';

if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    $mysqli->query("DELETE FROM lectures WHERE lecture_id=$id");
}

$result = $mysqli->query("SELECT * FROM lectures");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Lectures</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.scroll-qual { max-height: 60px; overflow-y: auto; }
</style>
</head>
<body>
<div class="container mt-5">
    <h2>Lectures</h2>
    <a href="add_lecture.php" class="btn btn-primary mb-3">Add Lecture</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th><th>Lecture Name</th><th>Tech Degree</th><th>Qualification</th><th>Action</th>
        </tr>
        <?php while($row=$result->fetch_assoc()){ ?>
        <tr>
            <td><?= $row['lecture_id'] ?></td>
            <td><?= $row['lecture_name'] ?></td>
            <td><?= $row['tech_degree'] ?></td>
            <td><div class="scroll-qual"><?= $row['qualification'] ?></div></td>
            <td>
                <a href="edit_lecture.php?id=<?= $row['lecture_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="view_lecture.php?delete=<?= $row['lecture_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="index.php" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>
</body>
</html>
