<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="king";

    $con=mysqli_connect($server,$username,$password,$dbname);
    if(!$con)
    {
        echo"Connection Failed";
    }

      //start
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
  
      $sql="INSERT INTO test(name, email, phone, subject, message) VALUES ('name','email','phone','subject','message')";
      $result = mysqli_query($con, $sql);
      if($result)
      {
          echo "data submitted";
      }

      else{
        echo "failed";
      }
   
  ?>