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
       <th>NAME</th>
       <th>EMAIL</th>
       <th>Query</th>
       <th>Delete</th>
</tr>
    <?php
    
        $sql ="select * from contact";

        require('../Components/conn.php');

        $result = mysqli_query($conn,$sql);
                $id  = 0;
        while($row = mysqli_fetch_assoc($result)){
            $id++;
            echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$row[name]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[message]</td>";
                echo "<td><a href='confirmdeletequery.php?id=$row[id]'>Delete</a></td>";


            echo "</tr>";

        }
    
    ?>
   </table>

</div>