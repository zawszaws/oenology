<div class="post-title">

	<!-- Post Header Begin -->
	<h1><a href="<?php the_permalink(); //link Post Headline (H1) to post permalink ?>">
	<?php if ( get_the_title() ) {
		the_title(); // set Post Headline (H1) to Post Title 
	} else {
		echo '<em>(Untitled)</em>'; // set Post headline (H1) to "(Untitled)" if no Post Title is defined
	} ?>
</a>&nbsp;</h1>
	<!-- Post Header End -->

</div>

<div class="post-entry">

	<!-- Post Entry Begin -->
	<?php the_content(); ?>
	<ul class="audiovideo-meta">
		<li>
			<a href="<?php the_permalink(); // link to post permalink ?>" rel="bookmark" title="Permanent Link to <?php the_title(); // display Post Title in tooltip on hover ?>"> Permalink</a>
			<?php if ( ! is_attachment() ) { // shortlink isn't generated for attachmets ?>
				<strong>|</strong>
				<?php the_shortlink( 'Shortlink' ); // link to post shortlink ?>
			<?php } ?>
			<strong>|</strong>
			<a href="<?php comments_link(); ?>" target="_self" title="Comment on <?php the_title(); ?>">
			Comments (<?php comments_number('0','1','%'); // Display total number of post comments ?>)
			</a> 
			<strong> | </strong>
			<a href="<?php echo get_trackback_url(); // link to Trackback URL ?>" target="_self" title="Trackback to <?php the_title(); ?>">
			Trackback
			</a>
			<?php if ( is_singular() ) { // only display a Print link on single posts, pages, and attachments ?>
				<strong>|</strong> <a href="print" onclick="window.print();return false;">Print</a> 
			<?php } ?>
			<strong>|</strong>
			<?php edit_post_link('Edit','',''); // Display "Edit" link for logged-in Admin users ?>
		</li>
		<li>Filed in <?php the_category(', ');  // Display Post Categories ?></li>
		<li><?php the_tags(); // Display Post Tags ?></li>
	</ul>
	<!-- Post Entry End -->

</div>

<div class="post-footer">

	<!-- Post footer Begin -->
	<?php get_template_part('post-footer'); // post-footer.php contains post timestamp and copyright information ?>
	<!-- Post Footer End -->
			
</div>

<?php
/*
Reference:
=============================================================================
The following functions, tags, and hooks are used (or referenced) in this Theme template file:

***********************
get_template_part()
----------------------------------
get_template_part() is a WordPress template tag.
Codex reference: http://codex.wordpress.org/Function_Reference/get_template_part

get_template_part() is used to include a Theme template file within another. This function facilitates
re-use of Theme template files, and also facilitates child Theme template files to take precedence
over parent Theme template files.

get_template_part( $file ) will attempt to include file.php. The function will attempt to 
include files in the following order, until it finds one that exists:
 - the Theme's file.php
 - the parent theme's file.php

get_template_part( $file , $foo ) will attempt to include file-foo.php. The function will
attempt to include files in the following order, until it finds one that exists:
 - the Theme's file-foo.php
 - the Theme's file.php
 - the parent theme's file-foo.php
 - the parent theme-s file.php

=============================================================================
*/ ?>