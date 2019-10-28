<?php

$conn=new mysqli('localhost','root','','moazzam');

$ret="delete from detail where id='2'";

if($conn->query($ret))
{
    echo "table succcessfully deleted";
    }
else{
    echo "table failed to deleted";
}
$conn->close();
    ?>