<!doctype html>
<html lang="en">
	
<head>
<title><? echo $pagetitle;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="<? echo $keywords;?>"/>
<meta name="description" content="<? echo $description;?>" />
<meta property="og:url" content="<? echo $pageurl;?>" />
<meta property="og:title" content="<? echo $pagetitle;?>" />
<meta property="og:site_name" content="<? echo $sitename;?>" />
<meta property="og:description" content="<? echo $description;?>"/>
<meta property="og:image" content="<? echo $previewimage;?>" />
<!-- CSS -->
<link href="//auburn.edu/template/2022/_assets/css/bootstrap.min.css" rel="stylesheet">
<link href="//auburn.edu/template/2022/_assets/css/global.css" rel="stylesheet">	
<? if ($cssfile) { ?>
<link href="<? echo $cssfile;?>" rel="stylesheet">
<? } ; ?>	

<!-- Icon -->	
<link rel="shortcut icon" href="//auburn.edu/template/2022/_assets/images/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>
	
<body>
	
	<? include ($gdprpath);?>
	
	<div id="top" role="navigation" aria-label="Main navigation shortcuts">
		<a href="#" data-bs-toggle="modal" data-bs-target="#au_navigation" class="skipto btn">Skip to Navigation</a>
		<a href="#page_content" class="skipto btn">Skip to Content</a>
	</div>
		
	<div class="site-header" role="banner" aria-label="Site header">
		
		<div class="row align-items-center">
			
			<!-- SITE WORDMARK -->
			<div class="col-9 col-md-4 image header-logo">
				<a href="<? echo $headerimage_destination;?>">
				<img src="<? echo $headerimage_url;?>" class="d-print-none" alt="<? echo $headerimage_alt;?>"> 
				<img src="<? echo $headerimage_print;?>" alt="<? echo $headerimage_print_alt;?>" class="d-none d-print-block" style="width:500px;">	
				</a>
			</div>
			
			<!-- NAV TOGGLE -->
			<div class="col-3 col-md-1 nav-toggle nav-toggle2 d-print-none">
				
				<!-- THIS IS THE PUSHDOWN MENU BUTTON -->
				
				<button type="button" id="nav_btn_push" class="btn" style="" data-bs-toggle="collapse" data-bs-target="#au_navigation"><div class="visually-hidden">Toggle site navigation</div>
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" alt="">
						<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
					</svg>	
						
					<span class="text">
						<span class="d-none d-xxl-block">Menu</span>
					</span>	
				</button>
				
			</div>
			
		
			<!-- HEADER LINKS-->
			<div class="row col-12 col-md-7 links align-items-center d-print-none">
				<a class="col" href="https://auburn.edu/admissions/attention-applicants.php">Apply</a>
				<a class="col" href="https://auburn.edu/give">Give</a>
				<a class="col" href="https://auaccess.auburn.edu/">AU Access</a>
				<a id="search_btn2" href="#" class="col" data-bs-toggle="collapse" data-bs-target="#au_search">Search</a>
			</div>
			
		</div>
		
	</div>

	<!-- Search Pushdown -->
	<div class="collapse search-pushdown pushdown au-search d-print-none" id="au_search">
	  	<div class="row align-items-center justify-content-end" style="padding:.5%;">

			<div class="col-sm-5 row au-search-links" role="navigation" aria-label="Search2 links">
				<div class="col"><a href="https://auburn.edu/map">Campus Map</a></div>
				<div class="col"><a href="https://auburn.edu/main/sitemap.php">A-Z Index</a></div>
				<div class="col"><a href="https://auburn.edu/main/people-finder/">People Finder</a></div>
			</div>

			<div class="col-sm-4 form-container">

				<form action="https://search.auburn.edu" class="row" method="get">
					<div class="col-md-10">
						<input class="form-control form-control-md" type="text" name="q" aria-label="Auburn University Search" role="search" class="searchfield" placeholder="Search Auburn.edu" style="width:100%;">
						<input type="hidden" name="cx" value="006456623919840955604:pinevfah6qm">
						<input type="hidden" name="ie" value="utf-8">
					</div>
					<div class="col-md-2">
						<input type="submit" class="visually-hidden-focusable" value="Search"/>
					</div>	
				</form>

			</div>	
						
		</div>
	</div>
	
	<!-- Navigation Pushdown -->
	<div class="collapse navigation pushdown d-print-none" id="au_navigation" role="navigation" aria-label="Pushdown navigation">
	  	<div class="row">

			<? include ($audiencenavigationpath);?>
			
			<? include ($navigationpath);?>
	
		</div>
	</div>
	
	<? include ($aualertpath);?>