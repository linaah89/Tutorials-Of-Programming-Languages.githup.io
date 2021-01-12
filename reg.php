<?php
    $con= new mysqli("localhost","root",'',"Reg"); //_connect
        if ($con->connect_error) {
                die(mysqli_error());
                die("Connection failed: " . $con->connect_error);
              }else{if (isset($_POST['sub'])) {
                if (empty($_POST['name']) || empty($_POST['eml']) || empty($_POST['pass'])) {
                }else{
                $name=$_POST['name'];
                $email=$_POST['eml'];
                $pass=$_POST['pass'];
                $newuser = "INSERT INTO users (name,eml,password) VALUES ('$name','$email','$pass')";
                if(mysqli_query($con, $newuser)){
                  ?>
                    <script>alert('Regester Successfully')</script>";
                    "<script>window.location.href='home.html'</script>"
                    <?php 
                    }else{
                      echo "<script>alert('Failed register')</script>";
                    }
            }
        }
    }
            $con->close();
        ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Register page</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <style>
          .box{border: thin solid black; 
            padding: 10px;
            padding-bottom:60px;
            margin-left:10cm;
            margin-right: 10cm;
          }
          ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        li {
            display: inline;
            float:left;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }
        </style>
        <h1 id="header">Sign up</h1>
        <script src="app.js"></script>
    </head>
    <body>
            <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="">Sign In</a></li>
        <li><a href="Reg.php">Sign Up</a></li>
        <li><a href="mailto:somine@gmail.com" id="contactUs">Contact Us</a></li>
    </ul>
          <div class="content" style="text-align: center;">
              <div class="box">
                  <h1 style="text-align: center;">Sign up</h1>
                  <br>
                  <form method="post" action="#">
                  <div><p id="msg"></p></div>
                    <div><label>Enter your Name</label><br>
                        <input type="text" id="name" name="name" autofocus require>
                      </div>
                      <br>
                      <div><label>Enter your Email</label><br>
                        <input type="email"  id="eml" name="eml" require>
                      </div>
                      <br>
                      <div><label>Enter the password</label><br>
                        <input type="password" id="pass" name="pass" require>
                      </div>
                      <br>
                        <input type="submit" name="sub" id="sub" value="register" require>
                  </form>
              </div>
          </div>
          <footer><p style="text-align: center;">You already have an account? <a href="sign_in.html">sign in</a><p></footer>
    </body>
</html>