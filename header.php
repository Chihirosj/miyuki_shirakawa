<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php
    if ( !is_home() ){
      wp_title('-', true, 'right');
    }
    bloginfo('name');
    ?>
    </title>

  <!-- Bootstrap -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-4.0.0.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://example.com/contact-thanks/';
}, false );
</script>
<!-- fancybox CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.min.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <a href="<?php bloginfo('url'); ?>" id="h_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt="MiyukiShirakawa" width="290" height="28"/></a>

    <div id="h_menu_btn_area">
        <a href="#menu" id="h_menu_btn" class="hamburger_btn">
            <div></div><div></div><div></div>
        </a>
    </div>
    <section class="navi-pc">
          <div class="pc_menu">Menu</div>
        <div class="navi-menu">
            <ul>
            <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
            <li><a href="<?php bloginfo('url'); ?>/biography/">Biography</a></li>
            <li><a href="<?php bloginfo('url'); ?>/news/">News</a></li>
            <li><a href="<?php bloginfo('url'); ?>/discography/">Discography</a></li>
            <li><a href="<?php bloginfo('url'); ?>/video/">Video</a></li>
            <li><a href="<?php bloginfo('url'); ?>/gallery/">Gallery</a></li>
            <li><a href="<?php bloginfo('url'); ?>#contact">Contact</a></li>
          </ul>
        </div>
      </section>
</header>
<div id="menu">
    <div id="menu_wrapper">
        <ul>
          <li><a href="<?php bloginfo('url'); ?>/"><span>Home</span></a></li>
          <li><a href="<?php bloginfo('url'); ?>/biography/"><span>Biography</span></a></li>
          <li><a href="<?php bloginfo('url'); ?>/news/"><span>News</span></a></li>
          <li><a href="<?php bloginfo('url'); ?>/discography/"><span>Discography</span></a></li>
          <li><a href="<?php bloginfo('url'); ?>/video/"><span>Video</span></a></li>
          <li><a href="<?php bloginfo('url'); ?>/gallery/"><span>Gallery</span></a></li>
          <li><a href="<?php bloginfo('url'); ?>#contact"><span>Contact</span></a></li>
        </ul>
    </div>
</div>
<?php if ( is_home() || is_front_page() ) : ?>
  <section id="full-img" class="box">
      <div class="container-fluid">
        <?php //if ( is_ipad() ) : ?>
        <div class="top-img-wrapped-ipd">
            <div class="top-image-1"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/miyuki-02.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shirakawa-02.png">
        </div>   
            <?php //elseif ( wp_is_mobile() ) : ?>
        <div class="top-img-wrapped-sp">
             <div class="top-image-2"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/miyuki_sp.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shirakawa_sp.png">
        </div> 
            <?php //else: ?>
        <div class="top-img-wrapped-pc">
            <div class="top-image-3"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/miyuki.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shirakawa.png">
        </div> 
            <?php //endif; ?>
        </div>   
      </div>
  </section>
  <?php endif; ?>
  