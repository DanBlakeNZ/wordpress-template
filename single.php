<!-- Single.php is used for each individual blog post -->

<?php
  get_header(); //Will pull in the contents of header.php

  while(have_posts()){
    the_post();?>
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    <?php
  }

  get_footer(); //Will pull in the contents of footer.php
?>