<?php
/**
 * @package Space-Rocket
 */
?>
<!-- Begin content-front-page -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">We Make the Perfect Team.</h1>
            <p>
            Your website is the employee that never sleeps. Ignite your business with our performance enhanced web design and development. 
            </p> 
    </header><!-- .entry-header -->

	<div class="entry-content">
        <div class="hero-unit">
        		    <div id="myCarousel" class="carousel slide">
                    <img id="carousel-frame" src="<?php bloginfo('template_url'); ?>/assets/img/slideshow_bg.png">
            
            <!-- Carousel items -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
            <div class="carousel-inner">
            <div class="active item"><img alt="" src="<?php bloginfo('template_url'); ?>/assets/img/slideshow/homepage.jpg"></div>
            <div class="item"><img alt="" src="<?php bloginfo('template_url'); ?>/assets/img/slideshow/homepage.jpg"></div>
            <div class="item"><img alt="" src="<?php bloginfo('template_url'); ?>/assets/img/slideshow/homepage.jpg"></div>
            </div>
            <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>

            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
        </div><!-- .hero-unit -->
    </div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<!-- End content-front-page.php
 -->