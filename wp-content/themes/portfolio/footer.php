		</section><!-- Container End -->
		
		<footer id="footer" class="row">
			<div class="large-12 columns">
				<p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
			</div>
		</footer>



	<?php wp_footer(); ?>


<!-- here comes the javascript -->

	<script>
	  document.write('<script src=<?php bloginfo('template_directory'); ?>/' +
	  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
	  '.js><\/script>')
  </script>

<!-- Included JS Files (Uncompressed) -->
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.alerts.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.clearing.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.cookie.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.dropdown.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.forms.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.joyride.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.magellan.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.orbit.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.placeholder.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.reveal.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.section.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.tooltips.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/javascripts/foundation/foundation.topbar.js"></script>
	
  
  <script>
    $(document).foundation();
  </script>
	

  <!-- Application Javascript, safe to override -->
  <script src="<?php bloginfo('template_directory'); ?>/javascripts/playmaker.js"></script>
  
  
</body>

</html>
