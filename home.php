<?php get_header() ?>

<div class="posts posts__container container-fluid">
    <div class="row">
        <div class="col-12 col-lg-9">
            <h1 class="mb-4">Todas las entradas.</h1>
            <?php if (have_posts()) : the_post(); ?>
                <div class="post__latest-post">
                    <div class="post__latest-post__thumbnail <?php if (!has_post_thumbnail()) : echo 'post__latest-post__thumbnail--no-thumbnail';
                                                                endif; ?>">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail(
                                'post-thumbnail',
                                [
                                    'class' => 'img-fluid'
                                ]
                            );
                        else :
                        ?>
                            <i class="fas fa-image text-dark4 h1"></i>
                        <?php endif;  ?>
                    </div>

                    <div class="post__latest-post__caption">
                        <h3 class="post__latest-post__title"><?php the_title(); ?></h3>
                        <p class="post__excerpt">
                            <?php
                            $excerpt = get_the_excerpt();

                            $excerpt = substr($excerpt, 0, 160);
                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                            echo $result;
                            ?> [ <a href="<?php the_permalink(); ?>">...Leer</a> ]</p>
                    </div>
                </div>

                <div class="post-container">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post">
                            <a href="<?php the_permalink(); ?>" class="post__thumbnail <?php if (!has_post_thumbnail()) : echo 'post__thumbnail--no-thumbnail';
                                                        endif; ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail(
                                        'post-thumbnail',
                                        [
                                            'class' => 'img-fluid'
                                        ]
                                    );
                                else :
                                ?>
                                    <i class="fas fa-image text-dark4 h1"></i>
                                <?php endif;  ?>
                            </a>
                            <h3 class="post__title"><?php the_title() ?></h3>
                            <p class="post__excerpt text-dark4">
                                <?php
                                $excerpt = get_the_excerpt();

                                $excerpt = substr($excerpt, 0, 160);
                                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                echo $result;

                                ?><br>[ <a href="<?php the_permalink(); ?>">...Leer</a> ]</p>
                        </div>
                    <?php endwhile; ?>
                </div>

            <?php endif; ?>

            <div class="mt-5"><?php get_template_part('template-parts/pagination'); ?></div>
           
        </div>
        

        <div class="col-12 col-lg-3 mt-lg-5">
            <?php get_sidebar() ?>
        </div>
    </div>
</div>
<?php get_footer() ?>