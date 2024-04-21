<?php
$users 	  	  = get_field('users');
$post_pdf 	  = get_field('pdf_post');

if ( is_user_logged_in() ) {
	get_header();
	$current_user = wp_get_current_user();
	$is_authorized_user = false;
	foreach($users as $user){
		if($user['ID'] == $current_user->ID || $current_user->caps['administrator'] ){
			echo 'true';
			$is_authorized_user = true;
		}else{
			echo 'false';
		}
	}

	if($is_authorized_user){

		while(have_posts()){
			the_post();

			?>
			<div class="page-wraper">
			<section class="single-featured-image" style="background-image:url( <?php if(has_post_thumbnail()){  the_post_thumbnail_url('full'); } else { echo get_theme_file_uri('/images/standard.png'); }  ?>)" alt="" >

			</section>

			<div class="container content text-white wysiwyg">
				<h1 class="title title-page"><?php the_title() ?></h1>
				<div class="row">
					<div class="col-12">
						<div class="cursos__wrapper  grid grid-cols-1 md:grid-cols-3  mt-16 gap-12">
							<?php foreach($post_pdf as $post_id){ ?>
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
							<?php } ?>
						</div>
					</div>
				</div>
			</div>


			</div>

			<?php
		}
	}else{
		wp_redirect( home_url( '/wp-login.php' ) );
		exit;
	}

} else {
	wp_redirect( home_url( '/wp-login.php' ) );
	exit;
}
    get_footer();

?>
