<?php get_header();?>

<!-- ABOUT US -->

<div class="divPageAboutUs">
    <div class="aboutImg">
		<div class="divAboutImgBack">
			<div id="aboutImgBack">
				<img  src="<?php the_field('back_image'); ?>" />
			</div>
			<div id="aboutImgFront">
				<img src="<?php the_field('front_image'); ?>" />
			</div>
		</div>
        
    </div>
	<!--<div style="width: 100%; height: 200px; background-color: blue;">
	
	</div>-->
	

    <div class="aboutText">
        <h3 style="margin: 0;"><?php the_field('titulo'); ?></h3>
        <h5 style="margin: 35px 0 0 0;"><?php the_field('sub_titulo'); ?></h5>
        <p style="margin: 40px 0 0 0;"><?php the_field('texto1'); ?></p>

        <p><?php the_field('texto2');?></p>
    </div>
    
</div>




<!-- SERVICE -->

<div style="height: 680px; background-color: rgb(65, 94, 98)">
	<ul>
		<?php
		define( 'WP_USE_THEMES', false );
		include('esenergy/wp-load.php'); // Blog path
		function recentPosts() {
			$rPosts = new WP_Query();
			$rPosts->query('showposts=1');
				while ($rPosts->have_posts()) : $rPosts->the_post(); ?>
					<li>
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('recent-thumbnails'); ?></a>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
					</li>   
				<?php endwhile; 
			wp_reset_query();
		}
		?>
	</ul>
	<?php echo recentPosts(); ?>
</div>

<!-- WORK -->

<div class="divPagePar">
WORK
</div>

<!-- TEAM -->

<div style="height: 680px; background-color: rgb(26, 106, 123)">
TEAM
</div>

<!-- JOIN US -->

<div class="divPagePar">
JOIN US
</div>

<!-- BLOG -->

<div style="height: 680px; background-color: rgb(202, 76, 76)">
BLOG
</div>

<!-- PRODUCTS -->

<div class="divPagePar">
PRODUCTS
</div>

<!-- CONTACT US -->

<div class="divPagePar">
CONTACT US
</div>

<?php get_footer(); ?>