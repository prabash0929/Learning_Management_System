<?php
include 'db.php';
$result = $mysqli->query("SELECT * FROM students ORDER BY student_id DESC");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>View Students</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h2>Student List</h2>
  
  <!-- Navigation Buttons -->
  <div class="mb-3">
    <a href="index.php" class="btn btn-secondary">Back to Dashboard</a>
    <a href="add_student.php" class="btn btn-success">Add Student</a>
  </div>
  
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th><th>First</th><th>Last</th><th>Age</th>
        <th>Email</th><th>Contact</th><th>Degree Program</th>
        <th>Intake</th><th>Hobbies</th><th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row=$result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['student_id'] ?></td>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['last_name'] ?></td>
        <td><?= $row['age'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['contact_number'] ?></td>
        <td><?= $row['degree_program'] ?></td>
        <td><?= $row['intake'] ?></td>
        <td><?= $row['hobbies'] ?></td>
        <td>
          <a href="edit_student.php?id=<?= $row['student_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="delete_student.php?id=<?= $row['student_id'] ?>" class="btn btn-sm btn-danger"
             onclick="return confirm('Are you sure?')">Delete</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
