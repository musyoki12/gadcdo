<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_hafsa');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];


// database insert SQL code
$sql = "INSERT INTO `tbl-login` ( `fldName`, `fldSubject`,`fldEmail`, `fldMessage`) VALUES ($txtName', '$txtEmail')";


// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "welcome to Give&Grow";
}

?>