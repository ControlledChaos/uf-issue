<?php
/**
 * Contains codes that run through wp_list_comment callback
 * 
 * Note: no </li> closure needed
 */


switch ( $comment->comment_type ){
	case 'pingback':
	case 'trackback':
		break;
	
	default:
?>

<li <?php comment_class(); ?> id="<?php comment_ID(); ?>">
	<article id="comment-<?php comment_ID(); ?>" class="comment">
		<header class="comment-meta vcard">
			<?php echo get_avatar($comment, 60); ?>
		</header>
		<div class="comment-content-wrapper">
			<?php if ( '0' == $comment->comment_approved ): ?>
				<p class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></p>
			<?php endif ?>
			<div class="comment-author">
				<cite class="fn"><?php comment_author_link(); ?> says:</cite>
			</div>
			<div class="comment-time">
				<a href="<?php comment_link(); ?>">
					<time datetime="<?php comment_time('c'); ?>"><?php printf('%1$s', get_comment_date()) ?></time>
				</a>
			</div>
			<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( '' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
			<div class="comment-content">
				<?php comment_text(); ?>
			</div>
			<?php edit_comment_link( __( 'Edit' ), '<p class="edit-link">', '</p>' ); ?>
		</div>
	</article>

<?php
		break;
}
?>