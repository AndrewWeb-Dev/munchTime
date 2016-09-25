<?php $footerBackground = get_field('footer_background'); ?>

<footer style="background: url(<?php echo $footerBackground['url'] ?>);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
	<div class="footerOverlay">
	  <div class="container">
		<?php get_sidebar('footer'); ?>
	    <p class="copy">Copyright &copy; <?php echo date('Y'); ?> Andrew Thompson</p>
	  </div>
	</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>