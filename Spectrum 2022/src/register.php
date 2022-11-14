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
                <div class="card-header"><b>Register</b></div>
                <div class="card-body">

                    <div class="form-group">

                        <form id="login-nav" method="get" action="Register" class="form" accept-charset="UTF-8">

                            <!-- email group -->
                            <div class="form-group">
                                <label class="sr-only">E-mail Address</label>
                                <input type="email" id="email" name="email" class="form-control" value="" placeholder="xxx@xxx.com">
                            </div>

                            <!-- password group -->
                            <div class="form-group">

                                <!-- password label -->
                                <label class="sr-only">Password</label>
                                <!-- password input -->
                                <div class="input-group">
                                    <input type="password" id="password" onchange='check()' name="password" class="form-control"
                                           data-placement="bottom" data-toggle="popover" data-container="body" data-html="true" value=""
                                           placeholder="Password" required>

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-append1"
                                                onclick="togglePassword()">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- password-confirm group -->
                            <div class="form-group">

                                <!-- password-confirm label -->
                                <label class="sr-only">Password Confirm</label>
                                <!-- password-confirm input -->
                                <div class="input-group">
                                    <input type="password" id="reg_userpasswordconfirm" onchange='check()' class="form-control" data-placement="bottom"
                                           data-toggle="popover" data-container="body" data-html="true" placeholder="Password Confirm"
                                           required>

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-append2"
                                                onclick="toggleConPassword()">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="help-block text-right">
                                        <i id="message"></i>
                                </div>
                                <!-- password-confirm error message 

                                <div class="help-block text-right">
                                    <i style="color:#9B1B30 ">${msg}</i>
                                </div>

                                -->
                            </div>


                            <!-- Submit -->
                            <div class="form-group">
                                <button id="reg_submit" name="submit" value="1" class="btn btn-block btn-primary"
                                        disabled="false">Create user</button>
                            </div>

                        </form>
                    </div>

                    <div class="login-or">
                        <hr class="hr-or">
                    </div>
                    <!-- Links -->
                    <div class="bottom text-center">
                    Have an Account Already? <a href="login.php"><b>Login</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>	

<script type="text/javascript">
    function togglePassword() {
        var element = document.getElementById('password');
        element.type = (element.type == 'password' ? 'text' : 'password');
    };
    function toggleConPassword() {
        var element = document.getElementById('reg_userpasswordconfirm');
        element.type = (element.type == 'password' ? 'text' : 'password');
    };
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('reg_userpasswordconfirm').value) {
            document.getElementById('message').innerHTML = 'Confirm Password Matching';
            document.getElementById('message').style.color = '#88B04B';
            document.getElementById('reg_submit').disabled = false;
        } else {
            document.getElementById('message').innerHTML = 'Password Not Matching';
            document.getElementById('message').style.color = '#9B1B30';
            document.getElementById('reg_submit').disabled = true;
        }
    }
</script>
<?php include ($footerpath);?>
	
