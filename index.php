<?php get_header(); ?>  
  <div class="container">
    <div class="col-lg-12 titles">
      <h1>Magdalena y Joaquín</h1>

      <p class="bajada"><span class="highlight">¡Nos Casamos en Enero!</span>, nos casamos y ahora esperamos nuestro primer hijo!, estamos <strong>megaultrahiperfelices</strong> y hemos querido compartir un poco de nuestra vida con ustedes....la familia, los amigos y todos aquellos que partieron antes de tiempo (Beatriz y Abuelos).</p>
      
    </div>
  
  </div>
  <div class="container">
    <div class="col-lg-12 titles">
      <h2>Esta es nuestra historia</h2>
    </div>
  </div>

<?php if (have_posts()) : ?>

<div id="post-area" class="container">
<?php while (have_posts()) : the_post(); 

?>	

   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 <?php if ( has_post_thumbnail() ) { ?>
         <div class="gridly-image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'summary-image' );  ?></a></div>
         <!--<div class="gridly-category"><p><?php the_category(', ') ?></p></div>-->
       
		  <?php } ?>
       			<div class="gridly-copy"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <p class="gridly-date front"><?php the_time(get_option('date_format')); ?>  </p>

<?php the_excerpt(); ?> 

               <p class="gridly-link"><a href="<?php the_permalink() ?>">Sapea más &rarr;</a></p>
         </div>
       </div>
       
       

<?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>
    
<?php next_posts_link('<p class="view-older">Sapear todas nuestras historias</p>') ?>
    
 
<?php get_footer(); ?>
