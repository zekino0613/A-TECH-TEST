<?php
// 背景画像とタイトルをページごとに管理（レスポンシブ対応追加）
$mainvisual_data = [
    'concept' => [
        'desktop' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/page-concept_top-pc.jpg',
        'mobile' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/page-concept_top-sp.jpg',
        'title' => 'SALON CONCEPT',
    ],
    'price-menu' => [
        'desktop' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/price-menu_top-pc.jpg',
        'mobile' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/price-menu_top-sp.jpg',
        'title' => 'PRICE MENU',
    ],
    'salons' => [
        'desktop' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/archive-salons_top-pc.jpg',
        'mobile' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/archive-salons_top-sp.jpg',
        'title' => 'SALONS',
    ],
    'single-salons' => [
      'desktop' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/single-salons_top-pc.jpg',
      'mobile' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/single-salons_top-sp.jpg',
      'title' => 'VALENTINE ROSE',
    ],
    'news' => [
      'desktop' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/news_top-pc.jpg',
      'mobile' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/news_top-sp.jpg',
      'title' => 'NEWS',
    ],
    'single-news' => [  
      'desktop' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/news-sample-pc.jpg',
      'mobile' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/news-sample-sp  .jpg',
      'title' => 'single-news',
    ],
    'contact' => [
      'desktop' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/price-menu_top-pc.jpg',
      'mobile' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/price-menu_top-pc.jpg',
      'title' => 'contact',
    ],
    'default' => [
        'desktop' => get_template_directory_uri() . '/assets/images/default-desktop.jpg',
        'tablet' => get_template_directory_uri() . '/assets/images/default-tablet.jpg',
        'mobile' => get_template_directory_uri() . '/assets/images/default-mobile.jpg',
        'title' => 'Welcome to Our Site',
    ],
];


// 現在のページを特定
$page_slug = 'default';
if (is_post_type_archive('news')) {
    $page_slug = 'news';
} elseif (is_singular('salons')) {
    $page_slug = 'single-salons';
} elseif (is_post_type_archive('salons')) {
    $page_slug = 'salons';
} elseif (is_category('news')) {
    $page_slug = 'news';
} elseif (is_singular('post')) {
    $page_slug = 'single-news';
} elseif (is_page()) {
    $page_slug = get_post_field('post_name', get_queried_object_id());
}

// デバッグ出力
// echo 'Page Slug: ' . $page_slug;
// スラッグが配列に存在しない場合はデフォルト値を使用
$data = $mainvisual_data[$page_slug] ?? $mainvisual_data['default'];


// 店名を動的に取得（single-salons のみ）
$store_name = '';
if ($page_slug === 'single-salons') {
    $store_name = get_field('store_name');
}
?>

<section id="para-mainvisual" 
  data-desktop="<?php echo esc_url($data['desktop']); ?>" 
  data-mobile="<?php echo esc_url($data['mobile']); ?>">
  <div class="section-title">
    <h1><?php echo esc_html($data['title']); ?></h1>
    <?php if (!empty($store_name)) : ?>
      <p class="store-name"><?php echo esc_html($store_name); ?></p>
    <?php endif; ?>
  </div>

  <div class="parallax-section">
    <div class="parallax-image"></div>
  </div>
</section>



  <!-- data-tablet="<?php echo esc_url($data['tablet']); ?>"  -->