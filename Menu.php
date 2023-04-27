<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <script src="Custom.js"></script>
    </head>
    <body>
        <div class="Container">
            <div class="FormMenu">
                <ul>
                    <li><button onclick="loadForm(1)">Danh sách sinh vien</button></li>
                    <li><button onclick="loadForm(2)">.</button></li>
                    <li><button onclick="loadForm(3)">.</button></li>
                    <li><button onclick="loadForm(4)">.</button></li>
                </ul>
            </div>
            <div class="Form">
                
                <form id="form" onsubmit="return validateForm()" action="action_page.php" method="POST">
                </form>

                <form id="form1" onsubmit="return validateForm()" action="action_page1.php" method="POST">
                </form>

            </div>
            
        </div>
    </body>
</html>

