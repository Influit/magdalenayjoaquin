<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
           
   
   		<div class="container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail() ) { ?>			
				<div class="gridly-image"><?php the_post_thumbnail( 'detail-image' );  ?></div>
             <?php } ?>                   

       			<div class="gridly-copy">
                <h1><?php the_title(); ?></h1>
                 <p class="gridly-date"> <?php the_time(get_option('date_format')); ?></p>
           		 <?php the_content(); ?> 
                 <p><?php the_tags(); ?></p>
            </div>
      </div>  
       
		<?php endwhile; endif; ?>

<?php get_footer(); ?>