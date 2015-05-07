<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
			</div><!--.body-content-->						
		
		
		<footer class="footer">    		
	      	<section class="small-footer">
	      		<div class="container">
	      			<div class="row">
	      				<div class="col-md-10">
	      					<div class="footer-credits">		        				
	        					<a style="font-size:13px" href="<?php echo esc_url(home_url('/')); ?>">
	        						© <?php echo date("Y"); ?> <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
	        					</a>								
	      					</div>
			        		<div class="footer-menu">				        	
			        			<?php dynamic_sidebar('footer-credits'); ?>
			        		</div>
		        		</div>
		        		<div class="col-md-2">
			        		<div class="paradox">
			        			<a href="http://paradoxcreative.com" target="_blank">
			        				<p style="font-size:13px">Site crafted by Paradox</p>
			        			</a>
			        		</div>
			        	</div>
			        </div> <!-- .row -->
		        </div>	
	        </section>	
      	</footer>

		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/ksc8vkp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>		
	</body>
</html>