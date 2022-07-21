<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            font-family:sans-serif;
        }
        header{
            background:#000;
            color:#fff;
            height:10vh;           
        }
        .container{
            height:10vh;
            max-width:1400px;
            margin:0 auto;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }
        .container a{
            color:#fff;
            text-decoration:none;
        }
        nav ul{
            display:flex;
            list-style-type: none;
        }
        nav ul li a{
            color:#fff;
            text-decoration:none;
            margin:10px;
            padding-bottom:5px;
            font-size:1.4rem;
        }
        nav ul li a:hover{
              text-decoration:underline;
        }
        nav:nth-child(odd) ul li a{
            color:#f2f2f2;
            border:1px solid #fff;
            text-decoration:none;
            margin:10px;
            font-size:1.4rem;
            padding:5px;
        }
        nav:nth-child(odd) ul li a:hover{
            color:#f9f9f9;
            background:#2991A2;
        }
        @media screen and (max-width: 800px) {
            nav ul li a{
            color:#fff;
            text-decoration:none;
            margin:7px;
            padding-bottom:1px;
            font-size:1.2rem;
        }
        .container{
            max-width:1400px;
            margin:0 auto;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            align-items:center;
        }
   
        nav ul li a:hover{
              text-decoration:underline;
        }
        nav:nth-child(odd) ul li a{
            display:none;

        }
        nav:nth-child(odd) ul li a:hover{
            color:#f9f9f9;
            background:#2991A2;
        }
        }
    </style>
    <title>Skill Finder</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" >

</head>
<body>
    <header>
        <div class="container">
        <a href="index.php"><h2>SkillFinder</h2></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jobs.php">Job List</a></li>
                <li><a href="Find.php">Find Skills</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href="Components/signout.php">Sign Out</a></li>
                <li><a href="profile.php" target="_blank">Profile</a></li>
            </ul>
        </nav>
        </div>
    </header>

</body>
</html>