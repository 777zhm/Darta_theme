<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section>
  <div class="history_section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img class="img img-fluid monitor_mockap" src="<?php echo get_template_directory_uri().'/assets/img/monitor_mockap.png'?>" alt="monitor_mockap">
        </div>
        <div class="col-md-7">
          <h2 class="section_heading left_red_border">Our history</h2>
          <div class="history_text">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ip sum has been the industry's standard dummy text ever since the 1500s, when an unk- nown printer took a galley of type and scrambled it to make a type specimen book. </p>
          <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <button class="button first_button">Browse our work</button>
        </div>
      </div>
    </div>
  </div>
</section>

      <?php endwhile; else : ?>

        404

      <?php endif; ?>

      <p>Template: single.php</p>

    </main>

  </div>

<?php get_footer(); ?>