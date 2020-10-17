<?php 
include('config.php'); 
$id=$_REQUEST['id'];

$sql = "DELETE FROM category WHERE `id`=  '" . $id."'";
if ($conn->query($sql)==true) {
    header("location:tags.php");
} else {
    echo $conn->error;

}
?>