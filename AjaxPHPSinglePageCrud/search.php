<?php
include 'connection.php';
?>

<?php

	$search = $_POST['search'];
	if (!empty($search)) {
       $query = select("SELECT * FROM cars WHERE car_title LIKE '$search%' ");
       if($query){
         while($result = $query->fetch_assoc()){ ?>




        <ul class="list-group">

			<?php echo "<li class='list-group-item'>{$result['car_title']} in stock</li> " ?>

		</ul>






<?php   }

       }else{ ?>
        <?php echo '<h3 class="text-danger">Nothing Found</h3>'; ?>
<?php    }

	}
?>
