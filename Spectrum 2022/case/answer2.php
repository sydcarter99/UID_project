<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Lesson 2: Apathetic Student";
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


</div>

<div id="page_content" class="page-content arrow-bottom pillars" role="main">

<div class="content_row row">
  
  <div class="col-md-3">
  <? include ("../_includes/navigation-secondary-vert.php"); ?>
  </div>  

  <div class="col-md-1"></div>

  <!------- Main Content ------->
  <div class="col-md-7">
   
   <h2 class="section-header">Lesson 2: Apathetic Student</h2>

   <br>
   <h4 class="section-header"> Reflection and discussion </h4>

   <br>
   <ul>
      <li>
      <p>
      Mary has provided John with opportunities to peek his interest in class. Do you think Mary should have ignored John's behaviour and think that he should learn by himself?      </p>
      </li>
      <article>
      The answer is that Mary should not assume that John would learn by himself. A teacher responsiblity is to help the distracted students and atleast try to boost their interest. So, It is correct way that Mary has helped John to peak his interest.
      <br>
      </article>
      <br/>

      <li>
      <p>
      In the case of John, Do you think that Mary's strategy would work?
      </p>
      </li>
      <article>
      The answer is that explaining the topics to John in person would make him inclined towards the subject. This might lead to gain in his interest. And constantly conducting quizzes will also test his ability in the subject. So, Mary's strategy would work.
      <br>
      </article>
      <br/>

      <li>
      <p>
      What other strategy should Mary follow to involve John in class?
      </p>
      </li>
      <article>
      Making the student to discuss with his/her friends or giving extra assignments might work in specific cases. But, pointing the student in the middle of the class might lead to decrease in his/her confidence. So, in the case of John, Mary's strategy would work better.
      <br>
      </article>
      <br/>

      <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="tnote1.php">Teacher's Note</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a class="mt-2 mt-md-0 btn btn-au-ooutline my-2 my-sm-0" href="video1.php">Back to Video</a>
  </div>
  <!------- End Main Content ------->

</div>

</div>	
<?php include ($footerpath);?>
	
