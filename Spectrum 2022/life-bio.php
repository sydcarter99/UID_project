<? require("_includes/config.php"); ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */
	$headerpath = "_includes/header.php";
	$sitename = "Auburn University";
	$pagetitle = "Life cases";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";
	$nav_bar_path = "_includes/navigation-bar.php";

	/* ----------------- */

?>

<?php include ($headerpath);?>
<?php include ($nav_bar_path);?>
	<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

		<div class="content col row align-items-center">
			<div class="col">
				<h1 id="page_title" class="title">Life Cases</h1>
				<div class="morecontent">      
    			</div>
			</div>
			<div class="angle-right"></div>
		</div>

	</div>

	<div id="page_content" class="page-content staff-bio pillars" role="main">

		<div class="content_row row">
			
			<div class="content row">
			
				<div class="col-md-3 image">
					<a href="life/case/task1.php">
					<img src="_assets/images/life.jpeg"  class="img-thumbnail" alt="...">
					</a>
					<br/>
					<br/>

					<div class="content row align-items-center">

					<a class="mt-2 mt-md-0 btn btn-au-odark my-2 my-sm-0" href="life/task1.php">Join now!</a>
					</div>


				</div>
				
				<div class="col-md-1"></div>
				
				<div class="col-md-7 information">
					<div class="name">COURSE DESCRIPTION</div>
					</br>
					
						<p>Life cases delivers video-based case studies that let students address real problems facing relevant companies in the moment, as they are happening.</p>

					
				</div>
			
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>