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



<?php
$sucess = false;
$err=false;
 if(isset($_POST["submit"]))
 {
     if(empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["msg"]))
     {
        $err=true;
     }
     else{
        $a=$_POST["name"];
        $b=$_POST["email"];
        $c=$_POST["msg"];
        include("Components/conn.php");
        $sql = "INSERT INTO `contact`  VALUES (NULL, '$a' ,'$b' ,'$c')";
        $result = mysqli_query($conn,$sql);
        if($result==true)
        {
            echo "<script>confirm('Do you Want To Save this information into our Database');</script>";
            $sucess = true;

           
        }
        else{
            echo "<script>alert('Some thind Went Wrong');</script>";
            $err =true;
        }
     }
 

 }
?>
<style>
.contact{
    display:flex;
    justify-content:center;
    align-items:center;
    height:90vh;
}
.form{
    margin:20%;
    width:50%;
}

label{
    font-size:26px;
}
.form input{
    /* background:linear-gradient(to right, #61045F, #AA076B); */
    display:block;
    width:100%;
    padding: 8px;
    border-radius:15px;
    color:
}
.form h1{
    background: linear-gradient(to right, #61045F, #AA076B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom:30px;
}
.detail{
    background: linear-gradient(to right, #61045F, #AA076B);
    width:50%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    color:#fff;

}
.form .submit{
    background: linear-gradient(to right, #61045F, #AA076B); 
    color:#fff;
    font-size:24px;
}
@media screen and (max-width: 800px) {
    .contact{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    height:100vh;
}
.form{
    margin:5%;
    width:80%;
}

label{
    font-size:26px;
}
.form input{
    /* background:linear-gradient(to right, #61045F, #AA076B); */
    display:block;
    width:100%;
    padding: 8px;
    border-radius:15px;
    color:
}
.form h1{
    background: linear-gradient(to right, #61045F, #AA076B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom:30px;
}
.detail{
    background: linear-gradient(to right, #61045F, #AA076B);
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    color:#fff;

}
.form .submit{
    background: linear-gradient(to right, #61045F, #AA076B); 
    color:#fff;
    font-size:24px;
}
}
</style>


<div class="contact">
    
    <div class="form">
        <form action="contact.php" method="POST">
        <h1>Contact For Help</h1>
        <label for="name">Enter Name(required)</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Enter Email(required)</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="msg">Enter Message (required)</label>
        <input type="text" name="msg" id="msg" required>
        <br>
        <input type="submit" class="submit" name="submit">
        </form>
    </div>

        <div class="detail">
                <h4>Address</h4>
                <p>K-74 taif nagar ,
                    tandalija road, vadodara,
                    390020.</p>
                    <br><br>
                <h4>Email</h4>
                <p>anishpatel200167@gmail.com</p>
                <br><br>

                <h4>Phone no.</h4>
                <p>+91 9898656521</p>
                <br><br>

        </div>
   


</div>

<?PHP
    include('Components/footer.php');
?>
