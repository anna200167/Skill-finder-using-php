<style>
    .manage_query{
        width:100%;
        /* background:red;  */
    }
    table{
        width:100%;
        text-align:center;
        border-collapse: collapse;
    }
    table th{
        font-size:21px;
        background:violet;
        /* border:1px solid; */
        color:#fff; 
    }
    table tr{
        font-size:21px;
        border:1px solid;
    }
    table td{
        padding:12px;
    }
 
</style>


<div class="manage_query">
   <table border="1">
       <tr>
       <th>ID</th>
       <th>Comany name</th>
       <th>category</th>
       <th>location</th>
       <th>email</th>
       <th>View more</th>

</tr>
    <?php
    
        $sql ="select * from jobs";

        require('../Components/conn.php');

        $result = mysqli_query($conn,$sql);
                $id  = 0;
        while($row = mysqli_fetch_assoc($result)){
            $id++;
            echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$row[company_name]</td>";
                echo "<td>$row[category]</td>";
                echo "<td>$row[location]</td>";
                echo "<td>$row[contact_email]</td>";
                echo "<td><a href='confirmdeletecompanies.php?id=$row[id]'>Delete</a></td>";


            echo "</tr>";

        }
    
    ?>
   </table>

</div>