<?php
/*
Template Name: flocks
*/
?>

<?php get_header(); ?>

<div id="contents-body-flocks">
<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
    get_template_part('content-flocks');
  endwhile;
endif;
?>
</div>

<!--contents-body !-->

<?php get_footer(); ?>