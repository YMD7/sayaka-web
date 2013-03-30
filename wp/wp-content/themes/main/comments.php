            <?php if ( have_comments() ) : ?>

				<div class="comments_area">
					<h4>Comment</h4>
					<ol class="comment_list">

					    <?php wp_list_comments( 'avatar_size=55' ); ?>
						<?php

						$fields = array(
						    'author' => '<span class="formlabel">お名前</span><br /><input id="author" name="author" type="text" /><br />',

						    'email'  => '<span class="formlabel">メールアドレス（公開されません）</span><br /><input id="email" name="email" type="text" /><br />',

						    'url'    => '',
						    );
						$comment_field = '<span class="formlabel">コメントをどうぞ！</span><br /><textarea id="comment" name="comment"></textarea>';
						$args = array(
							'fields' => apply_filters( 'comment_form_default_fields', $fields ),
							'logged_in_as' => NULL,
							'title_reply' => '',
							'comment_field' => $comment_field,
							'comment_notes_before' => '<h4 class="leave_comment">投稿する</h4><br />',
							'comment_notes_after' => '',
							'label_submit' => '送信'
							);

						comment_form( $args, $post_id ); ?>

					</ol>
				</div>

			<?php else: ?>

				<div class="comments_area">
					<h4>Comment</h4>
					<p class="no_comments">コメントはまだありません</p>
					<?php

					$fields = array(
					    'author' => '<span class="formlabel">お名前</span><br /><input id="author" name="author" type="text" /><br />',

					    'email'  => '<span class="formlabel">メールアドレス（公開されません）</span><br /><input id="email" name="email" type="text" /><br />',

					    'url'    => '',
					    );
					$comment_field = '<span class="formlabel">コメントをどうぞ！</span><br /><textarea id="comment" name="comment"></textarea>';
					$args = array(
						'fields' => apply_filters( 'comment_form_default_fields', $fields ),
						'logged_in_as' => NULL,
						'title_reply' => '',
						'comment_field' => $comment_field,
						'comment_notes_before' => '<h4 class="leave_comment">投稿する</h4><br />',
						'comment_notes_after' => '',
						'label_submit' => '送信'
						);

					comment_form( $args, $post_id ); ?>
					
				</div>
				
			<?php endif; ?>
