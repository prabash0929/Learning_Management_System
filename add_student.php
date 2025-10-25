<?php
include 'db.php';

$success = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first   = $_POST['first_name'];
    $last    = $_POST['last_name'];
    $age     = intval($_POST['age']);
    $email   = $_POST['email'];
    $contact = $_POST['contact_number'];
    $degree  = $_POST['degree_program'];
    $intake  = $_POST['intake'];
    $hobbies = $_POST['hobbies'];

    $sql = "INSERT INTO students (first_name, last_name, age, email, contact_number, degree_program, intake, hobbies)
            VALUES ('$first','$last',$age,'$email','$contact','$degree','$intake','$hobbies')";
    if ($mysqli->query($sql)) {
        $success = "Student added successfully!";
    } else {
        $success = "Error: " . $mysqli->error;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Add Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h2>Add Student</h2>
  <?php if($success): ?><div class="alert alert-info"><?= $success ?></div><?php endif; ?>
  <form method="post">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label>First Name</label>
        <input type="text" name="first_name" class="form-control" required>
      </div>
      <div class="col-md-6 mb-3">
        <label>Last Name</label>
        <input type="text" name="last_name" class="form-control" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
        <label>Age</label>
        <input type="number" name="age" class="form-control" required>
      </div>
      <div class="col-md-4 mb-3">
        <label>Contact Number</label>
        <input type="text" name="contact_number" class="form-control" required>
      </div>
      <div class="col-md-4 mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
    </div>
    <div class="mb-3">
      <label>Degree Program</label>
      <input type="text" name="degree_program" class="form-control">
    </div>
    <div class="mb-3">
      <label>Intake</label>
      <input type="text" name="intake" class="form-control">
    </div>
    <div class="mb-3">
      <label>Hobbies</label>
      <input type="text" name="hobbies" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add Student</button>
    <a href="view_student.php" class="btn btn-secondary">Back</a>
  </form>
</div>
</body>
</html>
