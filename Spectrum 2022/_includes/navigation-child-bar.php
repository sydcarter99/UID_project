
<!------------------ Nav bar ------------------>
<nav id="secondary_nav_horiz" role="navigation" aria-label="Page and section navigation" class="sec-nav-horiz sticky navbar navbar-expand-xl navbar-light d-print-none" name="Section navigation">
	<div class="image-brand"></div>	
  <div class="container-fluid">

	<div class="navbar-brand">
		<span class="d-block d-xl-none">Menu</span>
		<span class="d-none d-sm-block"></span>
	</div>  


	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle page / section navigation">

	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
		<li class="nav-item">
		  <a class="nav-link" href="../index.php">Spectrum</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="../home.php">Courses</a>
		</li> 
		<li class="nav-item dropdown">
          <a id="navbarDropdown01" class="nav-link dropdown-toggle" href="../#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Topics
          </a>
		  <ul class="dropdown-menu" aria-labelledby="navbarDropdown01">
			<li><a class="dropdown-item" href="../case-bio.php">Case Studies</a></li>
			  <li><a class="dropdown-item" href="../life-bio.php">Life Cases</a></li>
          </ul>
        </li>   
		<li class="nav-item">
		  <a class="nav-link" href="../process.php">Faculty</a>
		</li>
	  </ul>
	  	<?php
		if (isset($_SESSION['user_id'])) {
			echo 'Hi' + $_SESSION['user_name'];
			echo '<form action="includes/logout-inc.php" method="post" class="d-flex">
			<button class="form-inline mt-2 mt-md-0 btn btn-au-ooutline" type="submit" name="logout-submit">Logout</button>
		  </form>';
		}
		else {
			echo '<a class="form-inline mt-2 mt-md-0 btn btn-au-boutline my-2 my-sm-0" href="../register.php">Sign up</a>';
		};
		?>
	</div>
  </div>
</nav>

<!------------------ End Nav bar ------------------>
