<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $id    = intval($_POST['lecture_id']);
    $name  = $_POST['lecture_name'];
    $deg   = $_POST['tech_degree'];
    $qual  = $_POST['qualification'];

    $mysqli->query("INSERT INTO lectures (lecture_id, lecture_name, tech_degree, qualification) 
                    VALUES ($id,'$name','$deg','$qual')");
    header("Location: view_lecture.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Lecture</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4 form-box">
  <h2>Add Lecture</h2>
  <form method="post">
    <div class="mb-3">
      <label>Lecture ID</label>
      <input type="number" name="lecture_id" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Lecture Name</label>
      <input type="text" name="lecture_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Tech Degree</label>
      <input type="text" name="tech_degree" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Qualification</label><br>
      <div class="form-check form-check-inline">
        <input type="radio" name="qualification" value="BSc" class="form-check-input" required>
        <label class="form-check-label">BSc</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="qualification" value="MSc" class="form-check-input" required>
        <label class="form-check-label">MSc</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="qualification" value="PhD" class="form-check-input" required>
        <label class="form-check-label">PhD</label>
      </div>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Add Lecture</button>
    <a href="view_lecture.php" class="btn btn-secondary">Back</a>
  </form>
</div>
</body>
</html>
