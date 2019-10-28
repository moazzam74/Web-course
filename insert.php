
<?php
$summary= $_POST['summary'];
$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$birth_date = $_POST['birth_date'];
//$city = $_POST['city'];
$gender = $_POST['gender'];
$school = $_POST['school'];
$month_year = $_POST['birth_date'];
$certificate = $_POST['certificate'];
$award = $_POST['award'];
$language = $_POST['language'];
$skills= $_POST['skills'];


// Create connection
$conn = new mysqli ('localhost', 'root', '', 'moazzam');

//check Connection	
if (mysqli_connect_errno())
 	 {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

$sql = "INSERT INTO form (summary,username,password, email,address,contact,birth_date,gender,school,month_year,certificate,award,language,skills)
VALUES ('$summary','$username','$password','$email','$address','$contact','$birth_date','$gender','$school','$month_year','$certificate','$award','$language','$skills')";

$run=mysqli_query($conn,$sql);

if($$run=TRUE)
{
echo "database connected successfully";
}
else
{
    echo "database connected error";
}
$conn->close();
?>
