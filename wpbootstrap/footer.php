      <hr>

      <footer>
        <p>&copy; <?php bloginfo('name'); ?> 2013</p>
      </footer>

    </div> <!-- /container -->
    
    <?php wp_footer(); ?>
 
    <!-- Add scripts and function to create navigation scroll effect -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="/wp-content/themes/wpbootstrap/js/jquery.scrollTo-min.js"></script>
	<script>
	$('.container a').click(function(e) {
   		e.preventDefault();
    	var anchor = $(this).attr('href');
    	$.scrollTo(anchor, 1000, {
        	onAfter: function(){
          	location.hash = anchor;
        	}
    	});   
	});
	</script>
 
  </body>
</html>