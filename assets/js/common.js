document.addEventListener("DOMContentLoaded", function () {

  // ハンバーガーメニュー
// ーーーーーーーーーーーーー
  const hamburger = document.querySelector(".hamburger");
  const overlayMenu = document.getElementById("overlay-menu");

  if (hamburger && overlayMenu) {
    hamburger.addEventListener("click", function () {
      // ボタンとオーバーレイメニューの状態を切り替え
      this.classList.toggle("is-open");
      overlayMenu.classList.toggle("is-open");
      document.body.classList.toggle("no-scroll");
    });

    // メニュー外をクリックで閉じる
    document.addEventListener("click", function (event) {
      if (
        !overlayMenu.contains(event.target) &&
        !hamburger.contains(event.target)
      ) {
        hamburger.classList.remove("is-open");
        overlayMenu.classList.remove("is-open");
        document.body.classList.remove("no-scroll");
      }
    });
  }


  //ロード後に要素フェードイン 
// ーーーーーーーーーーーーー
  jQuery(document).ready(function ($) {
    $(document).ready(function () {
      $('.fadein').each(function () {
        $(this).addClass('scrollin');
      });
    });
  });


  //スクロール中にフェードイン
// ーーーーーーーーーーーーー
  jQuery(document).ready(function($) {
    // ここにコードを書く。'$'を安全に使用できます。
    var windowHeight = $(window).height();  // ウィンドウの高さを取得

    function checkVisibility() {
      $('.fade-in').each(function() {
        var elementTop = $(this).offset().top;  // 要素の上端
        var scrollPos = $(window).scrollTop() + windowHeight;  // スクロール位置 + ウィンドウの高さ

        if (scrollPos > elementTop + 50) {  // 要素がビューポートの50px内に入ったら
          $(this).addClass('visible');
        }
      });
    }

    $(window).on('scroll', checkVisibility);  // スクロール時にチェック
    checkVisibility();  // 初期ロード時にもチェック
  });


  // PC-featureスライド
// ーーーーーーーーーーーーー
  jQuery(document).ready(function($) {
    let currentIndex = 0;
    const slideCount = $('.feature-content__image-slider .slide').length;
    const intervalTime = 5000; // 5秒間隔
  
    // スライドを切り替える関数
    function showSlide(index) {
      // タブのアクティブ状態更新
      $('.feature-tabs__tab').removeClass('active').eq(index).addClass('active');
  
      // 画像スライダーの切り替え
      $('.feature-content__image-slider .slide').removeClass('active-slide');
      $('.feature-content__image-slider .slide').eq(index).addClass('active-slide');
  
      // 詳細スライダーの切り替え
      $('.feature-content__description-slider .description-slide').removeClass('active-slide');
      $('.feature-content__description-slider .description-slide').eq(index).addClass('active-slide');
    }
  
    // 自動スライド切り替え
    function startAutoSlide() {
      setInterval(() => {
        currentIndex = (currentIndex + 1) % slideCount;
        showSlide(currentIndex);
      }, intervalTime);
    }
  
    // タブクリック時の動作
    $('.feature-tabs__tab').click(function() {
      currentIndex = $(this).data('index');
      showSlide(currentIndex);
    });
  
    // 初期表示設定
    showSlide(currentIndex);
    startAutoSlide();
  });

// SP-スライダー
// ーーーーーーーーーーーーー

jQuery(document).ready(function ($) {
  // 画像スライダーを初期化
  $(".feature-content-sp__image-slider").slick({
    slidesToShow: 1, // 中央に1つ表示
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    asNavFor: ".feature-content-sp__description-slider",
    centerMode: true, // 中央配置
    variableWidth: true, // 画像本来のサイズを保持
  });

  // 詳細スライダーを初期化
  $(".feature-content-sp__description-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    fade: true, // フェードで切り替え
    asNavFor: ".feature-content-sp__image-slider",
  });
});

// アコーディオン
// ーーーーーーーーーーーーー
jQuery(document).ready(function ($) {
  function setAccordionHeight(content, isMobile) {
    if (isMobile) {
      // 900px以下の場合
      content.css({
        maxHeight: 150 + 'px', // モバイル用の高さ
        padding: '10px 20px 16px 16px', // モバイル用のパディング
      });
    } else {
      // 900px以上の場合
      const height = content.prop('scrollHeight'); // コンテンツの高さを取得
      content.css({
        maxHeight: 200 + 'px',
        padding: '0px 32px 35px 24px', // デスクトップ用のパディング
      });
    }
  }

  function isMobileView() {
    return window.matchMedia('(max-width: 900px)').matches;
  }

  $('.accordion-header').on('click', function () {
    const parentItem = $(this).closest('.accordion-item');
    const content = parentItem.find('.accordion-content');

    // 他のアコーディオンを閉じる
    $('.accordion-item').not(parentItem).removeClass('active');
    $('.accordion-content')
      .not(content)
      .css({
        maxHeight: '0',
        padding: '0 16px',
      });

    // 現在のアコーディオンをトグル
    if (parentItem.hasClass('active')) {
      parentItem.removeClass('active');
      content.css({
        maxHeight: '0',
        padding: '0 16px',
      });
    } else {
      parentItem.addClass('active');
      setAccordionHeight(content, isMobileView());
    }
  });

  // 初期状態で最初のアコーディオンを開く
  const firstItem = $('.accordion-item').first();
  const firstContent = firstItem.find('.accordion-content');
  firstItem.addClass('active');
  setAccordionHeight(firstContent, isMobileView());

  // 画面リサイズ時の動作を追加
  $(window).on('resize', function () {
    $('.accordion-item.active .accordion-content').each(function () {
      setAccordionHeight($(this), isMobileView());
    });
  });
});


(function ($) {
  $(document).ready(function () {
    const scrollToTopButton = $('#scrollToTop');

    // スクロールイベントでボタンの表示/非表示を制御
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 300) {
        scrollToTopButton.addClass('show');
      } else {
        scrollToTopButton.removeClass('show');
      }
    });

    // ボタンをクリックしてページトップへスムーズスクロール
    scrollToTopButton.on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, 600); // 600msでトップへ移動
    });
  });
})(jQuery);












  


});
  

  

  





