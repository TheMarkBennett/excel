<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-4 mt-sm-5 mb-5 pb-sm-4">
		<div class="row">

                    <div class="col-xs-12 col-md-8">
                       <h1> <?php  the_field('person_title_prefix');?> <?php the_title(); ?> <?php  the_field('person_title_suffix');?> </h1>
                       <p> <?php  the_field('person_jobtitle');?> </p>
                       <div class="row">
                            <div class="col-xs-12 col-md-auto">
                            <p> <?php  the_field('person_phone');?> </p>
                            </div>
                            <div class="col-xs-12 col-md-auto">
                            <p> <?php  the_field('person_email');?> </p>
													</div>
                            <div class="col-xs-12 col-md-auto">
                            <p> <?php  the_field('person_location');?> </p>
                        </div>
                    </div>
									</div>
                    <div class="col-xs-12 col-md-4">
                        <?php if ( has_post_thumbnail() ) : ?>
                               <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                        <?php endif; ?>

                    </div>
        </div>
         <div class="row mt-4">
                <div class="col-xs-12">
				        <?php the_content(); ?>

								<?php if( have_rows('person_tabbed_content') ): ?>
												<ul class="nav nav-tabs">
											<?php while( have_rows('person_tabbed_content') ): the_row();
												$n= 0;
												// vars
												$tab_title = get_sub_field('person_tab_title');
												$tab_content = get_sub_field('person_tab_content');
											?>
											<li class="nav-item">
												<a class="nav-link <?php if($n == 0){?> active <?php } ?>" href="#person-tab-<?php echo $n;?>" role="tab"><?php echo $tab_title; ?></a>
											</li>

											<?php $n++ ?>
									<?php endwhile; ?>
										</ul>
								<?php  endif; ?>

								<?php if( have_rows('person_tabbed_content') ): ?>
											<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
										<?php while( have_rows('person_tabbed_content') ): the_row();
												$n= 0;
												// vars
												$tab_title = get_sub_field('person_tab_title');
												$tab_content = get_sub_field('person_tab_content');
											?>
											<div class="tab-pane fade show <?php if($n == 0){?> active <?php } ?>" id="#person-tab-<?php echo $n;?>" role="tabpanel">
												<?php echo $tab_content ?>
											</div>

											<?php $n++ ?>
									<?php endwhile; ?>
										</div>
								<?php  endif; ?>







			    </div>
            </div>

</article>

<?php get_footer(); ?>
