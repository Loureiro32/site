<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'Dragoes123?','olhotacho');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtsubject = $_POST['txtsubject'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code                                       Mudar
$sql = "INSERT INTO `contact` (`Id`, `fldName`, `fldEmail`, `fldsubject`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtsubject', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contacto efetuado, aguarda por uma Resposta!";
}
}
else
{
	echo "Impossivel fazer contacto com o suport atualmente tenta novamente mais tarde";
}
?>