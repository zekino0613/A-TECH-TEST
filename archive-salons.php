
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
        <section class="single-salons">


        



        <div class="store-details">
            <h1 class="store-title"><?php the_title(); ?></h1>
            
            <p><strong>店舗名:</strong> <?php echo esc_html(get_field('store_name')); ?></p>
            <p><strong>住所:</strong> <?php echo esc_html(get_field('address')); ?></p>
            <p><strong>電話番号:</strong> <?php echo esc_html(get_field('phone')); ?></p>

            <?php
            // Meta BoxからGoogleマップの埋め込みコードを取得
            $google_map_embed = rwmb_meta('google_map_embed'); // メタフィールドIDに置き換える
            if (!empty($google_map_embed)) {
                echo '<div class="google-map">';
                echo $google_map_embed; // Googleマップの埋め込みコードをそのまま出力
                echo '</div>';
            } else {
                echo '<p>Googleマップが設定されていません。</p>';
            }
            ?>
        </div>
    </section>



  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>  
</body>       