<?php
include("login.php");
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['passsword'];
   $sql = "select * from login where username = '$username' and password = '$password'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   if($count==1){
    header("Location:welcome.php");
   }
   else{
    echo '<script>
       window.location.href = index.php";
       alert("Login failed. Invalid username or password!!")
       </script>'; 
   }
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="attendance1.css">
    <title>Document</title>
</head>
<body>
    <!--<h1>Hello</h1>     
    <button id="btnLogout">LOGOUT</button>-->
     <div class="page">
        <div class="header-area">
            <div class="logo-area"> <h2 class="logo">ATTENDANCE APP</h2></div>
            <div class="logout-area"><button class="btnlogout" id="btnLogout">LOGOUT</button></div>
        </div>
        <div class="session-area">
              <div class="label-area"><label>SESSION</label></div>
              <div class="dropdown-area">
                <select class="ddlclass" id="ddlclass">
                   <!-- <option>SELECT ONE</option>
                    <option>2023 AUTUMN</option>
                    <option>2023 SPRING</option>-->
                </select>
              </div>
        </div>

        <div class="classlist-area" id="classlistarea">
          <!--<div class="classcard">CS101</div>
          <div class="classcard">CS101</div>
          <div class="classcard">CS101</div>
          <div class="classcard">CS101</div>
          <div class="classcard">CS101</div>
          <div class="classcard">CS101</div>
          <div class="classcard">CS101</div>-->
        </div>

        <div class="classdetails-area" id="classdetailsarea">
            <!--<div class="classdetails">
                <div class="code-area">CS101</div>
                <div class="title-area">INTRODUCTION TO SCIENTIFIC COMPUTING</div>
                <div class="ondate-area">
                    <input type="date">
                </div>
            </div>-->
        </div>
        
        <div class="studentlist-area" id="studentlistarea">
            <!--<div class="studenttlist"><label>STUDENT LIST</label></div>
            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">PRAKASH KUMAR CHAUHAN</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>

            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">PRAKASH KUMAR CHAUHAN</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>

            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">PRAKASH KUMAR CHAUHAN</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>

            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">PRAKASH KUMAR CHAUHAN</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>

            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">PRAKASH KUMAR CHAUHAN</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>

            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">PRAKASH KUMAR CHAUHAN</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>

            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">PRAKASH KUMAR CHAUHAN</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>
           -->
           
        </div>
     </div>
     <input type="hidden" id="hiddenFacId" value=<?php echo($facid) ?>>
     <input type="hidden" id="hiddenSelectedCourseID" value=-1> 
     <script src="login.js"></script>
     <script src="jquery.js"></script>
     <script>
        // Add logout functionality
        document.addEventListener("DOMContentLoaded", function() {
            const logoutButton = document.getElementById("btnLogout");
            logoutButton.addEventListener("click", function() {
                // Redirect to the login page
                window.location.href = "index.php";
            });
        });
    </script>

    <!--renamed the files just to keep the filenames
    similar, nothing more than that-->
</body>
</html>

