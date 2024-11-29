<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>
  <?php 
    get_template_part('template-parts/para-mainvisual'); // header.php をインクルード
  ?> 


  <section id="section-contects" class="archive-news">
    <!-- パンくずリスト -->
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav id="breadcrumbs">', '</nav>');
    }
    ?>


    <div class="news-flex-contents">
      <div class="news-flex-contents__news-item">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        
      
        
        

        // カテゴリーフィルタの取得
        $category_name = (get_query_var('category_name')) ? get_query_var('category_name') : '';

        // WP_Query 設定
        $args = [
            'post_type' => 'news',          // カスタム投稿タイプ
            'posts_per_page' => 9,          // 1ページあたりの投稿数
            'paged' => $paged,              // ページネーション対応
            'category_name' => $category_name, // URLパラメーターから取得したカテゴリー
        ];

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
              ?>
              
              <a href="<?php the_permalink(); ?>" class="news-flex-contents__news-item--post fade-in">
                <div class="item-flex">
                  <time class= "date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  <h2><?php the_title(); ?></h2>
                </div><!-- /item-flex -->

                <?php
                  $categories = get_the_category(); // 投稿に関連付けられた全てのカテゴリーを取得
                  if (!empty($categories)) {
                      echo '<span class="category">';
                      echo esc_html($categories[0]->slug); // 最初のカテゴリーのスラッグを表示
                      echo '</span>';
                  } else {
                      // カテゴリーがない場合
                      echo '<span class="post-category">未分類</span>';
                  }
                ?>
              </a>  
            <?php
            endwhile;

            // ページネーション
            echo '<div class="pagination fade-in">';
            echo paginate_links([
                'total' => $the_query->max_num_pages,
                'current' => $paged,
                'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
                'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
            ]);
            echo '</div>';

        else :
            echo '<p>投稿が見つかりませんでした。</p>';
        endif;

        // クエリをリセット
        wp_reset_postdata();
        ?>
      </div>


      <aside class="news-flex-contents__sidebar fade-in">
        <h2 class="news-flex-contents__sidebar--category-title">Category</h2>
        <ul class="news-flex-contents__sidebar--category-list">
          <!-- すべての投稿リンク -->
          <li><a href="<?php echo get_post_type_archive_link('news'); ?>">すべて</a></li>

          <!-- カスタム順序でカテゴリーリストを出力 -->
          <?php
        // カスタム順序を定義
        $custom_order = ['campaign', 'news', 'column']; // カテゴリースラッグを順番通り指定
        $categories = get_categories(['taxonomy' => 'category']);

        // 並び替え
        usort($categories, function ($a, $b) use ($custom_order) {
            $pos_a = array_search($a->slug, $custom_order);
            $pos_b = array_search($b->slug, $custom_order);
            return $pos_a - $pos_b;
        });

        // 並び替えたカテゴリーを出力
        foreach ($categories as $category) {
            echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">';
            echo esc_html($category->name);
            echo '</a></li>';
        }
        ?>
        </ul>
      </aside>
    </div><!-- /news-flex-contents -->
  </section>
</main>



  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>  
</body>       