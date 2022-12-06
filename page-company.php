<?php get_header();?>



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="h1">
        <h1>会社案内</h1>
      </div>


      <div class="president">
        <div class="flex">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/president.jpg" alt="住宅建設">
          </div>
          <div class="text">
            <h2>ごあいさつ</h2>
            <p class="TextTyping">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <!-- <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p> -->
            <p>代表取締役社  ○○○○</p>
          </div>
        </div>
      </div>


      
      <div class="company">
        <h2>会社概要</h2>
        <div class="detail">
          <dl>
            <dt>会社名</dt>
            <dd>株式会社 ○○工務店</dd>
          </dl>
          <dl>
            <dt>代表者名</dt>
            <dd>代表取締役社長 ○○○○</dd>
          </dl>
          <dl>
            <dt>所在地</dt>
            <dd>〒000-0000 ○○県○○町１００－１００－１００</dd>
          </dl>
          <dl>
            <dt>連絡先</dt>
            <dd>tel: 000-0000-0000<br>
              mail: xxx@xxxxxx.jp<br>
              営業時間: 10:00～19:00
            </dd>
          </dl>
          <dl>
            <dt>資本金</dt>
            <dd>○○万円</dd>
          </dl>
          <dl>
            <dt>取引銀行</dt>
            <dd>・○○銀行 ・○○信用金庫 ・○○銀行 ・○○信用金庫 ・○○銀行 ・○○信用金庫</dd>
          </dl>
          <dl>
            <dt>取引先企業名</dt>
            <dd>・○○株式会社 ・○○株式会社 ・○○株式会社 ・○○株式会社 ・○○株式会社</dd>
          </dl>
          <dl>
            <dt>設立年月</dt>
            <dd>平成○○年〇月</dd>
          </dl>

        </div>
      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13015.194724951632!2d138.71860862296813!3d35.36064218369488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6019629a42fdc899%3A0xa6a1fcc916f3a4df!2z5a-M5aOr5bGx!5e0!3m2!1sja!2sjp!4v1643505833946!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>


    <?php endwhile;endif; ?>




  <?php get_footer(); ?>