<?php

$title        = get_field('nossos_cursos_title');
$post1        = get_field('nossos_cursos_post_1');
$post2        = get_field('nossos_cursos_post_2');
$post3        = get_field('nossos_cursos_post_3');

if ( ! $title || empty( $title ) ) {
	$title = 'Nossos Cursos';
};


?>
<h2 class="cursos__title" data-anime="bottom">
    <?php
        echo $title
    ?>
</h2>

<div class="cursos__wrapper mt-16">
    <?php
    if ( is_object( $post1 ) ) {
        $pec_cursos_1_id   	     = $post1->ID;
        $pec_cursos_1_date       = get_field('curso_data', $pec_cursos_1_id);
        $pec_cursos_1_category	 = get_the_category($pec_cursos_1_id)[0]->name;
        $pec_cursos_1_title 	 = $post1->post_title;
        $pec_cursos_1_content 	 = $post1->post_content;
        $pec_cursos_1_image 	 = get_the_post_thumbnail_url($post1->ID, 'ProductImageList2');
        $pec_cursos_1_link       = get_the_permalink( $post1 );
		list($width, $height, $type, $attr, $alt) = getimagesize($pec_cursos_1_image);

        ?>
        <div class="cursos__curso" data-anime="left" >
            <a href="<?php echo $pec_cursos_1_link ?>" class="cursos__curso--link">
				<div class="cursos__curso-image-wrapper">
					<img src="<?php echo $pec_cursos_1_image; ?>" alt="<?= $alt; ?>" width="<?= $width; ?>" height="<?= $height; ?>" class="cursos__curso--img">
				</div>
                <div class="cursos__curso--content-wrapper">
                    <div class="cursos__curso--title ">
                        <?php echo wp_trim_words( $pec_cursos_1_title, 15); ?>
                    </div>
                    <div class="cursos__curso--content">
                        <?php echo wp_trim_words( $pec_cursos_1_content, 30); ?>
                    </div>
                    <div class="cursos__curso--info">
                        <span class="cursos__curso--location">
                            <?php echo $pec_cursos_1_category ?>
                        </span>
                        <span class="cursos__curso--date">
                            <?php echo $pec_cursos_1_date; ?>
                        </span>
                    </div>
					<a href="<?php echo $pec_cursos_1_link ?>" class="cursos__curso--btn ">
						Saiba mais
					</a>
                </div>
            </a>
        </div>
    <?php
    }
    if ( is_object( $post2 ) ) {
        $pec_cursos_2_id   	     = $post2->ID;
        $pec_cursos_2_date       = get_field('curso_data', $pec_cursos_2_id);
        $pec_cursos_2_category	 = get_the_category($pec_cursos_2_id)[0]->name;
        $pec_cursos_2_title 	 = $post2->post_title;
        $pec_cursos_2_content 	 = $post2->post_content;
        $pec_cursos_2_image 	 = get_the_post_thumbnail_url($post2->ID);
        $pec_cursos_2_link       = get_the_permalink( $post2 );
        ?>
        <div class="cursos__curso" data-anime="right" >
            <a href="<?php echo $pec_cursos_2_link ?>" class="cursos__curso--link">
				<div class="cursos__curso-image-wrapper">
					<img src="<?php echo $pec_cursos_2_image; ?>" alt="<?= $alt; ?>" width="<?= $width; ?>" height="<?= $height; ?>" class="cursos__curso--img">
				</div>
                <div class="cursos__curso--content-wrapper">
                    <div class="cursos__curso--title ">
                        <?php echo wp_trim_words( $pec_cursos_2_title, 15); ?>
                    </div>
                    <div class="cursos__curso--content">
                        <?php echo wp_trim_words( $pec_cursos_2_content, 30); ?>
                    </div>
                    <div class="cursos__curso--info">
                        <span class="cursos__curso--location">
                            <?php echo $pec_cursos_2_category ?>
                        </span>
                        <span class="cursos__curso--date">
                            <?php echo $pec_cursos_2_date; ?>
                        </span>
                    </div>
					<a href="<?php echo $pec_cursos_2_link ?>" class="cursos__curso--btn ">
						Saiba mais
					</a>
                </div>
            </a>
        </div>
    <?php
    }
	if ( is_object( $post3 ) ) {
		$pec_cursos_3_id   	     = $post3->ID;
		$pec_cursos_3_date       = get_field('curso_data', $pec_cursos_3_id);
		$pec_cursos_3_category	 = get_the_category($pec_cursos_3_id)[0]->name;
		$pec_cursos_3_title 	 = $post3->post_title;
		$pec_cursos_3_content 	 = $post3->post_content;
		$pec_cursos_3_image 	 = get_the_post_thumbnail_url($post3->ID);
		$pec_cursos_3_link       = get_the_permalink( $post3 );
		?>
		<div class="cursos__curso" data-anime="left" >
            <a href="<?php echo $pec_cursos_3_link ?>" class="cursos__curso--link">
				<div class="cursos__curso-image-wrapper">
					<img src="<?php echo $pec_cursos_3_image; ?>" alt="<?= $alt; ?>" width="<?= $width; ?>" height="<?= $height; ?>" class="cursos__curso--img">
				</div>
                <div class="cursos__curso--content-wrapper">
                    <div class="cursos__curso--title ">
                        <?php echo wp_trim_words( $pec_cursos_3_title, 15); ?>
                    </div>
                    <div class="cursos__curso--content">
                        <?php echo wp_trim_words( $pec_cursos_3_content, 30); ?>
                    </div>
                    <div class="cursos__curso--info">
                        <span class="cursos__curso--location">
                            <?php echo $pec_cursos_3_category ?>
                        </span>
                        <span class="cursos__curso--date">
                            <?php echo $pec_cursos_3_date; ?>
                        </span>
                    </div>
					<a href="<?php echo $pec_cursos_3_link ?>" class="cursos__curso--btn ">
						Saiba mais
					</a>
                </div>
            </a>
        </div>
	<?php
	}

    ?>
</div>
