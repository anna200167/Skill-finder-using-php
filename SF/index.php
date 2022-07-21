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
<?PHP
    include('Components/main_search.php');
?>
<?PHP
    include('Components/howtouse_section.php');
?>

<?PHP
    include('Components/homecompanies.php');
?>
<?PHP
    include('Components/homeskill.php');
?>
<?PHP
    include('Components/footer.php');
?>
