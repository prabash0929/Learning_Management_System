<?php include 'db.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Learning Management System</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background: linear-gradient(135deg, #2196f3, #21cbf3);
        font-family: 'Segoe UI', sans-serif;
        color: #fff;
    }
    .main-box {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
        border-radius: 16px;
        padding: 50px 30px;
        margin-top: 80px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    h1 {
        font-weight: 700;
        margin-bottom: 40px;
        letter-spacing: 1px;
    }
    .btn-custom {
        padding: 12px 25px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 50px;
        transition: all 0.3s ease;
    }
    .btn-custom:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
</style>
</head>
<body>
<div class="container text-center">
    <div class="main-box">
        <h1>📚 Learning Management System</h1>
        <div>
            <a href="view_student.php" class="btn btn-primary btn-custom mx-2">👨‍🎓 View Students</a>
            <a href="view_course.php" class="btn btn-success btn-custom mx-2">📘 View Courses</a>
            <a href="view_lecture.php" class="btn btn-warning btn-custom mx-2">🎤 View Lectures</a>
        </div>
    </div>
</div>
</body>
</html>
