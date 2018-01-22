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
	        <div class="col-sm-8">
	            <div class="row">
	        <div class="col-sm-6" id="sp">
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

        
	            
	        <div class="col-sm-3 " id="sp">
	            <h4 class="foth4">
	       Policies
	                
	            </h4>
	            <p class="fotp2"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="http://173.199.185.100/~sosasap/rahul/sports/privacy-policy/">&nbsp;Privacy Policy</a></p>
	             <p class="fotp2"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="http://173.199.185.100/~sosasap/rahul/sports/terms-conditions/">&nbsp;Terms & Conditions</a></p>
	            
	            </div>
	            <div class="col-sm-3" id="sp">
	                
	            <h4 class="foth4">
	       Enquiries
	                
	            </h4>
	            <p class="fotp2"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="http://173.199.185.100/~sosasap/rahul/sports/bulk-order/">&nbsp;Bulk Purchase</p></a>
	             <p class="fotp2"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="http://173.199.185.100/~sosasap/rahul/sports/contact-us/">&nbsp;Contact Us</a></p>
	            
	            </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-12">
	                    <br>
	                    <br>
	                    <strong id=tp>About Sakriya:</strong> Sakriya.com is Bengaluru's largest online sports equipments & nutrition supplements store. Shop online from the latest collections of health, fitness and similar products featuring the best brands.
	                    Sakriya also provides one stop solutions for the sporting requirements of institutions like Premier sporting teams, Clubs & Academies, Schools & Colleges, Corporates and many more. Some of the services offered to institutions include sports goods, sports merchandise design, development and distribution, sports infrastructure, events and consulting.
	                    
	                    In a very short time span since its inceptions, Sakriya has taken the pole position in the sports segment in Bengaluru. The company has received several accolades and has been identified as one of the Top Online Shopping site.
	                </div>
	            </div>
	            </div>
	            
	            
	            <div class="col-sm-4" id="subs" >
	    <p id=ta>Want to be part of something special?</p>
         <p id=tr>Join our community.</p>
	 <div class=news>   <?php es_subbox($namefield = "YES", $desc = "", $group = "Public"); ?></div>
	   <p id=tu>We'll send you emails from time to time about our flash sales, promotions and referral deals!</p>
	   </div>
	        
	    </div>
	   
	    
	</div>
	<br>
	<br>
	</footer>
<?php wp_footer(); ?>

</body>

</html>
