<div id="sidebar">

	<div id="side-category">
	<ul class="rist-menu" id="list1">
    <?php wp_list_categories('title_li='); ?>
</ul>
</div>
<div id="searchform">
<dl>
<dt></dt>
<dd><form name="searchform2" id="searchform2" method="get" action="<?php bloginfo('url'); ?>/">
<input name="keywords2" id="keywords2" value="<?php the_search_query(); ?>" type="text" />
<input type="image" src="<?php bloginfo('template_url'); ?>/images/0317/0317/image/btn2.gif" alt="検索" name="searchBtn2" id="searchBtn2" />
</form></dd>
</dl>
</div>
<div id="side-twitter">
	<a href="http://twitter.com/Flocks_mng" target="_blank">
		<img src="<?php bloginfo('template_url'); ?>/images/About_logoUsage (2).png">
	</a>
</div>

<div id="side-contents">
	<?php dynamic_sidebar('primary-widget-area' ); ?>
</div>


		<!-- ads end -->
		<div id="side-facebook">
		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fflocks.jp&amp;width=320&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=752067121476709" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:250px;" allowTransparency="true"></iframe>
	</div>
</div>
<!--sidebar end-->