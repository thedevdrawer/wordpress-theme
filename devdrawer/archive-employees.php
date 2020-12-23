<?php get_header(); ?>
<div class="container-fluid">
    <h1 class="archive-title">Employees</h1>
    <div class="row">
        <div class="col">
            <?php if( have_posts()) : ?>
                <div class="row">
                    <?php while ( have_posts() ): the_post(); ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', ['class' => 'img-fluid img-thumbnail', 'title'=>get_the_title()]); ?></a>
                                    <br>
                                    <br>
                                    <h2 class="text-center"><?php the_title(); ?></h2>
                                    <?php echo tr_posts_field('position'); ?>
                                    <p class="text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>