<?php
// Thông tin kết nối cơ sở dữ liệu
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

// Lấy dữ liệu từ bảng students
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Tạo mảng chứa dữ liệu
$data = array();
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

// Trả về dữ liệu dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($data);

// Đóng kết nối
mysqli_close($conn);
?>