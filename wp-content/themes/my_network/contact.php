<?php /* Template Name: contact */ ?>

<?php
/**
 * The main template file
 */
get_header(); ?>

<div class="ct__top">
            <div class="container">
                <div class="ct__top-container">
                    <div class="ct__top-left">
                        <h2 class="ct__top-heading1">BẠN ĐÃ SẴN SÀNG</h2>
                        <h1 class="ct__top-heading2">MỞ KHOÁ CÁNH CỬA VIRAL TIKTOK?</h1>
                        <a href="#">
                            <button class="ct__top-btn">
                                Chìa khoá ngay bên dưới <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-icondrop.png" alt="">
                            </button>
                        </a>
                    </div>
                    <div class="ct__top-right">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="ct__info">
            <div class="container">
                <div class="ct__info-container">
                    <div class="ct__info-left">
                        <h1 class="ct__info-heading">THÔNG TIN LIÊN HỆ</h1>
                        <div class="ct__info-list">
                            <div class="ct__info-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-phone.png" alt="">
                                <span>(+84) 385691989</span>
                            </div>
                            <div class="ct__info-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-mail.png" alt="">
                                <span>contactforwork@maynetwork.tv</span>
                            </div>
                            <div class="ct__info-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-address.png" alt="">
                                <span>67 Hoàng Văn Thái, Phường Tân Phú, Quận 7 Thành phố Hồ Chí Minh</span>
                            </div>
                        </div>
                        <div class="ct__info-social">
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-fb.png" alt=""></a>
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-ig.png" alt=""></a>
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-in.png" alt=""></a>
                        </div>
                    </div>
                    <div class="ct__info-right">
                        <!-- <iframe src="<?php echo get_stylesheet_directory_uri(); ?>/assetsttps://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.0433348902047!2d106.72213901533408!3d10.731141162961015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317525628f0e4121%3A0xa663a149321bee2a!2zNjcgSG_DoG5nIFbEg24gVGjDoWksIFTDom4gUGjDuiwgUXXhuq1uIDcsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1673493580459!5m2!1svi!2s" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        <img class="pc" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct_map.png" alt="">
                        <img class="mb" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct_map-mb.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="ct__register">
            <div class="container">
                <h2 class="ct__register-heading">QUY TRÌNH VÀ CÁCH THỨC ĐĂNG KÝ</h2>
                <div class="ct__register-container">
                    <div class="ct__register-left">
                        <div class="ct__register-steps">
                            <div class="step">
                                <!-- <h3 class="step-heading">Bước 1</h3>
                                <span class="step-text">Đăng ký hợp tác tại maynetwork.com</span> -->
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/step1.png" alt="">
                            </div>
                            <div class="step">
                                <!-- <h3 class="step-heading">Bước 2</h3>
                                <span class="step-text">Lựa chọn nhu cầu dịch vụ phù hợp</span> -->
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/step2.png" alt="">
                            </div>
                            <div class="step">
                                <!-- <h3 class="step-heading">Bước 3</h3>
                                <span class="step-text">Bắt đầu thử nghiệm và đánh giá</span> -->
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/step3.png" alt="">
                            </div>
                            <div class="step">
                                <!-- <h3 class="step-heading">Bước 4</h3>
                                <span class="step-text">Hợp tác chính thức</span> -->
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/step4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ct__register-right">
                        <h2 class="ct__register-formtitle">ĐĂNG KÝ HỢP TÁC</h2>
                        <?php
                            echo do_shortcode( '[contact-form-7 id="198" title="Contact"]' );
                        ?>
                        <!-- <form action="ct__register-form">
                            <div class="ct_form-item">
                                <div class="holder">Họ và Tên <span class="red">*</span></div>
                                <input id="input" class="ct_form-input" type="text" />
                            </div>
                            <div class="ct_form-item">
                                <div class="holder">Email <span class="red">*</span></div>
                                <input id="input" class="ct_form-input" type="text" />
                            </div>
                            <div class="ct_form-item">
                                <div class="holder">Số điện thoại <span class="red">*</span></div>
                                <input id="input" class="ct_form-input" type="text" />
                            </div>
                            <div class="ct_form-item">
                                <div class="holder">Tài khoản Tiktok của bạn <span class="red">*</span></div>
                                <input id="input" class="ct_form-input" type="text" />
                            </div>
                            <div class="ct_form-item">
                                <div class="holder">Để lại lời nhắn cho chúng tôi</div>
                                <input id="input" class="ct_form-input" type="text" />
                            </div>
                            <div class="ct_form-btn">
                                <button class="ct-btn">Gửi thông tin <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-icondrop2.png" alt=""></button>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="ct__bottom">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/ct-bottom.png" alt="">
        </div>

        

<?php get_footer(); ?>