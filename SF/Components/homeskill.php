<style>
    .containers{
        height:250px;
        margin-bottom:30vh;
    }
    .containers h1{
        text-align:center;
        margin-top:65px;
        font-size: 72px;
        background: linear-gradient(to right, #61045F, #AA076B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .skill{
        display:flex;
    }
    .skill-items{
        width:350px;
        height:200px;
        background:#f9f9f9;
        margin:20px;
        text-align:center;
        border:2px solid black;
        transition:all 0.5s ease;
        overflow:hidden;
    }
    .skill-items:hover{
        transform:scale(1.1);
    }
    .img img{
        width: 100%;
        height:150px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }
.detail a{
    color:#FFF;
    border:1px solid;
    text-decoration:none;
    background:#000;
    padding:1rem;
    margin-top:12px;
    transition:all 0.5s ease;
}
.detail a:hover{
    color:#000;
    text-decoration:underline;
    background:#fff;
    box-shadow:2px 2px 12px;
}

@media screen and (max-width: 800px) {
    .containers{
        height:auto;
        margin-bottom:30vh;
    }
    .containers h1{
        text-align:center;
        margin-top:65px;
        font-size: 72px;
        background: linear-gradient(to right, #61045F, #AA076B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .skill{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    .skill-items{
        width:350px;
        height:200px;
        background:#f9f9f9;
        margin:20px;
        text-align:center;
        border:2px solid black;
        transition:all 0.5s ease;
        overflow:hidden;
    }
    .skill-items:hover{
        transform:scale(1.1);
    }
    .img img{
        width: 100%;
        height:150px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }
    .detail a{
        color:#FFF;
        border:1px solid;
        text-decoration:none;
        background:#000;
        padding:1rem;
        margin-top:12px;
        transition:all 0.5s ease;
    }
    .detail a:hover{
        color:#000;
        text-decoration:underline;
        background:#fff;
        box-shadow:2px 2px 12px;
    }

}
</style>
<div class="containers">
    <h1>Skill Available</h1>
    <div class="skill">

        <?php
            require('conn.php');
            $sql = "select id,fname,img from userss order by regon desc limit 6";
            $result  = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>
                <div class="skill-items">
                    <div class="img">
                    <?PHP

                                if(!isset($row['img']) || $row['img'] == NULL){
                                    
                                    echo '<img src="download.jpg" alt="">';
                                    // echo $row["img"];
                                }else{
                                    echo '<img src="imgs/skills/'.$row["img"].'" alt="">';
                                        
                                }

                                ?>
                    </div>
                    <div class="detail">
                        <a href='<?php echo "skills.php?id=".$row["id"]; ?>'>&Ll; <?php echo $row["fname"]; ?> &ggg; </a>

                    </div>
                </div>
                <?php
            }
        ?>
        
    </div>
</div>  