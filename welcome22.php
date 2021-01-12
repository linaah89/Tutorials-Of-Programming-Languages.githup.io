

 <?php 
 $con= new mysqli("localhost","root",'',"Reg"); //_connect
 if ($con->connect_error) {
         die(mysqli_error());
         die("Connection failed: " . $con->connect_error);
       }else{
        $eml=$_POST["eml"]; 
        $pass=$_POST["pass"]; 
        $query="SELECT * FROM users WHERE eml='$eml'";
        $result=mysqli_query($con,$query);
        if($result){
            if (mysqli_num_rows($result) > 0) {
    
                while($row = mysqli_fetch_assoc($result)) {
                  if($row["password"]==$pass){
                    ?>
                    <script>alert('Sign in Successfully')</script>";
                    "<script>window.location.href='home.html'</script>"
                    <?php  
 
                    }else{
                      echo "<script>alert('The password entered is not correct ')</script>";
                    }
                  }
                }
               else {
                echo "<script>alert('You do not have an account, sign up first')</script>";
              }
            


        }else{
            echo "<script>alert('Field sign in')</script>";
        }

        mysqli_close($con);
      }
        ?>

