<?php include "header.php" ?>

<!-- MAIN -->
  <div id="main">
    
    <!-- GLOBAL NAVI -->
    <?php include "gnavi.php" ?>

    <div id="right_column" class="index">

      <div class="post_feed event_schedule">
        <h2 class="small">Event Schedule</h2>

        <ul>
        <!-- start WP LOOP -->
        <?php
        query_posts( 'posts_per_page=2&cat=3' );
        if ( have_posts() ) :

          while ( have_posts() ) : the_post() ; ?>

            <li>
              <p class="date"><?php echo get_the_date( $d ); ?></p>
              <a href="<?php echo get_permalink() ?>">
                <h3 class="title"><?php the_title(); ?></h3>
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
                <div class="box">
                  <div class="article_excerpt_img">
                    <img src="<?php echo catch_that_image(); ?>" />
                  </div>
                  <div class="article_text">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="continue_read">
                    <a href="<?php echo get_permalink() ?>">
                      続きを読む
                    </a>
                  </div>
                </div>
            </li>

          <?php endwhile;

        else : ?>

          <li>
            <p>no contents</p>
          </li>

        <?php endif; ?>
        <!-- end WP LOOP -->

        </ul>

        <div class="read_more">
          <?php $cat_event_link_url = get_category_link( 3 ); {
            echo '<a href="' . $cat_event_link_url . '">過去のイベントスケジュールをみる</a>';
          } ?>
        </div>

      </div>


      <div class="post_feed blog_post">
        <h2 class="small">Blog Post</h2>

        <ul>
        <!-- start WP LOOP -->
        <?php
        query_posts( 'posts_per_page=3&cat=-3' );
        if ( have_posts() ) :

          while ( have_posts() ) : the_post() ; ?>

            <li>
              <a href="<?php echo get_permalink() ?>">
                <p class="date"><?php echo get_the_date( $d ); ?></p>
                <p class="title"><?php the_title(); ?></p>
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
              <div class="box">
                <div class="article_text">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="go_top"><a href="#">トップにもどる</a></div>
            </li>

          <?php endwhile;

        else : ?>

          <li>
            <p>no contents</p>
          </li>

        <?php endif; ?>
        <!-- end WP LOOP -->

        </ul>

        <div class="page_navi">
          <?php wp_pagenavi(); ?>
        </div>

      </div>

    </div>

  </div>

<?php include "footer.php" ?>