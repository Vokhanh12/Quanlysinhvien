<html>
    <head>
        <link rel="stylesheet" href="Custom.css">
    </head>

    <body>
    

        <div class="Container">
            
            <div class="Top">
                <h3>Form User</h3>
            </div>
            <div class="Bottom">
                <div class="ContentForm">
                    <h5>Nhập thông tin đăng ký</h5>
                </div>

                <div class="RegisterForm">
                    <form onsubmit="return validateForm()" action="action_page_register.php" method="POST">
                          <script src="custom.js"></script>
                        <table>
                            <tr>
                                <td><label for="">Tên Tài khoảng</label></td>
                                <td><input type="text" id="Username" name="Username"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Mật khẩu</label></td>
                                <td><input type="text" id="Password" name="Password"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Email</label></td>
                                <td><input type="text" id="Email" name="Email"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Phone</label></td>
                                <td><input type="text" id="Phone" name="Phone"></input></td>
                            </tr>


                            <tr>
                                <td>
                                    <form>
                                    <p>Sex:</p>
                                        <label>
                                            <input type="radio" name="Sex" value="Nam">
                                            Nam
                                        </label>
                                        <label>
                                            <input type="radio" name="Sex" value="Nu">
                                            Nữ
                                        </label>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="submit" value="Đăng ký"></input></td>
                                <td><label for="">là bắt buộc nhập</label></td>
                            </tr>
                            

                        </table>

                    </form>

                    
                </div>
            </div>

        </div>
    </body>
</html>