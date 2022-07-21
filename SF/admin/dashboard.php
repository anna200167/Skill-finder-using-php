<style>
    .dashboard{
        display:flex;
        flex-direction:row;
        justify-content:space-around;
        height:100vh;
        background: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);
        align-items:center;
        text-align:center;
    }
    .dashboard div{
        width:200px;
        height:200px;
        border:1px solid;
        display:flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
        color:#fff;
    }
    .dashboard div:hover{
        transform:scale(1.2);
        transition:0.9s ease;
    }
    .dashboard div:nth-child(1){
        background:orange;
    }
    .dashboard div:nth-child(2){
        background:red;
    }
    .dashboard div:nth-child(3){
        background:green;
    }
    .dashboard div:nth-child(4){
        background:lightblue;
    }
    .dashboard div a{
        width:100%;
        height:100%;
        color:#000;
        text-decoration:none;
        position:relative;
        font-size:33px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .dashboard div a span{
        position:absolute;
        top:40px;
        color:yellow;
        opacity:0.4;
        font-size:95px;
    }
</style>

<?php
    require("../Components/conn.php");
    $sql = "select count(id) as total1  from userss";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $total1 = $row["total1"]  ;

    $sql = "select count(id) as total2  from jobs";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $total2 = $row["total2"]  ;

    $sql = "select count(id) as total3  from admin";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $total3 = $row["total3"]  ;

    $sql = "select count(email) as total4  from contact";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $total4 = $row["total4"]  ;
?>


<div class="dashboard">
    <div><a href="index.php?id=2"><span><?php echo $total1 ?></span>Total Users</a></div>
    <div><a href="index.php?id=3"><span><?php echo $total2 ?></span>Total Companies</a></div>
    <div><a href="index.php"><span><?php echo $total3 ?></span>Total admins</a></div>
    <div><a href="index.php?id=4"><span><?php echo $total4 ?></span>Total inqures</a></div>
</div>

