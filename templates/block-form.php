<section>
	<div class="form_section" id="form">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="price_header text-center">
						<h2 class="section_heading"><?php the_field('heading'); ?></h2>
						<p><?php the_field('subheading'); ?></p>
						<div class="title_dot"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php if( have_rows('contacts') ): ?>
				<div class="col-lg-5 col-md-6 equal">
					<div class="contact_box">
					<?php while( have_rows('contacts') ): the_row(); ?>
						<div class="contact_item">
							<h3><?php the_sub_field('heading'); ?></h3>
							<?php the_sub_field('editor'); ?>
						</div>
					<?php endwhile; ?>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-lg-5 col-md-6 equal">     
					<div class="contact_form_box">
						<form id="contact_form" action="" method="post" class="contact_form">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-10">
									<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name" required>
								</div>
								<div class="col-lg-9 col-10">
									<input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" required>
								</div>
								<div class="col-lg-9 col-10">
									<textarea class="form-control user_message" name="user_message" id="user_message" rows="5" maxlength="600" placeholder="Message" required></textarea>
									<?php global $wp; ?>
									<input type="hidden"  name="current_page_link" value="<?php echo home_url( $wp->request ); ?>">
								</div>
								<div class="col-lg-9 col-10">
									<button type="submit" class="button first_button">Send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>