<?php
$conn=new mysqli('localhost','root','','moazzam');

$ret=mysqli_query($conn,"Select * from detail");

echo "<table border='1'>";

echo "<tr>" ;
echo "<th>id</th>";
echo "<th>username</th>";
echo "<th>password</th>";


while($row=mysqli_fetch_array($ret))
{
    echo "<tr>";
    
    echo "<td>"  .$row ['id']. "</td>";
    echo "<td>" .$row ['username']. "</td>";
    echo "<td>" .$row ['password']. "</td>";

    echo "</tr>";
}
echo "</tr>";
echo "</table>";
?>