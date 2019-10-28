<?php
$conn=new mysqli('localhost','root','','moazzam');

$ret="UPDATE detail SET username='moxiii' where id='1'";

if($conn->query($ret))
{
    echo "Record update successfully";

}
else
{
    echo "record failed to update";
}
$conn->close();
?>