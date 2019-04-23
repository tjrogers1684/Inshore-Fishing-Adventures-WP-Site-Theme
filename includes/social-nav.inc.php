<div class="social-contact-nav-wrap-outer">
	<div class="social-contact-nav-wrap">
		<p class="social-contact-contact">Call <?php echo get_theme_mod('fgc_guide_phone_number'); ?> or <a href="/reservations" class="btn book">Book Now</a></p>
		<p class="social-contact-social">
			<?php if( get_theme_mod('fgc_facebook_url') ){ ?>
				<a href="<?php echo get_theme_mod('fgc_facebook_url'); ?>" class="home-header-social-link social-facebook"><i class="fab fa-facebook-square"></i></a>
			<?php } ?>
			<?php if( get_theme_mod('fgc_twitter_handle') ){ ?>
				<a href="https://www.twitter.com/<?php echo get_theme_mod('fgc_twitter_handle'); ?>" class="home-header-social-link social-twitter"><i class="fab fa-twitter-square"></i></a>
			<?php } ?>
			<?php if( get_theme_mod('fgc_instagram_handle') ){ ?>
				<a href="https://www.instagram.com/<?php echo get_theme_mod('fgc_instagram_handle'); ?>" class="home-header-social-link social-instagram"><i class="fab fa-instagram"></i></a>
			<?php } ?>
			<?php if( get_theme_mod('fgc_youtube_url') ){ ?>
				<a href="<?php echo get_theme_mod('fgc_youtube_url'); ?>" class="home-header-social-link social-youtube"><i class="fab fa-youtube"></i></a>
			<?php } ?>
			<?php if( get_theme_mod('fgc_linkedin_url') ){ ?>
				<a href="<?php echo get_theme_mod('fgc_linkedin_url'); ?>" class="home-header-social-link social-linkedin"><i class="fab fa-linkedin"></i></a>
			<?php } ?>
		</p>
	</div><!-- END NAV WRAP -->
</div><!-- END NAV WRAP OUTER -->