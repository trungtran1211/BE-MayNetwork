<?php /* Template Name: Single */ ?>

<?php
    get_header();
?>

<div class="blog__details">
            <div class="container">
                <div class="blog__details-container">
                    <div class="blog__detail">
                    <?php if (have_posts()) : 
                        while (have_posts()) : the_post(); ?>
                        <h1 class="blog__details-heading"><?php the_title(); ?></h1>
                        <div class="blog__details-header">
                            <h6 class="details__header-date"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/icon-time.png" alt=""> <?php echo get_the_date('d/m/Y'); ?></h6>
                            <span class="blog__details-categoty"><?php $category = get_the_category();
                                $firstCategory = $category[0]->cat_name; echo $firstCategory;?></span>
                        </div>
                        <div class="blog__details-content">
                            <?php the_content(); ?>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                        
                    </div>
                    <div class="blog__news">
                        <h2 class="blog__news-heading">
                            Tin tức khác
                        </h2>
                        <div class="blog__news-list">
                            <div class="blog__news-item">
                                 <div class="news-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/blog__news-item1.png" alt="">
                                 </div>
                                 <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/icon-time1.png" alt="">07/12/2022 </span>
                                 <p>Người trẻ Trung Quốc thích gõ mõ trực tuyến</p>
                            </div>
                            <div class="blog__news-item">
                                <div class="news-img">
                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/blog__news-item2.png" alt="">
                                </div>
                                <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/icon-time1.png" alt="">07/12/2022 </span>
                                <p>Người trẻ Trung Quốc thích gõ mõ trực tuyến</p>
                            </div>
                            <div class="blog__news-item">
                                <div class="news-img">
                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/blog__news-item3.png" alt="">
                                </div>
                                <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/icon-time1.png" alt="">07/12/2022 </span>
                                <p>Người trẻ Trung Quốc thích gõ mõ trực tuyến</p>
                            </div>
                            <div class="blog__news-item">
                                <div class="news-img">
                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/blog__news-item3.png" alt="">
                                </div>
                                <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/icon-time1.png" alt="">07/12/2022 </span>
                                <p>Người trẻ Trung Quốc thích gõ mõ trực tuyến</p>
                            </div>
                            <div class="blog__news-item">
                                <div class="news-img">
                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/blog__news-item3.png" alt="">
                                </div>
                                <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-details/icon-time1.png" alt="">07/12/2022 </span>
                                <p>Người trẻ Trung Quốc thích gõ mõ trực tuyến</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php 
    get_footer(); 
?>