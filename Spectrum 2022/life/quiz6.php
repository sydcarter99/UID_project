<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case 6: Emotionally Neglected Student";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";
  $nav_bar_path = "../_includes/navigation-child-bar.php";
  $life_nav_path = "../_includes/life-inc-nav.php";

	/* ----------------- */

?>

<?php include ($headerpath);?>

<?php include ($nav_bar_path);?>



<!------------------ Banner ------------------>
<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

<div class="content col row align-items-center">
  <div class="col">
    <h1 id="page_title" class="title">Life case</h1>
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
  <? include ($life_nav_path); ?>
  </div>

  <div class="col-md-1"></div>

  <!------- Main Content ------->
  <div class="col-md-7 ">
   <h2 class="section-header">Case 6: Emotionally Neglected Student</h2>

   <br>
   <h4 class="section-header"> Reflection and discussion </h4>

   <br>
   <ul>
      <li>
      <p>What is the best possible way to handle the situation?
      </p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans1" id="Radio1-ans1">
        <label class="form-check-label" for="Radio1-ans1">
        Solve the issue collaboratively, talk to Jill about her situaion and try to explain her the classes she missed in your free time.
         </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans2" id="Radio1-ans2">
          <label class="form-check-label" for="Radio1-ans2">
          As her parents are not showing any interest, Ignore the behaviour of Jill
        </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans3" id="Radio1-ans3">
          <label class="form-check-label" for="Radio1-ans3">
          Ask Jill to hire a personal tutor to cover the missed classes.
        </label>
        </div>
      </p>
      <br/>


      <li>
      <p>Analysing Jill's behaviour, what could be the reason for Jill's lack of interest in class?</p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans1" id="Radio2-ans1">
        <label class="form-check-label" for="Radio2-ans1">
        As she missed out many classes, she is not able to cope up with the new material by which she is loosing ineterest in class.
         </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans2" id="Radio2-ans2">
          <label class="form-check-label" for="Radio2-ans2">
          She does not want to go to school and is trying to drop out.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans3" id="Radio2-ans3">
          <label class="form-check-label" for="Radio2-ans3">
          Due to many personal problems at home, she is not able to concentrate.
          </label>
        </div>
      </p>
      <br/>

      <li>
      <p>As Jill's parents are not showing interest in their daughter's academic status, what can you do about them?</p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio3" type="radio" value="ans1" id="Radio3-ans1">
        <label class="form-check-label" for="Radio3-ans1">
        Ignore the ignorance of their parents towards their daughter, and you try to resolve the issues related to class.
         </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio3" type="radio" value="ans2" id="Radio3-ans2">
          <label class="form-check-label" for="Radio3-ans2">
          Complain to the authorities that Jill's parents are not taking any interest.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio3" type="radio" value="ans3" id="Radio3-ans3">
          <label class="form-check-label" for="Radio3-ans3">
          Get angry at Jill's parents and warn them to change their attitude.
          </label>
        </div>
      </p>
      </ul>

      <br/>

      <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="answer6.php">Check Answer</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a class="mt-2 mt-md-0 btn btn-au-ooutline my-2 my-sm-0" href="video6.php">Back to Video</a>
  
    </div>
  <!------- End Main Content ------->
</div>

</div>	
<?php include ($footerpath);?>
	
