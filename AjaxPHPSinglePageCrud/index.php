<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax&PHP</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body>

	<div class="container">
        <div class="row">
        	<div class="col-md-10 mx-auto">
        		<div id="container" class="text-center">
				    <h2>Search Database</h2>
				</div>
				<input type="text" name="search" id="search" placeholder="Search Our Database" class="form-control">
				<br>
				<h1>Search Result:</h1>
				<h2 id="result"></h2>
			</div>

        </div>

    	<div class="row">
		    <div class="col-md-10 mx-auto">
		    	<h2 class="text-success" id="success_message"></h2>
	           <form id="add-form" action="add_car.php">
	           	  <div class="form-group">
	           	  	<span class="label label-info">Car Name :</span>
	           	  	<input class="form-control" placeholder="Car Name" id="car_name" type="text" name="car_name" >
				  </div>
				  <div class="form-group">
				  	<button type="submit" class="btn btn-dark btn-block">Save</button>
				  </div>
	           </form>
			</div>


		</div>

		<div class="row mt-3">
           <div class="col-md-6">
           	<h1>All Content</h1>
           	 <table class="table table-primary">
             	<thead>
             		<tr>
             			<th>ID</th>
             			<th>Name</th>

             		</tr>
             	</thead>
             	<tbody id="show-cars">


             	</tbody>
             </table>
           </div>


           <div class="col-md-6 mt-5">
              <p class="text-dark bg-inverse" id="feedback"></p>
           	 <div id="action-container">

           	 </div>
           </div>

		</div>

       <footer class="text-center">
			<p>Created By,<a href="https://github.com/MahmudulHassan5809">Mahmudul Hassan</a>.</p>
		</footer>

	</div>




<!-- jQuery first, then Popper.js and Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="process.js"></script>
</body>
</html>



