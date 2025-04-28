<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "public",
  "gnav_set" => "public",
  "page_class" => "public02",
  "url" => "public02.html",
  "title" => "共用施設｜",
  "keywords" => "共用施設,",
  "description" => "共用施設ページ。",
  "add_stylesheet" => ["css/public.css"],
  "add_script" =>  ["js/public.js"],
  "canonical_page_id" => "public", 
  "logo_text" => "共用施設"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- パンくずリスト -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">シティタワー東京田町｜田町 マンション｜トップ</a></li>
      <li><a href="./location01.html">共用空間</a></li>
      <li><p>共用施設</p></li>
    </ul>
  </div>
	<!--// パンくずリスト -->
  <div class="public-link public-link--2">
    <a href="public01.html"><p>迎賓空間</p></a>
    <a href="public02.html" class="current"><p>共用施設</p></a>
  </div>

  <!-- <header class="main-visual clearfix">
   <div class="image"><img src="./images/public02/mv.jpg" alt=""><p class="annotation white">外観完成予想図5</p></div>
  </header> -->
  <!-- main-visual -->

  
  <section class="sec01 sections clearfix">
    <div class="bg">
      <div class="tit-img"><img src="./images/public02/page-tit01.svg"></div>
     <ul class="inner">
      <li class="image">
       <div class="image"><img src="./images/public02/img01.jpg" alt=""><p class="annotation white">フィットネスルーム完成予想図</p></div>
      </li>
      <li>
        <p class="title">フィットネスルーム</p>
        <p class="text">健康づくりとリフレッシュの場として<br class="pc">フィットネスルームをご用意。<br>快適な環境が、<br class="pc">ライフスタイルをより豊かで充実したものにします。</p>
      </li>
      </ul>
      <ul class="inner">
      <li>
        <p class="title">テレワークラウンジ</p>
        <p class="text">新しい働き方をサポートするために<br class="pc">デザインされた、テレワークラウンジ。<br class="pc">日常の中でスムーズに仕事と暮らしを切り替えられる、この特別なスペースが働く時間を豊かにします。</p>
      </li>
      <li class="image">
       <div class="image"><img src="./images/public02/img02.jpg" alt=""><p class="annotation white">image photo</p></div>
      </li>
      </ul>
      <div class="inner inner01">
        <p class="title">スカイラウンジ</p>
        <p class="text">スカイラウンジは、落ち着いたインテリアと穏やかな空間が広がる、特別なひとときを過ごせる場所。<br>昼夜で異なる趣を感じながら、住まう人だけが許された穏やかなひとときを演出します。</p>
      </div>
    </div> 
  </section><!-- sec01 -->



  <div class="annotation-area">
  <p class="page-annotation js-scroll wrap clearfix">※掲載のフィットネスルーム完成予想図は計画段階の図面を基に描き起こしたもので、実際とは多少異なります。また、形状の細部および設備機器等については省略しております。<br>※家具・調度品の形状色等は、今後変更される場合がありますので、あらかじめご了承ください。<br>※フィットネスルーム・テレワークラウンジ・スカイラウンジの利用には制限があります。詳しくは係員にお尋ねください。 </p></div>

  <div class="public-link public-link--2">
    <a href="public01.html" ><p>迎賓空間</p></a>
    <a href="public02.html" class="current"><p>共用施設</p></a>
  </div>


</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
