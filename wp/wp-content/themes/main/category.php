<?php include "header.php" ?>

<!-- MAIN -->
  <div id="main" class="blog category">
    
    <!-- GLOBAL NAVI -->
    <?php include "gnavi.php" ?>

    <div id="left_column">
      <h2 class="midium">Blog</h2>

      <!-- start WP LOOP -->
      <?php $categories = get_the_category(); $cat = $categories[0];
        global $query_string;
        $cat_id = $cat -> cat_ID;
        query_posts( $query_string . '&posts_per_page=3' );

      if ( have_posts() ) :

        while ( have_posts() ) : the_post() ; ?>

          <div class="article">
            <p class="date"><?php echo get_the_date( $d ); ?></p>
            <a href="<?php echo get_permalink() ?>">
              <h3 class="article_title"><?php the_title(); ?></h3>
            </a>
            <span class="category">
              <?php $categories = get_the_category(); $categories = $categories[0];
                $cat_id = $categories -> cat_ID;
                $cat_name = $categories -> cat_name;
                $cat_url = get_category_link( $cat_id ); {
                  echo 'Category: <a href="' . $cat_url . '">' . $cat_name . '</a>';
                }
              ?>
            </span>
            <div class="article_content">
              <div class="article_text">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <div class="go_top"><a href="#">トップにもどる</a></div>

        <?php endwhile;

      else: ?>

        <div class="article">
          <div class="article_header">
            <h3>ごめんなさい</h3>
          </div>
          <div class="article_text">
            お探しの記事は見つかりませんでした！<br />
            ブラウザの戻るボタンでひとつ前に戻るか、<br />
            ロゴをクリックしてホーム画面に戻ってください。   
          </div>
        </div>

      <?php endif; ?>
      <!-- end WP LOOP -->

      <div class="page_navi">
        <?php wp_pagenavi(); ?>
      </div>

    </div>

  </div>

<?php include "footer.php" ?>