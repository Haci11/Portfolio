<?php get_header(); ?>

<main>
	<section>
	<h3 id="h3work">My Work</h3>
       <div class="works">
			<?php if(have_posts()):?>
				<?php while (have_posts()):the_post();?>
					<article class="artics">
						<img src="<?php echo get_the_post_thumbnail_url();?>" alt="picture here">
						<h2><?php the_title();?></h2>
						<p><?php the_content();?></p>
					</article>
				<?php endwhile;?>
			<?php endif;?>
  	      </div>
		</div>
	</section>
</main>


        
<?php get_footer(); ?>