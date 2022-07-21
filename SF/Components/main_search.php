<style>
article{
    height:90vh;
    background: #AA076B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:space-evenly;
    color:#fff;
    text-align:center;
}
article h1{
    font-family:serif ;
    color:#fff;
    font-size:3rem;
}
article h3{
    font-family:serif ;
    color:#fff;
    font-size:2rem;
}

article .search{
    color:#000;
    background:none;
    border:none;
    border-bottom:2px solid #fff;
    outline:none;
    font-size:1.5rem;
    margin:20px;
}
.submit{
    background: #2193b0; 
/* background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  
background: linear-gradient(to right, #6dd5ed, #2193b0);  */
background: #9796f0; 
background: -webkit-linear-gradient(to right, #fbc7d4, #9796f0); 
background: linear-gradient(to right, #fbc7d4, #9796f0); 

    color:#fff;
    outline:none;
    font-size:1.5rem;
    border-radius:20px;
    padding:10px;
    border:none;
}
::placeholder {
  color: #000;
  opacity: 1;
}

    </style>

    <article>
        <h1>Trouble in finding Skilled employee</h1>
        <h3>Here We Go Again?</h3>
        <div class="search-section">
            <form action="Find.php" method="GET">
                <!-- <input type="search" placeholder="Search Category" class="search" name="category"> -->
                <select name="search" id="" class="search search1">
                <option value="NONE">Select Skill</option>
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

                <input type="search" placeholder="Search City" class="search" name="city">
                <input type="submit" class="submit">
            </form>
        </div>
</article>

