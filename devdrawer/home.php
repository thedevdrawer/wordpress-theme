<?php get_header(); ?>
<div class="container-fluid">
    <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
    <div class="row">
        <div class="col">
            <?php if( have_posts()) : ?>
                <div class="row">
                    <?php while ( have_posts() ): the_post(); ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', ['class' => 'img-fluid img-thumbnail', 'title'=>get_the_title()]); ?></a>
                                    <br>
                                    <br>
                                    <h2 class="text-center"><?php the_title(); ?></h2>
                                    <?php the_excerpt(); ?>
                                    <p class="text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php
                the_posts_pagination(
                    array(
                        'prev_text' => 'Previous',
                        'next_text' => 'Next'
                    )
                );
            ?>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar( 'sidebar' ); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>