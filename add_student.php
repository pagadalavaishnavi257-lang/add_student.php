
<?php
// Database Connection
$conn = new mysqli("localhost", "root", "", "student_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'];
$age = $_POST['age'];
$course = $_POST['course'];

// Insert into DB
$sql = "INSERT INTO students (name, age, course) VALUES ('$name', '$age', '$course')";
if ($conn->query($sql) === TRUE) {
  echo "Student added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
