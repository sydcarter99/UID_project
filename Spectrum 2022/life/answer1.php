<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case 1: Threatening Student";
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
   
   <h2 class="section-header">Case 1: Threatening Student</h2>

   <br>
   <h4 class="section-header"> Reflection and discussion </h4>

   <br>
   <ul>
      <li>
      <p>
      What is the next course of action you should take?
      </p>
      </li>
      <article>
      Sending the students to time-out does not resolve the issue, and this is a situation that needs careful attention.
</br>
Although sending the students to the counselor is a good option, it is important that the parents are involved in this discussion. Increased parent involvement has been linked to positive social and emotional behaviors, motivation, social competence, and peer relationships (Usher, Kober). There are school rules about threats, and neglecting to do something about these threats can lead to escalation in safety and management issues.
Consider if you, as the teacher, were the one threatened. Would this affect how the situation is handled?
      <br>
      </article>
      <br/>
      </ul>
      <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="task2.php">Next Case</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a class="mt-2 mt-md-0 btn btn-au-ooutline my-2 my-sm-0" href="video1.php">Back to Video</a>
  </div>
  <!------- End Main Content ------->

</div>

</div>	
<?php include ($footerpath);?>
	
