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

  </section>



  <?php
get_header(); ?>

<main id="news-archive">
    <div class="content-wrapper">
        <aside class="sidebar">
            <h2 class="category-title">Category</h2>
            <ul class="category-list">
                <li><a href="<?php echo get_post_type_archive_link('news'); ?>">すべて</a></li>
                <?php
                // カテゴリーリストを取得
                $categories = get_categories(['taxonomy' => 'category']);
                foreach ($categories as $category) {
                    echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                }
                ?>
            </ul>
        </aside>

        <section class="news-list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="news-item">
                        <a href="<?php the_permalink(); ?>">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                            <h3 class="news-title"><?php the_title(); ?></h3>
                        </a>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>記事がありません。</p>
            <?php endif; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>

  



  <div class="news-postlist">
      <?php
      // 明示的にカスタムクエリを設定
      $query = new WP_Query(array(
          'post_type' => 'news', // カスタム投稿タイプ 'news'
          'posts_per_page' => 9, // 1ページあたりの投稿数
          'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // ページネーション対応
          'order' => 'DESC'
      ));

      if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
      ?>
              <a href="<?php the_permalink(); ?>">
                  <div class="news-post">
                      <div class="custom-field">
                          <time class="custom-field__post-date">
                              <?php
                              $custom_date = get_field('date');
                              echo esc_html($custom_date ? $custom_date : get_the_date());
                              ?>
                          </time>
                          <h3 class="custom-field__news-title">
                              <?php
                              $custom_title = get_field('title');
                              echo esc_html($custom_title ? $custom_title : get_the_title());
                              ?>
                          </h3>
                          <p class="custom-field__post-category">
                              <?php
                              $custom_category = get_field('category');
                              echo esc_html($custom_category ? $custom_category : 'Uncategorized');
                              ?>
                          </p>
                      </div>
                  </div>
              </a>
      <?php
          endwhile;

          // ページネーションを追加
          echo paginate_links(array(
              'total' => $query->max_num_pages,
          ));

          wp_reset_postdata();
      else :
          echo '<p>No news found.</p>';
      endif;
      ?>
  </div>

</section>
</main>



  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>  
</body>       