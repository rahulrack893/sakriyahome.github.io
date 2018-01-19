<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sparkle_Store
 */

	do_action( 'sparklestore_footer_before');	

		/**
		 * @see  sparklestore_footer_widget_area() - 10
		*/
		do_action( 'sparklestore_footer_widget');

    	/**
    	 * Top Footer Area
    	 * Two different filters
    	 * @see  sparklestore_social_links() - 5
    	 * @see  sparklestore_payment_logo() - 10
    	*/
    	do_action( 'sparklestore_top_footer');

    	/**
    	 * Bottom Footer Area
    	 * @social icon filters : sparklestore_footer_menu() - 5
    	*/
    	do_action( 'sparklestore_bottom_footer');  
    
     do_action( 'sparklestore_footer_after');	 
?>	    

</div><!-- #page -->

<a href="#" class="scrollup">
	<i class="fa fa-angle-up" aria-hidden="true"></i>
</a>
<footer id="colophon" class="rsrc-footer" role="contentinfo">
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 ">
	            <h4 class="foth4">
	            Sakriya
	                
	            </h4>
	            <p class="fotp1 ">
	                <i class="fa fa-map-marker" aria-hidden="true"></i>
	                <span class="sp1">
	                    ADDRESS:
	                    
	                </span>
	                </p>
	                 <p class="fotp2">576, 30th Main Rd, Banashankari Stage II, Banashankari, Bengaluru, Karnataka 560085</p>
	            
	            
	        </div>

        
	            
	        <div class="col-sm-3 ">
	            <h4 class="foth4">
	       Policies
	                
	            </h4>
	            <p class="fotp2"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="http://173.199.185.100/~sosasap/rahul/sports/privacy-policy/">&nbsp;Privacy Policy</a></p>
	             <p class="fotp2"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="http://173.199.185.100/~sosasap/rahul/sports/terms-conditions/">&nbsp;Terms & Conditions</a></p>
	            
	            </div>
	            <div class="col-sm-3">
	            <h4 class="foth4">
	       Enquiries
	                
	            </h4>
	            <p class="fotp2"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="http://173.199.185.100/~sosasap/rahul/sports/bulk-order/">&nbsp;Bulk Purchase</p></a>
	             <p class="fotp2"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="http://173.199.185.100/~sosasap/rahul/sports/contact-us/">&nbsp;Contact Us</a></p>
	            
	            </div>
	       
	    </div>
	    
	    
	</div>
	<br>
	<br>
	</footer>
<?php wp_footer(); ?>

</body>

</html>
