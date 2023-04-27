function loadForm(id){
  var form = document.getElementById("form");
  var form1 = document.getElementById("form1");
  if (id == 1) {
      
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        form1.innerHTML = this.responseText;
        // Tạo sự kiện và kích hoạt nó sau khi HTML đã được thêm vào DOM
        var event = new Event('load');
        window.dispatchEvent(event);



      }
    };
    xhttp.open("POST", "getData.php", true);
    xhttp.send();

    form.innerHTML = '<html><body onload="selectData()"><button onclick="" name="asd">SUA</button><div id="table-container"></div><form action="Action_page.php" method="POST"><input type=\'text\' placeholder=\'StudentID\' id="StudentID" name="StudentID"><input type=\'text\' placeholder=\'FirstName\' id="FirstName" name="FirstName"><input type=\'text\' placeholder=\'LastName\' id="LastName" name="LastName"><input type=\'text\' placeholder=\'EMAILL\' id="EMAILL" name="EMAILL"><input type=\'text\' placeholder=\'ClassID\' id="ClassID" name="ClassID"><button onclick="addData()" name="add">THEM</button><button onclick="updateData()" name="update">SUA</button><button onclick="deleteData()" name="delete">XOA</button><button onclick="submitForm()">XEM</button> </form><script>function addData() { var studentID = document.getElementById("StudentID").value; var firstName = document.getElementById("FirstName").value; var lastName = document.getElementById("LastName").value; var email = document.getElementById("EMAILL").value; var classID = document.getElementById("ClassID").value; $.post("Action_page.php", { StudentID: studentID, FirstName: firstName, LastName: lastName, EMAILL: email, ClassID: classID }).done(function(data) {alert("Dữ liệu đã được thêm thành công");});}function updateData() {var studentID = document.getElementById("StudentID").value;var firstName = document.getElementById("FirstName").value;var lastName = document.getElementById("LastName").value;var email = document.getElementById("EMAILL").value;var classID = document.getElementById("ClassID").value; $.post("Action_page.php", { StudentID: studentID, FirstName: firstName, LastName: lastName, EMAILL: email, ClassID: classID }).done(function(data) {alert("Dữ liệu đã được cập nhật thành công");});}function deleteData() {var studentID = document.getElementById("StudentID").value;$.post("Action_page.php", { StudentID: studentID }).done(function(data) {alert("Dữ liệu đã được xóa thành công");});}</script></body></html>';




    
    

  }
}
//StudentID, FirstName, LastName, Email, ClassID

function submitForm() {
  var form = document.getElementById("form");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Xử lý kết quả trả về từ server
      // Ví dụ:
      alert("Đăng ký thành công");
    }
  };
  xhttp.open(form.method, form.action, true);
  xhttp.send(new FormData(form));
  return false; // Ngăn chặn hành động mặc định của form
}

function selectData() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.responseText);
      var table = "<table><tr><th>Student ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Class ID</th></tr>";
      for (var i = 0; i < data.length; i++) {
        table += "<tr><td>" + data[i].StudentID + "</td><td>" + data[i].FirstName + "</td><td>" + data[i].LastName + "</td><td>" + data[i].EMAILL + "</td><td>" + data[i].ClassID + "</td></tr>";
      }
      table += "</table>";
      document.getElementById("table-container").innerHTML = table;
    }
  };
  xhttp.open("GET", "getData.php", true);
  xhttp.send();
}
