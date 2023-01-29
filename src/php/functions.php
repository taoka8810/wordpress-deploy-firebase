<?php 

// 管理バーを非表示
show_admin_bar(false);

function change_cron_port( $cron_request ) {
  $port = parse_url( $cron_request['url'], PHP_URL_PORT );
  $cron_request['url'] = str_replace( $port, '80', $cron_request['url'] );
  return $cron_request;
}
add_filter( 'cron_request', 'change_cron_port', 8000 );

// 投稿のアーカイブページ
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
function post_has_archive($args, $post_type) {
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'posts';
  }
  return $args;
}

// サムネイル画像有効化
add_theme_support('post-thumbnails');