<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
			<?php return;
		}
	}
?>

<?php if ($comments) : ?>
	<h3><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>

	<div class="comment-list">
		<?php foreach ($comments as $comment) : ?>
			<div id="comment-<?php comment_ID() ?>">
				<div class="author">
					<?php echo get_avatar( $comment, 64 ); ?>
					<h3><?php comment_author_link() ?></h3>
					<div class="comment-date"><?php comment_date('F jS, Y') ?></div>
				</div>
				<div class="comment">
					<?php edit_comment_link('edit','',''); ?>
					<?php if ($comment->comment_approved == '0') : echo "<p><em>Your comment is awaiting moderation.</em></p>"; endif; ?>
					<?php comment_text() ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php else : ?>
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
	<div class="new-comment">
		<h3>Leave a Reply</h3>

		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if ( $user_ID ) : ?>
					<p>
						Logged in as
						<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.
						<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a>
					</p>
				<?php else : ?>
					<table><tr>
						<td><label for="author">Name <?php if ($req) echo "(required)"; ?></label></td>
						<td><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></td>
					</tr><tr>
						<td><label for="email">Email (will not be shared<?php if ($req) echo ", required"; ?>)</label></td>
						<td><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></td>
					</tr><tr>
						<td><label for="url">Website</label></td>
						<td><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></td>
					</tr></table>
				<?php endif; ?>
				<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
				<p class="clearfix"><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /></p>
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				<?php do_action('comment_form', $post->ID); ?>
			</form>
		<?php endif; ?>
	</div>
<?php endif; ?>
