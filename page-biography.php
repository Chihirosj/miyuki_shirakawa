
<?php
/**
 * Template Name: biography 
 **/
get_header();?>

  <section id="single-biography">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12 ml-auto bg_title">
                    <h1 class="biography_title scroll_transition">
                      Miyuki<br>
                      Shirakawa
                    </h1>
            </div>
        </div>
    </div>
    <div class="biography_img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/photo-1.jpg" class="img-fluid">
    </div>
    <div class="introduction">
      <p>京都市立芸術大学音楽学部声楽科卒業。同大学院音楽研究科声楽専攻修士課程首席修了。蔵田裕行に師事。<br>
        1997年～2008年渡欧。留学後はドイツリートをクラウス・オッカー、オペラ歌唱法をジャネット・スコヴォッティ、発声法をインゲボルク・ヴァームサー各氏に師事。ドイツ、オーストリア、イタリアにて研鑽を積む。</p>
    </div>
  </section>
  <section class="tree">
        <ul class="cbp_tmtimeline">
          <?php 
          $repeat_group = SCF::get( 'biography' );
          foreach ( $repeat_group as $fields ) { 
            ?>
                <li>
                    <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span><?php echo $fields['year'];?></span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone"></div>
                    <div class="cbp_tmlabel">
                        <h2><?php echo $fields['title'];?></h2>
                        <p><?php echo $fields['content'];?></p>
                    </div>
                </li>
          <?php }
          ?>
          </ul>
  </section>
  <div class="recital_history">
    <h2>Recital history</h2>
  </div>
  <section class="tree">
        <ul class="cbp_tmtimeline">
          <?php 
          $repeat_group = SCF::get( 'recital' );
          foreach ( $repeat_group as $fields ) { 
            ?>
                <li>
                    <time class="cbp_tmtime" datetime="2013-04-10 18:30"> <span><?php echo $fields['year_recital'];?></span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone"></div>
                    <div class="cbp_tmlabel">
                        <h2><?php echo $fields['title_recital'];?></h2>
                        <p><?php echo $fields['detail_recital'];?></p>
                    </div>
                </li>
          <?php }
          ?>
          </ul>
  </section>

  <?php wp_footer(); ?>

</body>
</html>
