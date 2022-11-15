<?php
error_reporting(E_ALL ^ E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoya";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "INSERT INTO contact (Name,EmailId, ContactNumber, City,StoreName,Message,Brand, Channel,AppointmentDate,AppointmentTime,SKU,Occasion,ModeOC,Store_code)
VALUES ('".$_POST['Name']."','".$_POST['EmailId']."', '".$_POST['ContactNumber']."', '".$_POST['selectCity']."', '".$_POST['preferred_boutique']."', '".$_POST['Message']."', '".$_POST['Brand']."', '".$_POST['Channel']."', '".$_POST['AppointmentDate']."', '".$_POST['AppointmentTime']."', '".$_POST['SKU']."', '".$_POST['Occasion']."', '".$_POST['ModeOC']."','".$_POST['Store_code']."')";

/*$sql = "INSERT INTO contact (Name, EmailId, ContactNumber, City,StoreName,Message,Brand, Channel,AppointmentDate,AppointmentTime,SKU,Occasion,ModeOC,Store_code)
VALUES ($_POST['Name'], $_POST['EmailId'], $_POST['ContactNumber'], $_POST['selectCity'], $_POST['preferred_boutique'], $_POST['Message'], $_POST['Brand'], $_POST['Channel'], $_POST['AppointmentDate'], $_POST['AppointmentTime'], $_POST['SKU'], $_POST['Occasion'], $_POST['ModeOC'],$_POST['Store_code'])";
*/

print_r($sql);
die();


if ($conn->query($sql) === TRUE) {
  $res = [
    "status"=> "Success",
    "success_code"=> 200,
    "message"=> "Opportunity is successfully created for Contact:8830324990"
];

  //echo "New record created successfully";
} else {
  $res =["message"=> "Something wrong"];

  //echo "Error: " . $sql . "<br>" . $conn->error;
}
echo json_encode($res);
$conn->close();
