<?php
	/*
		Template Name: Template Portfolio
	*/
?>	

<?php get_header();?>
    <main>

    <?php $intro = get_field("intro"); ?>

<section class="p-5 container-fluid bg-info bg-gradient">

<div class=" text-white ">
<div class="container">
<div class="row">
    
    <div class="col size">
        <p><?php echo $intro['bob_1'];?></p>
        <p class="px-5 bold"><?php echo $intro['bob_2'];?></p>
        <p><?php echo $intro['bob_3'];?></p> 
    </div>

    <br>
    <div class="col text-center">
        <p><?php echo $intro['bob_4'];?></p>
    </div>
    </div>
    </div> 

    
</div>

</section>


<?php $ikon = get_field("ikon"); ?>
<section class="p-5">
    <h3 class="text-center p-2 bold"><?php  the_field('skills_title');?></h3>
    <div class="row gx-4 g-3 ">
        <?php foreach($ikon as $sub_field): ?>
        <div class="col col-4 ">
            <div class="">
                <div class="text-center text-warning ">
                    <i class=" icon-size fa-brands fa-<?php echo $sub_field["classname"];?>"></i>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php $project_leaders = get_field("hero"); ?>
<section class="p-5 bg-info bg-gradient">
    <h3 class="text-center p-2 bold"><?php  the_field('mywork_title');?></h3>
    <div class="container">
        <div class="row text-center g-4">
        <?php foreach($project_leaders as $sub_field): ?>
            <div class="col-md-4">
                <div class="card bg-primary bg-gradient text-light">
                    <div class="card-body text-center">
                        <img class="img-thumbnail " src="<?php echo $sub_field["work_img"];?>" alt="">
                        <h3 class="card-title mb-3 p-2"><?php echo $sub_field["work_title"];?></h3>
                        <p class="card-text text-light"><?php echo $sub_field["work_desc"];?></p>
                        <a href="<?php echo $sub_field["work_gitlink"];?>" class="btn btn-outline-light"><?php echo $sub_field["work_name_link"];?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
    </main>
<?php get_footer();?>