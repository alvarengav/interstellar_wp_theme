<?php get_header() ?>

<div id="carouselExampleIndicators" class="carousel slide interstellar-carousel" data-ride="carousel">
    <div class="interstellar-carousel-caption">
        <div class="caption-content">
            <p class="text-orange mb-0 wow animate__fadeInUp">Interstellar</p>
            <h1 class="caption-title mt-0 wow animate__fadeInUp" data-wow-delay="500ms">Un tema para wordpress</h1>
            <p class="caption-text wow animate__fadeInUp" data-wow-delay="1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ab obcaecati maiores quidem expedita sunt dicta porro, aliquam, facilis unde sapiente sint placeat! Neque vitae facilis ullam quidem optio magnam.</p>
            <a class="btn btn-orange wow animate__fadeInUp" data-wow-delay="1.5s" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Entradas</a>
        </div>
    </div>
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/gargantua-sm.jpg" media="(max-width: 414px)">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/gargantua.jpg" class="d-block w-100" alt="...">
            </picture>
        </div>
        <div class="carousel-item">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/interstellar-sm-1.jpg" media="(max-width: 414px)">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/interstellar-1.jpg" class="d-block w-100" alt="...">
            </picture>
        </div>
        <div class="carousel-item">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/interstellar-sm-2.jpg" media="(max-width: 414px)">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/interstellar-2.jpg" class="d-block w-100" alt="...">
            </picture>
        </div>
    </div>
    <div class="carousel-control d-none d-lg-block">
        <a class="carousel-control__prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control__next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section id="technologies" class="container-fluid bg-dark2">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h3 class="mb-3 d-inline-block">Tecnologias usadas</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati amet ipsam molestias voluptate velit</p>
        </div>
    </div>
    <div class="row flex-column flex-lg-row technology-container">
        <div class="technology-box">
            <div class="technology__icon"><i class="fab fa-html5"></i></div>
            <h5 class="technology__title">HTML5</h5>
            <p class="technology__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reprehenderit optio.
            </p>
        </div>
        <div class="technology-box">
            <div class="technology__icon"><i class="fab fa-js-square"></i></div>
            <h5 class="technology__title">Javascript</h5>
            <p class="technology__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reprehenderit optio.
            </p>
        </div>
        <div class="technology-box">
            <div class="technology__icon"><i class="fab fa-sass"></i></div>
            <h5 class="technology__title">Sass</h5>
            <p class="technology__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reprehenderit optio.
            </p>
        </div>
        <div class="technology-box">
            <div class="technology__icon"><i class="fab fa-bootstrap"></i></div>
            <h5 class="technology__title">Bootstrap</h5>
            <p class="technology__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reprehenderit optio.
            </p>
        </div>
        <div class="technology-box">
            <div class="technology__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                    <title>icon-square-small</title>
                    <path id="white-part" fill="#FFF" d="M300 .1L565 150v299.9L300 599.8 35 449.9V150z" />
                    <path class="orange-area" fill="#8ED6FB" d="M517.7 439.5L308.8 557.8v-92L439 394.1l78.7 45.4zm14.3-12.9V179.4l-76.4 44.1v159l76.4 44.1zM81.5 439.5l208.9 118.2v-92l-130.2-71.6-78.7 45.4zm-14.3-12.9V179.4l76.4 44.1v159l-76.4 44.1zm8.9-263.2L290.4 42.2v89l-137.3 75.5-1.1.6-75.9-43.9zm446.9 0L308.8 42.2v89L446 206.8l1.1.6 75.9-44z" />
                    <path class="orange-area" fill="#1C78C0" d="M290.4 444.8L162 374.1V234.2l128.4 74.1v136.5zm18.4 0l128.4-70.6v-140l-128.4 74.1v136.5zM299.6 303zm-129-85l129-70.9L428.5 218l-128.9 74.4-129-74.4z" />
                </svg>
            </div>
            <h5 class="technology__title">Webpack</h5>
            <p class="technology__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reprehenderit optio.
            </p>
        </div>
        <div class="technology-box">
            <div class="technology__icon"><i class="fab fa-git-square"></i></div>
            <h5 class="technology__title">Git</h5>
            <p class="technology__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reprehenderit optio.
            </p>
        </div>
    </div>
</section>

<section id="recent-posts-section" class="container-fluid">
    <h4 class="posts-section__title">Ultimas Entradas</h4>

    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 3, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));

    query_posts(array(
        'posts_per_page' => 4,
    ));

    if (have_posts()) :
    ?>
        <div class="row posts-container">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-12 col-lg-3 justify-content-center">
                    <div class="post">
                        <div class="post__thumbnail d-flex justify-content-center align-items-center <?php if (has_post_thumbnail()) : echo 'post__thumbnail--has';
                                                    endif; ?>">
                            <?php
                            if (has_post_thumbnail()) :
                                the_post_thumbnail(
                                    'post-thumbnail',
                                    [
                                        'class' => 'img-fluid'
                                    ]
                                );
                            else : ?>
                                <i class="fas fa-image text-dark4 h1"></i>
                            <?php endif; ?>
                        </div>
                        <div class="post__title h4"><?php the_title() ?></div>
                        <p class="post__excerpt text-dark4">
                            <?php
                            $excerpt = get_the_excerpt();

                            $excerpt = substr($excerpt, 0, 160);
                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                            echo $result . esc_html__("[...]");

                            ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-orange">Ver m&aacute;s</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>

<?php get_footer() ?>