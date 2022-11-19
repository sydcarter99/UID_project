<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case 3: Bullying Students";
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


</div>

<div id="page_content" class="page-content arrow-bottom pillars" role="main">

<div class="content_row row">
  
  <div class="col-md-3">
  <? include ($life_nav_path); ?>
  </div>  

  <div class="col-md-1"></div>

  <!------- Main Content ------->
  <div class="col-md-7">
   
   <h2 class="section-header">Case 3: Bullying Students</h2>

   <br>
   <h4 class="section-header"> Reflection and discussion </h4>

   <br>
   <ul>
      <li>
      <p>
      What could be your possible immediate reaction to the student?
      </p>
      </li>
      <article>
      The answer is that you have to take the stone of out student's hand and immediately take him to class. Though you are angry at student for hurting other students, it should not be reflected as shouting or beating.
      <br>
      </article>
      <br/>

      <li>
      <p>
      Do you need to notify the higher authorities about the incident?
      </p>
      </li>
      <article>
      As the incident involves physical abuse, hurting others students with stones, you need to notify the gigher authorities.
      <br>
      </article>
      <br/>

      <li>
      <p>
      Later, after going to the class, what actions do you take against John?
      </p>
      </li>
      <article>
      It is a better way to notify the higher authorities and allow them to take the respective ations.
      <br>
      </article>
      <br/>
      </ul>
      <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="task4.php">Next Case</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a class="mt-2 mt-md-0 btn btn-au-ooutline my-2 my-sm-0" href="video3.php">Back to Video</a>
  </div>
  <!------- End Main Content ------->

</div>

</div>	
<?php include ($footerpath);?>
	
