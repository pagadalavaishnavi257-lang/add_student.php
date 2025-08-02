
<!DOCTYPE html>
<html>
<head>
  <title>Student Entry Panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
  <div class="container">
    <h2>Add Student Data</h2>
    <form action="add_student.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Student Name</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="age" required>
      </div>
      <div class="mb-3">
        <label for="course" class="form-label">Course</label>
        <input type="text" class="form-control" name="course" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
  </div>
</body>
</html>
