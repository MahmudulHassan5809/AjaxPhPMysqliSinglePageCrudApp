<?php
include 'connection.php';
?>
<?php
	   $query = select("SELECT * FROM cars");
       if($query){
         while($result = $query->fetch_assoc()){ ?>
        <tr>
        	<?php echo "<td>{$result['id']}</td> " ;?>
			<?php echo "<td><a rel='".$result['id']."' class='title-link' href='javascript:void(0)'>{$result['car_title']} in stock</a></td> "; ?>

        </tr>

<?php }} else { ?>
        <?php echo
        '<tr colspan="2">
             <td>No Data Available</td>
        </tr>';
        ?>
<?php } ?>


<script type="text/javascript">
    jQuery(document).ready(function($) {
        jQuery('#action-container').hide();
        jQuery('.title-link').on('click', function(event) {
            event.preventDefault();
            jQuery('#action-container').show();
            var id = jQuery(this).attr("rel");
            jQuery.post('process.php', {id : id}, function(data, textStatus, xhr) {
                jQuery('#action-container').html(data);

            });

        });

    });
</script>
