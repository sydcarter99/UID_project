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
    

    <div class="ratio ratio-16x9">
      <iframe width="1412" height="537" src="https://www.youtube.com/embed/VB3ZUZnYJE8" title="Samford Hall at Auburn University" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    </div>
    <p>Auctor elit sed vulputate mi sit amet. Aliquet lectus proin nibh nisl condimentum id venenatis a. Feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. A diam sollicitudin tempor id eu nisl nunc. Arcu non sodales neque sodales ut etiam. Nunc congue nisi vitae suscipit tellus mauris a diam maecenas. Malesuada fames ac turpis egestas maecenas. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nunc non blandit massa enim nec dui. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Viverra tellus in hac habitasse platea. Mi eget mauris pharetra et ultrices neque ornare. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Est ante in nibh mauris cursus mattis molestie a iaculis.</p>
    
    <h3 class="section-header">H3 Section Header</h3>
    
    <p>Aliquet eget sit amet tellus cras adipiscing. Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing. Cras pulvinar mattis nunc sed blandit libero volutpat. Congue mauris rhoncus aenean vel elit. Tellus orci ac auctor augue mauris augue. Eu scelerisque felis imperdiet proin fermentum. Sagittis eu volutpat odio facilisis. Tincidunt lobortis feugiat vivamus at augue. Proin fermentum leo vel orci porta non pulvinar neque laoreet. Accumsan tortor posuere ac ut consequat semper viverra. Neque gravida in fermentum et sollicitudin ac. Laoreet sit amet cursus sit amet dictum sit. Gravida neque convallis a cras semper. Eu ultrices vitae auctor eu augue ut lectus. In massa tempor nec feugiat nisl pretium fusce id.</p>

    
    <h4 class="section-header">H4 Section Header</h4>
    
    <p>Aliquet eget sit amet tellus cras adipiscing. Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing. Cras pulvinar mattis nunc sed blandit libero volutpat. Congue mauris rhoncus aenean vel elit. Tellus orci ac auctor augue mauris augue. Eu scelerisque felis imperdiet proin fermentum. Sagittis eu volutpat odio facilisis. Tincidunt lobortis feugiat vivamus at augue. Proin fermentum leo vel orci porta non pulvinar neque laoreet. Accumsan tortor posuere ac ut consequat semper viverra. Neque gravida in fermentum et sollicitudin ac. Laoreet sit amet cursus sit amet dictum sit. Gravida neque convallis a cras semper. Eu ultrices vitae auctor eu augue ut lectus. In massa tempor nec feugiat nisl pretium fusce id.</p>
    

  </div>
  <!------- End Main Content ------->

</div>

</div>	
<?php include ($footerpath);?>
	
