<?php get_header();?>


<div id="contents-body">




<div id="article-top">



<h1 id="recent-article">最新の記事</h1>

<?php
$paged = get_query_var('page');
query_posts($query_string .  '&' .'posts_per_page=5&category_name=all&paged='.$paged);
if (have_posts()) :
while (have_posts()) :
	the_post();
get_template_part('content-archive');
  endwhile;
endif;
?>
<?php wp_pagenavi();
wp_reset_query();
?>


</div>
<!-- article-top end -->




</div>
<!--contents-body end-->
<?php include_once("sidemenu.php") ?>
<?php get_footer(); ?>