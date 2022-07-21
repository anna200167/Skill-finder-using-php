<?php
 $err = false;
if(isset($_POST["submit"])){
     

    
      include "../Components/conn.php";
      $a  =   $_POST['email'];
      $b  =   $_POST['password'];
      $sql = "SELECT `email`,`password` FROM `admin` WHERE `email` = '$a' AND `password` = '$b' ";
      
      $result = mysqli_query($conn,$sql);

      if($result) {
        if (mysqli_num_rows($result) == 0) {
            $err = true;
        }
        if (mysqli_num_rows($result) == 1) {
            while($data = mysqli_fetch_assoc($result)){
                echo $data["name"];
            }
            session_start();
            $_SESSION["email"] = $a;
            echo "found";
            header("Location:index.php?id=1");
            exit;
        }
        else{
            $err = true;
        }
    }
    else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
   
     
}

?>

<style>
  body{
    background: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);
  }
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
   </form>
  
</div>