<?php get_header();?>

<!-- ABOUT US -->

<div class="divPageAboutUs">
    <div class="aboutImg">
        <div class="divAboutImgBack">
            <img  src="<?php the_field('back_image'); ?>" id="aboutImgBack"/>
        </div>
        
    </div>

    <div class="aboutText">
        <h3 style="margin: 0;"><?php the_field('titulo'); ?></h3>
        <h5 style="margin: 35px 0 0 0;"><?php the_field('sub_titulo'); ?></h5>
        <p style="margin: 40px 0 0 0;;"><?php the_field('texto1'); ?></p>

        <p><?php the_field('texto2');?></p>
    </div>
    
</div>




<!-- SERVICE -->

<div style="height: 680px; background-color: rgb(65, 94, 98)">
SERVICE
class_alias<h3>Awesome Ideasa creative agencyfrom earth</h3>
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