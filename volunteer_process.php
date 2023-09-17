<?php
error_reporting(0);
$server='localhost';
$user='root';
$pass='';
$dbname='donation';
$connection = mysqli_connect($server,$user,$pass,$dbname);

if (!$connection) {
    //echo "Successfully";
 die("Database connection failed: " . mysqli_connect_error());
}
// Process the form submission
if (isset($_POST)) {
  $v_name = $_POST['vname'];
  $v_uname = $_POST['vuname'];
  $v_email = $_POST['vemail'];
  $v_phn = $_POST['vphn'];
  $v_start = $_POST['as'];
  $v_end = $_POST['ae'];
  
  $sql = "INSERT INTO volunteer (Volunteer, Username, Email_Address, Phone_Number, Availability_Start, Availability_End)
          VALUES ('$v_name', '$v_uname', '$v_email', '$v_phn', '$v_start', '$v_end')";

  if (mysqli_query($connection, $sql)) {
    echo "Thank you for your donation!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
}
    
mysqli_close($connection);
?>