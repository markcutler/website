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
<a href="index.html" class="scrolly">Mark Cutler</a>
</h>
<nav id="nav">
  <ul>
    <li class="current"><a href="#main" class="scrolly">About</a></li>
    <li class="current"><a href="#experience" class="scrolly">Experience</a></li>
    <li class="current"><a href="#projects" class="scrolly">Projects</a></li>
    <li class="current"><a href="#publications" class="scrolly">Publications</a></li>
    <li class="current"><a href="#interests" class="scrolly">Interests</a></li>
    <li class="current"><a href="#footer" class="scrolly">Contact</a></li>
    <!--li class="submenu">
							<a href="">Layouts</a>
							<ul>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li class="submenu">
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Dolore Sed</a></li>
										<li><a href="#">Consequat</a></li>
										<li><a href="#">Lorem Magna</a></li>
										<li><a href="#">Sed Magna</a></li>
										<li><a href="#">Ipsum Nisl</a></li>
									</ul>
								</li>
							</ul>
						</li-->
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
  <header class="special container"> <span class="icon fa-camera"></span>
    <h2><strong>About</strong></h2>
  </header>
  <section class="wrapper style1 container ">
    <div class="row half">
      <div class="-3u 3u">
        <section> <img src="images/markcutler.jpg" width="192" height="262" alt=""/> </section>
      </div>
      <div class="3u">
        <section>
          <header>
            <h3>I am a</h3>
          </header>
          <p>
          <ul class="fa-ul">
            <li><i class="fa-li fa fa-square"></i>Roboticist</li>
            <li><i class="fa-li fa fa-square"></i>Husband</li>
            <li><i class="fa-li fa fa-square"></i>Father</li>
            <li><i class="fa-li fa fa-square"></i>and still in school...</li>
          </ul>
          </p>
        </section>
      </div>
    </div>
  </section>
  
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
          My research focuses on decision making under uncertainty for autonomous systems.  In particular, I am interested in robotic agents that learn through environment interaction.  The learning efficiency is increased by using available simulations of the robot and the environment.</p>
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
          TODO</p>
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
          TODO</p>
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
          TODO</p>
      </div>
    </div>
    <div class="row half">
      <div class="4u">
        <header>
          <h1>BYU MAGICC Lab</h1>
        </header>
        <p>Feb 2008 - Apr 2010</p>
      </div>
      <div class="-2u 6u">
        <p><strong>Research Assistant</strong><br>
          TODO</p>
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
          TODO</p>
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
          TODO</p>
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
          <p>This project aims to develop a varible-pitch quadrotor capable of aggressive aerobatic manuvers which stretch beyond the current abilities of typical fixed-pitch quadrotors.</p>
          <p>Fixed-pitch quadrotors are limited in their ability to make abrupt changes in thrust or to create negative thrust. The control bandwidth of a typical fixed-pitch quadrotor is restricted by the rotational inertia of the motor and propellers; however, with a variable-pitch design, the control bandwidth is increased. The variable-pitch actuators allow the propellers to change from a full positive pitch to a full negative pitch in rougly 0.07 seconds while the motor remains at maximum RPM, allowing the quadrotor to change from maximum positive thrust to maximum negative thrust extremely fast.</p>
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
          <p>An autonomous quadrotor that navigates relative to a set on known beacons.</p>
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
  
  <!-- Two -->
  <section id=interests class="wrapper style1 container special">
    <header class="major">
      <h2><strong>Interests</strong></h2>
    </header>
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
            <h3>Tennis</h3>
          </header>
          <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
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
          <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
        </section>
      </div>
      <div class="4u">
        <section> <span class="icon fi featured flaticon-sleeping4"></span> 
          <!-- img src="fonts/svg/robot32.svg" alt="Robot" -->
          <header>
            <h3>My Kids</h3>
          </header>
          <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="4u">
        <section> <span class="icon fi featured flaticon-robotic"></span>
          <header>
            <h3>Robots</h3>
          </header>
          <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
        </section>
      </div>
      <div class="4u">
        <section> <span class="icon fi featured flaticon-cpu5"></span>
          <header>
            <h3>Electronics</h3>
          </header>
          <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
        </section>
      </div>
      <div class="4u">
        <section> <span class="icon fi featured flaticon-man362"></span>
          <header>
            <h3>Frisbee</h3>
          </header>
          <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
        </section>
      </div>
    </div>
  </section>
</article>

<!-- CTA -->
<section id="cta">
  <header>
    <h2><strong>Get in Touch</strong></h2>
  </header>
  <footer>
    <ul class="icons">
      
      <!--li><a href="mailto:markjcutler@gmail.com" class="icon fa-envelope-square fa-4x"><span class="label">Email</span></a></li--> 
      <!-- javascript trick to "hide" my email from spambots -->
      <li><script language="JavaScript">
						var username = "markjcutler";
						var hostname = "gmail.com";
						var linktext = username + "@" + hostname ;
						document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'");
						</script> class="icon fa-envelope-square fa-4x"><span class="label">Email</span></a></li>
      <li><a href="https://www.linkedin.com/pub/mark-cutler/23/939/7a8" class="icon fa-linkedin-square fa-4x"><span class="label">LinkedIn</span></a></li>
      <li><a href="https://github.com/cutlerm/" class="icon fa-github-square fa-4x"><span class="label">Github</span></a></li>
      <li><a href="https://www.flickr.com/photos/55516219@N04/" class="icon fa-flickr fa-4x"><span class="label">Flickr</span></a></li>
    </ul>
  </footer>
</section>

<!-- Footer -->
<footer id="footer">
  <ul id="Publications" class="copyright">
    <li>&copy; Mark Cutler <script>document.write(new Date().getFullYear())</script></li> 
  <li><button data-dialog="attributions" class="button link">Attributions</button></li>
    <!--li>Template inspired by <a href="http://html5up.net">HTML5 UP</a></li-->
  </ul>
</footer>
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