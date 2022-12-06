<?php get_header();?>



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="mainvisual">
      <div class="h1">
        <h1>業務内容</h1>
      </div>
      <ul class="slider">
        <li class="slider-item slider-item01"><img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.png" alt="メインビジュアル"></li>
        <li class="slider-item slider-item02"><img src="<?php echo get_template_directory_uri(); ?>/img/main2.jpg" alt="メインビジュアル"></li>
        <li class="slider-item slider-item03"><img src="<?php echo get_template_directory_uri(); ?>/img/main3.jpg" alt="メインビジュアル"></li>
        </ul>
    </div>

    <div class="business">
      <div class="business_tagall">
          <a href="#construction" class="btn bgleft"><span>住宅建設</span></a>
          <a href="#reform" class="btn bgleft"><span>住宅改装・リフォーム</span></a>
          <a href="#roof" class="btn bgleft"><span>外壁・屋根修繕</span></a>
          <a href="#water" class="btn bgleft"><span>水回り・水道工事</span></a>


          <!-- <div class="b1"><a href="#construction"><p>住宅建設</p></a></div>
          <div class="b1"><a href="#reform"><p>住宅改装・リフォーム</p></a></div>
          <div class="b1"><a href="#roof"><p>外壁・屋根修繕</p></a></div>
          <div class="b1"><a href="#water"><p>水回り・水道工事</p></a></div> -->
          
        
      </div>
    </div>

    <div class="section">
      <div id="construction">
        <h2>住宅建設</h2>
        <div class="flex">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/construction.jpg" alt="住宅建設">
          </div>
          <div class="text">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </div>
      </div>



      <div id="reform">
        <h2>住宅改装・リフォーム</h2>
        <div class="flex2">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reform.jpeg" alt="リフォーム">
          </div>
          <div class="text">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </div>
      </div>



      <div id="roof">
        <h2>外壁・屋根修繕</h2>
        <div class="flex">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/roof.jpeg" alt="屋根">
          </div>
          <div class="text">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </div>
      </div>


      <div id="water">
        <h2>水回り・水道工事</h2>
        <div class="flex2">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/water.jpg" alt="水道水回り">
          </div>
          <div class="text">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </div>
      </div>

    </div>

    <?php endwhile;endif; ?>




  <?php get_footer(); ?>