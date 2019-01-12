<?php
/**
 * Block Name: Form
 *
 * This is the template that displays the form block.
 */

$heading = get_field('heading');
$subheading = get_field('subheading');

?>
<section>
	<div class="form_section" id="form">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="price_header text-center">
						<h2 class="section_heading"><?php echo $heading; ?></h2>
						<p><?php echo $subheading; ?></p>
						<div class="title_dot"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php if( have_rows('contacts') ): ?>
				<div class="col-lg-5 col-md-6 equal">
					<div class="contact_box">
					<?php while( have_rows('contacts') ): the_row(); 
						// vars
						$heading = get_sub_field('heading');
						$editor = get_sub_field('editor');
					?>
						<div class="contact_item">
							<h3><?php echo $heading; ?></h3>
							<?php echo $editor; ?>
						</div>
					<?php endwhile; ?>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-lg-5 col-md-6 equal">     
					<div class="formcontact_box">
						<form id="formcontact" action="#" method="post" class="formcontact needs-validation" novalidate="">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="Name" required>
										<div class="invalid-feedback">
												Type your name
										</div>
								</div>
								<div class="col-lg-9 col-10">
										<input type="email" class="form-control" id="useremail" name="useremail" placeholder="Email" required>
										<div class="invalid-feedback">
												Type your e-mail.
										</div>
								</div>
								<div class="col-lg-9 col-10">
										<input type="tel" class="form-control" id="usersubject" name="usertel" placeholder="Subject" required>
										<div class="invalid-feedback">
												The topic of your question
										</div>
								</div>
								<div class="col-lg-9 col-10">
										<textarea class="form-control usertext" name="usertext" id="usertext" rows="5" maxlength="600" placeholder="Message" required></textarea>
										<div class="invalid-feedback">
												Describe your question here
										</div>
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