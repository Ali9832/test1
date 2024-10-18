<?php get_header(); ?>
<div class="content">
    <div class="container-fluid">
        <div class="content-box">
            <div class="container-fluid">
                <div class="row gy-3  d-flex">
<!--                    gallery-->
                    <div class="gallery">
                        <div class="sp-gallery-medium">
                            <?php
                            global $images;
                            $images= get_field('gallery');
                            foreach ($images as $images_id)
                            ?>
                            <a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url($images_id,'thumbnails'); ?>">
                                <div class="sp-gallery-thumbnail">
                                    <?php echo the_post_thumbnail('thumbnails'); ?>
                                </div>
                            </a>
                        </div>
                        <div class="sp-gallery-thumb">
                            <?php
                            $image= get_field('gallery');
                            foreach ($image as $image_id)
                            {
                                ?>
                                <a data-fancybox="gallery" class="sp-gallery-thumb-img" href="<?php echo wp_get_attachment_image_url($image_id,'full'); ?>">
                                    <?php echo wp_get_attachment_image($image_id,'thumbnails'); ?>
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!--                    end gallery-->
                    <div class="col-lg-8">
                        <div class="product-meta-title mb-0">
                            <div class="row align-items-center gy-3">
                                <div class="col-lg-10">
                                    <h4 class="f-800 my-1 farsinum">
                                        <?php the_title(); ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="product-meta-feature mt-1">
                            <div class="row gy-3">
                                <div class="col-lg-7">
                                    <div class="product-meta-feature-items">
                                        <h5 class="title font-16 farsinum">ویژگی های کالا</h5>
                                        <div class="se-desc">
                                            <input type="checkbox" class="read-more-state" id="readMore1">
                                            <ul class="read-more-wrap navbar-nav">
                                                <li>
                                                    <span class="title farsinum">
                                                            ابعاد:
                                                    </span>
                                                    <span class="desc farsinum">
                                                        <?php the_field('abad'); ?>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="title farsinum">
                                                        وزن
                                                    </span>
                                                    <span class="desc farsinum">
                                                        <?php the_field('vazn'); ?>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="title farsinum">
                                                        خط:

                                                    </span>
                                                    <span class="desc farsinum">
                                                        <?php the_field('khat'); ?>
                                                    </span>
                                                </li>
                                                <li class="read-more-target">
                                                    <span class="title farsinum">
                                                        نوع کاور:

                                                    </span>
                                                    <span class="desc farsinum">
                                                        <?php the_field('cover'); ?>
                                                    </span>
                                                </li>
                                                <li class="read-more-target">
                                                    <span class="title farsinum">
                                                        جنس جلد
                                                    </span>
                                                    <span class="desc farsinum">
                                                        <?php the_field('jeld'); ?>
                                                    </span>
                                                </li>
                                                <li class="read-more-target">
                                                    <span class="title farsinum">
                                                        تعداد صفحات
                                                    </span>
                                                    <span class="desc farsinum">
                                                        <?php the_field('pages'); ?>
                                                    </span>
                                                </li>
                                                <li class="read-more-target">
                                                    <span class="title farsinum">
                                                            نوع کاغذ:
                                                    </span>
                                                    <span class="desc farsinum">
                                                    <?php the_field('paper'); ?>
                                                    </span>
                                                </li>
                                                <li class="read-more-target">
                                                    <span class="title farsinum">
                                                    نوع چاپ
                                                    </span>
                                                    <span class="desc farsinum">
                                                    <?php the_field('chaap'); ?>
                                                    </span>
                                                </li>
                                                <li class="read-more-target">
                                                    <span class="title farsinum">
قطع کتاب
                                                    </span>
                                                    <span class="desc farsinum">
                                                        <?php the_field('ghat_ketab'); ?>
                                                    </span>
                                                </li>
                                                <li class="read-more-target">
                                                    <span class="title farsinum">
مترجم                                                    </span>
                                                    <span class="desc farsinum">
                                                    <?php the_field('motarjem'); ?>
                                                    </span>
                                                </li>
                                            </ul>
                                            <label for="readMore1" class="read-more-trigger"></label>
                                        </div>
                                    </div>
<!--                                    <div class="product-alert">-->
<!--                                        <i class="bi bi-info-circle-fill me-1 farsinum"></i>-->
<!--                                        <span class="farsinum">-->
<!--                                            امکان برگشت کالا با دلیل "انصراف از خرید" تنها در صورتی مورد قبول است که پلمب کالا باز نشده باشد.-->
<!--                                        </span>-->
<!--                                    </div>-->
                                </div>

                                    <div class="product-meta-info">
<!--                                        <div class="d-flex product-meta-info-item">-->
<!--                                            <div>-->
<!--                                              <i class="bi bi-shop"></i>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <!--                                        قیمت و قیمت های با تخفیف-->
                                        <div class="product-meta-price product-price d-flex justify-content-between align-items-center farsinum">
                                            <del class="font-14"><?php the_field('price'); ?> </del>
                                            <h6 class="title-font new-price farsinum"><?php the_field('pricetakhfif'); ?>تومان</h6>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end main content -->



<!-- start product desc -->

<div class="product-desc py-20">
    <div class="container-fluid">
        <div class="row gy-3">
            <div class="col-lg-9">
                <div class="product-desc-tab">
                    <ul class="nav justify-content-center" id="productTab" role="tablist">
<!--                        <li class="nav-item">-->
<!--                            <button aria-selected="true" class="active waves-effect waves-light"-->
<!--                                    data-bs-target="#productDescLess-pane" data-bs-toggle="tab" id="productDescLess"-->
<!--                                    role="button" type="button">-->
<!--                                توضیحات کالا-->
<!--                            </button>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <button aria-selected="true" class=" waves-effect waves-light"-->
<!--                                    data-bs-target="#productDesc-pane" data-bs-toggle="tab" id="productDesc"-->
<!--                                    role="button" type="button">-->
<!--                                مشخصات کالا-->
<!--                            </button>-->
<!--                        </li>-->
                    </ul>
                </div>
                <div class="content-box">
                    <div class="container-fluid">
                        <div class="product-descs" id="prodesc">
                            <div class="product-desc">
                                <div class="product-desc-tab-content">
                                    <div class="tab-content" id="productTabContent">
                                        <div class="tab-pane fade show active product-desc-less-contents"
                                             id="productDescLess-pane">
                                            <div class="product-desc-content">
                                                <h6 class="font-22 mb-2 title-font title-line-bottom">معرفی محصول</h6>
                                                <p class="farsinum">
                                                <?php the_content(); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end product desc -->
<script>
    $(document).ready(function($) {
        $(".fancybox").fancybox({
            fitToView: false,
            maxWidth: "40%" // or whatever you need
        });
    });
</script>

<?php get_footer();?>
