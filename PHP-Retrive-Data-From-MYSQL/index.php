<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Display Record from Mysql Databse</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table width="350px" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father Name</th>
            </tr>
            <?php
         include_once ('./config.php');
         //Select query
         $data = "SELECT * FROM userinfo";
         //Execute the sql Query
         $records = mysqli_query($con, $data);
         while ($row = mysqli_fetch_array($records)) {
             echo "<tr>";
             echo "<td>".$row['id']."</td>";
             echo "<td>".$row['uName']."</td>";
             echo "<td>".$row['fName']."</td>";
             echo "</tr>";
         }
            ?>
        </table>
    </body>
</html>

