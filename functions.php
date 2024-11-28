<?php

function theme_enqueue_assets()
{
  // jQueryを読み込む
  wp_enqueue_script('jquery');

  // slickのスタイルシートを読み込む
  wp_enqueue_style(
    'slick-css', // ハンドル名
    get_template_directory_uri() . '/assets/css/slick/slick.css', // slick.cssのパス
    array(), // 依存関係なし
    '1.8.0' // バージョン
  );

  wp_enqueue_style(
    'slick-theme-css', // ハンドル名
    get_template_directory_uri() . '/assets/css/slick/slick-theme.css', // slick-theme.cssのパス
    array('slick-css'), // slick.cssに依存
    '1.8.0' // バージョン
  );

  // slickのJavaScriptファイルを読み込む
  wp_enqueue_script(
    'slick-js', // ハンドル名
    get_template_directory_uri() . '/assets/js/slick.js', // slick.min.jsのパス
    array('jquery'), // jQueryに依存
    '1.8.0', // バージョン
    true // フッターで読み込む
  );

   // common.jsを読み込む (Slick.jsに依存)
  wp_enqueue_script(
    'common-js', // ハンドル名
    get_template_directory_uri() . '/assets/js/common.js', // common.jsのパス
    array('slick-js'), // slickに依存
    '1.0.0', // バージョン
    true // フッターで読み込む
  );







  // リセットCSSを読み込む
  wp_enqueue_style(
    'destyle',
    get_template_directory_uri() . '/assets/css/destyle.min.css'
  );
  // メインのスタイルシートを読み込む（識別子、URL、依存関係、バージョン）
  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/assets/css/style.css',
    array('destyle'),
    '1.0.0'
  );
}
  add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

//   //OGPアイキャッチ画像
//   function add_dynamic_og_image() {
//     // 投稿やページ単体の画面かどうか確認
//     if (is_single() || is_page()) {
//         // アイキャッチ画像が設定されている場合
//         if (has_post_thumbnail()) {
//             $og_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
//         } else {
//             // アイキャッチ画像がない場合のデフォルト画像を設定
//             $og_image = 'https://zekino0613.com/default-image.jpg';
//         }
//     } else {
//         // ホームページやアーカイブページなどのデフォルト画像
//         $og_image = 'https://zekino0613.com/assets/';
//     }

//     // OGP画像のメタタグを出力
//     echo '<meta property="og:image" content="' . esc_url($og_image) . '" />' . "\n";
// }
// add_action('wp_head', 'add_dynamic_og_image');



  // カスタム投稿タイプ news を登録
  function create_news_post_type() {
    register_post_type( 'news',
      array(
        'labels' => array(
          'name' => __('news'),  // 管理画面のメニューなどで表示される投稿タイプの名前（複数形）
          'singular_name' => __('news')  // 管理画面で表示される投稿タイプの名前（単数形）
        ),
        'public' => true, // 投稿タイプを公開するかどうか。trueにすると、管理画面に表示され、公開されます
        'has_archive' => true, // 投稿タイプにアーカイブページを持たせるかどうか。trueにすると、アーカイブページが生成されます
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'news'), // 投稿タイプのURLスラッグを指定します。例: yoursite.com/news/
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), // この投稿タイプがサポートする機能を指定します
        'taxonomies'  => array('category'),  // カテゴリを有効にする
      )
    );
  }
  add_action('init', 'create_news_post_type');


  
  // カスタム投稿タイプ salons を登録
  function create_salons_post_type() {
    register_post_type( 'salons',
      array(
        'labels' => array(
          'name' => __('salons'),
          'singular_name' => __('salons')
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'salons'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('category'), // カテゴリーを有効化
      )
    );
  }
  add_action('init', 'create_salons_post_type');



  // アイキャッチ画像のサポートを有効にする
  function theme_setup()
  {
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'theme_setup');

  // ブロックエディターのサポートを有効にする
  function my_theme_setup()
  {
    add_theme_support('editor-styles');

    // 追加のブロックエディター機能（オプション）
    add_theme_support('wp-block-styles'); // コアのブロックスタイルを有効にする
    add_theme_support('align-wide'); // 幅広ブロックオプションを有効にする
    add_theme_support('responsive-embeds'); // レスポンシブ対応の埋め込みを有効にする
    add_theme_support('custom-spacing'); // マージンやパディングのスペーシングコントロールを有効にする
    add_theme_support('custom-line-height'); // 行間の調整を有効にする
    add_theme_support('custom-units'); // %、rem、vwなどのカスタム単位を有効にする
    add_theme_support('align-wide'); // 幅広（Wide）とフル幅（Full-width）のブロックオプションを有効にする
    add_theme_support('wp-block-styles'); // コアブロックスタイルのサポート
    // カラーパレットをカスタマイズする
    add_theme_support('editor-color-palette', array(
      array(
        'name'  => __('Strong Magenta', 'textdomain'),
        'slug'  => 'strong-magenta',
        'color' => '#a156b4',
      ),
    ));
  }
  add_action('after_setup_theme', 'my_theme_setup');


  // ブロックエディターで別投稿ページへの遷移ボタン
  function custom_post_navigation()
  {
    ob_start();
?>
    <div class="post-navigation">
      <div class="nav-previous">
        <?php previous_post_link('%link', 'PREV'); ?>
      </div>
      <div class="nav-next">
        <?php next_post_link('%link', 'NEXT'); ?>
      </div>
    </div>
<?php
    return ob_get_clean();
  }
  add_shortcode('post_navigation', 'custom_post_navigation');




  // contact-form バリデーションチェック

  function my_wpcf7_validation_error_message_name($result, $tag)
  {
    if ('your-name' == $tag->name) {
      if (empty($_POST[$tag->name])) {
        $result->invalidate($tag, 'お名前は必須項目です。');
      }
    }
    return $result;
  }
  add_filter('wpcf7_validate_text', 'my_wpcf7_validation_error_message_name', 10, 2);


  function my_wpcf7_validation_error_message_email($result, $tag)
  {
    if ('your-email' == $tag->name) {
      if (empty($_POST[$tag->name])) {
        $result->invalidate($tag, 'メールアドレスは必須項目です。');
      }
    }
    return $result;
  }
  add_filter('wpcf7_validate_email', 'my_wpcf7_validation_error_message_email', 10, 2);


  function my_wpcf7_validation_error_message_tel($result, $tag)
  {
    if ('your-tel' == $tag->name) {
      if (empty($_POST[$tag->name])) {
        $result->invalidate($tag, '電話番号は必須項目です。');
      }
    }
    return $result;
  }
  add_filter('wpcf7_validate_tel', 'my_wpcf7_validation_error_message_tel', 10, 2);




  function add_class_to_post_title($title, $id)
  {
    // 投稿ページのタイトルにのみクラスを追加
    if (is_single() && get_the_ID() == $id) {
      $title = '<h1 class="entry-title">' . $title . '</h1>';
    }
    return $title;
  }
  add_filter('the_title', 'add_class_to_post_title', 10, 2);



  // サイドバーウィジェットエリアを登録
  function my_theme_widgets_init()
  {
    register_sidebar(array(
      'name'          => 'サイドバー',
      'id'            => 'sidebar-1',
      'before_widget' => '<div class="widget-area">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ));
  }
  add_action('widgets_init', 'my_theme_widgets_init');


  function my_custom_block_patterns()
  {
    // カテゴリを登録する（オプション）
    register_block_pattern_category('my-patterns', array('label' => __('My Custom Patterns', 'textdomain')));

    // ブロックパターンを登録
    register_block_pattern(
      'mytheme/my-custom-pattern',
      array(
        'title'       => __('My Custom Pattern', 'textdomain'),
        'description' => _x('A custom block pattern.', 'Block pattern description', 'textdomain'),
        'content'     => '
                <!-- wp:paragraph -->
                <p>' . __('This is a custom pattern!', 'textdomain') . '</p>
                <!-- /wp:paragraph -->
                <!-- wp:image -->
                <figure class="wp-block-image"><img src="https://example.com/image.jpg" alt=""/></figure>
                <!-- /wp:image -->
                <!-- wp:image -->
                <figure class="wp-block-image"><img src="https://example.com/image.jpg" alt=""/></figure>
                <!-- /wp:image -->
                <!-- wp:list -->
                <ul><li>' . __('First item', 'textdomain') . '</li><li>' . __('Second item', 'textdomain') . '</li></ul>
                <!-- /wp:list -->
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link">' . __('Click me', 'textdomain') . '</a></div>
                <!-- /wp:button -->
            ',
        'categories'  => array('my-patterns'),
        'inserter'    => true,  // 挿入可能にする
      )
    );
  }
  add_action('init', 'my_custom_block_patterns');

  // .custom-marginでブロックエディター内のコンテンツにマージンを付与
  function enqueue_custom_styles()
  {
    wp_enqueue_style('theme-styles', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'enqueue_custom_styles');



  // パンくずリストの区切り記号が「|」
  add_filter('wpseo_breadcrumb_separator', function () {
    return ' | '; // 区切り記号を「|」に変更
});

// パンくずリスト カタカナ表記
add_filter('wpseo_breadcrumb_single_link', 'custom_breadcrumb_labels', 10, 2);
function custom_breadcrumb_labels($link_output, $link) {
    // ページタイトルをカタカナに置き換える
    if (strpos($link_output, 'concept') !== false) {
        $link_output = str_replace('concept', 'コンセプト', $link_output);
    }
    if (strpos($link_output, 'Home') !== false) {
        $link_output = str_replace('Home', 'ホーム', $link_output);
    }
    return $link_output;
}


// page-price-menuの各セクションへのページジャンプ
function enqueue_custom_scroll_script() {
  wp_enqueue_script('custom-scroll', get_template_directory_uri() . '/assets/js/custom-scroll.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scroll_script');




add_filter('wp_kses_allowed_html', function ($tags) {
  $tags['iframe'] = [
      'src' => true,
      'width' => true,
      'height' => true,
      'frameborder' => true,
      'allow' => true,
      'allowfullscreen' => true,
      'loading' => true,
  ];
  return $tags;
});




// 都道府県のローマ字変換マッピング
if (!function_exists('prefecture_to_romaji')) {
  function prefecture_to_romaji($prefecture) {
      $mapping = [
          '北海道' => 'Hokkaido',
          '青森県' => 'Aomori',
          '岩手県' => 'Iwate',
          '宮城県' => 'Miyagi',
          '秋田県' => 'Akita',
          '山形県' => 'Yamagata',
          '福島県' => 'Fukushima',
          '茨城県' => 'Ibaraki',
          '栃木県' => 'Tochigi',
          '群馬県' => 'Gunma',
          '埼玉県' => 'Saitama',
          '千葉県' => 'Chiba',
          '東京都' => 'Tokyo',
          '神奈川県' => 'Kanagawa',
          '新潟県' => 'Niigata',
          '富山県' => 'Toyama',
          '石川県' => 'Ishikawa',
          '福井県' => 'Fukui',
          '山梨県' => 'Yamanashi',
          '長野県' => 'Nagano',
          '岐阜県' => 'Gifu',
          '静岡県' => 'Shizuoka',
          '愛知県' => 'Aichi',
          '三重県' => 'Mie',
          '滋賀県' => 'Shiga',
          '京都府' => 'Kyoto',
          '大阪府' => 'Osaka',
          '兵庫県' => 'Hyogo',
          '奈良県' => 'Nara',
          '和歌山県' => 'Wakayama',
          '鳥取県' => 'Tottori',
          '島根県' => 'Shimane',
          '岡山県' => 'Okayama',
          '広島県' => 'Hiroshima',
          '山口県' => 'Yamaguchi',
          '徳島県' => 'Tokushima',
          '香川県' => 'Kagawa',
          '愛媛県' => 'Ehime',
          '高知県' => 'Kochi',
          '福岡県' => 'Fukuoka',
          '佐賀県' => 'Saga',
          '長崎県' => 'Nagasaki',
          '熊本県' => 'Kumamoto',
          '大分県' => 'Oita',
          '宮崎県' => 'Miyazaki',
          '鹿児島県' => 'Kagoshima',
          '沖縄県' => 'Okinawa',
      ];

      return $mapping[$prefecture] ?? $prefecture;
  }
}


// archive-salonsカスタムフィールド住所から情報取得しカテゴライズ項目の出力（重複削除）
if (!function_exists('get_unique_prefectures')) {
  function get_unique_prefectures() {
      $args = [
          'post_type' => 'salons',
          'posts_per_page' => -1,
      ];
      $query = new WP_Query($args);

      $prefectures = [];
      if ($query->have_posts()) {
          while ($query->have_posts()) {
              $query->the_post();
              $address = get_field('address');
              if ($address) {
                  // 住所から都道府県を取得
                  preg_match('/(東京都|北海道|(?:京都|大阪)府|.{2,3}県)/u', $address, $matches);
                  if (!empty($matches[0])) {
                      $prefectures[] = $matches[0];
                  }
              }
          }
          wp_reset_postdata();
      }

      // 重複を排除してソート
      $unique_prefectures = array_unique($prefectures);
      sort($unique_prefectures);

      return $unique_prefectures;
  }
}


// archive-salonsカスタムフィールド情報取得
if (!function_exists('get_stores_by_prefecture')) {
  function get_stores_by_prefecture() {
      $args = [
          'post_type' => 'salons',
          'posts_per_page' => -1,
      ];
      $query = new WP_Query($args);

      $stores_by_prefecture = [];
      if ($query->have_posts()) {
          while ($query->have_posts()) {
              $query->the_post();

              // 店舗情報を取得
              $store_id = get_the_ID();
              $store_title = get_the_title();
              $address = get_field('address'); // カスタムフィールド 'address' を取得

              if ($address) {
                  // 住所から都道府県を取得
                  preg_match('/(東京都|北海道|(?:京都|大阪)府|.{2,3}県)/u', $address, $matches);
                  if (!empty($matches[0])) {
                      $prefecture = $matches[0];
                      $stores_by_prefecture[$prefecture][] = [
                          'id' => $store_id, // 投稿IDを追加
                          'title' => $store_title,
                          'address' => $address,
                      ];
                  }
              }
          }
          wp_reset_postdata();
      }

      return $stores_by_prefecture;
  }
}




function convert_to_romaji($text) {
  if (empty($text)) {
      return '';
  }

  // 不要な文字を削除（例: 「店」など）
  $text = trim(str_replace('店', '', $text));

  // 漢字変換用マッピング
  $map = [
      '新宿' => 'Shinjuku',
      '渋谷' => 'Shibuya',
      '平塚' => 'Hiratsuka',
      '横浜' => 'Yokohama',
      'さいたま' => 'Saitama',
      '春日部' => 'Kasukabe',
      '堺' => 'Sakai',
      '梅田' => 'Umeda',
      '五条' => 'Gojo',
      '久留米' => 'Kurume',
      '那覇' => 'Naha',
  ];

  // マッピングが存在する場合はローマ字を返し、存在しない場合は元の文字列を返す
  if (isset($map[$text])) {
    return strtoupper($map[$text]); // 大文字変換
}

// マッピングにない場合、元の文字列をそのまま返す
return strtoupper($text); // 元の文字列も大文字に変換
}