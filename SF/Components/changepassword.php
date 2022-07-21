<style>
    *{
        text-align:center;
    }
    .sucess{
        background:green;
        color:#fff;
        height:6vh; 
        display:flex;
        justify-content:flex-start;
        align-items:center;
        font-size:21px;
    }
    .yel{
        background:yellow;
        color:#000;
        border-radius:20px;
        font-size:21px;
        padding:5px;
    }
    .err{
        background:Red;
        color:#fff;
        height:10vh; 
        display:flex;
        flex-direction:column;
        justify-content:flex-start; 
        align-items:flex-start;
        font-size:21px;
    }
    input{
          padding:10px;
            margin:20px;
            border-radius:20px;
            width:40vw;
            font-size:20px;
    }
    input[type="submit"]{
        color:#fff;
        background:#000;
    }
</style>

<?php
$sucess=false;
$err=false;
$errmsg="";

    if($_POST){
        session_start();
        if(isset($_SESSION['email'])){


            $sql = " select * from userss where emial = '$_SESSION[email]'";
            require('../Components/conn.php');
            $result = mysqli_query($conn,$sql);
            $password = $_POST["old"];
            $newpassword1 = $_POST["new1"];
            $newpassword2 = $_POST["new2"];


            $response = mysqli_fetch_array($result);

            if(mysqli_num_rows($result) == 1)
            {

                if(password_verify($newpassword1,$response["password"])){
                    if($newpassword1 === $newpassword2){
                        $pass = password_hash($newpassword1,PASSWORD_DEFAULT);
                        $sql = "UPDATE `userss` SET `password` = '$pass' WHERE emial = '$_SESSION[email]'";
                        $results = mysqli_query($conn,$sql);
                        if($results){
                                     $sucess= true;
                                 }else{
                                    $err=true;
                                    $errmsg = "Something Went Wrong";
                                 }
                                }
                                else{
                                    $err=true;
                                    $errmsg = "Password are Not Matching";
                                }
                }   
                else{
                    $err=true;
                    $errmsg = "Main Password Do Not Match";
                }
            }else{
                $err=true;
                $errmsg = "Something went Wrong";
            }
        }
    }
?>
 <?php
    if($err){
    echo "<div class='err'>
    <p>&nbsp;&nbsp; $errmsg </p>
    </div>";
    }
?>
<?php
    if($sucess){
    echo "<div class='sucess'>

<p>&nbsp;&nbspPassword Changed Sucessfully GO TO HOME PAGE <a href='../index.php'><span class='yel'>Click Here To Login</span> </a><p>
    </div>";
    }
?>
<div class="change_container">
    <form action="" method="POST">
        <h1>Change Password</h1>
        <input type="password" name="old" id="" placeholder="Enter Current Password">
        <br>
        <input type="password" name="new1" id="" placeholder="Enter New Password">
        <br>
        <input type="password" name="new2" id="" placeholder="Confirm Password">
        <br>

        <br>
        <input type="submit" value="Submit">
    </form>
</div>
