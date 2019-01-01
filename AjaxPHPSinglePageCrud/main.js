jQuery(document).ready(function($) {

	displayCar();
	/**************Display Data From Database Code**********/
	function displayCar(){
		jQuery.ajax({
		  url: 'display_cars.php',
		  type: 'POST',
		  complete: function(xhr, textStatus) {
		    //called when complete
		    console.log(textStatus)
		  },
		  success: function(data, textStatus, xhr) {
		    jQuery('#show-cars').html(data);
		  },
		  error: function(xhr, textStatus, errorThrown) {
		    console.log(textStatus);
		  }
		});

	}
    /**************Display Data From Database Code End**********/

	/**************Search dataBase Code**********/
	jQuery('#search').keyup(function(e) {
        var search = jQuery('#search').val();
        jQuery.ajax({
          url: 'search.php',
          type: 'POST',
          data: {search: search},
          complete: function(xhr, textStatus) {

          },
          success: function(data) {
            jQuery('#result').html(data);
          },
          error: function(xhr, textStatus, errorThrown) {
            console.log(textStatus)
          }
        });

	});

	/**************Search dataBase Code End**********/

	/**************Add To dataBase Code**********/
	jQuery('#add-form').submit(function(e) {
		e.preventDefault();
		var postData = jQuery(this).serialize();
		console.log(postData)
		var url = jQuery(this).attr('action');
		jQuery.post(url,postData, function(data, textStatus, xhr) {
			//console.log(data);
			//console.log(textStatus);
			displayCar();
			jQuery('#car_name').val('');
			jQuery('#success_message').html(data);
		});
	});
    /**************End Add To dataBase Code**********/




});
