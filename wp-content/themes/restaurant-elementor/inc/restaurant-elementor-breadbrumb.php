<?php 

function restaurant_elementor_breadbrumb(){
    $has_header_image = has_header_image();
	?>
   <!--  <div class="page-breadcrumb" <?php if (!empty($has_header_image)) { ?> style="background-image: url(<?php echo header_image(); ?>);" <?php } ?>>
        <div class="container">
            <ul class="breadcrumb">
                <?php breadcrumb_trail();?>
            </ul>
        </div>
    </div> -->
	<?php
}

?>