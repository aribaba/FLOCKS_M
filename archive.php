<?php get_header(); ?>
<div id="contents-body">
	<?php
		if (!is_front_page() && function_exists('bread_crumb')) :
			bread_crumb('navi_element=nav&elm_id=bread-crumb');
		endif;
		?>
	<header class="page-header">
		<h1 class="page-title">
			<?php
			if(is_author()) :
				echo esc_html(get_the_author_meta('display_name',get_query_var('author')));
			else :
			single_cat_title();
		endif;
		?>
		</h1>
	</header>
	<div class="post">
<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
    get_template_part('content-archive');
  endwhile;
endif;
?>
</div>
<!--post end-->
</div>
<!--contents-body end-->

<?php get_footer(); ?>