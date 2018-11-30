<?php

get_header();

  while(have_posts()) {
    the_post(); ?>
    <div id="content_wrapper">
      <div class="generic-content">
      <?php the_content(); ?>
      </div>

    </div>


  <?php  }

get_footer();

 ?>
