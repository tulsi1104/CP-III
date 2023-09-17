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
  $donor_name = $_POST['donor_name'];
  $uname = $_POST['username'];
  $email = $_POST['email'];
  $phn = $_POST['phone'];
  $dtype = $_POST['donationtype'];
  $qty = $_POST['quantity'];
  $dsp = $_POST['description'];
  $adr = $_POST['address'];
  $date = $_POST['donation_date'];

  echo "<script>console.log($uname)</script>";

  $sql = "INSERT INTO donor (Donor, Username, Email_Address, Phone_Number, Donation_Type, Quantity, Information, Addresss, Donation_Date) 
          VALUES ('$donor_name', '$uname', '$email', '$phn', '$dtype', '$qty', '$dsp', '$adr', '$date')";

  if (mysqli_query($connection, $sql)) {
    echo "Thank you for your donation!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
}
    
mysqli_close($connection);
?>