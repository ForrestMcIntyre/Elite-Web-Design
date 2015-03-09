<?php get_header(); ?><h2>Blog</h2>
			<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="post post-<?php the_ID(); ?>">
	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<p><small>
	<span class="date"><?php the_date(); ?></span>
	<span class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></span>
	</small></p>
	<?php the_content(); ?>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</main>
<!-- End Main Content -->
<!-- Begin Sidebar -->
<aside>
	<div class="widget">
		<h2 class="widget-title">This is a Header Level 1 in the sidebar</h2>

		<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
	</div>
	<div class="widget">
		<h3 class="widget-title">Header Level 2</h3>
			       
		<ol>
		   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
		   <li>Aliquam tincidunt mauris eu risus.</li>
		</ol>
	</div>
	<div class="widget">
	<h4 class="widget-title">Header Level 3</h4>

	<ul>
	   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
	   <li>Aliquam tincidunt mauris eu risus.</li>
	</ul>

<?php get_footer(); ?>