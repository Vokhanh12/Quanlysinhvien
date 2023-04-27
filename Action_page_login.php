<?php
  // Lấy giá trị username và password từ $_POST


  $username="root";
  $password = ""; 
  $server   = "localhost";   // Khai báo server
  $dbname   = "sinhvien";      // Khai báo database


  $connect = new mysqli($server,$username,$password,$dbname);

  

 


      //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát. A                                               `````
      if ($connect->connect_error) {
          die("Không kết nối :" . $connect->connect_error);
          exit();
      }
      echo "Khi kết nối thành công den CSDL những dòng code bên dưới sẽ được thực hiện tiếp.";
  

  


  function selectSQL($connect){

        
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
 


    $sql= "SELECT `UserID`, `UserName`, `Password`, `Emaill`, `Phone`, `Sex` FROM `users` WHERE `UserName`='$Username' AND `Password`='$Password'";

    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<br>Select thanh cong";
        while($row = $result->fetch_assoc()) {
            if($Username==$row["UserName"]&&$Password==$row["Password"]){
           echo "Dang nhap thanh cong";
           header('Location: Menu.php');
            exit;
           die;
            }
        }
    } else {
        echo "Dang nhap that bai";
    }
    
}

selectSQL($connect);

mysqli_close($connect);

?>