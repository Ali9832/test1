<?php wp_head(); ?>
<meta charset="utf-8">
<title>انتشارات یادمان فسلفی</title>
<meta content="" name="description">
<meta content="width=device-width, initial-scale=1" name="viewport">

<!-- Place favicon.ico in the root directory -->


<link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/fonts/bootstrap-icon/bootstrap-icons.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/js/plugin/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/js/plugin/countdown/countdown.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/js/plugin/rasta-contact/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/mega-menu.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/js/tagify/tagify.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css'">
<link href="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<meta content="#f4f5f9" name="theme-color">

<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/pic/Untitled-1.png"/>


<!--**************************************************************-->
<!-- start header -->

<header class="header">
    <div class="container-fluid">
        <div class="top-header">
            <div class="row gy-3 align-items-center">
                <div class="col-lg-2 col-6 order-lg-1 order-1">
                    <div class="d-flex align-items-center">
                        <div class="top-header-logo">
                            <a href="https://yademanbook.com">
                                <img src="<?php echo get_template_directory_uri();?>/pic/logo (2).webp"  alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2 order-3">
                    <div class="search-header col-lg-7 order-lg-2 order-3">
                        <?php echo do_shortcode("[wd_asp id=1]"); ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start mega menu -->

    <div class="mega-menu menu mega-menu-top d-lg-block d-none">
        <div class="container-fluid">
            <div class="top-menu-parent">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="top-menu-menu">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a href="https://yademanbook.com/quran/" class="nav-link border-animate fromCenter farsinum">
                                        <i class="bi bi-book"></i>
                                        <span class="font-14">
                                             قرآن و قرآن صندوقی
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://yademanbook.com/mafatih/" class="nav-link border-animate fromCenter farsinum">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span class="font-14">
                                              مفاتیح الجنان و ارتباط با خدا
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://yademanbook.com/nemoone/" class="nav-link border-animate fromCenter farsinum">
                                        <i class="bi bi-postage"></i>
                                        <span class="font-14">
                                          نمونه طرح های یادبود و وقف نامه
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://yademanbook.com/another/" class="nav-link border-animate fromCenter farsinum">
                                        <i class="bi bi-box-fill"></i>
                                        <span class="font-14">
                                            محصولات دیگر
                                        </span>
                                    </a>
                                </li>
<!--                                <li class="nav-item">-->
<!--                                    <a href="" class="nav-link border-animate fromCenter farsinum">-->
<!--                                        <i class="bi bi-tag"></i>-->
<!--                                        تخفیف ها و پیشنهاد ها-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <a href="" class="nav-link border-animate fromCenter">-->
<!--                                        <i class="bi bi-question-octagon"></i>-->
<!--                                        سوالی-->
<!--                                        دارید-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li class="nav-item"><a href="" class="nav-link border-animate fromCenter">-->
<!--                                        <i class="bi bi-bag-heart"></i>-->
<!--                                        در بهرخ-->
<!--                                        بفروشید</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="d-flex align-items-center top-header-call d-xl-flex d-none">
                                <div class="top-header-call-title me-3">
                                    <h6 class="text-center h5 farsinum">09127008966</h6>
                                    <p class="text-muted farsinum">پشتیبانی 24 ساعته</p>
                                </div>
                                <div class="top-header-call-icon">
                                    <i class="bi bi-telephone-forward fs-3"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-end ms-5">
                                <a href="" class="btn-favorite-items highlight farsinum">
                                    <i class="bi bi-heart"></i>
                                    <span>35</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end mega menu -->
</header>

<!-- end header -->








<!--**********************************************************************-->

