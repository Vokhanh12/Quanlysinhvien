
<html>
    <head>
        <link rel="stylesheet" href="Custom.css">
        
    </head>
    <body>
        <div class="Container">
            <h1>Form User</h1>
            <form action="Action_page_login.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label>Tên</label>
                        </td>

                            <td><input type="Text" id="Username" name="Username"></td>
                    </tr>

                    <tr>
                        <td>
                            <label for="">Mật khẩu</label>
                        </td>

                        <td>
                                <input type="text" id="Password" name="Password">
                        </td>
                    </tr>
                </table>
                                 <td><input type="submit" value="Đăng Nhập"></input></td>
                                <td><label for="">là bắt buộc nhập</label></td>

            </form>
            
        </div>
    </body>
</html>