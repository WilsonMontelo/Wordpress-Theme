	<div id="footer">
        <div id="menu">
            <?php wp_nav_menu( 
                array( 
                  'theme_location' => 'footer-menu' )
                ); 
            ?>
    		
    	</div>
    </div>   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Java do Bootstrap -->
    <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- Java Script -->
    <script src="<?php bloginfo('template_directory'); ?>/js/java.js"></script>
    <?php wp_footer(); ?>
</body>    
</html>
