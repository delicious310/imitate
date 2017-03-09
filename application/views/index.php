<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的个人网站</title>
	<base href="<?php echo site_url();?>">
	<meta name="keywords" content="个人博客，个人网站，我的博客">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="js/jquery.lightbox.css">
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/index.css">
<script type="application/x-javascript"> addEventListener("load", function() {
		 setTimeout(hideURLbar, 0); 
	}, false);
	 function hideURLbar(){ 
	 	window.scrollTo(0,1);
    }
</script> 
<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800' rel='stylesheet' type='text/css'>
<body>
	
	<div id="header">
		<div id="nav">
		<span class="nav-icon"></span>
		<div class="nav-menu-box">
			<div class="nav-menu-bg"></div>
			<ul class="nav-menu">
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">PORTFLIO</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>
			<span class="nav-close-icon"></span>
		</div>
<!--		<img src="img/bg2.jpg" alt="" class="header-bg">-->

		</div>
		<div class="header-container">
			<img src="img/pic.png" alt="" class="header-container-self">
			<h1>Videntur Parum</h1>
			<p>Love to Design and capture Photographs :)</p>
			<ul>
				<li class="header-container-hire"><a href="">hire me</a></li>
				<li class="header-container-follow"><a href="">follow me</a></li>
			</ul>
		</div>
	</div>
	<div id="aboutme">
		<div class="container clearfix">
			<div class="container-nav">
				<h1>ABOUT ME</h1>
				<span class="blog clearfix"></span>
			</div>

			<div class="aboutme-parum">
				<h3>VIDENTUR PARUM</h3>
				<span >GRAPHIC DESIGNER,UI/UX EXPERT</span>
				<p>LOREM IPSUM DOLOR SIT AMET,
					CONSECTETUER ADIPISCING ELIT,
					SED DIAM NONUMMY NIBH EUISMOD
					TINCIDUNT UT LAOREET DOLORE MAGNA
					ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD
					MINIM VENIAM, QUIS NOSTRUD EXERCI
					TATION ULLAMCORPER SUSCIPIT LOBORTIS
					NISL UT ALIQUIP EX EA COMMODO CONSEQUAT.
					DUIS AUTEM VEL EUM IRIURE DOLOR IN HENDRERIT IN VULPUTATE
					VELIT ESSE MOLESTIE CONSEQUAT, VEL ILLUM DOLORE EU FEUGIAT NULLA FAM.
				</p>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. SUSPENDISSE SIT
					AMET PURUS IPSUM. IN ANTE LEO, ELEMENTUM AT PLACERAT IN, ALIQUET NON
					LECTUS. NAM IMPERDIET MAGNA EU FAUCIBUS CURSUS.
				</p>
			</div>
			<div class="aboutme-video">
				<img src="img/video.jpg" alt="">
			</div>
		</div>
	</div>
	<div id="myservice">
		<div class="container">
			<div class="myservice-title">
				<h1>MY SERVICES</h1>
				<span class="blog"></span>
			</div>
		</div>
		<div class="myservice-container clearfix">
			<div class="myservice-design">
				<span class="icon1"></span>
				<h2>PRODUCT DESIGN</h2>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,
					SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</div>
			<div class="myservice-design">
				<span class="icon2"></span>
				<h2>PRODUCT DESIGN</h2>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,
					SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</div>
			<div class="myservice-design">
				<span class="icon3"></span>
				<h2>PRODUCT DESIGN</h2>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,
					SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</div>
			<div class="myservice-design">
				<span class="icon4"></span>
				<h2>PRODUCT DESIGN</h2>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,
					SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</div>
			<div class="myservice-design">
				<span class="icon5"></span>
				<h2>PRODUCT DESIGN</h2>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,
					SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</div>
			<div class="myservice-design">
				<span class="icon6"></span>
				<h2>PRODUCT DESIGN</h2>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,
					SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</div>
		</div>
	</div>
	<div id="portfolio">
		<div class="portfolio-container clearfix">
			<h1>PORTFOLIO</h1>
			<span class="blog"></span>
			<ul class="portfolio-list clearfix">
				<li data-src="img/port-pic1.jpg" data-width="915" data-height="500">
					<img src="img/port-pic1.jpg" alt="" class="bigger">
					<div class="mask">
						<div class="info">
<!--							<img src="img/hover-icon.png" alt="">-->
						</div>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</li>
				<li data-src="img/port-pic2.jpg">
					<img src="img/port-pic2.jpg" alt="">
					<div class="mask">
						<div class="info">
<!--							<img src="img/hover-icon.png" alt="">-->
						</div>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</li>
				<li data-src="img/port-pic3.jpg">
					<img src="img/port-pic3.jpg" alt="">
					<div class="mask">
						<div class="info">
<!--							<img src="img/hover-icon.png" alt="">-->
						</div>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</li>
				<li data-src="img/port-pic4.jpg">
					<img src="img/port-pic4.jpg" alt="">
					<div class="mask">
						<div class="info">
<!--							<img src="img/hover-icon.png" alt="">-->
						</div>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</li>
				<li data-src="img/port-pic5.jpg">
					<img src="img/port-pic5.jpg" alt="">
					<div class="mask">
						<div class="info">
<!--							<img src="img/hover-icon.png" alt="">-->
						</div>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</li>
				<li data-src="img/port-pic6.jpg">
					<img src="img/port-pic6.jpg" alt="">
					<div class="mask">
						<div class="info">
<!--							<img src="img/hover-icon.png" alt="">-->
						</div>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</li>
				<li data-src="img/port-pic7.jpg">
					<img src="img/port-pic7.jpg" alt="">
					<div class="mask">
						<div class="info">
<!--							<img src="img/hover-icon.png" alt="">-->
						</div>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</li>
				<li data-src="img/port-pic8.jpg">
					<img src="img/port-pic2.jpg" alt="">
					<div class="mask">
						<div class="info">
<!--							<img src="img/hover-icon.png" alt="">-->
						</div>
						<h3>Product Design</h3>
						<p>"LimeLight"</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div id="myblog">
		<div class="myblog-container  clearfix">
			<div class="container">
				<h1>MYBLOG</h1>
				<span class="blog"></span>
			</div>
<!--			<ul class="col">-->
<!--				<li><img src="img/blog-post1.jpg" alt="">-->
<!---->
<!--					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,-->
<!--						SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT,-->
<!--						SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA-->
<!--						ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.-->
<!--					</p>-->
<!--				</li>-->
<!--				<li><img src="img/blog-post3.jpg" alt="">-->
<!---->
<!--					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,-->
<!--						SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE.-->
<!--					</p>-->
<!--				</li>-->
<!--			</ul>-->
<!--			<ul class="col">-->
<!--				<li><img src="img/blog-post1.jpg" alt="">-->
<!---->
<!--					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,-->
<!--						SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT,-->
<!--						SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE-->
<!--						MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.-->
<!--					</p>-->
<!--				</li>-->
<!--				<li><img src="img/blog-post5.jpg" alt="">-->
<!---->
<!--					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,-->
<!--						SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE-->
<!--						MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.-->
<!--					</p>-->
<!--				</li>-->
<!--			</ul>-->
<!--			<ul class="col">-->
<!--				<li><img src="img/blog-post4.jpg" alt="">-->
<!---->
<!--					<p>-->
<!--						LOREM IPSUM DOLOR SIT AMET,-->
<!--						CONSECTETUER ADIPISCING ELIT,-->
<!--						SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE.-->
<!--					</p>-->
<!--				</li>-->
<!--				<li><img src="img/blog-post3.jpg" alt="">-->
<!---->
<!--					<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,-->
<!--						SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.</p>-->
<!--				</li>-->
<!--			</ul>-->
		</div>

	</div>
	<div id="projects"></div>
	<div id="footer"></div>
	<script src="js/require.js" data-main="js/index.js"></script>
	<script src="js/myblog.js"></script>

</body>
</html>