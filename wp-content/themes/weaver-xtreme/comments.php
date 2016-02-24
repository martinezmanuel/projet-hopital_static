<?php
if ( !defined('ABSPATH')) exit; // Exit if accessed directly
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to weaverx_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Weaver X
 * @since Weaver Xtreme 1.0
 *
 *  	>>>> DO NOT EDIT THIS FILE <<<<
 *
 * Warning! DO NOT EDIT THIS FILE, or any other theme file! If you edit ANY theme
 * file, all your changes will be LOST when you update the theme to a newer version.
 * Instead, if you need to change theme functionality, CREATE A CHILD THEME!
 *
 *	>>>> DO NOT EDIT THIS FILE <<<<
 */


	if ( post_password_required() ) { ?>

		<p class="nopassword"><?php echo __( 'This post is password protected. Enter the password to view any comments.','weaver-xtreme'); ?></p>
<?php
	/* Stop the rest of comments.php from being processed,
	 * but don't kill the script entirely -- we still have
	 * to fully load the template.
	 */
		return;
	}
?>

<?php
	$c_counts = get_comment_count(get_the_ID());
	$c_count = $c_counts['approved'];
	if ( comments_open() || ( $c_count > 0 && ! weaverx_getopt_checked('hide_old_comments') ) ) {
		echo("\t\t<hr class='comments-hr' />\n");

		echo '<div id="comments">';
		weaverx_inject_area('precomments');

		$ct_class = ( $c_count < 1 ) ? ' class="no-comments-made"' : '';
?>
		<header id="comments-title"<?php echo $ct_class;?>>
		<h3><?php echo apply_filters('weaverx_comments_title', __('Comments','weaver-xtreme')); ?></h3>
				<h4>
<?php		printf("<em>%s</em> &#8212; ",get_the_title()); comments_number(); /* em-dash */ ?>
		</h4>
		</header>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php echo __( 'Comment navigation','weaver-xtreme'); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( apply_filters('weaverx_older_comments',__( '&larr; Older Comments','weaver-xtreme')) ); ?></div>
			<div class="nav-next"><?php next_comments_link( apply_filters('weaverx_newer_comments',__( 'Newer Comments &rarr;','weaver-xtreme')) ); ?></div>
		</nav>
		<?php } // check for comment navigation ?>

		<ol class="commentlist">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use weaverx_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define weaverx_comment() and that will be used instead.
				 * See weaverx_comment() in weaverx/functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'weaverx_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php echo __( 'Comment navigation','weaver-xtreme'); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( apply_filters('weaverx_older_comments',__( '&larr; Older Comments','weaver-xtreme')) ); ?></div>
			<div class="nav-next"><?php next_comments_link( apply_filters('weaverx_newer_comments',__( 'Newer Comments &rarr;','weaver-xtreme')) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php
		if ( comments_open() ) {
			comment_form();
		}
		weaverx_inject_area('postcomments');
		echo "</div><!-- #comments -->\n";

	} else if ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) {
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
	?>
		<p class="nocomments"><?php echo __( 'Comments are closed.','weaver-xtreme'); ?></p>
<?php
	}
?>
