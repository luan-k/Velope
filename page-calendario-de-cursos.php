<?php get_header();
while(have_posts()){
the_post();

?>


</section>
<div class="container content text-white wysiwyg cursos-page pt-28">
    <section class="cursos text-center text-white relative font-poppins">
		<?php
		$local = get_terms(['taxonomy' => 'local', 'hide_empty' => false,]);

		$is_there_a_filter = false;
		$path = $_SERVER['REQUEST_URI'];
		$parts = explode("/", $path);
		$currentTaxonomy = array();
		$currentSubTaxonomy = array();
		$newParts = explode("cidade=", $path);
		if (count($newParts) > 1) {

			$lastElement = end($newParts);
			$lastElement = rtrim($lastElement, '/');
			$encoded = urldecode($lastElement);
		} else {

		}

		?>
		<div class="selection-wrapper flex flex-col">
			<label class="mb-12" for="cars">Escolha sua Cidade!</label>

        	<select name="cars" id="cars" class="bg-black text-center calendario-selection">
				<option value="Selecionar" >Selecionar</option>
				<?php
				foreach ( $local as $term ) {
					if($term->name == $encoded){
						$selected = " selected ";
						$is_there_a_filter = true;
					}else{
						$selected = " ";
					}
					echo '<option ' . $selected . ' value="' . $term->name . '">' . $term->name . '</option>';
				}
				?>
        	</select>
		</div>

        <div class="cursos__wrapper grid grid-cols-1 md:grid-cols-3 mt-16 gap-12 font-poppins"  id="course-cards">

            <?php

                $today = date('Ymd');
				if($is_there_a_filter){
					$upcomingCourses = new WP_Query(array(
						'posts_per_page' => -1,
						'post_type' => 'post',
						'meta_key' => 'curso_data',
						'orderby' => 'meta_value_num',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'local',
								'field' => 'name',
								'terms' => $encoded,
							),
						),
					));
				}else{
					$upcomingCourses = new WP_Query(array(
					'posts_per_page' => -1,
					'post_type' => 'post',
					'meta_key' => 'curso_data',
					'orderby' => 'meta_value_num',
					'order' => 'ASC',
					'meta_query' => array(
						array(
						'key' => 'curso_data',
						'compare' => '>=',
						'value' => $today,
						'type' => 'numeric'
						)
					)
					));
				}
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
        <?php
            $pastCourses = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'post',
                'meta_key' => 'curso_data',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                    'key' => 'curso_data',
                    'compare' => '<',
                    'value' => $today,
                    'type' => 'numeric'
                    )
                )
            ));
            if ( $pastCourses->have_posts() ) { ?>
                <h3 class="cursos__curso--title text-5xl mb-6 mt-28 font-semibold !text-white font-poppins">
                    Cursos Anteriores
                </h3> <?php
            } ?>
        <div class="cursos__wrapper grid grid-cols-1 md:grid-cols-3 mt-16 gap-12 font-poppins">
            <?php
            while($pastCourses->have_posts() ) {
                $pastCourses->the_post();?>
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
            }wp_reset_postdata(); ?>
        </div>
    </section>
</div>

</div>

<script>
    function getCourseCards(local) {
        jQuery.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'POST',
            data: {
                action: 'filter_courses',
                local: local,
            },
            beforeSend: function () {
                // Show loader or spinner
            },
            success: function (response) {
                jQuery('#course-cards').html(response);
            },
            error: function () {
                // Show error message
            },
        });
    }
    jQuery('#cars').on('change', function () {
		let result;
        let local = jQuery(this).val();
		/* const newUrl = window.location.href.replace(/\/cidade=.+/, ''); */
		const currentUrl = window.location.href;
		const newUrl = currentUrl.replace(/cidade=.+?(?=&|$)/, '');
		if(local == 'Selecionar'){
			history.pushState({}, '', newUrl);
		}else{
			result = "cidade=" + local;
			history.pushState({}, "", result);
		}

        getCourseCards(local);
    });
</script>

<?php
    }
    get_footer();

?>
