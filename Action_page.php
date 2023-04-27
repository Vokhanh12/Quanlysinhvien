<?php
// Thông tin kết nối đến CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sinhvien";

// Tạo kết nối đến CSDL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

// Xử lý thêm dữ liệu
if (isset($_POST["add"])) {
  $studentID = $_POST["StudentID"];
  $firstName = $_POST["FirstName"];
  $lastName = $_POST["LastName"];
  $email = $_POST["EMAILL"];
  $classID = $_POST["ClassID"];
  
  $sql = "INSERT INTO students (studentID, firstName, lastName, email, classID) VALUES ('$studentID', '$firstName', '$lastName', '$email', '$classID')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Thêm dữ liệu thành công aaaaaaaaaaaaaaaaaa";
  } else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
}

// Xử lý cập nhật dữ liệu
if (isset($_POST["update"])) {
  $studentID = $_POST["StudentID"];
  $firstName = $_POST["FirstName"];
  $lastName = $_POST["LastName"];
  $email = $_POST["EMAILL"];
  $classID = $_POST["ClassID"];
  
  $sql = "UPDATE students SET firstName='$firstName', lastName='$lastName', email='$email', classID='$classID' WHERE studentID='$studentID'";
  
  if ($conn->query($sql) === TRUE) {
    echo "Cập nhật dữ liệu thành công";
  } else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
}

// Xử lý xóa dữ liệu
if (isset($_POST["delete"])) {
  $studentID = $_POST["StudentID"];
  
  $sql = "DELETE FROM students WHERE studentID='$studentID'";
  
  if ($conn->query($sql) === TRUE) {
    echo "Xóa dữ liệu thành công";
  } else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
}

//Xử lý Xem dữ liệu
if(isset($_POST["select"])){

}

// Đóng kết nối đến CSDL
$conn->close();
?>