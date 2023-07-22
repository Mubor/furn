<?php 
	get_header(); 
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">
			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->
				 <ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
				</ol><!-- /ol-->
				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				<div class="carousel-inner" role="listbox">
					<!-- .item -->
					<?php 
						$items = carbon_get_the_post_meta('crb_slides');
						for ($i=0; $i < count($items); $i++) {
					?> 

					<div class="item <?= $i == 0 ? 'active' : ''; ?>">
						<div class="single-slide-item slide1">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4><?= $items[$i]['title']?></h4>
													<h2><?= $items[$i]['name']?></h2>
													<p>
														<?= $items[$i]['description']?>
													</p>
													<div class="packages-price">
														<p>
														<?= $items[$i]['price']?>
															<del><?= $items[$i]['past_price']?></del>
														</p>
													</div>
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
														<span class="lnr lnr-plus-circle"></span>
														add <span>to</span> cart
													</button>
													<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='<?= $items[$i]['link']?>'">
														more info
													</button>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="<?= $items[$i]['image']?>" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->

					</div><!-- /.item .active-->

					
					<?php } ?>
				</div><!-- /.carousel-inner-->

			</div><!--/#header-carousel-->

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->
				                	<li class="nav-setting">
				                		<a href="#"><span class="lnr lnr-cog"></span></a>
				                	</li><!--/.search-->
				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1">2</span>
				                        </a>
				                        <ul class="dropdown-menu cart-list s-cate">
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="http://localhost:4040/furn/wp-content/uploads/2023/07/arrivals1.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">arm <br> chair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="http://localhost:4040/furn/wp-content/uploads/2023/07/arrivals2.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">single <br> armchair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="http://localhost:4040/furn/wp-content/uploads/2023/07/arrivals3.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">wooden arn <br> chair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="total">
				                                <span>Total: $0.00</span>
				                                <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
				                            </li>
				                        </ul>
				                    </li><!--/.dropdown-->
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">furn.</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

								<?php wp_nav_menu(array(
									'menu'         => 'main menu',
									'container' => 'nav',
									'container_id' => 'navbar-menu',
									'container_class' => 'collapse navbar-collapse menu-ui-design',
									'menu_class'      => 'nav navbar-nav navbar-center',
									'add_li_class'  => 'scroll'
								)); ?>
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<?php 
			$left_title = carbon_get_the_post_meta('left_title');
			$left_link = carbon_get_the_post_meta('left_link');
			$left_desc = carbon_get_the_post_meta('left_description');
			$left_image = carbon_get_the_post_meta('left_image');
			$middle_title = carbon_get_the_post_meta('middle_title');
			$middle_link = carbon_get_the_post_meta('middle_link');
			$middle_desc = carbon_get_the_post_meta('middle_description');
			$middle_image = carbon_get_the_post_meta('middle_image');
			$price = carbon_get_the_post_meta('price');
			$right_title = carbon_get_the_post_meta('right_title');
			$right_desc = carbon_get_the_post_meta('right_description');
			$right_image = carbon_get_the_post_meta('right_image');
			$right_link = carbon_get_the_post_meta('right_link');
			
		?>
		<!--populer-products start -->
		<section id="populer-products" class="populer-products">
			<div class="container">
				<div class="populer-products-content">
					<div class="row">
						<div class="col-md-3">
							<div class="single-populer-products">
								<div class="single-populer-product-img mt40">
									<img src="<?= $left_image ?>" alt="populer-products images">
								</div>
								<h2><a href="<?= $left_link?>"><?= $left_title ?></a></h2>
								<div class="single-populer-products-para">
									<p><?= $left_desc ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-populer-products">
								<div class="single-inner-populer-products">
									<div class="row">
										<div class="col-md-4 col-sm-12">
											<div class="single-inner-populer-product-img">
												<img src="<?= $middle_image?>" alt="populer-products images">
											</div>
										</div>
										<div class="col-md-8 col-sm-12">
											<div class="single-inner-populer-product-txt">
												<h2>
													<a href="<?= $middle_link?>">
														<?= $middle_title?>
													</a>
												</h2>
												<p>
												<?= $middle_desc?>
												</p>
												<div class="populer-products-price">
													<h4>Sales Start from <span><?= $price?></span></h4>
												</div>
												<button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='#'">
													discover more
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="single-populer-products">
								<div class="single-populer-products">
									<div class="single-populer-product-img">
										<img src="<?= $right_image ?>" alt="populer-products images">
									</div>
									<h2><a href="<?= $right_link?>"><?= $right_title ?></a></h2>
									<div class="single-populer-products-para">
										<p><?= $right_desc ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.populer-products-->
		<!--populer-products end-->

		<!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>new arrivals</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">

						<?php 
							$arrivals = get_posts(array(
								'numberposts' => 8,
								'category_name' => 'new-arrivals'
							));

							 for($i = 0; $i < 8; $i ++){
								$post = $arrivals[$i];
								setup_postdata($post);

								$price = carbon_get_post_meta($post->ID, 'product_price');
								$image = wp_get_attachment_image_url(carbon_get_post_meta($post->ID, 'product_image'));
								$link = get_permalink($post->ID);
								$is_on_sale = carbon_get_post_meta($post->ID, 'set_sale');
						?>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="<?= $image ?>" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>

									<?php if($is_on_sale) { ?>
									<div class="sale <?= carbon_get_post_meta($post->ID, 'sale_type');?>">
										<p>sale</p>
									</div>
									<?php } ?>

									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="<?= $link ?>"><?= $post->post_title ?></a></h4>
								<p class="arrival-product-price"><?= $price ?></p>
							</div>
						</div>
						<?php }  wp_reset_postdata();?>
						
					
						
						
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->

		<!--sofa-collection start -->
		<section id="sofa-collection">
			<div class="owl-carousel owl-theme" id="collection-carousel">
				<?php 
					$sofas = carbon_get_the_post_meta('crb_sofa');

					for($i=0; $i < count ($sofas); $i++) {
				?>
				<div class="sofa-collection collectionbg1" style="background: url('<?= $sofas[$i]['image']?>') no-repeat;">
					<div class="container">
						<div class="sofa-collection-txt">
							<h2><?= $sofas[$i]['title']?></h2>
							<p>
							<?= $sofas[$i]['description']?>
							</p>
							<div class="sofa-collection-price">
								<h4>starting from <span><?= $sofas[$i]['price']?></span></h4>
							</div>
							<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='<?= $sofas[$i]['link']?>'">
								view more
							</button>
						</div>
					</div>	
				</div><!--/.sofa-collection-->
				<?php }?>
			</div><!--/.collection-carousel-->

		</section><!--/.sofa-collection-->
		<!--sofa-collection end -->

		<!--feature start -->
		<section id="feature" class="feature">
			<div class="container">
				<div class="section-header">
					<h2>featured products</h2>
				</div><!--/.section-header-->
				<div class="feature-content">
					<div class="row">
					<?php 
						function set_rating($rate) {
							$stars = intval($rate);

							for($i = 0; $i < $stars; $i++){
								?> <i class="fa fa-star"></i><?php
							}
							for($i = 0; $i < 5 - $stars; $i++){
								?> <span class="spacial-feature-icon"><i class="fa fa-star"></i></span> <?php
							}
						}

						$featured = get_posts(array(
							'numberposts' => 4,
							'category_name' => 'featured'
						));

						for($i = 0; $i < 4; $i ++){
							$post = $featured[$i];
							setup_postdata($post);

							$price = carbon_get_post_meta($post->ID, 'product_price');
							$image = wp_get_attachment_image_url(carbon_get_post_meta($post->ID, 'product_image'));
							$link = get_permalink($post->ID);
							$rating = carbon_get_post_meta($post->ID, 'rating');
					?>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="<?= $image ?>" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<?= set_rating($rating) ?>
										<span class="feature-review">(<?php if(function_exists('the_views')) { the_views(); } ?>)</span>
									</p>
									<h3><a href="<?= $link ?>"><?= $post->post_title ?></a></h3>
									<h5><?= $price ?></h5>
								</div>
							</div>
						</div>
						<?php }  wp_reset_postdata();?>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.feature-->
		<!--feature end -->

		<!--blog start -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>latest blog</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
					<?php 
							function get_excerpt_by_id($post_id){
								$the_post = get_post($post_id); //Gets post ID
								$the_excerpt = ($the_post ? $the_post->post_content : null); //Gets post_content to be used as a basis for the excerpt
								$excerpt_length = 23; //Sets excerpt length by word count
								$the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
								$words = explode(' ', $the_excerpt, $excerpt_length + 1);

								if(count($words) > $excerpt_length) :
									array_pop($words);
									array_push($words, '…');
									$the_excerpt = implode(' ', $words);
								endif;

								return $the_excerpt;
							}
							
							$blogs = get_posts(array(
								'numberposts' => 3,
								'category_name' => 'blog'
							));

							 for($i = 0; $i < 3; $i ++){
								$post = $blogs[$i];
								setup_postdata($post);
								$image = wp_get_attachment_image_url(carbon_get_post_meta($post->ID, 'blog_image'));
								$link = get_permalink($post->ID);
								$author = get_the_author_meta('display_name', $post->post_author);

								$datetime = new DateTime($post->post_date);
								$date = date_format($datetime, 'd F Y');
								
	
						?>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="<?= $image?>" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="<?= $link ?>">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="<?= $link ?>"><?= $author ?></a> / <?= $date ?></h3>
									<p>
										<?= get_excerpt_by_id($post->ID);?>
									</p>
								</div>
							</div>
						</div>
						<?php }  wp_reset_postdata();?>
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->

		<!-- clients strat -->
		<section id="clients"  class="clients">
			<div class="container">
				<div class="owl-carousel owl-theme" id="client">

				<?php $clients = carbon_get_the_post_meta( 'crb_clients' );
					for ($i = 0; $i < count($clients); $i++){
				?>
						<div class="item">
							<a href="#">
								<img src="<?= $clients[$i]['image']?>" alt="brand-image" />
							</a>
						</div>
						<?php }?>
					</div><!--/.owl-carousel-->

			</div><!--/.container-->

		</section><!--/.clients-->	
		<!-- clients end -->


		<?php 
			function set_links($data) {
				for($i = 0; $i < count($data); $i++) {
			?>
					<li><a href="<?=$data[$i]['link']?>"><?=$data[$i]['title']?></a></li>
			<?php
				}
			}
			

			$info = carbon_get_the_post_meta('information');
			$collections =carbon_get_the_post_meta('collection');
			$accounts = carbon_get_the_post_meta('accounts');
			$newsletter_text = carbon_get_the_post_meta('newsletter');	
			
		?>
		<!--newsletter strat -->
		<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>information</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<?= set_links($info) ?>
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>collections</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<?= set_links($collections) ?>
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>my accounts</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<?= set_links($accounts) ?>
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>newsletter</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
										<?= $newsletter_text ?>
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Enter Email Here....">
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										<span><i class="fa fa-location-arrow"></i></span>
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div>
					<p>
						&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->

	
        <?php get_footer()?>
    </body>
	
</html>