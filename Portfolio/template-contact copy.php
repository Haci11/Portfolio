<?php
	/*
		Template Name: Template Contact
	*/
?>	

<?php get_header();?>

<main>
			<section>

							<h1 id="contact" style="height:10vh;"><?php the_title(); ?></h1>
							<form id="formres" style="height:60vh;">
							<?php the_content(); ?>
							</form>

			</section>
		</main>

<?php get_footer();?>