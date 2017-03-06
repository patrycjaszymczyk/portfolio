<?php get_header(); ?>

        <main class="blog-main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" class="post">
                    <header>
                        <div class="header-in">
                            <h1 class="blog-post-title"><?php the_title(); ?></h1>
                        </div>
                    </header>
                    <main class="container content">
                        <?php the_content(); ?>


                    </main>
                </article>
                <?php endwhile; endif; ?>
        </main>
        <!-- /.blog-main -->

            <?php get_footer(); ?>