<?php
include 'db.php';
$id = intval($_GET['id']);
$res = $mysqli->query("SELECT * FROM lectures WHERE lecture_id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['lecture_name'];
    $degree = $_POST['tech_degree'];
    $qual = $_POST['qualification'];
    $mysqli->query("UPDATE lectures SET lecture_name='$name', tech_degree='$degree', qualification='$qual' WHERE lecture_id=$id");
    header("Location: view_lecture.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Lecture</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Lecture</h2>
    <form method="post">
        <div class="mb-3">
            <label>Lecture Name</label>
            <input type="text" name="lecture_name" class="form-control" value="<?= $res['lecture_name'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Tech Degree</label>
            <input type="text" name="tech_degree" class="form-control" value="<?= $res['tech_degree'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Qualification</label>
            <textarea name="qualification" class="form-control" rows="3" style="resize:none;" required><?= $res['qualification'] ?></textarea>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="view_lecture.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
