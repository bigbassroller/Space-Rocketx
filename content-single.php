<?php
/**
 * @package Space-Rocket
 */
?>
<!-- Begin content-single.php -->
<article id="post" <?php post_class(); ?>>
	
	<header class="entry-header">
		<h1 class="blog-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'space_rocket' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

<div class="share">

	<ul>
	<li class="share-fb">
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-colorscheme="dark"></div>
	</li>
	<li class="share-tw">
<a href="https://twitter.com/share" class="twitter-share-button" data-via="bigbassroller">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>	
	</li>
	<li class="share-g">
		<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share" data-annotation="bubble"></div>

<!-- Place this tag after the last share tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
	</li>
	<li class="share-ln">
<script src="//platform.linkedin.com/in.js" type="text/javascript">
 lang: en_US
</script>
<script type="IN/Share" data-counter="right"></script>
	</li>
	</ul>
		

</div>
<!-- End Share -->
		<?php if ( 'post' == get_post_type() ) : ?>
		<p class="entry-meta">
			<?php space_rocket_posted_on(); ?>
		</p><!-- .entry-meta -->
		<?php endif; ?>
		

		
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="sep"> | </span>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'space_rocket' ), __( '1 Comment', 'space_rocket' ), __( '% Comments', 'space_rocket' ) ); ?></span>
		<?php endif; ?>
	</header><!-- .entry-header -->
<?php if ( has_post_thumbnail() ) : ?>
<div class="full-img-wrap">
	<?php the_post_thumbnail(); ?>
</div>
	<?php endif; ?>
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'space_rocket' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'space_rocket' ), 'after' => '</div>' ) ); ?>

	</div><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-## -->
<div class="blog-dotted-line"></div>
<div class="blog-dotted-line"></div>
<!-- End content-single.php -->


<!--BEGIN .author-bio-->
<div class="about-author">
			<?php echo get_avatar( get_the_author_meta('email'), '90' ); ?>
<div class="author-info">
<h4 class="author-title">About <?php the_author_link(); ?></h4>
<p class="author-description"><?php the_author_meta('description'); ?>

<ul class="icons">
					<?php
						$rss_url = get_the_author_meta( 'rss_url' );
						if ( $rss_url && $rss_url != '' ) {
							echo '
<li class="rss"><a href="' . esc_url($rss_url) . '"></a></li>
';
						}
						$google_profile = get_the_author_meta( 'google_profile' );
						if ( $google_profile && $google_profile != '' ) {
							echo '
<li class="google"><a href="' . esc_url($google_profile) . '" rel="author"></a></li>
';
						}
						$twitter_profile = get_the_author_meta( 'twitter_profile' );
						if ( $twitter_profile && $twitter_profile != '' ) {
							echo '
<li class="twitter"><a href="' . esc_url($twitter_profile) . '"</a></li>
';
						}
						$facebook_profile = get_the_author_meta( 'facebook_profile' );
						if ( $facebook_profile && $facebook_profile != '' ) {
							echo '
<li class="facebook"><a href="' . esc_url($facebook_profile) . '"></a></li>
';
						}
						$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
						if ( $linkedin_profile && $linkedin_profile != '' ) {
							echo '
<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"></a></li>
';
						}
					?>
				</ul>
</div>
<!--END .author-bio-->
<div class="blog-dotted-line"></div>
<div class="blog-dotted-line"></div>

