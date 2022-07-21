<?php
$id =$_GET['id'] ;
echo $id;

    if($_POST){
        $id= $_POST["value"];
        $sql = "DELETE FROM `jobs` WHERE   id = '$id'";
        require('../Components/conn.php');
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:index.php?id=3');
        }else{
            echo "Some thing went wrong";
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
    body{
        height:100vh;
        background:violet;
    }
    .del_container{
        max-width:1200px;
        margin: 10vh auto;
        font-size:21px;
        box-shadow:2px 2px 12px;
        text-align:center;
        padding:10vh;
        background:#fff;
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
        background:black;
        border-radius:12px;
        text-decoration:none;
    }
    .del_list form{
        margin-bottom:2rem;
    }
    .del_list form input[type="submit"]{
        background:red;
        color:#fff;
        border-radius:12px;
        padding:1rem;
        margin:1rem;  
    }

</style>
<body>
   <div class="del_container">
        <h1>Do You Really Want To Delete ?</h1>
        <div class="del_list">
            <form action="" method="POST">
            <input type="text" value="<?php echo $_GET['id'] ?>" name="value" hidden>
            <input type="submit" value="YES" name="ids" >
            </form>
            <form action="">
                <a href="index.php?id=2">No</a>
            </form>
        </div>
    </div>
</body>
</html>
