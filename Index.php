
<html>
    <head>
        <link rel="stylesheet" href="Custom.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div id="form_container">
            <h1>Form User</h1>
            <div class="head">
            <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" alt="Mô tả ảnh" width="200" height="150" >
            </div>
            <form id="login_form">
            <button type="button" onclick="loadLoginForm()">đăng nhập</button>
            </form>

            <form   id="register_form">
            <button type="button" onclick="loadRegistrationForm()">Đăng ký</button>
            </form>
            <script>
                                function loadRegistrationForm() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("form_container").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "register_form.php", true);
                xhttp.send();
                }

                function loadLoginForm() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("form_container").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "login_form.php", true);
                xhttp.send();
                }
            </script>
            
        </div>
    </body>
</html>