<?php
               $a='';
               $b='';
   
               if(isset($_GET["search"])){
                   $a= $_GET["search"];
                   
               }
               if(isset($_GET["city"])){
                   $b= $_GET["city"];
                   
               }
?>


<style>
    .findskill{
        background:#2991A2;
        height:20vh;
    }
    .contain{
        display:flex;
        height:100%;
        align-items:center;
        justify-content:space-around;
    }
    .contain form{
        display:flex;
    }
    .contain form .search{
        width:20vw;
        padding:.5px;
        margin-left:20px;
        border-radius:20px;
        font-size:21px;
    }
    .contain form .submit{
    background: #2193b0; 
    background: #9796f0; 
    background: linear-gradient(to right, #fbc7d4, #9796f0); 
    color:#fff;
    outline:none;
    font-size:1.5rem;
    border-radius:20px;
    padding:10px;
    margin:20px;
    border:none;

    }
    .skill{
        background:red;
        color:#fff;
    }
    .skills-container{
        display:flex;
        justify-content:center;
        max-width:1200px;
        margin:5vh auto;
        flex-wrap:wrap;

    }
    .skill-items{
        display:flex;
        flex-direction:column;
        padding:10px;
        background:#2991A2;
        text-align:center;
        border-radius:20px;
        margin:10px;
    }

    .skill-items img{
        width:250px;
        height:70%;
        border-radius:30px;
        align:center;
        margin:0 auto;
    }
    .skill-items p{
        font-size:20px;
        margin:10px 0;
        width:100%;
    }
    .skill-items  a{
        background:#fff;
        color:#333;
        text-decoration:none;
        font-size:20px;
        border-radius:20px;
    }
@media screen and (max-width: 800px) {
    .contain {
        display:flex;
        flex-direction:column;
    }
    .contain h1{
        font-size:18px;
    }
    .contain form .search{
        width:20vw;
        padding:10px;
        margin-left:20px;
        border-radius:20px;
        font-size:21px;
    }

}
</style>

<div class="findskill">
    <div class="contain">
            <h1>SEARCH A SKILL</h1> 
            <form action="Find.php" method="GET">
            <select name="search"   class="search" required>
                <?php
                if(isset($a)){
                    echo "<option   value=$a> $a</option>";
                  
                    
                    }
                ?>


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
                <input type="search" placeholder="Search City" class="search" name="city"
                value= <?php
                    if(isset($b)){echo $b;}else{echo '';}
                ?>
                >
                <input type="submit"  value="Submit" class="submit" name="submit">
            </form>
    </div>
</div>




<div class="skills">
    <div class="skills-container">
    <?php
    if($_GET)
    {
        
           include "conn.php";
   
        
   
     
            $sql = "SELECT * FROM `userss` WHERE `skill` = '$a' AND `city`  like  '%$b' ";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_num_rows($result);
   
            if($row == 0)
            {
                echo "No Data found";
            
   
            }
            else{
                while($rows = mysqli_fetch_assoc($result))
                {
                   echo "<div class='skill-items'>";

                    if(!isset($rows['img']) || $rows['img'] == NULL){
                        
                        echo '<img src="download.jpg" alt="">';
                    }else{
                        echo '<img src="imgs/skills/'.$rows["img"].'" alt="">';
                            
                     }

                       echo "<p>$rows[fname]</p>";
                       echo "<a href='skills.php?id=$rows[id]'>View More </a>";
                   echo "</div>";
                   
                }
   
            }
        }
        else{
            echo "Please select the credencials";
        }
?>

 
         </div>
    </div>
</div>
