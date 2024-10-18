<!DOCTYPE html>
<html lang="fa">
<meta charset="utf-8">
<head>
    <?php get_header(); ?>
</head>
<body>
<div class="pg-shop">
    <?php
    $my_query = new WP_Query(array(
        'post_type'	=>	'product','post_status'	=>	'publish','cat' => '1',
        'posts_per_page'	=> 10,
        'order'	=> 'DESC',
        'orderby'	=> 'ID',


        'paged'=> ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1,
    ));
    if($my_query->have_posts()) :  ?>
        <!-- شروع شرط -->
        <?php while($my_query->have_posts()) : $my_query->the_post();?>
            <!-- شروع حلقه -->
        <div class="product-boxes-pg">
            <div class="product-box">
                <a href="<?php the_permalink(); ?>">
                    <div class="product-box-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="product-box-title">
                        <a href="">
                            <h5 class="text-overflow-2 farsinum">
                                <?php the_title();?>
                            </h5>
                        </a>
                    </div>
                    <div class="product-box-suggest-price d-flex align-items-center justify-content-betwee">
                        <del class="font-16 farsinum"><?php echo the_field('price'); ?></del>
                        <ins class="font-25 farsinum"><?php echo the_field('pricetakhfif'); ?> <span>تومان</span></ins>
                    </div>
                    <div class="product-box-hover-action">
                        <nav class="navbar navbar-expand justify-content-center">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a href="<?php the_permalink(); ?>" class="nav-item product-box-hover-item me-3">مشاهده محصول</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </a>
            </div>
        </div>
            <!--کدهای  حلقه را باید در این محل قرار دهید-->
            <!--پایان حلقه-->
        <?php endwhile; ?><!--پایان شرط-->
    <?php endif; ?>
    <!--ریست نمودن کوئری-->
    <?php wp_reset_query();?>
</div>



<?php get_footer(); ?>


</body>
</html>