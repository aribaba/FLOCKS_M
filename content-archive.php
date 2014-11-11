<article class="entry">
	<a href="<?php the_permalink(); ?>" >
        <div class="entry-figure">
				<?php the_post_thumbnail(array(82,110)); ?>
		</div>
		<div class="title">
		    <div class="entry-title">
		    	<ul class="tex">


              <div class="box-time">
                <li><time pubdate ="pubdate" datetime="<?php echo get_post_time('Y-m-d'); ?>" class="time">
                <?php echo get_post_time('Y/m/d(D)'); ?>
                </time></li>
            </div>

<?php
             if(!is_search()):
                ?>
            <ul>



                    <li><div class="top-user-thumbnail">
           <?php echo get_avatar(get_the_author_id(), 30); ?>          </div>
                </li>


                <li class="author-vcard">
                <?php the_author_nickname(); ?>
             </li>


            </ul>

             <?php
             endif;
             ?>


                        </ul>
				<h1><?php //the_title(); ?>
				<?php
echo mb_strimwidth($post->post_title, 0, 100, "...");
?></h1>
<!-- <ul class="sns-counts-num">
                <li class="fb-counts-num">
                    <div id="socialarea_facebook_<?php echo $post->ID;?>"><p>F:&nbsp;<span class="count"></span></p></div>
                </li>
                <li class="tw-counts-num">
                    <div id="socialarea_twitter_<?php echo $post->ID;?>"><p>T:&nbsp;<span class="count"></span></p></div>
                </li>
                <li class="hb-counts-num">
                    <div id="socialarea_hatebu_<?php echo $post->ID;?>"><p>H:&nbsp;<span class="count"></span></p></div>
                </li>



        </ul> -->
        <!-- <script type="text/javascript">
        get_social_count_facebook("<?php the_permalink(); ?>", "socialarea_facebook_<?php echo $post->ID;?>");
        get_social_count_twitter("<?php the_permalink(); ?>", "socialarea_twitter_<?php echo $post->ID;?>");
        get_social_count_hatebu("<?php the_permalink(); ?>", "socialarea_hatebu_<?php echo $post->ID;?>");
        </script>
         -->
<span class="<?php $cat = get_the_category(); $cat = $cat[0];echo $cat -> category_nicename; ?>"
   id="balloon-3-top-right">
             <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
             </span>



		    </div>

        </div>

</a>
</article>