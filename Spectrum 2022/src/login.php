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

<!------------------ Page Content ------------------>
<div id="page_content" class="page-content no-title-container arrow-bottom " role="main">
	<div class="content_row row">
	<div class="col-md-4"></div>
        <div class="col-md-5">
            <div class="card cardbox">
                <div class="card-header"><b>Login</b></div>
                <div class="card-body">


                    <div class="form-group">

                        <form id="login-nav" method="post" action="../_includes/login-inc-test.php" class="form">

                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="text" id="email" onchange='check()' name="email"
                                       class="form-control" value="" placeholder="Email" required>
                            </div>

                            <!-- password group -->
                            <div class="form-group">

                                <!-- password label -->
                                <label class="sr-only">Password</label>
                                <!-- password input -->
                                <div class="input-group">
                                    <input type="password" id="password" name="password"
                                           class="form-control" data-placement="bottom" data-toggle="popover"
                                           data-container="body" data-html="true" value="" placeholder="Password"
                                           onchange='check()' required>

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-append1"
                                                onclick="togglePassword()">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>


                                <!-- password-confirm error message
                                <div class="help-block text-right">
                                    <i style="color:#9B1B30 ">${error}</i>
                                </div>
                               -->
                            </div>

                            <div class="login-or">
                                <hr class="hr-or">
                            </div>
                            <!-- Submit -->
                            <div class="form-group">
                                <button id="log_submit" name="submit" value="1" class="btn btn-block btn-primary"
                                        disabled="true" >
                                    Login</button>
                            </div>  

  <!-- Example Code -->
    
  <div aria-live="polite" aria-atomic="true" class="position-relative">
      <!-- Position it: -->
      <!-- - `.toast-container` for spacing between toasts -->
      <!-- - `top-0` & `end-0` to position the toasts in the upper right corner -->
      <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
      <div class="toast-body">
    
        <!-- Then put toasts within -->
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">    
            <strong class="me-auto">Spectrum</strong>
            <small class="text-muted">Just now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Username: <b>test</b>
            </br>
            Password: <b>test</b>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Example Code -->
                            <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or">or</span>
                            </div>

                            <!-- Links -->
                            <div class="bottom text-center">
                                Don't have an account? <a href="register.php"><b>Sign up</b></a>
                            </div>
                        </form>
                    </div>
             
                </div>
            </div>
        </div>
		
  </div>


</div>	

<script type="text/javascript">
    // togglePassword
    function togglePassword() {
        var element = document.getElementById('password');
        element.type = (element.type == 'password' ? 'text' : 'password');
    }
    var check = function () {
        document.getElementById('log_submit').disabled = !(document.getElementById('email').value && document.getElementById('password'));
    }
</script>
<?php include ($footerpath);?>
	
