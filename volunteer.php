
<?php
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];


 // Database connection
 $conn = new mysqli('localhost','root','','contactus');
 if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
 } else {
  $stmt = $conn->prepare("insert into register(name, phone, email, subject, message) values(?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
 }
?>