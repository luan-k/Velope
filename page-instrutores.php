<?php get_header();
while(have_posts()){
the_post();

?>


</section>
<div class=" content text-white wysiwyg instrutores-page">
    <section class=" text-white relative font-poppins pt-60">
        <div class="grid grid-cols-1 mt-16 gap-60 font-poppins container">
			<h1 class="instrutores-archive-title">
				Nossos Instrutores
			</h1>

            <?php
                $instructorPage = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'instrutores',
                'orderby' => 'date',
                'order' => 'DESC',
                ));
                while($instructorPage->have_posts() ) {
                    $instructorPage->the_post();?>
                    <div class="instrutores-archive">
						<div class="instrutores-archive__image-wrapper">
							<img src="<?php if(has_post_thumbnail()){ the_post_thumbnail_url('full'); } else { echo get_theme_file_uri('/images/standard.png'); }  ?>" alt="<?php the_title(); ?>" class="instrutores-archive__img">
						</div>
						<div class="instrutores-archive__content-wrapper">
							<h4 class="instrutores-archive__title">
								<?php echo get_the_title(); ?>
							</h4>
							<div class="instrutores-archive__description">
								<?php echo get_the_content() ?>
							</div>
                            <a target="_blank" href="<?= the_permalink() ?>" class="instrutores-archive__btn">
                                Saiba Mais
                            </a>
                        </div>
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
