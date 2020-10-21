
<?php include('admin/config.php'); ?>
<?php

if (isset($_POST['submit'])) { 
    $name = isset($_POST['pname'])?$_POST['pname']:'';
    $price = isset($_POST['pprice'])?$_POST['pprice']:'';
    $image = isset($_POST['pimage'])?$_POST['pimage']:'';
    $quantity = isset($_POST['quantity'])?$_POST['quantity']:'';
    
   



	$sql= "INSERT INTO product_cart (`name`,`price`,`image`,`quantity`) VALUES('".$name."','".$price."','". $image."', '".$quantity."')";
	
	
	if ($conn->query($sql) === true) {
        echo "New record created successfully";
        header("location:cart.php");
    } else {
	        echo "Failed";
    }
}

?>
