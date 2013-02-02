              <?php if ( have_comments() ) : ?>
                <ol class="comment_list">
                  <?php wp_list_comments( 'avatar_size=55' ); ?>
                </ol>
              <?php else: ?>
                <p>コメントはありません</p>
              <?php endif; ?>