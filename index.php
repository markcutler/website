<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    
    TODOs:
    - add floating prompt for bibtex and download
    
    - add dropdown menu in publication section: http://tympanus.net/Development/SimpleDropDownEffects/index4.html
    
    - add clickable expansion for publications and projects
    http://webcloud.se/jQuery-Collapse/
    http://demos.jquerymobile.com/1.1.2/docs/content/content-collapsible.html
    http://sylvain-hamel.github.io/simple-expand/
    
    - find suitable colors for article types and make buttons match.
    
    - add transitions for buttons
    
    - add popup message for bibtex and download buttons
    
    - check out mixitup as a submodule with git
    
    - fix Attributions link when in mobile mode
    
    - center close button
    
    - fix alpha problem with bibtex and download buttons 
    
-->
<html>
<head>
<title>Mark Cutler</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dropotron.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/jquery.scrollgress.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="js/init.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/index.js"></script>
<noscript>
<link rel="stylesheet" href="css/skel.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-wide.css" />
<link rel="stylesheet" href="css/style-noscript.css" />
</noscript>
<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head><body class="index">

<!-- Header -->
<header id="header" class="alt">
<h1 id="logo">
<a href="index.php" class="scrolly">Mark Cutler</a>
</h>
<nav id="nav">
  <ul>
    <li class="current"><a href="#main" class="scrolly">About</a></li>
    <li class="current"><a href="#experience" class="scrolly">Experience</a></li>
    <li class="current"><a href="#projects" class="scrolly">Projects</a></li>
    <li class="current"><a href="#pubs" class="scrolly">Publications</a></li>
    <li class="current"><a href="#interests" class="scrolly">Interests</a></li>
    <li class="current"><a href="#footer" class="scrolly">Contact</a></li>
  </ul>
</nav>
</header>

<!-- Banner -->
<section id="banner"> 
  
  <!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
  <div class="inner">
    <header>
      <h2>Mark Cutler</h2>
    </header>
    <footer>
      <ul class="icons">
        <li><a href="#main" class="icon fa-angle-down scrolly fa-angle-down fa-5x"></a></li>
      </ul>
    </footer>
  </div>
</section>

<!-- Main -->
<article id="main">
  <header class="special container"> 
  <span class="icon fa-camera"></span>
    <h2><strong>About</strong></h2>
  
        	<img src="images/mark-01.png" width="268" height="308" alt=""/> 
            <div class="row half">
            <div class="-2u 8u">
            <p>I am a 28-year old robotist, husband, and father.  I grew up building and flying model airplanes and dreaming about robots. I am passionate about the future of every-day robotics and automation, particuarly flying robots.</p>
            </div>
            </div>
    <!--div class="row half">
      <div class="-2u 4u" align="center">
        <section> <img src="images/mark-01.png" width="268" height="308" alt=""/> </section>
      </div>
      <div class="-1u 5u">
        <section>
          <header>
            <h2>I am a</h2>
          </header>
          <p>
          <li class="fa-ul">
            <li>Roboticist</li>
            <li>Husband</li>
            <li>Father</li>
            <li>And still in school...</li>
          </li>
          </p>
        </section>
      </div>
    </div-->
  </header>
  
  <!-- One -->
  <section id="experience" class="wrapper style2 container special-alt">
    <header class="container">
      <h2><strong>Education</strong></h2>
    </header>
    <div class="row half">
      <div class="4u">
        <header>
          <h1> <i class="fa fa-graduation-cap"></i> Massachusetts Institute of Technology</h1>
        </header>
        Sept 2012 - Jun 2015 </div>
      <div class="-2u 6u">
        <p><strong>Ph.D. -- Robotics and Autonomous Systems</strong> <br>
          <a href="mfrl.php"> My research</a> focuses on decision making under uncertainty for autonomous systems.  In particular, I am interested in robotic agents that learn through environment interaction.  The learning efficiency is increased by using available simulations of the robot and the environment.</p>
      </div>
    </div>
    <div class="row half">
      <div class="4u">
        <header>
          <h1> <i class="fa fa-graduation-cap"></i> Massachusetts Institute of Technology</h1>
        </header>
        <p>Sept 2010 - Sept 2012</p>
      </div>
      <div class="-2u 6u">
        <p><strong>M.S. -- Aerospace Engineering</strong><br>
          I designed, built, and flew a <a href="var-pitch.html">novel quadrotor</a> with variable-pitch propellers. &nbsp;The variable-pitch actuators enable aggressive and aerobatic flight previously impossible with multi-rotor helicopters. &nbsp;I also developed new flight control algorithms and <a href="autopilots.php">autopilot hardware</a> to control the vehicle.</p>
      </div>
    </div>
    <div class="row half">
      <div class="4u">
        <header>
          <h1> <i class="fa fa-graduation-cap"></i> Brigham Young University</h1>
        </header>
        <p>Sept 2004 - April 2005, Sept 2007 - April 2010</p>
      </div>
      <div class="-2u 6u">
        <p><strong>Bachelor -- Mechanical Engineering</strong><br>
          As an udergraduate at BYU I worked on several projects, including <a href="http://acl.mit.edu/papers/Cutler10_GNC.pdf" target="_blank">energy harvesting for autonomous sailplanes</a>, <a href="http://acl.mit.edu/papers/Thomson09_ASM.pdf" target="_blank">flapping flight optimization</a>, and <a href="http://acl.mit.edu/papers/Barret09_EJLA.pdf" target="_blank">theoretical linear algebra</a> (just enough to realize I like robots more than math theory).</p>
      </div>
    </div>
    <header class="container">
      <h2><strong>Experience</strong></h2>
    </header>
    <div class="row half">
      <div class="4u">
        <header>
          <h1>SpotterRF</h1>
        </header>
        <p>April 2010 - Aug 2010</p>
      </div>
      <div class="-2u 6u">
        <p><strong>Mechanical Design Engineer</strong><br>
          As the sole mechanical engineer, I developed new heat management techniques for small radar devices resulting in a significant high-temperature performance increase. &nbsp;I also designed a new carbon-fiber, light-weight case for the radar encasement.</p>
      </div>
    </div>
    </div>
    <div class="row half">
      <div class="4u">
        <header>
          <h1>L-3 Communications</h1>
        </header>
        <p>May 2009 - Aug 2009</p>
      </div>
      <div class="-2u 6u">
        <p><strong>Mechanical Design Engineer</strong><br>
          I designed a demo platform for integration of a new modem into a mobile communication ground station. &nbsp;I also performed thermal, structural, weight, and power analyses to optimize data link and modem case designs.</p>
      </div>
    </div>
    <div class="row half">
      <div class="4u">
        <header>
          <h1>Corning</h1>
        </header>
        <p>June 2008 - Aug 2008</p>
      </div>
      <div class="-2u 6u">
        <p><strong>Advanced Machine Systems Engineer</strong><br>
          I researched and tested a method that reduced tool run-out by 55% in countouring mills that manufacture &nbsp;diesel particulate filters. &nbsp;I also designed a novel mechanism enabling the cutting of wet ceramic extrusions to be performed by one person instead of two.</p>
      </div>
    </div>
  </section>
  BYU Office of Research and Creative Activities Grant
  <!--section class="wrapper style2 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2>Behold the <strong>icons</strong> that visualize what you’re all about. or just take up space. your call bro.</h2>
								</header>
								<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
								<footer>
									<ul class="buttons">
										<li><a href="#" class="button">Find Out More</a></li>
									</ul>
								</footer>
							
							</div>
							<div class="4u skel-cell-important">
							
								<ul class="featured-icons">
									<li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
									<li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
									<li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
									<li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
									<li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
									<li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
								</ul>
							
							</div>				
						</div>
					</section--> 
  
  <!-- Three -->
  <section id="projects" class="wrapper style3 container special">
    <header class="major">
      <h2><strong>Projects</strong></h2>
    </header>
    <div class="row">
      <div class="6u 12u(2)">
        <section> <a href="var-pitch.html" class="image featured thumbnail"><img src="images/var-pitch-quad.JPG" alt="" /></a>
          <header>
            <h3>Variable-Pitch Quadrotor</h3>
          </header>
          <p>TODO</p>
          <!--p>This project aims to develop a varible-pitch quadrotor capable of aggressive aerobatic manuvers which stretch beyond the current abilities of typical fixed-pitch quadrotors.</p>
          <p>Fixed-pitch quadrotors are limited in their ability to make abrupt changes in thrust or to create negative thrust. The control bandwidth of a typical fixed-pitch quadrotor is restricted by the rotational inertia of the motor and propellers; however, with a variable-pitch design, the control bandwidth is increased. The variable-pitch actuators allow the propellers to change from a full positive pitch to a full negative pitch in rougly 0.07 seconds while the motor remains at maximum RPM, allowing the quadrotor to change from maximum positive thrust to maximum negative thrust extremely fast.</p-->
        </section>
      </div>
      <div class="6u 12u(2)">
        <section> <a href="#" class="image featured thumbnail"><img src="images/autopilot.JPG" alt="" /></a>
          <header>
            <h3>Autopilot Design</h3>
          </header>
          <p>I have designed, built, and programmed several autopilots for autonomous flying and ground vehicles.</p>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="6u 12u(2)">
        <section> <a href="#" class="image featured thumbnail"><img src="images/wii-quad.jpg" alt="" /></a>
          <header>
            <h3>Relative Navigation</h3>
          </header>
          <p>An autonomous quadrotor that navigates relative to a set of known beacons.</p>
        </section>
      </div>
      <div class="6u 12u(2)">
        <section> <a href="mfrl.php" class="image featured thumbnail"><img src="images/car_no_background.png" alt="" /></a>
          <header>
            <h3>Multi-Fidelity Reinforcement Learning</h3>
          </header>
          <p>TODO.</p>
        </section>
      </div>
    </div>
    
    <!--footer class="major">
							<ul class="buttons">
								<li><a href="#" class="button">See More</a></li>
							</ul>
						</footer--> 
    
  </section>
  
    <!-- One -->
  <section id="pubs" class="wrapper style3 container special">
    <header>
      <h2><strong>Selected Publications</strong></h2>
    </header>
    <div id="Publications" class="container_pub">
      <?php include 'publications/Cutler14_ICRA.php'; ?>
      <?php include 'publications/Cutler12_GNC.php'; ?>
      <?php include 'publications/Cutler13_ICUAS.php'; ?>
      <?php include 'publications/Cutler11_GNC.php'; ?>
    </div>
    <br>
    <div class="row">
      <div class="12u">
        <section>
          <footer>
            <ul class="buttons">
              <li><a href="publications.php" class="button small">All Publications</a></li>
            </ul>
          </footer>
        </section>
      </div>
    </div>
  </section>
  
  <!-- Two -->
  <section id="interests" class="wrapper style1 container special">
    <header class="major">
      <h2><strong>Interests</strong></h2>
    </header>
    <div class="row">
      
      <div class="4u">
        <section> <span class="icon fi featured flaticon-sleeping4"></span> 
          <!-- img src="fonts/svg/robot32.svg" alt="Robot" -->
          <header>
            <h3>My Kids</h3>
          </header>
          <p>Hailey (4), Rachel (2), and Aaron (0).  Still trying to figure out how to tap into their energy supplies to try and heat our home.</p>
        </section>
      </div>
            <div class="4u">
        <section> <span class="icon fi featured flaticon-robotic"></span>
          <header>
            <h3>Robots</h3>
          </header>
          <p>Is there anyone who isn't interested in robots?</p>
        </section>
      </div>
      <div class="4u">
        <section> <span class="icon fi featured flaticon-cpu5"></span>
          <header>
            <h3>Electronics</h3>
          </header>
          <p>Been trying to automate my life one microcontroller at a time (long before people were talking about the <a href="http://en.wikipedia.org/wiki/Internet_of_Things" target="_blank">"IoT"</a>).</p>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="4u">
        <section> 
          <!--span class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-5x"></i--> 
          <!--i class="fa fa-flag fa-stack-1x fa-inverse"></i--> 
          <!--i class="icon fi featured flaticon-robot32"></i>
</span--> 
          <!--span class="icon featured fa-plane"></span--> 
          <span class="icon fi featured flaticon-tennis"></span>
          <header>
            <h3>Racquet Sports</h3>
          </header>
          <p>Tennis, racquet ball, squash, ping-pong, badminton... If there is a racquet involved, count me in. </p>
        </section>
      </div>
      <div class="4u">
        <section> 
          
          <!-- TODO: fix flaticon stuff --> 
          <span class="icon fi featured flaticon-skiing"></span> 
          <!--img src="fonts/svg/man362.svg" alt="Frisbee"--> 
          <!--span class="icon featured fa-check"></span-->
          <header>
            <h3>Skiing</h3>
          </header>
          <p>Growing up in Utah inevitably lead to an obsession with skiing and snowboarding.  Unfortunately, due to a severe lack of real snow and/or mountains on the east coast, this one is temporarily on hold.</p>
        </section>
      </div>
      <div class="4u">
        <section> <span class="icon fi featured flaticon-man362"></span>
          <header>
            <h3>Ultimate Frisbee</h3>
          </header>
          <p>Many (probably most) people don't consider ultimate frisbee a real sport.  Having played college level ultimate for 6+ years now, I might agree with them.  It's still a great way to get some exercise, though.</p>
        </section>
      </div>
    </div>
  </section>
</article>

<?php include 'footer.php'; ?>
<?php include 'dialog_content.php'; ?>
<script src="js/classie.js"></script> 
<script src="js/dialogFx.js"></script> 
<script>
            (function() {
 
    [].slice.call( document.querySelectorAll( '[data-dialog]' ) ).forEach( function( trigger ) {
        var dlg = new DialogFx( document.getElementById( trigger.getAttribute( 'data-dialog' ) ) );
 
        trigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
    } );
 
})();
		</script>
</body>
</html>