<?php get_header(); ?>
<main class="blog-main">
    <?php if (have_posts()) : while (have_posts()) : the_post();
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );?>
    <style>
        .post header {
            background: url("<? echo $large_image_url[0]; ?>") center center;
            background-size: cover;
            background-position: 0% 0px;
        }
    </style>
    <article id="post-<?php the_ID(); ?>" class="post">
        <header>
            <div class="header-in">
                <h1 class="blog-post-title"><?php the_title(); ?></h1>
                <p><?php the_time( 'F j, Y' ); ?></p>
            </div>
        </header>
        <main class="container content"><?php the_content(); ?></main>

        <footer>
            <p class="p-tags"><?php the_tags(); ?></p>
        </footer>
    </article>
    <?php endwhile; endif; ?>
</main><!-- /.blog-main -->

<?php get_footer(); ?>