<?php get_header();?>


<div id="contents-body">
<!-- feature -->

	<div class="flexslider">
		<ul class="slides">

			<li><a href="http://flocks.jp/arichives/feature/can_hear_a_sound/">
					<img src="http://flocks.jp/wp-content/uploads/2014/07/can_hear_a_sound-.jpg">
				</a>
				<div class="flex-caption">

				<p id="feature-des-title">マンガなのに”音”が聞こえる？名作多し音楽マンガ撰</p>

				</div>
			</li>
			<li><a href="http://flocks.jp/arichives/feature/want_read_in_rain/">
					<img src="http://flocks.jp/wp-content/uploads/2014/06/wallpaper-rain-06.jpg">
				</a>
				<div class="flex-caption">
					<p id="feature-des-title">雨の日に読みたいマンガ撰</p>

				</div>
			</li>
			<li><a href="http://flocks.jp/arichives/2064/">
					<img src="http://flocks.jp/wp-content/uploads/2014/07/PAK86_pennotekakikomi20140312500-e1404282681261.jpg">
				</a>
				<div class="flex-caption">
					<p id="feature-des-title">【急募　◯◯漫画ライター】あなたの好きな漫画を紹介してみませんか？</p>

				</div>
			</li>

		</ul>
	</div>

<!--feature end -->




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
<div id="twitter">

	<a href="http://twitter.com/Flocks_mng" target="_blank">
		<img src="<?php bloginfo('template_url'); ?>/images/About_logoUsage (2).png">
	</a>
	<span id="twitterfollow">Flocksの新着記事をお知らせするtwiiterアカウントです。フォローよろしくお願いします!!</span>
</div>


<div id="facebook">
		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fflocks.jp&amp;width=320&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=752067121476709" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:250px;" allowTransparency="true"></iframe>
	</div>





</div>
<!--contents-body end-->
<?php get_footer(); ?>