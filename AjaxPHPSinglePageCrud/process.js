jQuery(document).ready(function($) {
	var id;
	var title;
	var updatethis = 'update';
	var deletethis = 'delete';
	/**************Extract Value****************/
	jQuery('.title-input').on('input',function(event) {
		event.preventDefault();
		id = jQuery(this).attr('rel');
		title = jQuery(this).val();
	});
    /**************Extract Value End****************/

    /**************Update Value****************/
	jQuery('.update').on('click', function(event) {
        event.preventDefault();
        console.log(title);
		$.post('process.php', {id: id , title : title , updatethis : updatethis}, function(data, textStatus, xhr) {

            jQuery.getScript("main.js",function(){
				displayCar();
			});
			jQuery("#feedback").html(data);


		});
    });
    /**************Update Value End****************/

    /****************Delete Code*******************/
    jQuery('.delete').on('click', function(event) {
        event.preventDefault();
        if (confirm('Are You Sure')) {
        	id = jQuery('.title-input').attr('rel');

			$.post('process.php', {id: id,deletethis : deletethis}, function(data, textStatus, xhr) {

	            jQuery.getScript("main.js",function(){
					displayCar();
				});
				jQuery("#feedback").html(data);


			});
        }

    });
    /****************Delete Code End****************/

    /****************Close Button Code*******************/
    jQuery('.close').on('click', function(event) {
        event.preventDefault();
         jQuery('#action-container').hide();
	});
    /****************Close Button Code End****************/
});
