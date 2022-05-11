<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "services";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['c_password'];
  //$subimetted_at=$_POST['Y-m-d h:i:sa']
 // $submited_at = date('d-m-y h:i:s');

  $sql = "INSERT INTO userlogin (username, 
  email,password,c_password) VALUES ('$username','$email','$password','$c_password')";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>