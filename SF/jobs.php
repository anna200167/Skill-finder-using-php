
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs </title>
    <style>
        .job-search{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            height:20vh;
            /* width:100vw; */
            background: linear-gradient(to right, #61045F, #AA076B);
            margin-bottom:10vh;
        }
        .job_container{
            display:flex;
            width:80vw;
            margin:0 auto;
            border:1px solid;
            border-radius:20px;
            box-shadow: 5px 5px 5px 2px;
            padding:20px;
            /* height:25vh; */
            margin-bottom:20px;
            text-overflow:ellipsis;
            overflow:hidden;
            transition: all 0.9s ease;
        }
        .job_container:hover{
            box-shadow: none;
            border:none;
        }
        .title{
            font-family:serif;

        }
        .left{
                width:80%;
        }
        .right{
                width:20%;
                display:flex;
                justify-content:center;
                align-items:center;
        }
        .right a{
            border:1px solid; 
            background: linear-gradient(to right, #61045F, #AA076B);
            padding:20px;
            border-radius:20px;
            color:#fff;
            font-size:21px;
            text-decoration:none;
        }
        .left .para{
            text-overflow: ellipsis;
            margin-top:10px;
            font-size:21px;
        }
        .para{
        
        }
        .hr{
            color:000;
            background: linear-gradient(to right, #61045F, #AA076B);
            height:20px;
            border-radius:20px;
        }
        .title{
            font-family:serif;
            font-size:32px;
           
        }
        h3{
            font-size:24px;
            margin-bottom:21px;
        }
        .search{
            display:flex;
        }
        .search select,.search input{
            font-size:21px;
        }
@media screen and (max-width: 800px) {
    .search{
            display:flex;
            flex-direction:column;
        }
}
        
    </style>
</head>

<body>
    <?php include 'Components/headeryes.php';?>


    <form action="jobs.php" method="POST">
        <div class="job-search">
           <h3> Enter The Type of job You are Finding</h3>
<div class="search">

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
                    <option   value="Other">Other</option>
																								                          
                </select>
            <input type="search" name="city" placeholder="Enter City">


            <input type="submit" value="Search" name="submit">
            </div>
        </div>
    </form>
    <div class="jobs">




<?php
    include('Components/conn.php');

    if(isset($_POST["submit"]))
    {
        $field = $_POST["category"];
        $city = $_POST["city"];
        $sql ="select * from jobs where category = '$field' and location like '%$city%'";

        $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_assoc($result))
            {
?>
                <div class="job_container">
                <div class="left">
                    <h1 class="title"> <?PHP echo  $row["company_name"]; ?></h1>
                    <hr class="hr">
                    <h3> <?PHP echo $row["job_title"]; ?></h3>
                    <p class="para">
                <?PHP echo  $row["description"]; ?>

                    </p>
                </div>
                <div class="right">
                <a href="compines.php?id=<?php echo $row['id']?>">View More</a>

                </div>
            </div>
<?php

    }
}
    else{

        $sql="Select * from jobs order by regon desc ";
        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result))
        {
?>
            <div class="job_container">
            <div class="left">
                <h1 class="title"> <?PHP echo  $row["company_name"]; ?></h1>
                <hr class="hr">
                <h3> <?PHP echo $row["job_title"]; ?></h3>
                <p class="para">
               <?PHP echo  $row["description"]; ?>

                </p>
            </div>
            <div class="right">
            <a href="compines.php?id=<?php echo $row['id']?>">View More</a>

            </div>
        </div>

<?php
        }
    }
?>       
    </div>
</body>
</html>