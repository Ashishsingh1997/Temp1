<?php 
include('config.php'); 
$id=$_REQUEST['id'];

$sql = "DELETE FROM color WHERE `id`=  '" . $id."'";
if ($conn->query($sql)==true) {
    header("location:color.php");
} else {
    echo $conn->error;

}
?>