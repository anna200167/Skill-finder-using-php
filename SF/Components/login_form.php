<?php
 $err = false;
if(isset($_POST["submit"])){
     

    
      include "conn.php";
      $a  =   $_POST['email'];
      $b  =   $_POST['password'];
      $sql = "SELECT `emial`,`password` FROM `userss` WHERE `emial` = '$a'";
      
      $result = mysqli_query($conn,$sql);

      if (mysqli_num_rows($result) == 0) {
        // echo "No rows found, nothing to print so am exiting";
        $err = true;

    }
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if(password_verify($b,$row['password'])){
            session_start();
            $_SESSION["email"] = $a;
            echo "found";
            header("Location:index.php");
            exit;
        }else{
            echo "one";
            $err = true;
        }
      
    }
    else{
        $err = true;
    }
   
  }

?>

<style>
    .err{
        background:Red;
        color:#fff;
        height:6vh; 
        display:flex;
        justify-content:flex-start;
        align-items:center;
        font-size:21px;
    }
        .login_form{
            height:90vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            text-align:center;
        }
        .login_form input{
            padding:10px;
            margin:20px;
            border-radius:20px;
            width:40vw;
            font-size:20px;
        }
        ::placeholder {
        color: #000;
        opacity: 1;
        }
        .login_form .submit{
            background:#000;
            color:#fff;
        }
</style>

<?php
    if($err){
    echo "<div class='err'>
    <p>&nbsp;&nbsp; Email Or Password is Wrong<p>
    </div>";
    }
?>
<div class="login_form">
    
    <form action="login.php" method="POST">

                <input type="email" placeholder="Enter Email"  name="email" 	autofocus required>
                <br>
                <input type="password" placeholder="Enter Password"  name="password" required>
                <br>
                <input type="submit"  value="Submit" class="submit" name="submit">
                <br>
                <p>New User ?<a href="register.php">Click Here To Register</a> </p>
   </form>
  
</div>