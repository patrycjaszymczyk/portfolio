<?php get_header(); ?>
<header class="newsfeed">
    <div class="header-in">
        <h1 class="blog-post-title">Aktualności</h1>
    </div>
</header>


<main class="blog-main container padding">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="col-md-4 news-min">
        <header>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php if ( has_post_thumbnail()) : ?>
                <figure class="post-thumb">
                    <?php the_post_thumbnail('big-thumb'); ?>
                </figure>
                <?php endif; ?>
                <h2><?php the_title(); ?></h2></a><small><?php the_time( 'F j, Y' ); ?></small>
        </header>


        <?php the_excerpt(); ?>
    </article>
    <?php endwhile; endif; ?>

    <ul class="pager">
        <li class="pull-left"><?php next_posts_link( __( '&larr; Starsze wpisy', 'wpboot' ) ); ?></li>
        <li class="pull-right"><?php previous_posts_link( __( 'Nowsze wpisy &rarr;', 'wpboot' ) ); ?></li>
    </ul>
</main>

<?php get_footer(); ?>