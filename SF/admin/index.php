<?php
    session_start();
  
    if(!isset($_SESSION["email"]) )
    {
        header("Location:login.php");
        return;
         
    }else{
        require('../Components/conn.php');
        $x =$_SESSION["email"];
        $sql = "select * from admin where email = '$x'";
        $result  = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) != 1)
        {
        header("Location:login.php");
            
        }
        else{
?>

  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        overflow-x:hidden;

    }
    .admin{

    }
    .admin_container{
        display:flex;
        margin:0 auto;
    }
    .left_view{
        width:20vw;
        background:#000;
        height:100vh;
        position:fixed;
        top:0;
        left:0;
        color:#fff;
        text-align:center;   

    }
    .left_view h1{
        margin-top:12px;
        font-family:cursive;
    }
    .left_view ul{
        list-style-type: none;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:flex-start;
        height:50vh;
        font-size:21px;
    }
    
    .left_view ul li{
        
    }
    .left_view ul li a{
        color:#fff;
        text-decoration:none;
        padding-top:21px;
        margin-left:21px;
        display:inline-block;
    }
    .right_view{
        width:80vw;
        margin-left:20vw;
         background: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);
    }
</style>
<body>
    <div class="admin">
        <div class="admin_container">
            <div class="left_view">
                <h1>Skill-finder</h1>
                <span class="name">Your Name</span>
                
                <ul>
                    <li><a href="?id=1">&ggg;&nbsp;&nbsp;Dashboard</a></li>
                    <li><a href="?id=2">&ggg;&nbsp;&nbsp;Manage Users</a></li>
                    <li><a href="?id=3">&ggg;&nbsp;&nbsp;Manage Companies</a></li>
                    <li><a href="?id=4">&ggg;&nbsp;&nbsp;Manage Query</a></li>
                    <li><a href="?id=5">&ggg;&nbsp;&nbsp;Add Jobs</a></li>
                    <li><a href="../index.php">&ggg;&nbsp;&nbsp;Visit Home</a></li>

                </ul>
            </div>
            <div class="right_view">
            <?PHP require("header.php");

                if(isset($_GET["id"])){
                    if($_GET["id"] == 1){
                        require("dashboard.php");   
                }
                if($_GET["id"] == 2){
                        require("manageUsers.php") ; 
                }
                if($_GET["id"] == 3){
                        require("manageCompnies.php") ; 
                }
                if($_GET["id"] == 4){
                        require("manageQuery.php") ; 
                    }
                    if($_GET["id"] == 5){
                        require("jobadd.php") ; 
                    }
                }

               

             ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
        }
    }
  ?>