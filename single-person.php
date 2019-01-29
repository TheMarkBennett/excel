<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-4 mt-sm-5 mb-5 pb-sm-4">
		<div class="row">
            <div class="person">
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                       <h1> <?php  the_field('person_title_prefix');?> <?php the_title(); ?> <?php  the_field('person_title_suffix');?> <h1>
                       <p> <?php  the_field('person_jobtitle');?> </p>
                       <div class="row">
                            <div class="col-xs-12 col-md-4">
                            <p> <?php  the_field('person_phone');?> </p>
                            </div>
                            <div class="col-xs-12 col-md-4">
                            <p> <?php  the_field('person_email');?> </p>
                            </di>
                            <div class="col-xs-12 col-md-4">
                            <p> <?php  the_field('person_location');?> </p>
                            </di>
                       </div>
                    </div>
                    <div class="col-xs-12 col-md-4">  
                        <?php if ( has_post_thumbnail() ) : ?>                            
                               <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid' ]); ?>                          
                        <?php endif; ?>                  

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
				        <?php the_content(); ?>
			        </div>
                </div>
            </div>
			
             
		</div>
	</div>
</article>

<?php get_footer(); ?>