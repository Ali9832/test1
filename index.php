<!DOCTYPE html>
<html lang="fa">
<meta charset="utf-8">
<head>
	<?php get_header(); ?>
</head>
<body>
<!-- start main slider -->

<div class="main-slider">
    <div class="container-fluid">
        <div class="row gy-3">
            <div class="col-xl-3 col-lg-4 orderlgl-1 order-2">
                <div class="slider-parent-two">
                    <div class="suggest-moment-parent">
                        <div class="swiper suggetMoment">
                            <div class="swiper-wrapper position-relative">
                                <div class="clasme2 farsinum">
                                    <?php
                                    $mafatihproduct = new WP_Query(array(
                                        'post_type'	=>	'product','post_status'	=>	'publish','cat'	=>	6,
                                        'posts_per_page'	=> 10,
                                        'order'	=> 'DESC',
                                        'orderby'	=> 'ID',


                                        'paged'=> ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1,
                                    ));
                                    if($mafatihproduct->have_posts()) :  ?>
                                        <!-- شروع شرط -->
                                        <?php while($mafatihproduct->have_posts()) : $mafatihproduct->the_post();?>
                                            <!-- شروع حلقه -->
                                            <div class="product-box-suggest">
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="product-box-suggest-image">
                                                        <?php echo the_post_thumbnail(); ?>
                                                    </div>
                                                    <div class="product-box-suggest-title">
                                                        <h6 class="text-overflow-1">
                                                            <?php the_title(); ?>
                                                        </h6>
                                                    </div>
                                                    <div class="product-box-suggest-price">
                                                        <del><?php echo the_field('price'); ?></del>
                                                        <ins><?php echo the_field('pricetakhfif'); ?> <span>تومان</span></ins>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--کدهای  حلقه را باید در این محل قرار دهید-->
                                            <!--پایان حلقه-->
                                        <?php endwhile; ?><!--پایان شرط-->
                                    <?php endif; ?>
                                    <!--ریست نمودن کوئری-->
                                    <?php wp_reset_query();?>

                                </div>
                            </div>
<!--                            <div class="swiper-progress-bar">-->
<!--                                <span class="slide_progress-bar"></span>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 order-lg-2 order-1 masterslider" >
                <?php echo do_shortcode('[masterslider id="1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--master slider-->

<!-- end main slider -->

<!-- start categories -->

<div class="categories free-swiper py-30">
    <div class="container-fluid position-relative">
        <div class="section-title">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="title-font h1 farsinum">
                            دسته بندی
                            <span class="main-color-two-color farsinum">
                                محصولات
                            </span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
<!--                <div class="col-sm-4">-->
<!--                    <div class="section-title-link text-sm-end text-start">-->
<!--                        <a class="btn main-color-two-bg border-0" href=""> مشاهده همه</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
        <div class="swiper free-mode">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="">
                        <div class="cat-item">
                            <div class="cat-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/pic/quran_7222172.WEBP" alt="">
                            </div>
                            <div class="cat-item-title farsinum"><h6>            قرآن و قرآن صندوقی
                                </h6></div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <div class="cat-item">
                            <div class="cat-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/pic/quran_3858895.WEBP" alt="">
                            </div>
                            <div class="cat-item-title farsinum"><h6> مفاتیح الجنان و ادعیه
                                    و ارتباط با خدا</h6></div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <div class="cat-item">
                            <div class="cat-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/pic/book_772669.WEBP" alt="">
                            </div>
                            <div class="cat-item-title farsinum"><h6>
                                    نمونه طرح های یادبود وقف نامه
                                </h6></div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <div class="cat-item">
                            <div class="cat-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/pic/books_3771417.WEBP" alt="">
                            </div>
                            <div class="cat-item-title farsinum"><h6>                     محصولات دیگر
                                </h6></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--اینجا باید دسته بندی ها باشن -->


<!-- end categories -->


<!-- start advert -->

<div class="advert py-30">
    <div class="container-fluid">
        <div class="row gy-4">
            <div class="col-lg-6">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/pic/advert-right.webp" class="w-100" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/pic/advert-left.webp" class="w-100" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<!--master slider2-->

<!-- end advert -->

<!-- start product slider -->

<div class="product-slider py-30 site-slider">
    <div class="container-fluid">
        <div class="section-title">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="title-font h1 farsinum">محصولات <span class="main-color-two-color">پر فروش</span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section-title-link text-sm-end text-start">
                        <a class="btn main-color-two-bg border-0 farsinum" href=""> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pro-slider">
                <div class="clasme farsinum">
                    <?php
                    $productslider = new WP_Query(array(
                        'post_type'	=>	'product','post_status'	=>	'publish','cat'	=>	'6,1,8',
                        'posts_per_page'	=> 50,
                        'order'	=> 'DESC',
                        'orderby'	=> 'ID',


                        'paged'=> ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1,
                    ));
                    if($productslider->have_posts()) :  ?>
                        <!-- شروع شرط -->
                        <?php while($productslider->have_posts()) : $productslider->the_post();?>
                            <!-- شروع حلقه -->
                            <div class="product-box">
                              <a href="<?php the_permalink(); ?>">
                                  <div class="product-box-image">
                                      <?php the_post_thumbnail(); ?>
                                  </div>
                                  <div class="product-box-title">
                                      <a href="">
                                          <h5 class="text-overflow-2">
                                              <?php the_title();?>
                                          </h5>
                                      </a>
                                  </div>
                                  <div class="product-box-suggest-price d-flex align-items-center justify-content-betwee">
                                      <del class="font-16"><?php echo the_field('price'); ?></del>
                                      <ins class="font-25"><?php echo the_field('pricetakhfif'); ?> <span>تومان</span></ins>
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
                        <?php endwhile; ?>
                    <?php endif; ?>
                            <!--پایان شرط-->

                    <!--ریست نمودن کوئری-->
                    <?php wp_reset_query();?>
                </div>
            <div class="arrows">
                <i class="bi bi-arrow-right-circle slicknextbtn"></i>
                <i class="bi bi-arrow-left-circle slickprevbtn"></i>
            </div>
<!--            <button type="button" data-role="none" class="slick-prev slick-arrow prev" aria-label="Previous" role="button" style="display: block;">next</button>-->
<!--            <button type="button" data-role="none" class="slick-next slick-arrow next" aria-label="Next" role="button" style="display: block;"> previouse</button>-->
        </div>
    </div>
</div>

<!-- end product slider -->

<!-- start advert -->

<div class="advert py-30 d-lg-block d-none">
    <div class="container-fluid me">
        <div class="row gx-2 gy-4">
            <div class="col-lg-6">
                <a href="https://yademanbook.com/product/%d8%af%db%8c%d9%88%d8%a7%d9%86-%d8%ad%d8%a7%d9%81%d8%b8-%d9%be%d8%a7%d9%84%d8%aa%d9%88%db%8c%db%8c-%d8%b1%d9%86%da%af%db%8c/">
                    <img src="<?php echo get_template_directory_uri(); ?>/pic/Untitled-2 _3_editleft.webp" class="w-100 rounded-4" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a href="https://yademanbook.com/product/%d8%af%db%8c%d9%88%d8%a7%d9%86-%d8%ad%d8%a7%d9%81%d8%b8-%d9%be%d8%a7%d9%84%d8%aa%d9%88%db%8c%db%8c-%d8%b1%d9%86%da%af%db%8c/">
                    <img src="<?php echo get_template_directory_uri(); ?>/pic/Untitled-1 editleft.webp" class="w-100 rounded-4" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- end advert -->

<!-- start blog slider -->

<div class="blog-slider py-30 free-swiper-two">
    <div class="container-fluid">

<!--        <div class="section-title">-->
<!--            <div class="row gy-3 align-items-center">-->
<!--                <div class="col-sm-8">-->
<!--                    <div class="section-title-title">-->
<!--                        <h2 class="title-font h1">جدید ترین <span class="main-color-two-color">مطالب</span>-->
<!--                        </h2>-->
<!--                        <div class="Dottedsquare"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-4">-->
<!--                    <div class="section-title-link text-sm-end text-start">-->
<!--                        <a class="btn main-color-two-bg border-0" href=""> مشاهده همه</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="swiper blog-slider-swiper">

            <div class="swiper-wrapper">

<!--                <div class="swiper-slide">-->
<!--                    <div class="blog-item">-->
<!--                        <div class="blog-item-parent">-->
<!--                            <div class="blog-item-image">-->
<!--                                <img src="" alt="">-->
<!--                            </div>-->
<!--                            <div class="blog-item-desc">-->
<!--                                <div class="blog-item-desc-parent">-->
<!--                                    <div class="blog-item-title">-->
<!--                                        <h5 class="title-font text-overflow-2">-->
<!--                                        </h5>-->
<!--                                        <p class="mb-0 text-overflow-2">-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                    <div class="blog-item-link">-->
<!--                                        <a href="">-->
<!--                                            <span>خواندن ادامه</span>-->
<!--                                            <i class="bi bi-arrow-left"></i>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="blog-item-date">-->
<!--                                    <div class="blog-item-date-date">-->
<!--                                        <i class="bi bi-clock me-1"></i>-->
<!--                                        <span>1402/09/17</span>-->
<!--                                    </div>-->
<!--                                    <div class="blog-item-comment">-->
<!--                                        <span class="title-font font-16">3</span> <span class="text-muted">نظر</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
    <div class="float-btn">
        <div class="container-fluid">
            <!-- contact us floating -->
            <div class="btn_collapzion" id="btncollapzion"></div>
            <div class="" id="contactOverlay"></div>
            <!-- end contact us floating -->
        </div>
    </div>
<!-- end blog slider -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-3.7.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.bundle-5.3.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/countdown/countdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/rasta-contact/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/chartjs/chart.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/otp-loader/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/otp-sms/otp-input.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/tagify/jQuery.tagify.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/vanilla-tilt/vanilla-tilt.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.clasme').slick({
            rtl: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            loop: false,
            arrow: true,
            prevArrow: $('.slickprevbtn'),
            nextArrow: $('.slicknextbtn'),
            mobileFirst: true, // Moved from inside responsive array to main options
            responsive: [
                {
                    breakpoint: 1904,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                        infinite: true,
                        dots: false, // Changed from false to true,
                    },
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 375,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ]
        });
        $('.clasme2').slick({
            rtl:true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            loop:true,
            autoplay: true,
            autoplaySpeed: 2000,
            // mobileFirst:true
        })
        // $(document).ready(function() {
        //     if (matchMedia('(max-width: 767px)').matches) {
        //         // This is a mobile device
        //         alert('You are using a mobile device');
        //     } else {
        //         // This is a desktop device
        //         alert('You are using a desktop device');
        //     }
        // });
        // $(document).ready(function() {
        //     function checkWidth() {
        //         if (matchMedia('(max-width: 767px)').matches) {
        //             // This is a mobile device
        //             $('.pro-slider').css('min-width', '350');
        //             alert('width changes')
        //         } else {
        //             // This is a desktop device
        //             $('#myElement').css('width', '75%');
        //             alert('width doesnt changes')
        //         }
        //     }
        //
        //     // Execute the function on load
        //     checkWidth();
        //
        //     // Execute the function on resize
        //     $(window).on('resize', function() {
        //         checkWidth();
        //     });
        // });
    });
</script>
<!--<script>-->
<!--    // استفاده از jQuery برای تشخیص نوع دستگاه-->
<!--    $(document).ready(function() {-->
<!--        if(/AndroidwebOSiPhoneiPadPodBlackBerryIEMobileOpera Mini/i.test(navigator.userAgent)) {-->
<!--            alert('شما از گوشی وارد شده‌اید.');-->
<!--        } else {-->
<!--            alert('شما از لپ‌تاپ یا کامپیوتر وارد شده‌اید.');-->
<!--        }-->
<!--    });-->
<!--</script>-->

	<?php get_footer(); ?>


</body>
</html>