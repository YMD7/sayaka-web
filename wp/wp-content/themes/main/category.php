<?php include "header.php" ?>

<!-- MAIN -->
  <div id="main" class="blog category">
    
    <!-- GLOBAL NAVI -->
    <?php include "gnavi.php" ?>

    <div id="left_column">
      <h2 class="large">Blog</h2>

      <!-- start WP LOOP -->
      <?php $categories = get_the_category(); $cat = $categories[0];
        $cat_id = $cat -> cat_ID;
        query_posts( 'posts_per_page=4&cat=' . $cat_id );

      if ( have_posts() ) :

        while ( have_posts() ) : the_post() ; ?>

          <div class="article">
            <div class="article_header">
              <span class="date"><?php echo get_the_date( $d ); ?></span>
              <h3><a href="<?php echo get_permalink(); ?>" ><?php the_title(); ?></a></h3>
              <span class="category">
                <?php
                  $cat_name = $cat -> cat_name;
                  $cat_url = get_category_link( $cat_id ); {
                    echo 'Category: <a href="' . $cat_url . '">' . $cat_name . '</a>';
                  }
                ?>
              </span>
            </div>
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