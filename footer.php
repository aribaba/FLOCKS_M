





</div>
<!-- contents end-->
<!--
<div id="footer-nav">
		<ul id="footer-nav-contents">
			<?php if (is_single()) {

			$prev_poxt = get_previous_post();
			if (!empty( $prev_poxt  )):
			echo '<a href="',get_permalink( $prev_poxt->ID ),'"><li>前の記事</li></a>';
			endif;
			};
			?>




			<a href="http://flocks.jp/"><li>記事一覧</li></a>
			<a href="http://flocks.jp/writer/"><li>ライター</li></a>

			<?php if (is_user_logged_in() ) {

				?>
				<a href="http://flocks.jp/your-profile/"><li>
					<?php
						global $current_user;
						get_currentuserinfo();

						echo $current_user->user_login;
					?></li></a>
			<?php

			  }else{
    ?>
			<a href="http://flocks.jp/login/"><li>ログイン</li></a>
			<?php
				};
			?>


				<?php if (is_single()) {
					# code...

				$next_post = get_next_post();
				if (!empty( $next_post )):
				echo '<a href="',get_permalink( $next_post->ID ),'"><li>次の記事</li></a>';
				endif;

				}?>



		</ul>
	</div>
 -->


<div id="footer">


	<div id="footer-contents">
		<span><p><a href="http://flocks.jp/">flocks.jp</a></p></span>

		<!-- <img width="50px" height="50px" src="<?php bloginfo('template_url'); ?>/images/鳥.png"> -->
<!-- <ul>
		<li><a href=" http://flocks.jp/広告募集/"><p>広告募集</p></a></li>
		<li><a href="http://flocks.jp/ライター募集/"><p>ライター募集</p></a></li>
		<li><a href="http://flocks.jp/プライバシーポリシー/"><p>プライバシーポリシー</p></a></li>
	</ul> -->
</div>
</div>
<!--footer end-->
</div>
<!--wrap end-->
<?php wp_footer(); ?>
</body>
</html>