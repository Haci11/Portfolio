<?php get_header();?>
    <main>


<?php $intro = get_field("intro"); ?>
        <div id="portcontainer" class="portcontainer">
            <div class="introtext">
                <p><?php echo $intro['text_1'];?></p>
                <p id="pspecial"><?php echo $intro['text_2'];?></p>
                <p><?php echo $intro['text_3'];?></p>   
                <br>
                <p id="texts"><?php echo $intro['text_4'];?></p>
            </div>

            <div class="skills">
                
            <h3>Skills</h3>
                <ul>
                <i class="fa-brands fa-wordpress"></i>
                <i class="fa-brands fa-js"></i>
                <i class="fa-brands fa-php"></i>
                <i class="fa-brands fa-css3-alt"></i>
                <i class="fa-brands fa-html5"></i>
                <i class="fa-brands fa-react"></i>
               </ul>
            </div>

            <h3 id="h3work">My Work</h3>
            <div class="work">
                <?php if(have_posts()):?>
                    <?php while (have_posts()):the_post();?>
                        <article class="artic">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="picture here">
                            <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title();?></h2>
                            </a>
                        </article>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        
        </div>
    </main>
<?php get_footer();?>