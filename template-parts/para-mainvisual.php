<?php
// 背景画像とタイトルをページごとに管理（レスポンシブ対応追加）
$mainvisual_data = [
    'concept' => [
        'desktop' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/page-concept_top-pc.jpg',
        // 'tablet' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/page-concept_top-tablet.jpg',
        'mobile' => get_template_directory_uri() . '/assets/images/A-TECH-TEST-image/test-image/img/page-concept_top-sp.jpg',
        'title' => 'SALON CONCEPT',
    ],
    'price-menu' => [
        'desktop' => get_template_directory_uri() . '//assets/images/A-TECH-TEST-image/test-image/img/price-menu_top-pc.jpg',
        'tablet' => get_template_directory_uri() . '/assets/images/services-tablet.jpg',
        'mobile' => get_template_directory_uri() . '//assets/images/A-TECH-TEST-image/test-image/img/price-menu_top-sp.jpg',
        'title' => 'PRICE MENU',
    ],
    'contact' => [
        'desktop' => get_template_directory_uri() . '/assets/images/contact-desktop.jpg',
        'tablet' => get_template_directory_uri() . '/assets/images/contact-tablet.jpg',
        'mobile' => get_template_directory_uri() . '/assets/images/contact-mobile.jpg',
        'title' => 'Contact Us',
    ],
    'default' => [
        'desktop' => get_template_directory_uri() . '/assets/images/default-desktop.jpg',
        'tablet' => get_template_directory_uri() . '/assets/images/default-tablet.jpg',
        'mobile' => get_template_directory_uri() . '/assets/images/default-mobile.jpg',
        'title' => 'Welcome to Our Site',
    ],
];

// 現在のページスラッグを取得
$page_slug = get_post_field('post_name', get_queried_object_id());

// スラッグが配列に存在しない場合はデフォルト値を使用
$data = $mainvisual_data[$page_slug] ?? $mainvisual_data['default'];
?>

<section id="para-mainvisual" 
  data-desktop="<?php echo esc_url($data['desktop']); ?>" 
  data-mobile="<?php echo esc_url($data['mobile']); ?>">
  <div class="section-title">
    <h1><?php echo esc_html($data['title']); ?></h1>
  </div>

  <div class="parallax-section">
    <div class="parallax-image"></div>
  </div>
</section>




  <!-- data-tablet="<?php echo esc_url($data['tablet']); ?>"  -->