<?php 

// 管理バーを非表示
show_admin_bar(false);

function change_cron_port( $cron_request ) {
  $port = parse_url( $cron_request['url'], PHP_URL_PORT );
  $cron_request['url'] = str_replace( $port, '80', $cron_request['url'] );
  return $cron_request;
}
add_filter( 'cron_request', 'change_cron_port', 8000 );