<?PHP
$err=false;
$sucess = false;
$errmsg;
    if(isset($_POST["submit"]))
    {

    
        if(isset($_FILES["file"])){


            // print_r($_FILES["file"]);
            $name = $_FILES["file"]["name"];
            $type =$_FILES["file"]["type"];
            $temp =$_FILES["file"]["tmp_name"];
            $size =$_FILES["file"]["size"];
            $pdfname = $_FILES["pdf"]["name"];
            $pdftype =$_FILES["pdf"]["type"];
            $pdftemp =$_FILES["pdf"]["tmp_name"];
            $pdfsize =$_FILES["pdf"]["size"];

            if(move_uploaded_file($temp,"imgs/skills/".$name) AND  move_uploaded_file($pdftemp,"imgs/skillsResume/".$pdfname))
            {
                    $a  =   $_POST['fname'];
                    $b  =   $_POST['lname'];
                    $c  =   $_POST['email'];
                    $d  =   $_POST['phone'];
                    $e  =   $_POST['street'];
                    $f  =   $_POST['city'];
                    $g  =   $_POST['state'];
                    $h  =   $_POST['country'];
                    $i  =   $_POST['gender'];
                    $j  =   $_POST['dob'];
                    $k  =   $_POST['skill'];
                    $varify =  password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $l  = $varify;
                    $m  =   date('Y-m-d H:i:s');
                    $n  =   $_POST["bio"];
                    $o  =   $name;
                    $p = $_POST["facebook"];
                    $q = $_POST["instagram"];
                    $r = $_POST["twitter"];
                    $s = $_POST["linkedin"];
                    $t =  $pdfname;
            
            
                    require('conn.php');
                    $query = "INSERT INTO `userss` VALUES (NULL,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t')";
                    if(mysqli_query($conn, $query)) {
                        $sucess = true;
                    
                    }
                    else {
                        $errmsg = mysqli_error($conn);
                        $err=true;
                        // echo "Error: " . $query . "<br>" . mysqli_error($conn);
                    }
            }
            else{
            $file_error =  "File Not Uploded";
            }
        }

    
    }
    // else {
    //     exit();
    // }

        
    
?>

<style>
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
        .login_form{
            margin-top:10vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            text-align:center;
        }
        .login_form input,select,textarea{
            padding:10px;
            margin:20px;
            border-radius:20px;
            width:40vw;
            font-size:20px;
        }
        input[type="file"]{
            background:red;
            display:flex;
            flex-direction:column;
        }
        ::placeholder {
        color: #000;
        opacity: 1;
        }
        .login_form .submit{
            background:#000;
            color:#fff;
        }
</style>

<?php
    if($err){
    echo "<div class='err'>
    <p>&nbsp;&nbsp; Details are missing<p>
    <br> 
    <p>&nbsp;&nbsp; $errmsg </p>
    </div>";
    }
?>
<?php
    if($sucess){
    echo "<div class='sucess'>

<p>&nbsp;&nbsp;Register Sucessfull please login <a href='login.php'><span class='yel'>Click Here To Login</span> </a><p>
    </div>";
    }
?>
<div class="login_form">
    
    <form action="register.php" method="POST" enctype="multipart/form-data">
                
                <input type="text" placeholder="First Name"  name="fname" required autofocus>
                <br>
                <input type="text" placeholder="Last Name"  name="lname" required >
                <br>
                <input type="email" placeholder="Enter Email"  name="email" required >
                <br>
                <input type="number" placeholder="Enter Phone"  name="phone"  required >
                <br>
                <input type="street" placeholder="Enter street"  name="street" required >
                <br>
                <input type="city" placeholder="Enter city"  name="city" required >
                <br>
                <input type="state" placeholder="Enter state"  name="state" required >
                <br>
                <input type="country" placeholder="Enter country"  name="country" required >
                <br>
                <select name="gender" required>
                    <option   value="male">male</option>
                    <option   value="female">female</option>
                    <option   value="other">Rather not to say</option>
                </select>
                <br>
                <input type="Date" placeholder="Enter DOB"  name="dob" required min="2000-01-02">
                <br>
                <select name="skill" required>
                    <option   value="Accounting">Accounting</option>
                    <option   value="Auditing">Auditing</option>
                    <option   value="BankinServices">Banking and Finansila</option>
                    <option   value="Management">CEO and General Management</option>
                    <option   value="CommuDevt">Community and Social Devt</option>
                    <option   value="Design">Creative and Design</option>
                    <option   value="Training">Education and Training</option>
                    <option   value="Construction">Engineering anoption</option>
                    <option   value="Agribusiness">Farming and Agribusiness</option>
                    <option   value="Pharmaceutical">Healthcare and care </option>
                    <option   value="HR & AdminAdministration">HR & AdminAdministration</option>
                    <option   value="IT and Telecoms">IT and Telecoms</option>
                    <option   selected value="Devlopment">Devlopment</option>
                    <option   value="Legal">Legal</option>
                    <option   value="Manufacturing">Manufacturing</option>
                    <option   value="MarkBrand">Marketing,Media and Brand</option>
                    <option   value="MinResources">Mining and Natural Resources</option>
                    <option   value="ProjMngmnt">Project & Programme Mngmnt</option>
                    <option   value="ReseaBiotech">Research,Science and Biotech</option>
                    <option   value="Security">Security</option>
                    <option   value="Consulting">Strategy and Consulting</option>
                    <option   value="Tourism and and Travel">Tourism and and Travel</option>
                    <option   value="Trades and Sand Services">Trades and Sand Services</option>
                    <option   value="Logistics">Transport and Logistics</option>
                    <option   value="requiter">requiter</option>
                    <option   value="Other">Other</option>
																								                          
                </select>
                <br>
                <input type="password" placeholder="Enter Password"  name="password" required >
                <br>
                <textarea name="bio" rows="4" cols="50" placeholder="Describe yourself here..." >Tell something about U
                </textarea>
                <br>
                <input type="file" name="file" required >Attach Your Photo here &uparrow;
                <br>
                <br>
                <input type="file" name="pdf" required >Attach Your Resume here &uparrow;
                <br>
                <input type="url" placeholder="Enter url of FaceBook"  name="facebook" required >
                <br>
                <input type="url" placeholder="Enter url of Instagram"  name="instagram"  >
                <br>
                <input type="url" placeholder="Enter url of Twitter"  name="twitter"  >
                <br>
                <input type="url" placeholder="Enter url of Linkdin"  name="linkedin"  >
                <br>
                <input type="submit"  value="Submit" class="submit" name="submit">
                <br>
                <p>Already Have An Account ?<a href="login.php">Click Here To Login</a> </p>
   </form>
  
</div>