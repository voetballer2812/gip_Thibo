<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demaret";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['Naam']);
$email = mysqli_real_escape_string($conn, $_POST['Email']);
$subject = mysqli_real_escape_string($conn, $_POST['Onderwerp']);
$message = mysqli_real_escape_string($conn, $_POST['Bericht']);

$sql = "INSERT INTO tbl_gip (Naam, Email, Onderwerp, Bericht) VALUES ('$Naam', '$Email', '$Onderwerp', '$Bericht')";

if($conn->query($sql) === TRUE){
header( "Location: http://localhost/website/contact.html" );
exit ;
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>
