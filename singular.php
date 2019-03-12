<?php get_header(); the_post(); ?>


<?php 

if ( is_singular('person') ) {
    get_template_part( 'templates/content', 'boxed' ); 
}else{
 get_template_part( 'templates/content', 'sidebar' ); 
}
?>



<?php get_footer(); ?>