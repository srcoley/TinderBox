<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view any comments</p>
</div>

	<?php
			return;
		endif;
	?>

	<?php if ( have_comments() ) : ?>

	<h2><?php comments_number(); ?></h2>

	<ol>
		<?php wp_list_comments(); ?>
	</ol>

	<?php
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	
	<p>Comments are closed</p>
	
	<?php endif; ?>

	<?php
		$comments_args = array(
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
		'email' => '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' . '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>' ) ) 
);

comment_form($comments_args);
	?>

</div><!-- #comments -->
