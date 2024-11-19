document.addEventListener("DOMContentLoaded", function () {
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
  jQuery(document).ready(function ($) {
    $(document).ready(function () {
      $('.fadein').each(function () {
        $(this).addClass('scrollin');
      });
    });
  });


  //スクロール中にフェードイン
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
  
  
  

  

  


});


