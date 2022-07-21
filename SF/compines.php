<?php
  session_start();

  if(isset($_SESSION["email"]))
  {
        require('Components/headeryes.php');
  }else{
    header("Location:login.php");
    
  }
?>

<?php




if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $sql = "select * from jobs where id = $id ";

    require('Components/conn.php');

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
    ?>
    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?PHP echo $row['company_name']." Profile ";?></title>
        </head>
        <style>
            *{
                padding:0;
                margin:0;
                box-sizing:border-box;
            }
            .profile{
                background:#DEDEDE;
            }
            .profile_container{
                display:flex;
                height:40vh;
                align-items:center;
                justify-content:space-around;
            }
            .img{
                height:30vh;
                width:200px;
            }
            .img img{
                width:100%;
                height:100%;
            }
            .some_details{
                font-size:21px;
                font-family:verdana;
            }
           
            .cont{
                margin:8px  0;
            }
            .cont a{
                border:2px solid;
                padding:2px;
                text-decoration:none;
                padding:4px;
                color:#000;
                background:#fff;
            }
           .social_links{
               display:flex;
               align-items:space-between;
               justify-content:center;
               text-align:center;
            
           }
           .social_links .imgs{
               display:flex;
               height:30%;
               width:30%;
               align-items:center;
               justify-content:center;
           }
           .social_links .imgs img{
               height:20%;
                width:30px;
               margin:0 15px;
           }
           .social_links .imgs .imgx{
               display:flex;
               flex-direction:column;
           }
           .social_links .imgs .imgx p{
               display:none;
           }
           .social_links .imgs .imgx:hover p{
               display:block;
               color:#000;
           }
           .more_container{
               margin:10vh auto;
               max-width:1200px;
               font-size:21px;
           }
           .more_container .odd{
                background:#DEDEDE;
           }
           .more_container .even{
                background:#ededed;
           }
           .more_container .even,.more_container .odd{
                margin:12px;
                border-radius:12px;
                padding:12px;
           }
           .more_container .odd:hover{
            background:#ededed;
           }
           .more_container .even:hover{
                background:#DEDEDE;

           }
     
        </style>
        <body>
          
            <div class="profile">
                <div class="profile_container">
                    <div class="img">
                    <?PHP

                    if(!isset($row['img']) || $row['img'] == NULL){
                        
                        echo '<img src="download.jpg" alt="">';
                        // echo $row["img"];
                    }else{
                        echo '<img src="imgs/companies/'.$row["img"].'" alt="">';

        
}
?>
                    </div>
                    <div class="some_details">
                            <?PHP echo $row['category']." job at : <strong>".$row['company_name']."</strong>  ";?>
                            <?PHP echo "<br> In : ".$row['location'];?>
                            

                    </div>
                    <div class="social_links">
                        <div class="imgs">
                           <div class="imgx"><a href="#"><img src="facebook.png" alt="facebook">  </a><p>facebook</p> </div> 
                           <div class="imgx"><a href="#"><img src="instagram.png" alt="instagram"></a><p>instagram</p> </div> 
                           <div class="imgx"><a href="#"><img src="Twitter.png" alt="twitter">    </a><p>twitter</p> </div> 
                           <div class="imgx"><a href="#"><img src="linkedin.png" alt="linkedin">  </a><p>linkedin</p> </div> 
                           <div class="imgx"><a href="#"><img src="email.png" alt="email">        </a><p>email</p> </div> 
                           <div class="imgx"><a href="#"><img src="phone.png" alt="phone">        </a><p>phone</p> </div> 
                           <div class="imgx"><a href="#"><img src="whatsapp.png" alt="watsapp">   </a><p>watsapp</p> </div> 
                        </div>
                </div>
            </div>
        </div>

            <div class="more">
                <div class="more_container">
                      <div class="odd">  <?php echo "Name :: ". $row['company_name'];?> </div>
                      <div class="even"> <?php echo "Title Of Job  :: " .$row['job_title'];?>  </div>
                      <div class="even">  <?php echo "Country ::  ".$row['location'];?> </div>
                      <div class="odd">  <?php echo "category ::    ".$row['category'];?> </div>
                      <div class="odd"> <?php echo "Company phone number  :: ".$row['contact_user'];?>  </div>
                      <div class="even"> <?php echo "Register On ::  ".$row['regon'];?>  </div>
                      <div class="odd">  <?php echo "pincode Required"?> </div>
                      <div class="even"> <?php echo "url :: ".$row['url'];?>  </div>
                      <div class="odd">  <?php echo "Email :: ".$row['contact_email']?> </div>
                      <div class="even"> <?php echo "Description :: ".$row['description']?>  </div>
                      <div class="odd">  <?php echo "type :: Full-time/part-time "?> </div>
                      <div class="even"> <?php echo "min :: ".$row['min_salary'];?>  </div>
                      <div class="odd"> <?php echo "max :: ".$row['max_salary'];?>  </div>
                      <div class="even"><?php
                    if($row['pdf'] == NULL){
                        echo 'No Resume Uploded';
                    }else{
                        echo "<a href='imgs/skillsResume/".$row['pdf']."' download>Download Resume <span class='aspan'> &downarrow;</span></a>";
                    }
                   ?>
                   </div>          

                </div>
            </div>
            
        </body>
        </html>
    
    
    <?php
    
        require('Components/footer.php');

}

}


else{
    echo "ID'k know what you are trying to say";
}


?>
