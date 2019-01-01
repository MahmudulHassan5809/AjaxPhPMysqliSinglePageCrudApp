<?php
include 'connection.php';
?>
<!-- Get Value For Update -->
<?php
	   if (isset($_POST['id']) && !isset($_POST['updatethis']) && !isset($_POST['deletethis'])) {
	   	  $id = mysqli_real_escape_string($connection,$_POST['id']);
	   	  $query = select("SELECT * FROM cars WHERE id='$id' ");
          if ($query) {
          	 while ($result = $query->fetch_assoc()) {

          	 	echo "<input rel='".$result['id']."' type='text' value='{$result['car_title']}' class='form-control title-input'>";
          	 	echo "<br>";
          	 	echo "<input type='button' value='Update' class='btn btn-success update'>";
          	 	echo "  ";
          	 	echo "<input type='button' value='Delete' class='btn btn-danger delete'>";
          	 	echo "<input type='button' value='Close' class='btn btn-close close'>";
          	 }

        }

	}
?>
<!-- Get Value For Update End -->

<!-- Update Value -->

<?php
	if (isset($_POST['updatethis'])) {
		$id = $_POST['id'];
		$id = mysqli_real_escape_string($connection,$id);
		$title = $_POST['title'];
		$title = mysqli_real_escape_string($connection,$title);
		$query = update("UPDATE cars
   				SET
   			    car_title = '$title'
   			    WHERE id = '$id'
   			    ");
	    if($query){

			echo "Car Title Updated SuccessFully...";

	    }
		else{
			echo "Something Went Wrong";

	    }
	}

?>

<!-- Update Value End -->

<!-- Delete Data -->

<?php
	if (isset($_POST['deletethis'])) {
		$id = $_POST['id'];
		$id = mysqli_real_escape_string($connection,$id);
		$query = delete("DELETE FROM cars WHERE id = '$id'");
	    if($query){

			echo "Car Title Deleteted SuccessFully...";

	    }
		else{
			echo "Something Went Wrong";

	    }
	}

?>

<!-- Delete End -->


<script src="process.js"></script>

