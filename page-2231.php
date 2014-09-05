<?php get_header();
if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
<div id="modal">
  <div id="modal-box">
    <div class="gutter">
      <div id="modalClose">X</div>
      <div id="modal-content">
        <?php dynamic_sidebar('modal-box'); ?>
      </div>
    </div>
  </div>
  <div id="modal-overlay">

  </div>
</div>

<div id="content" class="<?php the_field('color'); ?>-theme">
  <div class="container cf">
    <div id="contentPrimary">
      <div class="gutter cf">
        <div class="titleCont">
          <h1><?php the_title(); ?></h1>
        </div>
        <?php if(has_post_thumbnail()){
            echo "<div id='page-banner'>".the_post_thumbnail()."</div>";
          }
        ?>
        <?php the_content(); ?>
        <a href="<?php the_field('left_cta_link'); ?>">
          <div id="newsletter-callout">
            <div class="gutter">
              <?php the_field('left_cta'); ?>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div id="contentSecondary">
      <div class="gutter">
        <?php get_template_part( 'partials/page', 'sidebar' ); ?>
      </div>
    </div>
  </div>
  <div class="colorbar"></div>
</div>
<?php } } ?>
<?php get_footer(); ?>
