<?php get_header(); ?>
 // Início do loop do WordPress
            

<?php 
$args = array('post_type' => 'produto'); 
$query = new WP_Query($args);
if ($query->have_posts()) {
  while ($query->have_posts()) {
      $query->the_post();
      ?>
	
	<?php the_title(); ?>
	<?php the_content(); ?>

  <?php
                }
            } else {
                // Caso não haja postagens para exibir
                echo 'No products found.';
            }
            wp_reset_postdata(); // Restaura os dados originais do post global
            ?>

<?php get_footer(); ?>