<?php 
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
 
  if(empty($first_img)){
    $first_img = "http://sayaka.main.jp/wp-content/themes/main/images/profile_smile_img.JPG";
  }
  return $first_img;
}
?>