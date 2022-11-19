<!doctype html>
<html lang="en"><head>
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
		<a href="#" data-bs-toggle="modal" data-bs-target="#au_navigation" class="skipto btn">Skip to Primary Navigation</a>
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
			<div class="col-3 col-md-1 nav-toggle d-print-none">
								
				<button type="button" id="nav_btn_modal_nav_open" class="btn" style="" data-bs-toggle="modal" data-bs-target="#au_navigation"><span class="visually-hidden">Toggle site navigation</span>
					
						<svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" alt="">
						<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>	
					

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
				<a id="search_btn1" href="#" class="col" data-bs-toggle="modal" data-bs-target="#au_search">Search</a>
			</div>
			
		</div>
		
	</div>

	<!-- Search Modal -->	
	<div class="modal fade au-search d-print-none" id="au_search" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
		  <div class="modal-dialog modal-fullscreen">
			<div class="modal-content">
			  <div class="modal-header">
				<div class="image col-8 col-sm-4">
					<img src="<? echo $navigation_modal_logo; ?>" alt=""> 
				</div>
				<button type="button" class="nav-close" data-bs-dismiss="modal" aria-label="Close">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16" alt=""><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/></svg>    
				</button>
			  </div>
			  <div class="modal-body row align-items-center justify-content-center">


					<div class="col-md-5">

						<div class="col-sm-12 row au-search-links" role="navigation" aria-label="Search links">
						
							<div class="col"><a href="https://auburn.edu/map">Campus Map</a></div>
							<div class="col"><a href="https://auburn.edu/main/sitemap.php">A-Z Index</a></div>
							<div class="col"><a href="https://auburn.edu/main/people-finder/">People Finder</a></div>
						
						</div>
						
						<div class="col-sm-12">
						
							<form action="https://search.auburn.edu" class="" method="get" role="search">
								<input class="form-control form-control-lg searchfield" type="text" name="q" aria-label="Auburn University Search"  placeholder="Search Auburn.edu" style="width:100%;">

								<input type="hidden" name="cx" value="006456623919840955604:pinevfah6qm">
								<input type="hidden" name="ie" value="utf-8">
								<input type="submit" class="visually-hidden-focusable" value="Search"/>
							</form>

						</div>	
							
					</div> 


			  </div>     
			</div>
		  </div>
		</div>
	
	<!-- Navigation Modal -->
	<div class="navigation modal fade d-print-none" id="au_navigation" role="navigation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true" aria-labelledby="sitenav" >
	  <span id="sitenav" class="visually-hidden">Site navigation</span>
	  <div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
		  <div class="modal-header row align-items-center">
			
			<div class="col-9 col-md-4 image logo clearfix">
				<img src="<? echo $navigation_modal_logo; ?>" alt=""> 
			</div>
			
			<div class="col-3 col-md-1 nav-close d-print-none order-sm-last">
								
				<button type="button" id="nav_btn_modal_nav_close" class="btn" style="" data-bs-toggle="modal" data-bs-target="#au_navigation"><span class="visually-hidden">Close site navigation</span>
					
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16" alt=""><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/></svg>	
					
				</button>

			</div>  
			  
			<div class="col-12 col-md-7 links align-items-center d-print-none row">
				<? include ($audiencenavigationpath);?>  
			</div>  
			  
		  </div>
		  <div class="modal-body row">

			<? include ($navigationpath);?>

		  </div>
		</div>
	  </div>
	</div>	
	
	<? include ($alertbarpath);?>