<!-- Page.php is used for each individual page -->

<?php

  get_header(); //Will pull in the contents of header.php

  while(have_posts()) { the_post();?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>DONT FORGET TO REPLACE ME LATER</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <?php
      // If page is the top (parent) page, then $parentPageId === 0. WordPress sees 0 as FALSE;
      // If a value is assigned to $parentPageId then it means you're on page with a parent (ie you're on a child page).
      $parentPageId = wp_get_post_parent_id(get_the_ID());
      if ($parentPageId) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php the_permalink($parentPageId) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentPageId) ?></a> <span class="metabox__main"><?php the_title() ?></span></p>
        </div>
      <?php }
    ?>

    <?php
      $childPages = get_pages(array(
        'child_of' => get_the_ID()
      ));
      if($parentPageId or $childPages){ //If page has a parent page (is a child page) or page has a child page (is a parent page).
    ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($parentPageId) ?>"><?php echo get_the_title($parentPageId) ?></a></h2>
        <ul class="min-list">
          <?php
            if($parentPageId){  // Page has a parent page (ie page is a child)
              $findChildrenOf = $parentPageId;
            }else{
              $findChildrenOf = get_the_ID();
            }

            wp_list_pages(array(
              'title_li' => NULL,
              'child_of' => $findChildrenOf,
              'sort_column' => 'menu_order'
            ));
          ?>
        </ul>
      </div>
    <?php } ?>

    <div class="generic-content">
      <?php the_content() ?>
    </div>

  </div>
    <?php }

  get_footer(); //Will pull in the contents of footer.php

?>