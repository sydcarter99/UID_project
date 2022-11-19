<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Lesson 3: Cooperation in class";
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
   <h2 class="section-header">Lesson 3: Cooperation in class</h2>

   <br>
   <h4 class="section-header"> Reflection and discussion </h4>

   <br>
   <ul>
      <li>
      <p>Do you think cooperative work groups are used to promote science learning?
      </p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans1" id="Radio1-ans1">
        <label class="form-check-label" for="Radio1-ans1">
        Yes, I think cooperative groups can be used to promote science learning.
         </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans2" id="Radio1-ans2">
          <label class="form-check-label" for="Radio1-ans2">
          No, I think cooperative groups cannot be used to promote science learning.
        </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans3" id="Radio1-ans3">
          <label class="form-check-label" for="Radio1-ans3">
          Cannot tell.     
        </label>
        </div>
      </p>
      <br/>


      <li>
      <p>Do you think the potential advantages of cooperative learning outweigh the potential disadvantages?</p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans1" id="Radio2-ans1">
        <label class="form-check-label" for="Radio2-ans1">
        Yes, I think the potential advantages of cooperative learning outweigh the potential disadvantages.
         </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans2" id="Radio2-ans2">
          <label class="form-check-label" for="Radio2-ans2">
          No, the potential advantages of cooperative learning cannot outweigh the potential disadvantages.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans3" id="Radio2-ans3">
          <label class="form-check-label" for="Radio2-ans3">
          Cannot tell.
          </label>
        </div>
      </p>
      <br/>

      <li>
      <p>Would you encourage Maggie to:</p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio3" type="radio" value="ans1" id="Radio3-ans1">
        <label class="form-check-label" for="Radio3-ans1">
        Continue with her original plan.
         </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio3" type="radio" value="ans2" id="Radio3-ans2">
          <label class="form-check-label" for="Radio3-ans2">
          Modify her original plan.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio3" type="radio" value="ans3" id="Radio3-ans3">
          <label class="form-check-label" for="Radio3-ans3">
          Scrap the plan entirely.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio3" type="radio" value="ans3" id="Radio3-ans4">
          <label class="form-check-label" for="Radio3-ans4">
          Cannot tell.
          </label>
        </div>
      </p>
      <br/>

      <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="answer3.php">Check Answer</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a class="mt-2 mt-md-0 btn btn-au-ooutline my-2 my-sm-0" href="video3.php">Back to Video</a>
  </div>
  <!------- End Main Content ------->
</div>

</div>	
<?php include ($footerpath);?>
	
