<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container my-5">
		<div class="row">
			<div class="col-md-4 mb-5">

				<aside class="person-contact-container">

					<div class="mb-4">
						<?php the_post_thumbnail('medium'); ?>
					</div>

					<h1 class="h5 person-title text-center mb-2">
						<?php the_title(); ?>
					</h1>

					<?php if ( $job_title = get_field( 'person_jobtitle' ) ): ?>
					<div class="person-job-title text-center mb-4">
              <?php echo $job_title; ?>
          </div>
					<?php endif; ?>

          <div class="row mt-3 mb-5">
            <?php if(get_field( 'person_email' )): ?>
        				<div class="col-md offset-md-0 col-8 offset-2 my-1">
        			       <a href="<? the_field('person_email'); ?>" class="btn btn-primary btn-block">Email</a>
        		  </div>
            <?php endif; ?>
        						<div class="col-md offset-md-0 col-8 offset-2 my-1">
        			<a href="tel:4078231419" class="btn btn-primary btn-block">Phone</a>
        		</div>
			</div>

					<?php //echo get_person_contact_btns_markup( $post ); ?>


					<?php //echo get_person_dept_markup( $post ); ?>
					<?php //echo get_person_office_markup( $post ); ?>
					<?php //echo get_person_email_markup( $post ); ?>
					<?php //echo //get_person_phones_markup( $post ); ?>

				</aside>

			</div>

			<div class="col-md-8 col-lg-7 pl-md-5">

				<section class="person-content">
					<?php //echo get_person_desc_heading( $post ); ?>

					<?php
					if ( $post->post_content ) {
						the_content();
					}
					else {
						echo '<p>No description available.</p>';
					}
					?>

					<?php if ( $cv_url = get_field( 'person_cv' ) ): ?>
					<p>
						<a class="btn btn-primary mt-3" href="<?php echo $cv_url; ?>">Download CV</a>
					</p>
					<?php endif; ?>
				</section>

        <?php if( have_rows('person_tabbed_content') ):

                      // vars
            		$title = get_sub_field('person_tab_title');
            		$content = get_sub_field('person_tab_content');
            		$count = 0;
                $active = 'active';


                $tabs = '<section class="person-additional">';
                $tabs .= '<ul class="nav nav-tabs" id="myTab" role="tablist">';
            while( have_rows('person_tabbed_content') ): the_row();
                $tabs .= '<li>';
                   $tabs .= '<a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab'. $count .'" role="tab" aria-controls="home" aria-selected="true">'. $title .' </a>';
                $tabs .= '</li>';

                $count++;

       endwhile;
              $tabs .=  '</ul>';
              $tabs .= '</section>';
         endif; ?>

         <?php echo $tabs ?>

			</div>
		</div>

	</div>
</article>

<?php get_footer(); ?>
