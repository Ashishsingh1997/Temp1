
<?php 
include('config.php'); 
$id=$_REQUEST['id'];

$sql = "DELETE FROM product WHERE `id`=  '" . $id."'";
if ($conn->query($sql)==true) {
    header("location:products.php");
} else {
    echo $conn->error;

}
?>