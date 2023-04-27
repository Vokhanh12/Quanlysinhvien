<?php
//browser-sync start --proxy 127.0.0.244 --files "*.php"    
    $Check=true;
    $str=array("username","password","repassword","Tinhthanh","nameUser","Address","sdt","email","birthOfday");
    $str1=array("Tên truy cập","Mật khẩu","Nhập lại mật khẩu","Tỉnh thành","Họ và tên","Địa chỉ","SDTEmail","Ngày sinh");

    $username="root";
    $password = ""; 
    $server   = "localhost";   // Khai báo server
    $dbname   = "sinhvien";      // Khai báo database

  
    $connect = new mysqli($server,$username,$password,$dbname);

    

   


        //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát. A                                               `````
        if ($connect->connect_error) {
            die("Không kết nối :" . $conn->connect_error);
            exit();
        }
        echo "Khi kết nối thành công den CSDL những dòng code bên dưới sẽ được thực hiện tiếp.";
    
   
    
    $username = $_POST["Username"];
    $Password = $_POST["Password"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $Sex = $_POST["Sex"];


  


    //insert in my table of Sql
    insertSQL($connect);

   // selectSQL($connect);



    
    function insertSQL($connect){

        $UserID = rand(1, 99999);
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $Email = $_POST["Email"];
        $Phone = $_POST["Phone"];
        $Sex = $_POST["Sex"];

        $i=0;

        $sql ="INSERT INTO `users`(`UserID`, `Username`, `Password`, `Emaill`, `Phone`, `Sex`)
                                         VALUES ('$UserID','$Username','$Password',' $Email','$Phone','$Sex')";



        if (mysqli_query($connect,$sql)) {
            echo "<br>insert thanh cong";
            $UserID++;
           
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }

      

    }
   


?>