<?php

session_start();
echo $_SESSION["email"];
    if(isset($_POST["OK"])){
        $sql = "DELETE FROM `userss` WHERE emial = '$_SESSION[email]'";
        require('conn.php');
        $result = mysqli_query($conn,$sql);
        if($result){
            session_destroy();
            header('Location: ../login.php');
        }else{
            echo "Some Erroe Occur";
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Profile</title>
</head>
<style>
    .del_container{
        max-width:1200px;
        margin: 10vh auto;
        font-size:21px;
        box-shadow:2px 2px 12px;
        text-align:center;

    }
    .del_list{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .del_list a{
        padding:1rem;
        margin:1rem;
        color:#fff;
        background:red;
        border-radius:12px;
        text-decoration:none;
    }
    .del_list form{
        margin-bottom:2rem;
    }
    .del_list form input[type="submit"]{
        background:black;
        color:#fff;
        font-size:21px;
        padding:5px;
        margin:12px;    
    }

</style>
<body>
   <div class="del_container">
        <h1>Do You Really Want To Delete ?</h1>
        <div class="del_list">
            <form action="" method="POST">
            <input type="submit" value="YES" name="OK" >
            </form>
            <form action="../index.php">
                <input type="submit" value="NO">
            </form>
        </div>
    </div>
</body>
</html>