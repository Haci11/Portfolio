
<?php $social = get_field("footersocial", 'option'); ?>

<footer>
  <div class="footercontainer">
    <div class="socials">
    <?php foreach($social as $sub_field): ?>
        <a href="<?php echo $sub_field["social_link"];?>"><i class="fa-brands fa-<?php echo $sub_field["social_class_name"];?>"></i></a>
      <?php endforeach; ?>

     
    </div>
    <div class="text-center">
      <?php the_field('copyright','option');?>
    </div>
  </div>
</footer>





<?php wp_footer(); ?>

<script>
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

</script>
</body>
</html>