<?php

require("_includes/config.php");

	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$headerpath = "_includes/header.php";
	$sitename = "Auburn University";
	$pagetitle = "Spectrum";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
	$nav_bar_path = "_includes/navigation-bar.php";
	/* ----------------- */

?>

<?php include ($headerpath);?>
<?php include ($nav_bar_path);?>

	<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

		<div class="content col row align-items-center">
			<div class="col">
				<h1 id="page_title" class="title">Spectrum 2022</h1>
				<div class="morecontent">
				</div>
			</div>
			<div class="angle-right"></div>
		</div>

	</div>

	<div id="page_content" class="page-content pillars" role="main">

		<div class="content_row row">
			
			<div class="content staff row ">
				
			
				<h2 class="section-header">Faculty</h2>
				
				</br>
				</br>
				
				<div class="row">
			
				<div class="col-sm-6 col-md-3" style="margin: 20px 0px 20px 0px; padding-bottom: 20px; border: solid white 5px;"><a href=""> <img alt="Dr.Cherly Seals" src="_assets/images/sample.jpg" style="display: block; padding-top: 20px; width: 90%; margin: 0px auto 20px auto;" width="90%"> </a>
				<h3 style="text-align: center;"><span style="font-size: 18pt;"> Dr.Cherly Seals <br> </span></h3>
				</div>
				<div class="col-sm-6 col-md-3" style="margin: 20px 0px 20px 0px; padding-bottom: 20px; border: solid white 5px;"><a href=""> <img alt="Dr.Harrison" src="_assets/images/Harrison.jpg" style="display: block; padding-top: 20px; width: 90%; margin: 0px auto 20px auto;" width="90%"> </a>
				<h3 style="text-align: center;"> <span style="font-size: 18pt;">Dr.Harrison</span> </h3>
				</div>
				<div class="col-sm-6 col-md-3" style="margin: 20px 0px 20px 0px; padding-bottom: 20px; border: solid white 5px;"><a href=""> <img alt="Dr.Thomas" src="_assets/images/thomas.jpg" style="display: block; padding-top: 20px; width: 90%; margin: 0px auto 20px auto;" width="90%"> </a>
				<h3 style="text-align: center;"> <span style="font-size: 18pt;">Dr.Thomas</span> </h3>
				</div>
				<div class="col-sm-6 col-md-3" style="margin: 20px 0px 20px 0px; padding-bottom: 20px; border: solid white 5px;"><a href=""> <img alt="Dr.Tripp" src="_assets/images/Tripp.jpg" style="display: block; padding-top: 20px; width: 90%; margin: 0px auto 20px auto;" width="90%"> </a>
				<h3 style="text-align: center;"> <span style="font-size: 18pt;">Dr.Tripp</span> </h3>
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