<div id="side_menu">
<script>
	$(function(){
		$("#menu .ac_open").on("click",function() {
			$(this).next().slideToggle();
			$(this).toggleClass("active");
		});
	});
</script>

<input type="checkbox" id="navTgl">

	<label for="navTgl" class="open">≡</label>
	<label for="navTgl" class="close"></label>
	<nav id="menu">
		<h2>menu</h2>
		<ul>
			<li id="sidemenu_go_home" class="side_menu_first_li"><a href="http://flocks.jp/">トップへ</a></li>
			<li class="side_menu_first_li"><a href="http://flocks.jp/writer/">ライター紹介</a></li>
			<li class="side_menu_first_li"><a href="http://flocks.jp/want-read-list/">読みたい漫画リスト</a></li>
			<li class="ac_open">カテゴリー</li>
			<ul class="list_menu" id="list1">
		<?php
if(is_single()) {
		$category = get_the_category();
		$class .= $category[0]->cat_ID;
		}?>
		<?php wp_list_categories('title_li=&child_of=162&show_count=1'.$class); ?>
</ul>
				<li>
					<!-- <dl id="side_menu_sns">

					</dl> -->
				</li>
			</ul>
	</nav>
	</div> <!-- side_menu -->

</div>
