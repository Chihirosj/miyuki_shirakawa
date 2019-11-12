<?php
  function my_scripts_method() {
    wp_deregister_script('jquery');
  	wp_enqueue_script('jquery-3', get_template_directory_uri().'/js/jquery-3.2.1.min.js', array(), '3.2.1', true);
    wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', array('jquery-3'), false, true);
    wp_enqueue_script('bootstrap-4', get_template_directory_uri().'/js/bootstrap-4.0.0.js', array('popper'), '4.0.0', true);
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('bootstrap-4'),false, true);
    wp_enqueue_script('scrollify', 'https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js', array('aos'), false, true);
    wp_enqueue_script('scrollify-2', 'https://cdn.jsdelivr.net/npm/jquery-scrollify@1/jquery.scrollify.min.js', array('scrollify'), false, true);
    wp_enqueue_script('fancybox', get_template_directory_uri().'/js/jquery.fancybox.js', array('scrollify-2'), false, true);      
    wp_enqueue_script('myedit', get_template_directory_uri().'/js/myedit.js', array(), false, true);

}
  add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

  // add_theme_support('menus');

  add_theme_support('post-thumbnails');

  /**
 * 前後リンクの出力部分で、a要素の内側にさらにspanを入れる
 *
 * @param string  $link     Link permalink format.
 *
 * @return string
 */
function my_post_link( $link ) {
	$link = preg_replace( '/<a href="(.+?)">(.+?)<\/a>/', '<a href="$1"><span>$2</span></a>', $link );
	return $link;
}
add_filter( 'previous_post_link', 'my_post_link' );
add_filter( 'next_post_link',     'my_post_link' );

function is_ipad() {
  $useragents = array(
    'iPad',           // Apple iPad
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

