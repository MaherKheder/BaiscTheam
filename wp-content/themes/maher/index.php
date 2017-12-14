<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php while (have_posts()) : the_post() ?>
            <div class="col-md-6">
                <div class="home-post">
                    <div class="post-title">
                        <a href="<?php the_permalink() ?>"><h2><?php echo substr(get_the_title(), 0, 38) ?></h2></a>
                        <span class="post-author">
                            <i class="fa fa-user"></i> <?php the_author_posts_link() ?>
                        </span>
                        <span class="post-date">
                            <i class="fa fa-calendar"></i> <?php the_time('F j, Y') ?>
                        </span>
                        <span class="post-comments">
                            <i class="fa fa-comments"></i>
                            <?php comments_popup_link('0 Comments', 'One Comment', '% Comments', 'comment-url') ?>
                        </span>
                    </div>

                    <img class="img-responsive img-thumbnail" src="<?php the_post_thumbnail_url() ?>" alt="">
                    
                    <div class="post-content">
                        <?php the_excerpt() ?>
                    </div>
                    <hr>
                    <div class="categories">
                        <i class="fa fa-tags"></i>
                        <?php the_category(', ') ?>
                        <?php the_tags(', ') ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <div class="posts-pergention">
            <?php previous_posts_link('Prev') ?>
            <?php next_posts_link('Next') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>


