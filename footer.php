	</div><!-- #content -->
	<footer>
		<div class="container">
		<div class="row">
		<div class="col-md-6">
			<div class="footer_social_block">
			<a href="<?php the_field('facebook_link', 'theme_settings'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
			<a href="<?php the_field('instagram_link', 'theme_settings'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="<?php the_field('twitter_link', 'theme_settings'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="<?php the_field('youtube_link', 'theme_settings'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="copyright_block text-lg-right">
			<p><a href="<?php echo get_field('footer_link', 'theme_settings')[url]; ?>" target="<?php echo get_field('footer_link', 'theme_settings')[target]; ?>"><?php echo get_field('footer_link', 'theme_settings')[title]; ?>&nbsp;</a><?php the_field('copyright', 'theme_settings'); ?></p>
			</div>
		</div>
		</div>
		</div>
	</footer>
	<div class="backtotop_button"></div>

<!-- Modal -->
<div class="modal fade" id="success_banner" tabindex="-1" role="dialog" aria-labelledby="success_banner_label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5 class="text-center">Your message has been sent</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<?php wp_footer(); ?>
	</body>
</html>