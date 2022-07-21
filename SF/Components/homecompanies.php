<style>
    .containers h1{
        text-align:center;
        margin-top:65px;
        font-size: 72px;
        background: linear-gradient(to right, #61045F, #AA076B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .companies{
        display:flex;
    }
    .companies-items{
        width:350px;
        height:200px;
        background:#f9f9f9;
        margin:20px;
        text-align:center;
        border:2px solid black;
    }

    .img img{
        width: 100%;
        height:150px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }
    @media screen and (max-width: 800px) {
        .companies{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
    }
</style>
<div class="containers">
    <h1>Companies Available</h1>
    <div class="companies">


    <?php
            require('conn.php');
            $sql = "select * from jobs order by regon desc limit 6";
            $result  = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
         ?>
               <div class="skill-items">
                   <div class="img">
                   <!-- echo '<img src="download.jpg" alt="">'; -->

                   <?PHP

                    if(!isset($row['img']) || $row['img'] == NULL){
                        
                        echo '<img src="download.jpg" alt="">';
                        // echo $row["img"];
                    }else{
                        echo '<img src="imgs/companies/'.$row["img"].'" alt="">';
                            
                    }

?> 
                   </div>
                   <div class="detail">
                       <a href="compines.php?id=<?PHP echo $row['id'];?>">&Ll; <?php echo $row["company_name"]; ?> &ggg;</a>
                   </div>
               </div>
           <?php
            }
        ?> 
      
    </div>
</div>