<?php

    $servername = "localhost";
    $dbname = "dtdservices";
    $username = "root";
    $password = "";
   
   $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from userlogin where username='".$username."' AND password='".$password."'
         ";
  
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if(($row['username'] == $username) &&  ($row['password'] == $password)) 
    {
        header("location:home.php");
        }
    else
    {
      echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            header("location:index.php");
            echo "</script>";
            die();
    }
  }

?>
