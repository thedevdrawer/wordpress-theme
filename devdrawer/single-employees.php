<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php if( have_posts()) : ?>
                    <?php while ( have_posts() ): the_post(); ?>
                    <div class="row"> 
                        <div class="col">
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid img-thumbnail', 'title'=>get_the_title()]); ?>
                        </div>
                        <div class="col-md-9">
                            <?php the_title('<h1 class="title">', '</h1>'); ?>
                            <br>
                            <?php the_content(); ?>
                            Position: <?php echo tr_posts_field('position'); ?>
                            <br>
                            Hire Date: <?php echo tr_posts_field('hiredate'); ?>
                            <br>
                            <?php
                                $repeating = tr_posts_field('repeating_fields');
                                foreach ($repeating as $repeat) :
                                    echo $repeat['text'].'<br>';
                                    echo $repeat['editor'].'<br>';
                                endforeach;
                            ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>