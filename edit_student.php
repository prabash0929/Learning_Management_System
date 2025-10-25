<?php
include 'db.php';
$id = intval($_GET['id']);
$res = $mysqli->query("SELECT * FROM students WHERE student_id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $first   = $_POST['first_name'];
    $last    = $_POST['last_name'];
    $age     = intval($_POST['age']);
    $email   = $_POST['email'];
    $contact = $_POST['contact_number'];
    $degree  = $_POST['degree_program'];
    $intake  = $_POST['intake'];
    $hobbies = $_POST['hobbies'];

    $mysqli->query("UPDATE students 
        SET first_name='$first', last_name='$last', age=$age, email='$email', contact_number='$contact', 
            degree_program='$degree', intake='$intake', hobbies='$hobbies' 
        WHERE student_id=$id");

    header("Location: view_student.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Student</h2>
    <form method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" value="<?= $res['first_name'] ?>" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" value="<?= $res['last_name'] ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="<?= $res['age'] ?>" required>
          </div>
          <div class="col-md-4 mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $res['email'] ?>" required>
          </div>
          <div class="col-md-4 mb-3">
            <label>Contact Number</label>
            <input type="text" name="contact_number" class="form-control" value="<?= $res['contact_number'] ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Degree Program</label>
            <input type="text" name="degree_program" class="form-control" value="<?= $res['degree_program'] ?>" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Intake</label>
            <input type="text" name="intake" class="form-control" value="<?= $res['intake'] ?>" required>
          </div>
        </div>
        <div class="mb-3">
          <label>Hobbies</label>
          <input type="text" name="hobbies" class="form-control" value="<?= $res['hobbies'] ?>">
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="view_student.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
