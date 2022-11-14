<? $navsize="col-sm-6 col-lg-3 column";?>


			<div class="row links nav-links">
				<div class="nav-level-1 row">	
					<div class="<? echo $navsize; ?>">
						<div class="col-title"><a id="titlelink1" href="#">Academics</a></div>
						<ul class="nav-level-2 navlinks1">
							<li><a href="https://auburn.edu/academic/provost">Office of the Provost</a></li>
							<li><a href="#">Colleges</a></li>
							<li><a href="https://auburn.edu/main/auweb_calendar.php">Majors</a></li>
							<li><a href="https://auburn.edu/administration/registrar/core_curriculum/">Core Curriculum</a></li>
							<li><a href="https://lib.auburn.edu/">Libraries</a></li>
							<li><a href="https://auburn.edu/main/auweb_calendar.php">Academic Calendar</a></li>
							<li><a href="https://ssbprod.auburn.edu/pls/PROD/bwckschd.p_disp_dyn_sched">Course Schedule</a></li>
							<li><a href="https://auburn.edu/administration/registrar/calendars.html">Advisement Schedule</a></li>
							<li><a href="https://auburn.edu/administration/registrar/calendars.html#finalExam">Final Exam Schedule</a></li>
							<li class="deptlink" >
								<a href="https://auburn.edu/academic/">Visit Academics</a>	
							</li>

						</ul>	
					</div>
					<div class="<? echo $navsize; ?>">
						<div class="col-title"><a id="titlelink2" href="#">Admissions</a></div>
						<ul class="nav-level-2 navlinks2">
							<li><a href="https://auburn.edu/apply">Apply Now</a></li>
							<li><a href="https://auburn.edu/admissions/attention-applicants.html">Check Application Status</a></li>
							<li><a href="https://auburn.edu/admissions">Undergraduate Admissions</a></li>
							<li><a href="https://graduate.auburn.edu/">Graduate Admissions</a></li>
							<li><a href="https://pharmacy.auburn.edu/apply/">Pharmacy Admissions</a></li>
							<li><a href="https://www.vetmed.auburn.edu/prospective-students">Veterinary Medicine Admissions</a></li>
							<li><a href="https://auburn.edu/online/">Distance Ed</a></li>
							<li><a href="https://auburn.edu/admissions/acceptedstudents.html">Accepted Students</a></li>
							<li><a href="https://apply.auburn.edu/register/inquiryform">Request Information</a></li>
							<li class="deptlink" >
								<a href="https://auburn.edu/admissions/">Visit Admissions</a>	
							</li>
						</ul>
					</div>	
					<div class="<? echo $navsize; ?>">
						<div class="col-title"><a id="titlelink3" href="#">Outreach</a></div>
						<ul class="nav-level-2 navlinks3">
							
							<li><a href="https://auburn.edu/outreach/ops/">Public Service & Community Partnerships</a></li>
							<li><a href="https://auburn.edu/outreach/opce/">Professional & Continuing Education</a></li>
							<li><a href="https://auburn.edu/outreach/opce/auburnyouthprograms/index.htm">Youth Programs</a></li>
							<li><a href="https://auburn.edu/outreach/gedi/">Government & Economic Development</a></li>
							<li><a href="https://auburn.edu/outreach/olliatauburn/">Osher Lifelong Learning Institute</a></li>
							<li><a href="https://auburn.edu/outreach/facultyengagement/">Faculty Engagement</a></li>
							<li><a href="https://auburn.edu/outreach/global/">Outreach Global</a></li>
							<li><a href="https://auburn.edu/outreach/ceoe/">K-12 Outreach</a></li>
							<li><a href="https://www.aces.edu/">Extension</a></li>
							<li class="deptlink" >
								<a href="https://auburn.edu/outreach/">Visit Outreach</a>	
							</li>
						</ul>					
					</div>
					<div class="<? echo $navsize; ?>">
						<div class="col-title"><a id="titlelink4" href="#">Research</a></div>
						<ul class="nav-level-2 navlinks4">
							
							
							<li><a href="https://cws.auburn.edu/ovpr/pm/adminmain">Research Administration</a></li>
							<li><a href="https://cws.auburn.edu/ovpr/pm/workwithus">Work with Auburn Research</a></li>
							<li><a href="https://scholars.proquest.com/gallery/auburn">Find Auburn Expertise</a></li>
							<li><a href="https://cws.auburn.edu/ovpr/pm/resources">Research Resources</a></li>
							<li><a href="https://cws.auburn.edu/OVPR/pm/centersinstitutes">Centers & Institutes</a></li>
							<li><a href="https://cws.auburn.edu/OVPR/pm/graduatestudents">Graduate Research</a></li>
							<li><a href="https://our.auburn.edu/">Undergraduate Research</a></li>
							<li><a href="https://ocm.auburn.edu/research-magazine">Auburn Research Magazine</a></li>
							<li><a href="https://cws.auburn.edu/OVPR/pm/thisisresearch">Research Symposia</a></li>
							<li class="deptlink" >
								<a href="https://auburn.edu/research/">Visit Research</a>	
							</li>
						</ul>
					</div>				
				</div>
			</div>

<script>
	$(document).ready(function(){
		$(".nav-level-2 li a").attr("tabindex", -1);
		
		$(".col-title").click(function(){
			$(this).parent().addClass("active");
		});
		
		$("#titlelink1").click(function(){
			$(".navlinks1 li a").attr("tabindex", 0);
		});
		$("#titlelink2").click(function(){
			$(".navlinks2 li a").attr("tabindex", 0);
		});
		$("#titlelink3").click(function(){
			$(".navlinks3 li a").attr("tabindex", 0);
		});
		$("#titlelink4").click(function(){
			$(".navlinks4 li a").attr("tabindex", 0);
		});
	
	});

</script>			  