<?PHP
$err=false;
$sucess = false;
$errmsg;
    if(isset($_POST["submit"]))
    {
        if(isset($_FILES["file"]) && isset($_FILES["pdf"]) )
        {


            // print_r($_FILES["file"]);
            $name = $_FILES["file"]["name"];
            $type =$_FILES["file"]["type"];
            $temp =$_FILES["file"]["tmp_name"];
            $size =$_FILES["file"]["size"];
            $pdfname = $_FILES["pdf"]["name"];
            $pdftype =$_FILES["pdf"]["type"];
            $pdftemp =$_FILES["pdf"]["tmp_name"];
            $pdfsize =$_FILES["pdf"]["size"];

    if(move_uploaded_file($temp,"../imgs/companies/".$name) AND  move_uploaded_file($pdftemp,"../imgs/CompaniesBoucher/".$pdfname)){
                    $a  =   $_POST['company_name'];
                    $b  =   $_POST['category'];
                    $c  =   $_POST['job_title'];
                    $d  =   $_POST['description'];
                    $e  =   $_POST['location'];
                    $f  =   $_POST['contact_user'];
                    $g  =   $_POST['contact_email'];
                    $h  =   $_POST['min_salary'];
                    $i  =   $_POST['max_salary'];
                    $j  =   date('Y-m-d H:i:s');
                    $k  =   $_POST['url'];
                    $l =    $_POST['bio'];
                    $m =    $name;
                    $n =    $pdfname;
                    $o = $_POST["facebook"];
                    $p = $_POST["instagram"];
                    $q = $_POST["twitter"];
                    $r = $_POST["linkedin"];


                    
                        require('../Components/conn.php');
                        
         $query = "INSERT INTO `jobs` VALUES (NULL,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r')";
                        if(mysqli_query($conn, $query)) {
                            $sucess = true;
                        
                        }
                        else {
                            $errmsg = mysqli_error($conn);
                            $err=true;
                            echo "Error: " . $query . "<br>" . mysqli_error($conn);
                        }
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
    body{
    background: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);

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
    <p>&nbsp;&nbsp; $errmsg<p>
    <br> 
    <p>&nbsp;&nbsp; $errmsg</p>
    </div>";
    }
?>
<?php
    if($sucess){
    echo "<div class='sucess'>

<p>&nbsp;&nbsp;Job Added<a href='index.php?id=1'><span class='yel'>Go To Dashboard</span> </a><p>
    </div>";
    }
?>
<div class="login_form">
    
    <form action="jobadd.php" method="POST" enctype="multipart/form-data">
               
                <input type="text" placeholder="Enter company_name"  name="company_name" required autofocus>
                <br>
                <select name="category" required>
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
                    <option   value="Devlopment">Devlopment</option>
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
                    <option   value="Other">Other</option>
																								                          
                </select>
                <br>
                <input type="text" placeholder="Enter Title Of Job"  name="job_title" required >
                <br>
                <input type="text" placeholder="description"  name="description"  required >
                <br>
                <input type="text" placeholder="Enter location"  name="location" required >
                <br>
                <input type="text" placeholder="Enter contact number"  name="contact_user" required >
                <br>
                <input type="email" placeholder="Enter contact Email"  name="contact_email" required >
                <br>
                <input type="number" placeholder="Enter min_salary"  name="min_salary" required >
                <br>
                <input type="number" placeholder="Enter max_salary"  name="max_salary" required >
                <br>
                <input type="url" placeholder="Enter url of Company"  name="url" required >
                <br>
                <textarea name="bio" rows="4" cols="50"  >Tell something about U
                </textarea>
                <br>
                <input type="file" name="file" >
                <br>
                <input type="file" name="pdf" >
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
               
   </form>
  
</div>