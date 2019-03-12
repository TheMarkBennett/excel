<?php get_header(); the_post(); ?>


<?php 

if ( get_post_type( get_the_ID() ) == 'person' ) {
    get_template_part( 'templates/content', 'boxed' ); 
}else{
 get_template_part( 'templates/content', 'sidebar' ); 
}
?>



<?php get_footer(); ?>