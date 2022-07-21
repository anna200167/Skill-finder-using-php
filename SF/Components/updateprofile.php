


<?php

    session_start();
    require('conn.php');
    $email = $_SESSION['email'];
    $sql = "select id,fname,lname,emial,phone,street,city,state,country from userss where emial = '$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    // print_r($row);
    $id = $row["id"];
?>

<?php
    if($_POST){

        $a=$_POST['fname'];
        $b=$_POST['lname'];
        $c=$_POST['email'];
        $d=$_POST['phone'];
        $e=$_POST['street'];
        $f=$_POST['city'];
        $g=$_POST['state'];
        $h=$_POST['country'];
        $sql = "UPDATE `userss` SET `fname`='$a',`lname`='$b',`emial`='$c',`phone`='$d',`street`='$e',`city`='$f',`state`='$g',`country`='$h'
         where `id` = '$id'";

        $result = mysqli_query($conn,$sql);

        if($result){
            echo "Updated";
            header("Location: updateprofile.php");

        }else{
            echo "Something Went Wrong";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>Update Profile</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:0;
    }
    body{
        background:violet;
        height:100vh;
    }
    .update{
        background:violet;
        height:100vh;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    .update_container{
        height:50vh;
        background:#fff;
        display:flex;
        justify-content:space-around;
        align-items:center;
        width:80vw;
        margin:0 auto;
        
    }
    .update_left,.update_middle,.update_right{
        display:flex;
        flex-direction:column;
    }
    .update_left{
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    input{
        font-size:21px;
        margin:0 0 20px 0;
        text-align:center;
        border-radius:12px;
        padding:.1rem;
    }
    .update_left img{
        width:100px;
        height:100px;
        border:10px solid   violet;
        background:violet;
        border-radius:50px;
    }
    .update_left p{
        font-size:20px;
        color:gray;
    }
    .update_button{
        display:flex;
        flex-direction:column;
    }
    input[type="submit"]{
        padding:0.2rem;
        color:#000;
        background:violet;
        border:none;
    }
</style>
<body>
    <form action="" method="POST">
    <div class="update">
        <div class="update_container">
            <div class="update_left">
                <img src="../Twitter.png" alt=""> 
               <p><?php echo $row["fname"]?></p>
               <p><?php echo $row["lname"]?></p> 
               <p><?php echo $row["emial"]?></p>
            </div>
            <div class="update_middle">
                <p>fname</p>
                <input type="text"value="<?php echo $row["fname"]?>"  placeholder="Fname" id="" required name="fname">
                <p>last name</p>
                <input type="text"value="<?php echo $row["lname"]?>"  placeholder="Lname" id="" required name="lname">
                <p>Email</p>
                <input type="text"value="<?php echo $row["emial"]?>"  placeholder="email" id="" required name="email">
                <p>phone</p>
                <input type="text"value="<?php echo $row["phone"]?>"  placeholder="Phone" id="" required name="phone">
            </div>
            <div class="update_right">
                <p>Street</p>
                <input type="text" value="<?php echo $row["street"]?>"  placeholder="street" id="" required name="street">
                <p>city</p>

                <input type="text" value="<?php echo $row["city"]?>"  placeholder="city" id="" required name="city">
                <p>state</p>

                <input type="text" value="<?php echo $row["state"]?>"  placeholder="state" id="" required name="state">
                <p>country  </p>

                <input type="text" value="<?php echo $row["country"]?>"  placeholder="country" id="" required name="country">
            </div>
            <div class="update_button">
            <input type="submit" value="Update" name="submit">
            <a href="../index.php">Back To Home</a>
            </div>
        </div>
    </div> 
    </form>




</body>
</html>
