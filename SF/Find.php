<?php
    session_start();
    echo $_SESSION["email"];
    if(isset($_SESSION["email"]))
    {
        include('Components/headeryes.php');
    }else{
        header("Location:login.php");
        exit();
    }
?>
<?php  include('Components/find_skill.php'); ?>
