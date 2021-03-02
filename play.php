<!doctype html>
<html lang="ru-RU">
<head>
<title>KariCraft - как играть</title>
<meta charset="utf-8">
<meta name="description" content="KariCraft это сервер майнкрафт на версию 1.12.2 с множеством различный режимов">
<meta name="keywords" content="KariCraft, karicraft, kari craft, Kari Craft, майнкрафт 1.12.2, сервер 1.12.2, бедварс">
<meta name="author" content="KariCraft">
<meta name="copyright" content="KariCraft">
<!-- <meta name="google-site-verification" content="cO1o6sx54cvKxhbnYsABWtl4sYFj9uVKV0DxLKZkWv8"/> -->
<?php include 'lib/module/sys-meta.php';?>
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
<script data-cfasync="false" src='/lib/js/carousel.js?v=1'></script>
</head>
<body>
<img src="/img/graphics/landing/dualshock3.png" width="1" height="1" alt="Preload"/>
<img src="/img/videos/1.jpg" width="1" height="1" alt="Preload"/>
<img src="/img/videos/1b.jpg" width="1" height="1" alt="Preload"/>
<img src="/img/videos/2.jpg" width="1" height="1" alt="Preload"/>
<img src="/img/videos/2b.jpg" width="1" height="1" alt="Preload"/>
<img src="/img/videos/3.jpg" width="1" height="1" alt="Preload"/>
<img src="/img/videos/3b.jpg" width="1" height="1" alt="Preload"/>
<?php include 'lib/module/sys-php.php';?>
<?php include 'lib/module/ui-main-video.php'?>
<?php
	preloadVideo(
	'1',
	'8FTQgFT6Znw',
	'1'
	);
	preloadVideo(
	'2',
	'MhLteF_xVi0',
	'2'
	);
	preloadVideo(
	'3',
	'p_gvO2jBWwI',
	'3'
	);
?>
<div class="page-con-content landing-con-override">
		<div class="wavebar-con-container-master">
			<div class="wavebar-con-wrap">
			  <div class="wavebar-svg-object"></div>
			  <div class="wavebar-svg-object"></div>
			</div>
		</div>
	<div class="landing-con-main">
		<div id="object-particles">
		</div>
		<div class="content-con-backdrop darkmode-header">
		</div>
		<div class="content-con-outside">
			<div class="content-con-inside">
				<div class='landing-con-left content-expand '>
					<div class="landing-con-container scale-content-txt-1 fade-in-onload">
						<div class='landing-ico-logo'>
						</div>
						<div class='landing-tx1-heading pulsate'>
							<h1>Как начать играть?</h1>
							<h1></h1>
						</div>
						<div class='landing-tx2-heading'>
							<p style="text-shadow: 3px 3px 3px black, 3em 3em 3em black;">
								Чтобы начать играть на нашем сервере всеголишь
								<br>
								достаточно открыть майнкрафт 1.12.2 и ввести ip адресс нашего сервера
								<br>
								ip: скрыто до полной готовности сервера
							</p>
						</div>
					</div>
				</div>
				<div class='landing-con-right content-remove '>
					<div class='landing-img-hero' style="background: url(/img/graphics/landing/dirt.png) no-repeat center; background-size: 250px;">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'lib/module/ui-main-footer.php';?>
</div>
</body>
</html>