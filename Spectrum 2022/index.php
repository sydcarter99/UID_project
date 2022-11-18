<?php

require("_includes/config.php");

	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$headerpath = "_includes/header.php";
	$sitename = "Auburn University";
	$pagetitle = "Spectrum";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";
	$nav_bar_path = "_includes/navigation-bar.php";
	/* ----------------- */
		

include ($headerpath);

?>

	<style>
		
		/* PAGE SPECIFIC STYLING */
		.title-container {background:url("https://auburn.edu/template/2022/_assets/images/bank/samford-hall-01.jpg"); background-position: center center; background-size:cover;}
		.buttons {margin:2% auto; width:90%;}
		.buttons .btn {margin:0px 1%;}
		
		@media (min-width:576px) {
		}
		
		@media (min-width:768px) {
			
		}
		
		@media (min-width:992px) {
			.example-2 .col-lg {padding:2%;}
	}
		
		@media (min-width:1200px) {
		}
		
		@media (min-width:1400px) {
		}
				
	</style>	

	

	<div id="title_container" class="title-container row align-items-center title-bluebar" role="banner" aria-labelledby="page_title">

		<div class="content col row align-items-center">
			<div class="col">
				<h1 id="page_title" class="title">Spectrum 2022</h1>
			</div>
			<div class="angle-right"></div>
		</div>

		<div class="content-feature-slant photo">
			<div class="slant-container"></div>
		</div>

	</div>
<?php include ($nav_bar_path); ?>
	<div id="page_content" class="page-content prebar" role="main">

	
		<div class="content_row row justify-content-around example-1">

			
			<h2 class="section-header">Spectrum Educational Tool</h2>

			<p>Innovative teacher training introduces a new set of demanding challenges and issues. Teaching has become a very complex and demanding process. Teachers with little exposure to digital media and with little preparation with digital media may face difficulties in dealing with the complexity of classroom teacing. These new teachers may often find the demands of the classroom too challenging and quckily become discouraged or adopt a simplisitc view of teaching where 'Tricks & Trade' serve as a substitute for thoughtful process.</p>

			<div class="col-lg-5">
				<h3 class="section-header">Spectrum Educational Tool</h3>
				<p>Teaching has become a very complex and demanding process. Teachers with little exposure to digital media and with little preparation with digital media may face difficulties in dealing with the complexity of classroom teacing. These new teachers may often find the demands of the classroom too challenging and quckily become discouraged or adopt a simplisitc view of teaching where 'Tricks & Trade' serve as a substitute for thoughtful process.</p>
			</div>
			
			
			<div class="col-lg-5">
				<h3 class="section-header">H3 Section Header</h3>
				
				<div class="row">
					
				<div class="ratio ratio-16x9">
      				<iframe width="1412" height="537" src="https://www.youtube.com/embed/VB3ZUZnYJE8" title="Samford Hall at Auburn University" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    </div>
				</div>
				
			</div>
			
		</div>	
			
		<div class="content_row row example-2">

			<h2 class="section-header">Why Spectrum Educational Tool?</h2>

			<p>By using Spectrum Education tool, it provides extensive training of teachers which will help them in understanding digital Media and know better strategies for successful classroom management. The teachers will be well versed with teaching skills, instructional strategies, curricula, and assessment practices. Our goal is to reinforce best practices for classroom management and to create an online learning environment to support pre-service and in-dervice teachers.</p>
			
			<h3 class="section-header">H3 Section Header</h3>

			<p>Aliquet eget sit amet tellus cras adipiscing. Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing. Cras pulvinar mattis nunc sed blandit libero volutpat. Congue mauris rhoncus aenean vel elit. Tellus orci ac auctor augue mauris augue. Eu scelerisque felis imperdiet proin fermentum. Sagittis eu volutpat odio facilisis. Tincidunt lobortis feugiat vivamus at augue. Proin fermentum leo vel orci porta non pulvinar neque laoreet. Accumsan tortor posuere ac ut consequat semper viverra. Neque gravida in fermentum et sollicitudin ac. Laoreet sit amet cursus sit amet dictum sit. Gravida neque convallis a cras semper. Eu ultrices vitae auctor eu augue ut lectus. In massa tempor nec feugiat nisl pretium fusce id.</p>
			
		</div>
			
	</div>	
	
	
<?php include ($footerpath);?>

