<?php
include 'connection.php';
?>

<?php

if (isset($_POST['car_name']) && !empty($_POST['car_name'])) {
   $carName = $_POST['car_name'];
   $query = insert("INSERT INTO
   			cars(car_title)
   			VALUES('$carName')
   			");
    if($query){

		  echo "Car Title Added SuccessFully...";
    }

}else{
	echo "Field Must Be Filled";
}



?>
