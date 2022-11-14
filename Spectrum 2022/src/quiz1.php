<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "2022 Web Template";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";
  $nav_bar_path = "../_includes/navigation-bar.php";

	/* ----------------- */

?>

<?php include ($headerpath);?>

<?php include ($nav_bar_path);?>


<!------------------ Grid ------------------>
<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

<div class="content col row align-items-center">
  <div class="col">
    <h1 id="page_title" class="title">Topics name</h1>
    <div class="morecontent">
      
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      
    </div>
  </div>
  <div class="angle-right"></div>
</div>

</div>

<div id="page_content" class="page-content arrow-bottom" role="main">

<div class="content_row row">
  
  <? include ("../_includes/navigation-secondary-vert.php"); ?>
  
  <!------- Main Content ------->
  <div class="col">
  
    <h2 class="section-header">Chapter 1</h2>
    
    <p>Aliquet eget sit amet tellus cras adipiscing. Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing.</p>
    

  </div>
  <!------- End Main Content ------->

</div>

</div>	
<?php include ($footerpath);?>
	
