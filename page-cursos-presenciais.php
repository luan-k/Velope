<?php get_header();
while(have_posts()){
the_post();

?>

<div class="container content text-white wysiwyg cursos-page mt-96">
    <section class=" text-center text-white relative font-poppins">
        <div class="cursos__wrapper grid grid-cols-1 md:grid-cols-3 mt-96 gap-12 font-poppins">

            <?php
                $today = date('Ymd');
                $upcomingCourses = new WP_Query(array(
					'posts_per_page' => -1,
					'post_type' => 'cursos_presenciais',
					'orderby' => 'date',
					'order' => 'ASC',

				));
                while($upcomingCourses->have_posts() ) {
                    $upcomingCourses->the_post();?>
					<div class="cursos__curso" data-anime="left">
						<a href="<?php the_permalink(); ?>" class="cursos__curso--link">
							<div class="cursos__curso-image-wrapper">
								<img src="<?php if(has_post_thumbnail()){ the_post_thumbnail_url('full'); } else { echo get_theme_file_uri('/images/standard.png'); }  ?>" alt="<?php the_title(); ?>" class="cursos__curso--img">
							</div>
							<div class="cursos__curso--content-wrapper">
								<div class="cursos__curso--title">
									<?php echo wp_trim_words( get_the_title(), 15); ?>
								</div>
								<div class="cursos__curso--content">
									<?php echo wp_trim_words( get_the_content(), 30); ?>
								</div>
								<div class="cursos__curso--info">
									<?php if(!empty(get_the_category())){ ?>
										<span class="cursos__curso--location">
											<?php echo strip_tags(get_the_category_list(', ')); ?>
										</span>
									<?php } ?>
									<span class="cursos__curso--date">
										<?php the_date(); ?>
									</span>
								</div>
								<a href="<?php the_permalink(); ?>" class="cursos__curso--btn">
									Saiba mais
								</a>
							</div>
						</a>
					</div>
                <?php
                }wp_reset_postdata();
            ?>
        </div>

    </section>
</div>


</div>

<?php
    }
    get_footer();

?>
