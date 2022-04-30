<?php  
require_once '../model/model.php';


if (isset($_POST['createCustomer'])) {
	$data['name'] = $_POST['name'];
	$data['price'] = $_POST['price'];
	$data['quantity'] = $_POST['quantity'];
	$data['category'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	$data['comment'] = $_POST['comment'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Products Added With Out Profile Picture.";
  }

  if (addCustomer($data)) {
  	echo 'Successfully added!!';
  }
} 
else {
	echo 'You are not allowed to access this page.';
}

?>