<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $amount = $_POST['amount'];
 $message = $_POST['message'];

 // Database connection
 $conn = new mysqli('sql100.epizy.com','root','','epiz_28891624_contactus');
 if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
 } else {
  $stmt = $conn->prepare("insert into conta(name, email, phone, amount, message) values(?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $name, $email, $phone, $amount, $message);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
 }
?>
