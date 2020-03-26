<?php get_header(); ?>
<main>
<?php
if ( have_posts() ) :
while ( have_posts() ) :
the_post();
?>
<div class="single-blog-content">
<div class="blog-content__tag"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
<div class="blog-content__date"><time class="" datetime="<?php the_time('c'); ?>"><?php the_time('Y年n月j日'); ?></time>
<?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?><br>
<time class="" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time('Y年n月j日'); ?></time>
<?php endif; ?>
</div>
<div class="blog-content__img">
<?php
if (has_post_thumbnail() ) {
the_post_thumbnail('large');
} else {
echo '<img src="'. esc_url(get_template_directory_uri()).'/images/noimg.png" alt="">';
}
?>
</div>
<div class="single-blog-article">
<?php the_content(); ?> 
</div>
<?php
wp_link_pages(
array(
'before' => '<nav class="entry-links">',
'after' => '</nav>',
'link_before' => '',
'link_after' => '',
'next_or_number' => 'number',
'separator' => '',
)
);
?>
</div>
<?php get_template_part('main-img'); ?>
<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>
