<?php /* Template Name: Blog */ ?>
<?php get_header();?>
<div class="blog__banner">
	<div class="blog__banner-bg">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-bgtop.png" alt="">
	</div>
	<h1 class="blog__banner-heading">
		GÓC <span>MÂY</span> CHIA SẺ
	</h1>
</div>
<!-- ///////////////////////////////// -->
<div class="blog__listpost">
	<div class="container">
		<h2 class="blog__all">Tất cả</h2>
		<div class="blog__listpost-container">
			<div class="blog__listpost-left">
				<div id="blog__listpost-nav">
					<ul>
						<li onclick="sv(this)"> <a href="#share">Góc chia sẻ</a> </li>
						<li onclick="sv(this)"> <a href="#trend">Xu hướng</a> </li>
						<li onclick="sv(this)"> <a href="#work">Hoạt động nổi bật</a> </li>
						<li onclick="sv(this)"> <a href="#casestudies">Case studies</a> </li>
					</ul>
				</div>

				<!-- ==========Share========== -->
				<div id="share" class="content">
					<div class="blog__all-list">
						<div class="blog__all-item">
							<a href="#">
								<div class="blog__item-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img1.png" alt="">
								</div>
								<div class="blog__item-content">
									<h3 class="blog__item-title">NHÌN LẠI BUỔI WORKSHOP “LAY CẢM XÚC” NHẤT TUẦN QUA</h3>
									<span>23/12/2022</span>
								</div>
							</a>
						</div>
						<div class="blog__all-item">
							<a href="#">
								<div class="blog__item-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img2.png" alt="">
								</div>
								<div class="blog__item-content">
									<h3 class="blog__item-title">Người trẻ Trung Quốc thích gõ mõ trực tuyến</h3>
									<span>23/12/2022</span>
								</div>
							</a>
						</div>
						<div class="blog__all-item">
							<a href="#">
								<div class="blog__item-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img3.png" alt="">
								</div>
								<div class="blog__item-content">
									<h3 class="blog__item-title">Những xu hướng du lịch thế giới năm 2022</h3>
									<span>23/12/2022</span>
								</div>
							</a>
						</div>
						<div class="blog__all-item">
							<a href="#">
								<div class="blog__item-img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img4.png" alt="">
								</div>
								<div class="blog__item-content">
									<h3 class="blog__item-title">TikTok công bố bảng tổng kết Year On TikTok 2022</h3>
									<span>23/12/2022</span>
								</div>
							</a>
						</div>
					</div>
				</div>

				<!-- ==========trend========== -->
				<div id="trend" class="content">
					<div class="blog__all-list">
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img1.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">NHÌN LẠI BUỔI WORKSHOP “LAY CẢM XÚC” NHẤT TUẦN QUA</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img2.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">Người trẻ Trung Quốc thích gõ mõ trực tuyến</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img3.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">Những xu hướng du lịch thế giới năm 2022</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img4.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">TikTok công bố bảng tổng kết Year On TikTok 2022</h3>
								<span>23/12/2022</span>
							</div>

						</div>
					</div>
				</div>

				<!-- ==========work========== -->
				<div id="work" class="content">
					<div class="blog__all-list">
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img1.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">NHÌN LẠI BUỔI WORKSHOP “LAY CẢM XÚC” NHẤT TUẦN QUA</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img2.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">Người trẻ Trung Quốc thích gõ mõ trực tuyến</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img3.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">Những xu hướng du lịch thế giới năm 2022</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img4.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">TikTok công bố bảng tổng kết Year On TikTok 2022</h3>
								<span>23/12/2022</span>
							</div>

						</div>
					</div>
				</div>

				<!-- ==========casestudies========== -->
				<div id="casestudies" class="content">
					<div class="blog__all-list">
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img1.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">NHÌN LẠI BUỔI WORKSHOP “LAY CẢM XÚC” NHẤT TUẦN QUA</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img2.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">Người trẻ Trung Quốc thích gõ mõ trực tuyến</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img3.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">Những xu hướng du lịch thế giới năm 2022</h3>
								<span>23/12/2022</span>
							</div>

						</div>
						<div class="blog__all-item">
							<div class="blog__item-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-img4.png" alt="">
							</div>
							<div class="blog__item-content">
								<h3 class="blog__item-title">TikTok công bố bảng tổng kết Year On TikTok 2022</h3>
								<span>23/12/2022</span>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="blog__listpost-right">
				<div class="recentposts-title">
					<h3>Bài viết gần đây</h3>
				</div>
				<div class="blog__recentposts-list">
					<div class="blog__recentposts-item">
						<div class="recentposts-left">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/recentposts-img1.png" alt="">
						</div>
						<div class="recentposts-right">
							<span class="recentpost-time"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png"
									alt="">23/12/2022</span>
							<p class="recentpost-tt">Viettel tung gói cước Internet sử dụng Wi-Fi 6 với tốc độ tới 1Gbps
							</p>
							<a href="#">
								<button class="recentpost-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
										alt=""></button>
							</a>
						</div>
					</div>
					<div class="blog__recentposts-item">
						<div class="recentposts-left">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/recentposts-img2.png" alt="">
						</div>
						<div class="recentposts-right">
							<span class="recentpost-time"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png"
									alt="">18/12/2022</span>
							<p class="recentpost-tt">Loạt ảnh "thả thính" của TikToker Quỳnh Alee nhận "bão like"</p>
							<a href="#">
								<button class="recentpost-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
										alt=""></button>
							</a>
						</div>
					</div>
					<div class="blog__recentposts-item">
						<div class="recentposts-left">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/recentposts-img3.png" alt="">
						</div>
						<div class="recentposts-right">
							<span class="recentpost-time"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png"
									alt="">07/12/2022</span>
							<p class="recentpost-tt">Trợ năng mới trên iPhone phản tác dụng so với mục đích ra đời</p>
							<a href="#">
								<button class="recentpost-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
										alt=""></button>
							</a>
						</div>
					</div>
					<div class="blog__recentposts-item">
						<div class="recentposts-left">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/recentposts-img4.png" alt="">
						</div>
						<div class="recentposts-right">
							<span class="recentpost-time"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png"
									alt="">18/12/2022</span>
							<p class="recentpost-tt">Mỹ cấm cài đặt TikTok trên các thiết bị?</p>
							<a href="#">
								<button class="recentpost-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
										alt=""></button>
							</a>
						</div>
					</div>
					<div class="blog__recentposts-item">
						<div class="recentposts-left">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/recentposts-img5.png" alt="">
						</div>
						<div class="recentposts-right">
							<span class="recentpost-time"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png"
									alt="">07/12/2022</span>
							<p class="recentpost-tt">Quốc hội Mỹ chuẩn bị ‘xuất chiêu’ với TikTok</p>
							<a href="#">
								<button class="recentpost-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
										alt=""></button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //////////////////////////////// -->
<div class="blog__listnews">
	<div class="container">
		<div class="blog__listnews-container">
			<h2 class="blog__listnews-heading">Tin hàng đầu trong tuần</h2>
			<div class="blog__listnews-list">
				<div class="blog__listnews-item">
					<div class="listnews-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/list-newimg1.png" alt="">
					</div>
					<h5 class="listnew-title">FIFA tạo cuộc tranh cãi dữ dội giữa phe Messi và Cristiano Ronaldo trên
						mạng xã hội</h5>
					<p class="listnew-text">Tài khoản chính thức trên mạng xã hội Twitter của LĐBĐ thế giới (FIFA) phải
						xóa liên tiếp 2 dòng tweet có liên quan tới siêu sao Lionel Messi và Cristiano Ronaldo, vì tạo
						ra cuộc tranh luận và chỉ trích lẫn nhau rất dữ dội.</p>
					<div class="listnew-bottom">
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png" alt="">18/12/2022</span>
						<a href="#">
							<button class="listnew-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
									alt=""></button>
						</a>
					</div>
				</div>
				<div class="blog__listnews-item">
					<div class="listnews-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/list-newimg2.png" alt="">
					</div>
					<h5 class="listnew-title">FIFA tạo cuộc tranh cãi dữ dội giữa phe Messi và Cristiano Ronaldo trên
						mạng xã hội</h5>
					<p class="listnew-text">Tài khoản chính thức trên mạng xã hội Twitter của LĐBĐ thế giới (FIFA) phải
						xóa liên tiếp 2 dòng tweet có liên quan tới siêu sao Lionel Messi và Cristiano Ronaldo, vì tạo
						ra cuộc tranh luận và chỉ trích lẫn nhau rất dữ dội.</p>
					<div class="listnew-bottom">
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png" alt="">18/12/2022</span>
						<a href="#">
							<button class="listnew-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
									alt=""></button>
						</a>
					</div>
				</div>
				<div class="blog__listnews-item">
					<div class="listnews-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/list-newimg3.png" alt="">
					</div>
					<h5 class="listnew-title">FIFA tạo cuộc tranh cãi dữ dội giữa phe Messi và Cristiano Ronaldo trên
						mạng xã hội</h5>
					<p class="listnew-text">Tài khoản chính thức trên mạng xã hội Twitter của LĐBĐ thế giới (FIFA) phải
						xóa liên tiếp 2 dòng tweet có liên quan tới siêu sao Lionel Messi và Cristiano Ronaldo, vì tạo
						ra cuộc tranh luận và chỉ trích lẫn nhau rất dữ dội.</p>
					<div class="listnew-bottom">
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png" alt="">18/12/2022</span>
						<a href="#">
							<button class="listnew-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
									alt=""></button>
						</a>
					</div>
				</div>
				<div class="blog__listnews-item">
					<div class="listnews-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/list-newimg3.png" alt="">
					</div>
					<h5 class="listnew-title">FIFA tạo cuộc tranh cãi dữ dội giữa phe Messi và Cristiano Ronaldo trên
						mạng xã hội</h5>
					<p class="listnew-text">Tài khoản chính thức trên mạng xã hội Twitter của LĐBĐ thế giới (FIFA) phải
						xóa liên tiếp 2 dòng tweet có liên quan tới siêu sao Lionel Messi và Cristiano Ronaldo, vì tạo
						ra cuộc tranh luận và chỉ trích lẫn nhau rất dữ dội.</p>
					<div class="listnew-bottom">
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png" alt="">18/12/2022</span>
						<a href="#">
							<button class="listnew-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
									alt=""></button>
						</a>
					</div>
				</div>
				<div class="blog__listnews-item">
					<div class="listnews-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/list-newimg3.png" alt="">
					</div>
					<h5 class="listnew-title">FIFA tạo cuộc tranh cãi dữ dội giữa phe Messi và Cristiano Ronaldo trên
						mạng xã hội</h5>
					<p class="listnew-text">Tài khoản chính thức trên mạng xã hội Twitter của LĐBĐ thế giới (FIFA) phải
						xóa liên tiếp 2 dòng tweet có liên quan tới siêu sao Lionel Messi và Cristiano Ronaldo, vì tạo
						ra cuộc tranh luận và chỉ trích lẫn nhau rất dữ dội.</p>
					<div class="listnew-bottom">
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png" alt="">18/12/2022</span>
						<a href="#">
							<button class="listnew-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
									alt=""></button>
						</a>
					</div>
				</div>
				<div class="blog__listnews-item">
					<div class="listnews-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/list-newimg3.png" alt="">
					</div>
					<h5 class="listnew-title">FIFA tạo cuộc tranh cãi dữ dội giữa phe Messi và Cristiano Ronaldo trên
						mạng xã hội</h5>
					<p class="listnew-text">Tài khoản chính thức trên mạng xã hội Twitter của LĐBĐ thế giới (FIFA) phải
						xóa liên tiếp 2 dòng tweet có liên quan tới siêu sao Lionel Messi và Cristiano Ronaldo, vì tạo
						ra cuộc tranh luận và chỉ trích lẫn nhau rất dữ dội.</p>
					<div class="listnew-bottom">
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-clock.png" alt="">18/12/2022</span>
						<a href="#">
							<button class="listnew-btn">Xem thêm <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow.png"
									alt=""></button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ///////////////////////////////// -->
<div class="blog__bottom">
	<div class="blog__may1">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-may1.png" alt="">
	</div>
	<div class="container">
		<div class="blog__bottom-container">
			<div class="avt">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/AVT .png" alt="">
			</div>
			<h2 class="blog__bottom-title">Sáng tạo cùng <span>Mây</span></h2>
			<a href="#">
				<button class="blog__bottom-btn">Liên hệ tại đây <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/icon-arrow2.png"
						alt=""></button>
			</a>
		</div>
	</div>
	<div class="blog__may2">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blogs/blog-may2.png" alt="">
	</div>
</div>
<?php get_footer(); ?>
