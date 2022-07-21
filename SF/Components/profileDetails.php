<?php
    session_start();
    if(isset($_SESSION["email"]))
    {
        $x = $_SESSION["email"];
        require('conn.php');
         $sql = "select * from userss where emial = '$x '";

         $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result) <= 0)
         {
             echo "Nothing to display";
         }else{

         
         $row = mysqli_fetch_array($result);
        ?>
        
        
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo strtoupper($row["fname"]). " Profile Page:" ?> </title>
    <style>
        .profile{
            display:flex;
            flex-direction:column;
            padding:20px;
        }
        .upper{
            align-self:flex-end;
            margin-bottom:20px;
        }
        .upper img{
            border:2px solid;
            border-radius:20px;
            width:250px;
            height:300px;
        }
        .lower{

        }
        .lower p{
            font-size:21px;
        }
        span{
            background:#000;
            color:#fff;
            padding:5px;
            margin-top:12px;
            display:inline-block;
        }
        .edit{
            font-size:21px;
            background:blue;
            color:#fff;
            padding:1rem;
            border-radius:12px;
            text-decoration:none;
        }
        .delete{
            font-size:21px;
            background:red;
            color:#fff;
            padding:1rem;
            border-radius:12px;
            text-decoration:none;
        }
        .changepassword{
            font-size:21px;
            background:green;
            color:#fff;
            padding:1rem;
            border-radius:12px;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="profile">
        <div class="upper">
        <?PHP

if(!isset($row['img']) || $row['img'] == NULL){
    
    echo '<img src="download.jpg" alt="">';
    // echo $row["img"];
}else{
    echo '<img src="imgs/skills/'.$row["img"].'" alt="">';
        
}?>
        </div>
        <div class="lower">
            <p>Name</p>
            <span><?php  echo $row["fname"]  . " " .$row["lname"]?></span>
            <p>Email</p>
            <span><?php  echo $row["emial"] ?> </span>
            <p>phone</p>
            <span><?php  echo $row["phone"] ?>  </span>
            <p>street</p>
            <span><?php  echo $row["street"] ?>  </span>
            <p>city</p>
            <span>  <?php  echo $row["city"] ?> </span>
            <p>state</p>
            <span> <?php  echo $row["state"] ?>  </span>
            <p>country</p>
            <span> <?php  echo $row["country"] ?>  </span>
            <p>skill</p>
            <span> <?php  echo $row["skill"] ?>  </span>
            <p>gender</p>
            <span>  <?php  echo $row["gender"] ?> </span>
            <p>Date Of Birth</p>
            <span><?php  echo $row["dob"] ?>  </span>
            <br>
            <br>
            <br>

            <a href="Components/changepassword.php" class="changepassword">Change Password</a>
            <a href="Components/updateprofile.php" class="edit">Edit</a>
            <a href="Components/deleteprofile.php" class="delete">Delete</a>

        </div>
    </div>
</body>
</html>
        
        <?PHP
         }
         
    }
?>

