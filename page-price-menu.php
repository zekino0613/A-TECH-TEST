
<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>

<main>
  <?php 
  get_template_part('template-parts/para-mainvisual'); // header.php をインクルード
  ?> 


  <section id="section-contects" class="price-menu">
    <!-- パンくずリスト -->
    <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav id="breadcrumbs">', '</nav>');
      }
    ?>

    <div class="course-menu">
      <div class="course-menu__text fade-in">
        <p>
        バレンタインローズは、<br class="brsp">お客様のなりたい姿に合わせて<br class="brsp">選択いただけるよう<br class="brsp">
        「トライアルコース」<br class="brsp">「減毛コース」<br class="brsp">「脱毛コース」<br class="brsp">の3種類のコースをご用意しています。<br>
        <br class="brsp">
        トライアルコースは<br class="brsp">脱毛効果を実感したい方に、<br class="brsp">減毛コースは<br class="brsp">体毛を薄くしたい・減らしたい方に、<br class="brsp">
        脱毛コースは<br class="brsp">施術箇所の体毛をすべて脱毛したい方に<br class="brsp">おすすめのコースです。
        </p>
      </div><!-- /course-menu__text -->
        
      <div class="course-menu__list">
        <div class="button-grid ">
          <a class="button-item fade-in" href="#body">
            <p class="button-item__title">Body<span>体脱毛</span></p>
            <span class="button-item__arrow"><i class="fa-solid fa-chevron-right"></i></span>
          </a>
        
          <a class="button-item fade-in" href="#v-line">
            <p class="button-item__title">V-<span class="komoji">line</span> <span>VIO脱毛</span></p>
            <span class="button-item__arrow"><i class="fa-solid fa-chevron-right"></i></span>
          </a>
        
          <a class="button-item fade-in" href="#set">
              <p class="button-item__title">Set<span>セット脱毛</span></p>
              <span class="button-item__arrow"><i class="fa-solid fa-chevron-right"></i></span>
          </a>

          <a class="button-item fade-in" href="#custom">
            <p class="button-item__title">Custom<span>オーダーメイド</span></p>
            <span class="button-item__arrow"><i class="fa-solid fa-chevron-right"></i></span>
          </a>

          <a class="button-item fade-in" href="#">
            <p class="button-item__title">All<span>全てのメニュー</span></p>
            <span class="button-item__arrow"><i class="fa-solid fa-chevron-right"></i></span>
          </a>
        </div >
      </div><!-- /.course-menu__list -->
    </div><!-- /course-menu-->
  </section> 

  <section id="parts-menu-detail">
    <div id="body" class="parts-menu-detail__block">
      <h2 class="parts-title fade-in">Body</h2><!-- /parts-title -->
      <div class="parts-nav fade-in">
        <p class ="parts-size">Sパーツ</p>
        <p class ="parts-text">
          おでこ・ほほ・口周り・あご下の首・<br class="brsp">うなじ・両脇・手の指&甲・<br class="brpc">
          足の指&甲・<br class="brsp">へそ周り・乳輪周り
        </p>
      </div>

      <!-- PC用  price-table  -->
      <div class="price-table pt-pc">
        <div class="price-table__header fade-in">
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">トライアルコース(3回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">減毛コース(6回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">脱毛コース(12回)</div>
          <div class="price-table__header--empty"></div> 
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">1箇所</div>
          <div class="price-table__row--value">7,600 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">6,500 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">4,900 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>
        <div class="price-table__footer fade-in">
          ※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。
        </div>
      </div>

      <!-- SP用  price-table  -->
      <div class="price-table pt-sp fade-in">
        <div class="price-table__parts fade-in">1箇所</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">7,600<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">6,500<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">4,900<span>円</span></div>
        </div>


        <div class="price-table__footer fade-in">
          ※ 表の料金は、すべて税込表記で、<br>
          施術一回あたりの金額です。
        </div>
      </div>

      <div class="parts-nav fade-in">
        <p class ="parts-size">Mパーツ</p>
        <p class ="parts-text">
          お腹全体・胸全体（乳輪周りを含む）・<br class="brsp">お尻・両腕上（肘含む）・<br>
          両腕下・V（ハイジニーナ）
        </p>
      </div>
      <!-- PC用  price-table  -->
      <div class="price-table pt-pc">
        <div class="price-table__header fade-in">
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">トライアルコース(3回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">減毛コース(6回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">脱毛コース(12回)</div>
          <div class="price-table__header--empty"></div> 
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">1箇所</div>
          <div class="price-table__row--value">14,900<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">13,200<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">9,900<span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>
        <div class="price-table__footer fade-in">
          ※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。
        </div>
      </div>

      <!-- SP用  price-table  -->
      <div class="price-table pt-sp">
        <div class="price-table__parts fade-in">1箇所</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">14,900<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">13,200<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">9,900<span>円</span></div>
        </div>

        <div class="price-table__footer fade-in">
          ※ 表の料金は、すべて税込表記で、<br> 
          施術一回あたりの金額です。
        </div>
      </div>


      <div class="parts-nav fade-in">
        <p class ="parts-size">Lパーツ</p>
        <p class ="parts-text">
          背中全体・両膝上（膝含む）・両膝下 <br>
        </p>
      </div>

      <!-- PC用  price-table  -->
      <div class="price-table pt-pc">
        <div class="price-table__header fade-in">
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">トライアルコース(3回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">減毛コース(6回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">脱毛コース(12回)</div>
          <div class="price-table__header--empty"></div> 
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">1箇所</div>
          <div class="price-table__row--value">22,800<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">19,800<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">16,500<span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>

        <div class="price-table__footer fade-in">
          ※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。
        </div>
      </div>

      <!-- SP用  price-table  -->
      <div class="price-table pt-sp">
        <div class="price-table__parts fade-in">1箇所</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">22,800<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">19,800<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">16,500<span>円</span></div>
        </div>

        <div class="price-table__footer fade-in">
          ※ 表の料金は、すべて税込表記で、<br> 
          施術一回あたりの金額です。
        </div>
      </div>
    </div><!-- /parts-menu-detail__body -->


    <div id="v-line" class="parts-menu-detail__block">
      <h2 class="parts-title v-line-title fade-in">V-<span class="komoji">line</span></h2><!-- /parts-title -->

      <!-- PC用  price-table  -->
      <div class="price-table pt-pc v-line">
        <div class="price-table__header fade-in">
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">トライアルコース(3回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">減毛コース(6回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">脱毛コース(12回)</div>
          <div class="price-table__header--empty"></div> 
        </div>
        <div class="price-table__row fade-in">
        <div class="price-table__row--category">1箇所</div>
          <div class="price-table__row--value">7,600 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">6,500 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">4,900 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>

        <div class="price-table__row fade-in">
          <div class="price-table__row--category">2箇所</div>
          <div class="price-table__row--value">14,900<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">13,200<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">9,900<span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>

        <div class="price-table__row fade-in">
          <div class="price-table__row--category">3箇所</div>
          <div class="price-table__row--value">22,800<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">19,800<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">16,500<span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>

        <div class="price-table__footer fade-in">
          ※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。
        </div>
      </div>

      <!-- SP1用  price-table  -->
      <div class="price-table pt-sp">
        <div class="price-table__parts ptp-margin fade-in">1箇所</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">7,600<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">6,500<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">4,900<span>円</span></div>
        </div>

      <!-- SP2用  price-table  -->
      <div class="price-table pt-sp">
        <div class="price-table__parts ptp-margin fade-in">2箇所</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">14,900<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">13,200<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">9,900<span>円</span></div>
        </div>  
      </div>

      <!-- SP3用  price-table  -->
      <div class="price-table pt-sp">
        <div class="price-table__parts ptp-margin fade-in">3箇所</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">22,800<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">19,800<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">16,500<span>円</span></div>
        </div>
      </div>
    </div><!-- /v-line -->

    <div id="set" class="parts-menu-detail__block">
      <h2 class="parts-title set-title fade-in">Set</h2><!-- /parts-title -->

      <!-- PC用  price-table  -->
      <div class="price-table pt-pc set">
        <div class="price-table__header fade-in">
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">トライアルコース(3回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">減毛コース(6回)</div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__header--item">脱毛コース(12回)</div>
          <div class="price-table__header--empty"></div> 
        </div>
        <div class="price-table__row fade-in">
        <div class="price-table__row--category">顔全体</div>
          <div class="price-table__row--value">7,600 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">6,500 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">4,900 <span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>

        <div class="price-table__row fade-in">
          <div class="price-table__row--category">腕全体</div>
          <div class="price-table__row--value">14,900<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">13,200<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">9,900<span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>

        <div class="price-table__row fade-in">
          <div class="price-table__row--category">足全体</div>
          <div class="price-table__row--value">22,800<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">19,800<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">16,500<span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>

        <div class="price-table__row fade-in">
          <div class="price-table__row--category">全身脱毛</div>
          <div class="price-table__row--value">27,200<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">24,800<span>円</span></div>
          <div class="price-table__header--empty"></div> 
          <div class="price-table__row--value">20,900<span>円</span></div>
          <div class="price-table__header--empty"></div> 
        </div>

        <div class="price-table__footer fade-in">
          ※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。
        </div>
      </div>


      
      <!-- SP1用  price-table  -->
      <div class="price-table pt-sp set">
        <div class="price-table__parts ptp-margin fade-in">顔全体</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">7,600<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">6,500<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">4,900<span>円</span></div>
        </div>

      <!-- SP2用  price-table  -->
      <div class="price-table pt-sp set">
        <div class="price-table__parts ptp-margin fade-in">腕全体</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">14,900<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">13,200<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">9,900<span>円</span></div>
        </div>  
      </div>

      <!-- SP3用  price-table  -->
      <div class="price-table pt-sp set">
        <div class="price-table__parts ptp-margin fade-in">足全体</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">22,800<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">19,800<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">16,500<span>円</span></div>
        </div>
      </div>

      <!-- SP4用  price-table  -->
      <div class="price-table pt-sp set">
        <div class="price-table__parts ptp-margin fade-in">全身脱毛</div><!-- / -->

        <div class="price-table__header fade-in">
          <div class="price-table__header--item">施術回数</div>
          <div class="price-table__header--item">料金</div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">トライアルコース(3回)</div>
          <div class="price-table__row--value">22,800<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">減毛コース(6回)</div>
          <div class="price-table__row--value">19,800<span>円</span></div>
        </div>
        <div class="price-table__row fade-in">
          <div class="price-table__row--category">脱毛コース(12回)</div>
          <div class="price-table__row--value">16,500<span>円</span></div>
        </div>
      </div>
    </div><!-- /set --> 
  </section>

  <section id="custom" class ="custom">
    <div class="custom-flex">
      <img class="custom-flex__img fade-in" src="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TEST-image/test-image/img/price-menu_custom.jpg" 
        loading="lazy"
        alt="料金メニューCustom画像">
        
      <div class="custom-flex__text fade-in">
        <h2>Custom</h2>
        <p>
        施術の効果は、脱毛箇所や毛質・毛量、毛周期などによって大きく左右されるため、
        画一的な施術ではお客様に合わせた最適な脱毛サービスを提供することはできません。<br>
        バレンタインローズでは、お客様に施術の効果をしっかりと感じていただくことができるよう、
        カウンセリング内容や脱毛箇所、毛質・毛量などを考慮し、オーダーメイドの脱毛メニューを作成しています。<br>
        よりお求めやすい価格で脱毛サービスを提供することができるケースもございますので、
        オーダーメイドの脱毛メニューをご希望の方はお気軽にご相談ください。
        </p>
      </div><!-- /custom-flex__text -->
    </div>
  </section>
</main>



  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>  
</body>   