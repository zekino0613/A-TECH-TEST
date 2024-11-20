<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>
  <section id="mainvisual">
    <div class="mainvisual__images">
      <div class="mainvisual__images--item"></div>
      <h2 class="mainvisual__images--text fadein fadein-bottom">自分を<br class="brsp">知っている人は <br>美しい。</h2>
    </div>
  </section>

  <section id="news">
    <div class="news__inner fade-in">
      <div class="news__inner--flex">
        <div class="section-title fade-in">
          <span class="section-title__shadow">News</span>
          <h2 class="section-title__main">News</h2>
          <span class="section-title__small">お知らせ</span>
        </div>

        <a class="btn front" href="<?php echo get_post_type_archive_link('news'); ?>">View All</a>
      </div>

      <div class="news-postlist">
        <?php
        //WP_Query を使ってカスタム投稿タイプ 'news' の最新６件の投稿を取得
        $news_query = new WP_Query(array(
          'post_type' => 'news',      // 取得する投稿タイプを 'news' に指定
          'posts_per_page' => 3,      // 取得する投稿の数を 6 に指定
          'order' => 'DESC' //降順で並び替える
        ));


        // 投稿が存在するか確認
        if ($news_query->have_posts()) :
          // 投稿が存在する場合、ループを開始
          while ($news_query->have_posts()) : $news_query->the_post(); //投稿が存在するか確認 : まだ投稿が残っているかチェック
        ?>
            <a href="<?php the_permalink(); ?>">
              <div class="news-post">
                <div class="custom-field">
                  <!-- カスタムフィールド: 日付 -->
                  <time class="custom-field__post-date">
                    <?php
                      // カスタムフィールドから日付を取得 (フィールド名: 'field_date')
                    $custom_date = get_field('date');
                    echo esc_html($custom_date ? $custom_date : get_the_date()); // カスタムフィールドがない場合、投稿日を表示
                    ?>
                  </time>

                  <!-- 投稿のタイトル -->
                  <h3 class="custom-field__news-title">
                    <?php
                    // カスタムフィールドからタイトルを取得 (フィールド名: 'field_title')
                      $custom_title = get_field('title');
                      echo esc_html($custom_title ? $custom_title : get_the_title()); // カスタムフィールドがない場合、投稿タイトルを表示
                    ?>
                  </h3>

                  <!-- カスタムフィールド: カテゴリー -->
                  <p class="custom-field__post-category">
                    <?php
                    // カスタムフィールドからカテゴリーを取得 (フィールド名: 'field_category')
                      $custom_category = get_field('category');
                      echo esc_html($custom_category ? $custom_category : 'Uncategorized'); // カスタムフィールドがない場合、未分類を表示
                    ?>
                  </p>
                </div>
              </div>
            </a>
        <?php
          endwhile;
          // クエリ後のグローバルな投稿データをリセット
          wp_reset_postdata();
        else :
          // 投稿が見つからない場合のメッセージを表示
          echo '<p>No news found.</p>';
        endif;
        ?>
      </div>
      <a class="btn back" href="<?php echo get_post_type_archive_link('news'); ?>">View All</a>
    </div>
  </section>

  <section id="concept">
    <div class="concept__inner">
      <div class="concept__inner--pc">
        <div class="section-title fade-in">
          <span class="section-title__shadow">Concept</span>
          <div class="concept-back-image"></div>
          <h2 class="section-title__main">CONCEPT</h2>
          <span class="section-title__small">コンセプト</span>
          <p class ="section-title__subtitle">洗練されたワンランク上の女性を目指す</p>
        </div>

        
        <div class="concept-flex fade-in">
          <img class="concept-flex__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/top-concept_02-pc.jpg" 
                loading="lazy"
                alt="コンセプトPC02">
          <p class="concept-flex__text">
            バレンタインローズでは脱毛の完了はゴールではなく、<br>
            あくまでもお客様がワンランク上の女性に近づくための<br> 
            第一歩と考えています。<br>
            「洗練されたワンランク上の女性を目指す」<br>
            というコンセプトのもと、 <br>
            スタッフが徹底したホスピタリティによりお客様をもてなし、 <br>
            脱毛を通してお客様が理想とする女性像に導きます。
          </p>
        </div><!-- /.concept-flex -->
        <a href="<?php echo get_post_type_archive_link('concept'); ?>">
          <div class="view-more fade-in">
            <div class="view-more__text">View More</div>
            <div class="view-more__arrow"></div>
          </div><!-- /view-more -->    
        </a>
      </div><!-- /.concept__inner--pc -->

      <div class="concept__inner--sp">
        <div class="sp-concept">
          <img class="sp-concept__img fade-in" src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/top-concept_01-sp.jpg" 
                loading="lazy"
                alt="コンセプトSP02">
          
          <div class="section-title fade-in">
            <div class="section-title__back-image"></div><!-- /.concept-back-image -->
            <span class="section-title__shadow">Concept</span>
            <h2 class="section-title__main">CONCEPT</h2>
            <span class="section-title__small">コンセプト</span>
          
          </div>

          <p class="sp-concept__subtitle fade-in">洗練された<br>ワンランク上の<br>女性を目指す</p>
      
          

          <p class="sp-concept__text fade-in">
            バレンタインローズでは脱毛の完了はゴールではなく、
            あくまでもお客様がワンランク上の女性に近づくための<br> 
            第一歩と考えています。<br>
            「洗練されたワンランク上の女性を目指す」 というコンセプトのもと、<br> 
            スタッフが徹底したホスピタリティによりお客様をもてなし、 
            脱毛を通してお客様が理想とする女性像に導きます。
          </p>
        </div><!-- /.sp-concept -->
        <a href="<?php echo get_post_type_archive_link('concept'); ?>">
          <div class="view-more">
            <div class="view-more__text">View More</div>
            <div class="view-more__arrow"></div>
          </div><!-- /view-more -->    
        </a>
      </div><!-- /.concept__inner--sp -->
    </div><!-- /.concept__inner -->
  </section>

  <section id= "feature">
    <div class="feature__inner">
      <div class="section-title fade-in">
        <span class="section-title__shadow">Feature</span>
        <h2 class="section-title__main">FEATURE</h2>
      </div>
      <div class="feature__inner--pc">  
        <div class="feature-content">
            <!--PCタブ -->
          <div class="feature-tabs">
            <div class="feature-tabs__tab" data-index="0">高性能の機械を導入</div>
            <div class="feature-tabs__tab" data-index="1">痛みを最小限まで抑えた施術</div>
            <div class="feature-tabs__tab" data-index="2">1回の施術は<br>入店～退店まで約30分</div>
          </div>

          <!-- PC画像スライダー -->
          <div class="feature-content__image-slider">
            <div class="slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/feature_01-pc.jpg" 
                    loading="lazy"
                    alt="詳細 I">
            </div>
            <div class="slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/feature_02-pc.jpg" 
                    loading="lazy"
                    alt="詳細 II">
            </div>
            <div class="slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/feature_03-pc.jpg" 
                    loading="lazy"
                    alt="詳細 III">
            </div>
          </div>

          <div class="text-with-line">
            <h2 class="text">Your Title</h2>
          </div>

          <!-- PC詳細スライダー -->
          <div class="feature-content__description-slider">
            <div class="description-slide">
              <h2>FEATURE I</h2>
              <h3>高性能の機械を導入</h3>
              <p>
                美肌に特化したフィルターを使用し<br>
                真皮層に働きかけることで<br>
                コラーゲンの生成を促進させます。<br>
                また、むくみの原因である溜まった<br>
                リンパを流すことで顔のむくみを取り、<br>
                若々しいお肌と小顔効果が期待できます。
              </p>
            </div>

            <div class="description-slide">
              <h2>FEATURE II</h2>
              <h3>痛みを最小限まで抑えた施術</h3>
              <p>
                毛質・毛量や脱毛箇所などに合わせて<br>
                オーダーメイドの脱毛プランを作成し、<br>
                メンズ専用の脱毛器を使用して施術します。
              </p>
            </div>

            <div class="description-slide">
              <h2>FEATURE III</h2>
              <h3>1回の施術は<br>入店～退店まで約30分</h3>
              <p>
                施術自体は15分程度。<br>
                初回はカウンセリングもあるので<br>
                多少お時間をいただきますが、<br>
                2回目以降は薄化粧で来ていただくと、<br>
                入店から退店まで30分弱で済みます。
              </p>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="feature__inner--sp">
        <div class="feature-content-sp">
          <!-- SP画像スライダー -->
          <div class="feature-content-sp__image-slider">
            <div class="image-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/feature_01-sp.jpg" 
                    loading="lazy"
                    alt="詳細 I">
            </div>
            <div class="image-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/feature_02-sp.jpg" 
                    loading="lazy"
                    alt="詳細 II">
            </div>
            <div class="image-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/feature_03-sp.jpg" 
                    loading="lazy"
                    alt="詳細 III">
            </div>
          </div>

          <!-- SP詳細スライダー -->
          <div class="feature-content-sp__description-slider">
            <div class="description-slide">
              <div class="text-with-line">
                <h2>FEATURE I</h2>
              </div> 

              <h3>高性能の機械を導入</h3>
              <p>
                美肌に特化したフィルターを使用し<br>
                真皮層に働きかけることで<br>
                コラーゲンの生成を促進させます。<br>
                また、むくみの原因である溜まった<br>
                リンパを流すことで顔のむくみを取り、<br>
                若々しいお肌と小顔効果が期待できます。
              </p>
            </div>

            <div class="description-slide">
              <div class="text-with-line">
                <h2>FEATURE II</h2>
              </div> 
              <h3>痛みを最小限まで抑えた施術</h3>
              <p>
                毛質・毛量や脱毛箇所などに合わせて<br>
                オーダーメイドの脱毛プランを作成し、<br>
                メンズ専用の脱毛器を使用して施術します。
              </p>
            </div>

            <div class="description-slide">
              <div class="text-with-line">
                <h2>FEATURE III</h2>
              </div> 
              
              <h3>1回の施術は<br>入店～退店まで約30分</h3>
              <p>
                施術自体は15分程度。<br>
                初回はカウンセリングもあるので<br>
                多少お時間をいただきますが、<br>
                2回目以降は薄化粧で来ていただくと、<br>
                入店から退店まで30分弱で済みます。
              </p>
            </div>
          </div>
        </div>
      </div>    

    </div> <!--/.feature__inner --> 
  </section>

  <section id="product">
    <div class="product__inner">
      <div class="product__inner--flex">

          
      
        <h2 class="section-title">PRODUCT</h2>
        <a class="more-btn bb" href="<?php echo get_post_type_archive_link('product'); ?>">MORE</a>
      </div>

      <div class="product-postlist">
        <?php
        // WP_Query を使ってカスタム投稿タイプ 'product' の最新６件の投稿を取得
        $product_query = new WP_Query(array(
          'post_type' => 'product',      // 取得する投稿タイプを 'product' に指定
          'posts_per_page' => 6,      // 取得する投稿の数を 6 に指定
          'order' => 'ASC' //昇順で並び替える
        ));


        // 投稿が存在するか確認
        if ($product_query->have_posts()) :
          // 投稿が存在する場合、ループを開始
          while ($product_query->have_posts()) : $product_query->the_post(); //投稿が存在するか確認 : まだ投稿が残っているかチェック
        ?>
            <a href="<?php the_permalink(); ?>">
              <div class="product-post">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="post-thumbnail">
                    <?php the_post_thumbnail('medium'); // サムネイル画像を 'medium' サイズで表示
                    ?>
                  </div>
                  <h3 class="product-title"><?php the_title(); ?></h3> <!-- 投稿のタイトルを表示 -->
                  <p><?php the_excerpt(); ?></p> <!--投稿の抜粋を表示 -->
                <?php endif; ?>
              </div>
            </a>
        <?php
          endwhile;
          // クエリ後のグローバルな投稿データをリセット
          wp_reset_postdata();
        else :
          // 投稿が見つからない場合のメッセージを表示
          echo '<p>No news found.</p>';
        endif;
        ?>
      </div><!-- /.product-postlist -->
      <a class="more-btn aa" href="<?php echo get_post_type_archive_link('product'); ?>">MORE</a> <!-- 投稿の詳細ページへのリンクを表示 -->
    </div>
  </section>
</main>
<!-- slick/JS -->

  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?> 
</body>