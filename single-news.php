<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>
  <?php 
    get_template_part('template-parts/para-mainvisual'); // header.php をインクルード
  ?> 


  <section id="section-contects" class="single-news">
    <!-- パンくずリスト -->
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav id="breadcrumbs">', '</nav>');
    }
    ?>

    <section id="news-single">
      <div class="content-wrapper">
        <div class="content-wrapper__inner">
          <article class="news-detail">
            <!-- 記事タイトル -->
            <header class="news-header fade-in">
              <h1 class="news-header__title"><?php the_title(); ?></h1>
              <div class= "news-header__flex">
                <p class="news-header__flex--category"><?php the_category(', '); ?></p>
                <time class= "news-header__flex--date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              </div>
            </header>


            <!-- アイキャッチ画像 -->
            <div class="news-image fade-in">
              <?php
              // カスタムフィールドからPC用とSP用画像のIDを取得
              $eyecatch_image_pc = get_field('eyecatch_image_pc'); // PC用画像フィールド
              $eyecatch_image_sp = get_field('eyecatch_image_sp'); // SP用画像フィールド

              // URLを取得
              $image_url_pc = !empty($eyecatch_image_pc) ? wp_get_attachment_image_url($eyecatch_image_pc, 'full') : null; // PC用画像URL
              $image_url_sp = !empty($eyecatch_image_sp) ? wp_get_attachment_image_url($eyecatch_image_sp, 'full') : null; // SP用画像URL

              // 画像出力
              if ($image_url_pc || $image_url_sp) {
                  echo '<picture>';
                  if ($image_url_sp) {
                      echo '<source media="(max-width: 768px)" srcset="' . esc_url($image_url_sp) . '">'; // SP画像 (スマートフォン)
                  }
                  if ($image_url_pc) {
                      echo '<img loading="lazy" src="' . esc_url($image_url_pc) . '" alt="' . esc_attr(get_the_title()) . '">'; // PC画像 (デスクトップ)
                  } else {
                      // SP画像のみがある場合のフォールバック
                      echo '<img loading="lazy" src="' . esc_url($image_url_sp) . '" alt="' . esc_attr(get_the_title()) . '">';
                  }
                  echo '</picture>';
              } else {
                  // 両方の画像がない場合はダミー画像を表示
                  echo '<img loading="lazy" src="' . get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/no-image.jpg" alt="No Image">';
              }
              ?>
            </div>


            <!-- 記事の紹介文 -->
            <div class="news-introduction fade-in">
                <p><?php echo esc_html(get_field('introduction_text')); ?></p>
            </div>

            <!-- 小見出しと段落内容 -->
            <div class="news-content">
                <?php
                // リピートフィールドを取得
                $repeater_data = SCF::get('subheading_content'); // リピートフィールドのグループ名
                if (!empty($repeater_data)) {
                    foreach ($repeater_data as $item) {
                        // 小見出しと段落内容を取得
                        $subheading = isset($item['subheading']) ? esc_html($item['subheading']) : '小見出し未設定';
                        $paragraph_content = isset($item['paragraph_content']) ? nl2br(esc_html($item['paragraph_content'])) : '段落内容未設定';

                        // 出力
                        echo '<div class="news-section ">';
                        echo '<h2 class="news-section__subheading fade-in">' . $subheading . '</h2>';
                        echo '<p class="news-section__paragraph fade-in">' . $paragraph_content . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>コンテンツが設定されていません。</p>';
                }
                ?>
            </div>

            <!-- 戻るボタン -->
            <div class="btn fade-in">
                <a href="<?php echo get_post_type_archive_link('news'); ?>" class="back-button">お知らせ一覧へ</a>
            </div>
          </article>
        </div><!-- /.content-wrapper__inner -->           
        
          <!-- サイドバー -->
          <aside class="sidebar">
            <h2 class="sidebar__category-title fade-in">Category</h2>
            <ul class="sidebar__category-list fade-in">
            <!-- すべての投稿リンク -->
            <li><a href="<?php echo get_post_type_archive_link('news'); ?>">すべて</a></li>

            <!-- 各カテゴリーのリンク -->
            <?php
            $categories = get_categories([
                'taxonomy' => 'category', // タクソノミーを指定
                'orderby' => 'name', // 名前順で並び替え
                'order' => 'ASC', // 昇順
            ]);
            foreach ($categories as $category) {
                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">';
                echo esc_html($category->name);
                echo '</a></li>';
            }
            ?>
            </ul>
          </aside>
      </div>
    </section>
  </section>

</main>



  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>  
</body>       