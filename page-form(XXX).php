<?php get_header();?>



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="h1">
        <h1>お問い合わせ</h1>
      </div>

      <div class="form">
        <ul class="flex delayScroll">
          <li class="box"><div class="form-item">
            <label class="form-item-label" for="a"><span class="form-item-label-required">※必須</span>氏名(カタカナ)</label>
            <input type="text" class="form-item-input" id="a" placeholder="例）ヤマダイチロウ">
          </div></li>
          <li class="box"> <div class="form-item">
            <label class="form-item-label" for="b"><span class="form-item-label-required">※必須</span>メールアドレス</label>
            <input type="email" class="form-item-input" id="b" placeholder="例）example@gmail.com">
          </div></li>

          <li class="box"> <div class="form-item">
            <label class="form-item-label" for="c"><p>電話番号</p></label>
            <input type="text" class="form-item-input" id="c" placeholder="例）000-0000-0000">
          </div></li>

          <li class="box"> <div class="form-item">
            <label class="form-item-label" for="d"><p>会社名</p></label>
            <input type="text" class="form-item-input" id="d" placeholder="例）株式会社〇〇">
          </div></li>

          <li class="box">  <div class="form-item">
            <label class="form-item-label isMsg" for="e"><span class="form-item-label-required">※必須</span>お問い合わせ内容</label>
            <textarea class="form-item-textarea" id="e"></textarea>
          </div></li>

          </ul>

          <input type="submit" class="form-btn" value="送信する">
      </div>


    <?php endwhile;endif; ?>




  <?php get_footer(); ?>