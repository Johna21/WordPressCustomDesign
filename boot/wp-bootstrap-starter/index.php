<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<head>
	<!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, 
                    initial-scale=1, 
                    shrink-to-fit=no"
        />
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<style>
  h1 {background-color: whitesmoke;}
  h1 {color: black;
		text-align:left;
	  padding-left:10px;
	  margin-top:20px;
		}
		
 
</style>

</head>
<div class="container-fluid" >
	 <div class="positon-relative">
		 
	
		
		 
	<h1>
		<?php 
	
			the_field('properties_field_by_title');	
	?>
</h1>
		
		 </div>
	
</div>

    
    <div class="container-fluid" id="firstcontainer"> 
   <div class="row 	align-items-start
"> 
      <div class="col-sm-5" id="imageone">
		  <?php
$image = get_field('properties_field_by_acf');
if( $image ):

    

    // large size attributes.
    $size = 'large';
    $thumb = $image['sizes'][ $size ];
    

  ?>
    
        <div >
    

   
        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>"  />
   

   
    
        </div>

<?php endif; ?>
		</div>
      <div class="col-sm-6" id="second_column"
		   >
		  <h2>
			  Description
		  </h2>
	   <?php 
	
			the_field('properties_field_by_decription');	
	?>
		  
		  <div class="container" id ="secondcontainer"> 
   <div class="row"> 
      <div class="col" id= "factsheet">
		  <div class="row" >
			 
				 
		   
		   
			   <i class="fas fa-check-square" style="font-size:25px;color:white;" id="icon" ></i> 
			  
			  
		     <h2> 
		   Fact Sheet
		  </h2>
		  </div>
	   
		  <?php 
	
			the_field('properties_field_by_fact_sheet');	
	?>
	   </div>
      
      <div class="col" id="paymentplan">
		  <div class="row">
			  
			   
			  <i class="fas fa-money-bill-alt" style="font-size:24px;color:black;" id="icon" ></i>
			  
		  
	   <h2>
		   Payment Plan
		  </h2>
		  </div>
		  
			  <p>
				 Reservation Fee $
				  <?php 
	
			the_field('properties_field_by_price');	
	?>
				
			  </p>
		  
		  <?php 
	
			the_field('properties_field_by_payment_plan');	
	?>
	   </div> 
   </div> 
</div>
		  
	   </div> 
   </div> 
</div>
            

    

    

    
    

	



<?php
get_sidebar();
get_footer();
