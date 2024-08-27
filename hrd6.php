<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th>ProjectName</th>
        <th>Price</th>
        <th>Yield</th>
        <th>District</th>
        <th>PropertyType</th>
      </tr>
      <?php
       $conn = mysqli_connect("localhost", "id18972090_root", "b=H7#Dg~YVv{2wfM", "id18972090_rentaldata");
       if ($conn-> connect_error) {
         die("Connection failed:". $conn-> connection_error);
       }

       $sql = "SELECT * from Sheet1 where District = 'District 6' order by Yield DESC limit 5, 10";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
         while($row = $result-> fetch_assoc()){
           echo "<tr><td>". $row["ProjectName"]. "<td><td>". $row["Price"]. "<td><td>". $row["Yield"]. "<td><td>". $row["District"]. "<td><td>". $row["PropertyType"]. "</td></tr>";
         }
         echo "</table>";
       }
       else{
         echo "0 result";
       }

       $conn -> close();
       ?>
    </table>
  </body>
</html>
