<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Lesson 4: Critical Thinking";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";
  $nav_bar_path = "../_includes/navigation-child-bar.php";

	/* ----------------- */

?>

<?php include ($headerpath);?>

<?php include ($nav_bar_path);?>


<!------------------ Banner ------------------>
<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

<div class="content col row align-items-center">
  <div class="col">
    <h1 id="page_title" class="title">Case study</h1>
    <div class="morecontent">      
    </div>
  </div>
  <div class="angle-right"></div>
</div>
</div>

</div>
<!------------------ End Banner ------------------>

<div id="page_content" class="page-content pillars" role="main">

<div class="content_row row">
  <div class="col-md-3 ">

  <? include ("../_includes/navigation-secondary-vert.php"); ?>
  </div>
  <div class="col-md-1"></div>

<!------- Main Content ------->
<div class="col-md-7 ">
    <h2 class="section-header">Lesson 4: Critical Thinking</h2>
    <br>

		<h4 class="section-header ">Video</a></h4>
    </br>    

    <div class="ratio ratio-16x9">
      <iframe width="1412" height="537" src="https://www.youtube.com/embed/VB3ZUZnYJE8" title="Samford Hall at Auburn University" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <br/>
    <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="quiz4.php">Discussion and Reflection</a>

  </div>
  <!------- End Main Content ------->
  
</div>

</div>	
<?php include ($footerpath);?>
	