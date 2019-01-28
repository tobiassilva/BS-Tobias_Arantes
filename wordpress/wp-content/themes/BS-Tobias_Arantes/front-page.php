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
        <h3><?php the_field('abouttitulo'); ?></h3>
        <h5><?php the_field('about_sub_titulo'); ?></h5>
        <p><?php the_field('about_texto1'); ?></p>

        <p><?php the_field('about_texto2');?></p>
    </div>
    
</div>




<!-- SERVICE -->

<div class="divPageService" class="fontColor">
	
	
		
	<div class="serviceGrande">
		<div class="serviceImg" style="padding-right: 25px;">
			<img src="<?php the_field('service_image') ?>"/>
		</div>
		
		<div class="serviceText">
			<?php
				global $post;
				$args = array( 'posts_per_page' => 1 );
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
					
					<h3 class="tituloSecao"><?php the_title(); ?></h3>
					
					<div style="width: 60%;float: right;">
						<h5 class="subTituloSecao"><?php the_content(); ?> </h5>
					</div>
				
			<?php endforeach; 
			wp_reset_postdata(); ?>
			
			<div style="float: right;display: flex;margin-top: 30px;padding-left: 25px;">
				
				<div class="serviceTextoIcon">
					<h6 class="tituloSecao"><?php the_field('service_tituloicon1') ?></h6>
					<p class="subTituloSecao" style="margin: 5px 0 0 0 !important;"><?php the_field('service_textoicon1') ?></p>
				</div>
				<img src="<?php the_field('service_icon1')?>" style="width: 75px;height: 75px; border-radius: 50%;display: inline-block;"/>
			</div>
			<div style="float: right;display: flex;margin-top: 30px;padding-left: 25px;">
				
				<div class="serviceTextoIcon">
					<h6 class="tituloSecao"><?php the_field('service_tituloicon2') ?></h6>
					<p class="subTituloSecao" style="margin: 5px 0 0 0 !important;"><?php the_field('service_textoicon2') ?></p>
				</div>
				<img src="<?php the_field('service_icon2')?>" style="width: 75px;height: 75px; border-radius: 50%;display: inline-block;"/>
			</div>
			
		</div>
	</div>
	
	
	<div class="servicePequeno">
		<div class="serviceText">
			<?php
				global $post;
				$args = array( 'posts_per_page' => 1 );
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
				
					<h3 class="tituloSecao"><?php the_title(); ?></h3>
					
					<h5 class="subTituloSecao"><?php the_content(); ?> </h5>
				
				
			<?php endforeach; 
			wp_reset_postdata(); ?>
			
			<div style="display: flex;margin-top: 30px;">
				
				<div class="serviceTextoIcon">
					<h6 class="tituloSecao"><?php the_field('service_tituloicon1') ?></h6>
					<p class="subTituloSecao" style="margin: 5px 0 0 0 !important;"><?php the_field('service_textoicon1') ?></p>
				</div>
				<img src="<?php the_field('service_icon1')?>" style="width: 75px;height: 75px; border-radius: 50%;display: inline-block;"/>
			</div>
			
			<div style="display: flex;margin-top: 30px;">
				
				<div class="serviceTextoIcon">
					<h6 class="tituloSecao"><?php the_field('service_tituloicon2') ?></h6>
					<p class="subTituloSecao" style="margin: 5px 0 0 0 !important;"><?php the_field('service_textoicon2') ?></p>
				</div>
				<img src="<?php the_field('service_icon2')?>" style="width: 75px;height: 75px; border-radius: 50%;display: inline-block;"/>
			</div>
		</div>
		
		<div class="serviceImg">
			<img src="<?php the_field('service_image') ?>"/>
		</div>
	</div>
	
	
</div>

<!-- WORK -->

<div class="divPageOurWorks">
    <div class="worksImg">
		<div class="divWorksImg">
			<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '159' ); } ?>
			
		</div>
        
    </div>
	<!--<div style="width: 100%; height: 200px; background-color: blue;">
	
	</div>-->
	

    <div class="workText">
        <h3><?php the_field('works_titulo'); ?></h3>
        <h5><?php the_field('works_subtitulo'); ?></h5>
        <p><?php the_field('works_texto'); ?></p>

		<a target="_blank" href="<?php the_field('works_url_botao');?>">
			<button class="botao botao_orange botao_margem"><?php the_field('works_texto_botao');?></button>
		</a>
    </div>
    
</div>

<!-- TEAM -->

<div class="divPageTeam">
	<div class="teamImg">
		<div class="divTeamImg">
			<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '178' ); } ?>
			
		</div>
        
    </div>
	<!--<div style="width: 100%; height: 200px; background-color: blue;">
	
	</div>-->
	

    <div class="teamText">
        <h3 class="tituloSecao"><?php the_field('team_titulo'); ?></h3>
        <h5 class="subTituloSecao"><?php the_field('team_sub_titulo'); ?></h5>
        <p class="subTituloSecao"><?php the_field('team_texto'); ?></p>

		<a target="_blank" href="<?php the_field('team_url_botao');?>">
			<button class="botao botao_orange botao_margem"><?php the_field('team_texto_botao');?></button>
		</a>
    </div>
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