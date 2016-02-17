<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
			<?php return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="commentInList" ';
?>

<!-- Start editing here. -->

<?php if ($comments) : ?>
	<!-- <h4><strong><?php comments_number('No Comments', 'One Comment', '% Comments' );?> on &#8220;<?php the_title(); ?>&#8221;</strong></h4> -->

	<div class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<div <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>" class="commentInList">
		
			<?php echo get_avatar( $comment, 32 ); ?>
			<p class="small"><?php comment_date('d / m / Y') ?>, <?php comment_time('G:m') ?></p>
			<h3><?php comment_author_link() ?></h3>
			<?php if ($comment->comment_approved == '0') : echo "<em>Your comment is awaiting moderation.</em>"; endif; ?>
			<?php comment_text() ?>
			<?php edit_comment_link('Edit'); ?>

			

		</div>

		<?php $comment = ( empty( $comment ) ) ? 'class="commentInList" ' : ''; ?>

	<?php endforeach; ?>

	</div>

	<?php else : // this is displayed if there are no comments so far ?>

		<?php if ('open' == $post->comment_status) : ?>

		<?php else : ?>
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h3>Leave a Reply</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

	<!-- <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>-->

<?php else : ?>
<form>
	<div class="form-group">
			<label for="author">Name<?php if ($req) echo ""; ?></label>
			<input type="text" class="form-control" name="author" id="author" value="<?php echo $comment_author; ?>" placeholder="Your Name" />
	</div>
	<div class="form-group">
		<label for="email">Email<?php if ($req) echo ""; ?></label>
		<input type="text" class="form-control" name="email" id="email" value="<?php echo $comment_author_email; ?>" placeholder="email@example.com" />
	</div>

	<!-- <p class="clearfix"><label for="url">Website</label> <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p> -->

<?php endif; ?>
	<div class="form-group">
		<label for="comment">Comment<?php if ($req) echo ""; ?></label>
		<textarea class="form-control" name="comment" id="comment" rows="10"></textarea>
	</div>


	<input class="btn btn-primary" name="submit" type="submit" id="submit" value="Submit Comment" />

	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; endif; ?>
