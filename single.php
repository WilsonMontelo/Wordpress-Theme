<?php get_header(); ?>
     <div id="content">
		<div id="centraliza" class="container">
        	<div class="row">
        		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <div class="separador"></div>
        		<?php the_content(); ?>
        		<?php endwhile; ?>
        		<!-- post navigation -->
        		<?php else: ?>
        		<!-- no posts found -->
        		<?php endif; ?>		
        	</div>
        </div>        
    </div>
<?php get_footer(); ?>