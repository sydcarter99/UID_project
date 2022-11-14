<? require("../_includes/config.php"); ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "2022 Web Template";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "../_assets/images/bank/page-preview-samford-03.jpg";
	$nav_bar_path = "../_includes/navigation-bar.php";
	/* ----------------- */

?>

<?php include ($headerpath);?>
<?php include ($nav_bar_path);?>

	<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

		<div class="content col row align-items-center">
			<div class="col">
				<h1 id="page_title" class="title">Spectrum 2022</h1>
				<div class="morecontent">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>
			<div class="angle-right"></div>
		</div>

	</div>

	<div id="page_content" class="page-content pillars" role="main">

		<div class="content_row row">
			
			<div class="content staff row ">
				
			
				<h2 class="section-header">Courses</h2>
				
				
				<h3 class="section-header">Category 1</h3>
				
				<div class="row row-cols-1 row-cols-sm-3 row-cols-xl-3">
					
					<div class="col item">
						<a href="course-bio-page.php">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course 1</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="course-bio-page.php">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course 2</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>

					<div class="col item">
						<a href="course-bio-page.php">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course 3</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>
				</div>
				
				<h3 class="section-header">Category 2</h3>
				
				<div class="row row-cols-1 row-cols-sm-3 row-cols-xl-4">
					
					<div class="col item">
						<a href="">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course #</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course #</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course #</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course #</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course #</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="">
							<div class="card h-100">
								<img src="../_assets/images/video-blank.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title">Course #</h4>
									<p class="card-text">Intro</p>
								</div>
							</div>
						</a>	
					</div>
					
				</div>	
				
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
<script>
	$(document).ready(function() {
  		$('.staff .item').addClass('col-sm-4');
	});
</script>