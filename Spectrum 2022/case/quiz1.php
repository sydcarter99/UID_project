<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Lession 1: Experience Student";
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


<div id="page_content" class="page-content arrow-bottom pillars" role="main">

<div class="content_row row">
  <div class="col-md-3">
  <? include ("../_includes/navigation-secondary-vert.php"); ?>
  </div>

  <div class="col-md-1"></div>

  <!------- Main Content ------->
  <div class="col-md-7 ">
   <h2 class="section-header">Lession 1: Experience Student</h2>

   <br>
   <h4 class="section-header"> Reflection and discussion </h4>

   <br>
   <ul>
      <li>
      <p>Considering Darrens behavioral problems and his history of antagonizing fellow students, should he be permitted to continue his presentation?</p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio1" type="radio" value="yes" id="Radio1-yes">
        <label class="form-check-label" for="Radio1-yes">
            Yes, I should be permitted to continue his presentation.
        </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio1" type="radio" value="no" id="Radio1-no">
          <label class="form-check-label" for="Radio1-no">
            No, I should not be permitted to continue his presentation..
          </label>
        </div>
      </p>
      </ul>
    </br>
      <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="answer1.php">Check Answer</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a class="mt-2 mt-md-0 btn btn-au-ooutline my-2 my-sm-0" href="video1.php">Back to Video</a>

    </div>
  <!------- End Main Content ------->
</div>

</div>	
<?php include ($footerpath);?>
	
