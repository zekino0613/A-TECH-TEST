
<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>
  <?php 
  get_template_part('template-parts/para-mainvisual'); // header.php をインクルード
  ?> 


  <section id="section-contects" class="archive-salons">
    <!-- パンくずリスト -->
    <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav id="breadcrumbs">', '</nav>');
      }
    ?>


<section id="prefecture-category">
    <ul>
        <?php
        $unique_prefectures = get_unique_prefectures();
        if (!empty($unique_prefectures)) {
            foreach ($unique_prefectures as $prefecture) {
                $romaji = prefecture_to_romaji($prefecture); // ローマ字変換関数を使用
                echo '<li><a href="#' . sanitize_title($romaji) . '">' . esc_html($romaji) . ' (' . esc_html($prefecture) . ')</a></li>';
            }
        } else {
            echo '<li>登録された都道府県がありません。</li>';
        }
        ?>
    </ul>
</section>














<section id="prefecture-stores">
    <?php
    // 都道府県ごとに店舗を取得
    $stores_by_prefecture = get_stores_by_prefecture();

    foreach ($stores_by_prefecture as $prefecture => $stores) {
        $romaji = prefecture_to_romaji($prefecture); // ローマ字変換関数
        echo '<div id="' . sanitize_title($romaji) . '" class="prefecture-section">';
        echo '<h2>' . esc_html($romaji) . ' (' . esc_html($prefecture) . ')</h2>';

        echo '<div class="store-cards">';
        foreach ($stores as $store) {
            echo '<a href="' . esc_url(get_permalink($store['id'])) . '" class="store-card">'; // 投稿IDを使ってリンク生成
            echo '<div class="store-card__content">';
            echo '<h3>' . esc_html($store['title']) . '</h3>';
            echo '<p>' . esc_html($store['address']) . '</p>';
            echo '<div class="map-container">';
            
            // テンプレートパーツで地図を表示
            $address = $store['address'];
            include locate_template('template-parts/google-map.php');

            echo '</div>'; // .map-container
            echo '</div>'; // .store-card__content
            echo '</a>'; // .store-card
        }
        echo '</div>'; // .store-cards
        echo '</div>'; // .prefecture-section
    }
    ?>
</section>














    </section>
  </main>
  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>  
</body>       