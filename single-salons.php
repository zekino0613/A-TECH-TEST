<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>
  <?php 
  get_template_part('template-parts/para-mainvisual'); // header.php をインクルード
  ?> 

  <section id="section-contects" class="single-salons">
    <!-- パンくずリスト -->
    <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav id="breadcrumbs">', '</nav>');
      }
    ?>

    <!-- カスタムフィールド ------------------------------------------------->
    <section class="store-info"> 
      <!-- カスタムフィールド/店舗紹介 -->
      <p><?php echo nl2br(esc_html(get_field('store_textarea'))); ?></p>
    </section>


    <section id= "flow">
      <div class="section-title fade-in">
        <span class="section-title__shadow">Flow</span>
        <h2 class="section-title__main">FLOW</h2>
        <span class="section-title__small">お問い合わせからの流れ</span>
      </div>

      <div class="flow__inner">
        <?php
        //グループ名 'flow_steps' を取得
        $repeater_data = SCF::get('flow_steps');
        if (!empty($repeater_data)) {
            echo '<div class="flow-steps">';

            foreach ($repeater_data as $item) {
                // サブフィールドの値を取得
                $flow_number = isset($item['flow-number']) ? esc_html($item['flow-number']) : '番号未設定';
                $flow_title = isset($item['flow-title']) ? esc_html($item['flow-title']) : '項目未設定';
                $flow_textarea = isset($item['flow-textarea']) ? nl2br(esc_html($item['flow-textarea'])) : '説明未設定';//nl2br()改行コード

                // 出力
                echo '<div class="flow-step">';
                  echo '<p class="flow-step__number"> ' . $flow_number . '</p>';
              
                  echo '<div class="flow-step__column">';
                    echo '<h3 class="flow-step__column--title"> ' . $flow_title . '</h3>';
                    echo '<p class="flow-step__column--text"> ' . $flow_textarea . '</p>';
                  echo '</div>';
                echo '</div>';
            }

            echo '</div>';
          } else {
            echo '<p>データが見つかりません。</p>';
        } 
        ?>    

        <div class="flow-images">
          <?php
          $flow_image_1 = get_field('flow_image_1');
          $flow_image_2 = get_field('flow_image_2');
          $flow_image_3 = get_field('flow_image_3');
          ?>
          <div class="flow_image_1">
              <?php if ($flow_image_1) : ?>
                  <?php echo wp_get_attachment_image($flow_image_1, 'full'); ?>
              <?php endif; ?>
          </div>
          <div class="flow_image_2">
              <?php if ($flow_image_2) : ?>
                  <?php echo wp_get_attachment_image($flow_image_2, 'full'); ?>
              <?php endif; ?>
          </div>
          <div class="flow_image_3">
              <?php if ($flow_image_3) : ?>
                  <?php echo wp_get_attachment_image($flow_image_3, 'full'); ?>
              <?php endif; ?>
          </div>
        </div>
      </div><!-- /.flow__inner -->
    </section>

    <section id="staff">
      <div class="staff-flex">
        <div class="staff-flex__staff_image">
          <?php $staff_image = get_field('staff_image'); ?>
          <?php if ($staff_image) : ?>
              <?php echo wp_get_attachment_image($staff_image, 'full'); ?>
          <?php else : ?>
              <p>スタッフの写真が設定されていません。</p>
          <?php endif; ?>
        </div>

        <div class="staff-flex__textarea">
          <h2>staff <span>スタッフから挨拶</span></h2>

          <p class="staff-flex__textarea--staff_message"><?php echo nl2br(esc_html(get_field('staff_message'))); ?></p>

          <p class="staff-flex__textarea--staff_name_english"><?php echo esc_html(get_field('staff_name_english')); ?>
            <span class="staff_name_japan"><?php echo esc_html(get_field('staff_name_japan')); ?></span>
          </p>
        </div><!-- /.staff-flex__textarea -->
      </div><!-- /.staff-flex -->  
    </section>

    <section id="contact-info">
      <div class="contact-info-flex">
        <div class="contact-info-flex__text">
          <div class="contact-info-flex__text--flex">
            <strong>店舗名</strong>
            <p>VALENTINE ROSE <?php echo esc_html(get_field('store_name')); ?></p>
          </div>
          <div class="contact-info-flex__text--flex">
            <strong>住所</strong>
            <p><?php echo esc_html(get_field('address')); ?></p>
          </div>
          <div class="contact-info-flex__text--flex">
            <strong>電話番号</strong> 
            <p><?php echo esc_html(get_field('phone')); ?></p>
          </div>
        </div><!-- /contact-info-flex__text -->

        <div class="contact-info-flex__map">
        <div id="map-container">
          <div id="map">
            <?php
              get_template_part('template-parts/google-map'); // footer.php をインクルード
            ?>
          </div>
        </div>
          
        </div>
      </div><!-- /.contact-info-flex -->  
    </section>


    <section id="archive-salons-link">
      <a class="btn" href="<?php echo get_post_type_archive_link('salons'); ?>">店舗一覧へ</a>
    </section>







</main>
<?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>  
</body>       