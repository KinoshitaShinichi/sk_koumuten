<?php get_header();?>

  <div class="contents">
    <div class="works">
      <div class="h1">
        <h1>施工実例</h1>
      </div>

      <div class="work_pics">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="home">
        <a href="<?php the_permalink(); ?>"><p><?php the_title( ); ?></p></a>
          <a href="<?php the_permalink(); ?>"><img src=" <?php the_post_thumbnail_url();?>" alt=""></a>
        </div>

      </div>    
    </div>
  </div>

    <?php endwhile;endif; ?>




  <?php get_footer(); ?>


  <!-- <div class="work_pics">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="home">
    <p>おしゃれな家</p>
    <a href="case1.html"><img src=" <?php echo get_template_directory_uri(); ?>/img/home1.jpg" alt=""></a>
  </div>
  <div class="home">
    <p>ポピュラーな家</p>
    <a href="case2.html"><img src=" <?php echo get_template_directory_uri(); ?>/img/home2.jpg" alt=""></a>
  </div>
  <div class="home">
    <p>駐車場が多い家</p>
    <a href="case3.html"><img src=" <?php echo get_template_directory_uri(); ?>/img/home3.jpg" alt=""></a>
  </div>

</div>
<div class="work_pics">

  <div class="home">
    <p>○○の家</p>
    <a href="case4.html"><img src=" <?php echo get_template_directory_uri(); ?>/img/home1.jpg" alt=""></a>
  </div>
  <div class="home">
    <p>○○の家</p>
    <a href="case5.html"> <img src=" <?php echo get_template_directory_uri(); ?>/img/home2.jpg" alt=""></a>
  </div>
  <div class="home">
    <p>○○の家</p>
    <a href="case6.html"><img src=" <?php echo get_template_directory_uri(); ?>/img/home3.jpg" alt=""></a>
  </div>
</div>     
</div>
</div>

<?php endwhile;endif; ?> -->