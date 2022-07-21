<style>
    footer{
        background:#000;
        color:#fff;
        text-align:center;
    }
    .footer{
        display:flex;
    }
    .left,.center,.right{
        font-style:arial;
        text-align:left;
        width:33%;
        /* padding:20px; */
        margin:20px;
        padding:40px 20px;
       font-weight: normal;
}
.center{
    display:flex;
    flex-direction:column;
}

.center a{
    color:#fff;
    /* text-decoration:none; */
}
.left h1{
    margin-bottom:20px;
    background: linear-gradient(to right, #61045F, #AA076B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
}
.center h2{
    margin-bottom:20px;
}
.right h2{
    margin-bottom:20px;
}
    
@media screen and (max-width: 800px) {
    .footer{
        display:flex;
        flex-direction:column;
        text-align:center;
        justify-content:center;
        align-items:center;
    }
    .left,.center,.right{
        font-style:arial;
        text-align:center;
        width:80%;
        /* padding:20px; */
        margin:20px;
        padding:40px 20px;
       font-weight: normal;
    }
}
</style>

<footer>
    <div class="footer">
        <div class="left">
            <h1>About Skill Finder</h1>
                <p>Skill Finder is a Skill finding portal,
                 online job management system developed
                  by anish and ayaz
                for his project in february 2022.
            </p>
        </div>
        <div class="center">
            
            <div class="links-1">
                <h2>Quick links</h1>    
                <a href="home.php">Home</a>
                <a href="find.php">Find</a>
                <a href="#">Go To Top</a>
            </div>
            <div class="links-2">
                <a href="profile">Home</a>
                <a href="contact">Contact Us</a>
                <p>Are You Admin ??</p>
                <a href="admin/">yes</a>
                <a href="./">no</a>
                <p><a href="Components/signout.php">signout</a> &nbsp;&nbsp;&nbsp; 
                <a href="profile.php">Profile</a></p>

            </div>
        </div>
        <div class="right">
            <h2>SkillFinder Contact</h2>
            <br>
            <p>Address:VP Science College,Vidhyanagar</p>
            <br>
            <p>Email:Skillfinder@gmail.com</p>
            <br>
            <p>Phone: +91 9898686812 </p>
        </div>
    </div>
</footer>