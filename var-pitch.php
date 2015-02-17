<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Variable-Pitch Quadrotor</title>
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
</head><body class="no-sidebar">

<?php include 'header.php'; ?>

<!-- Main -->
<article id="main">
  <header class="special container"> <span class="icon fi flaticon-cpu5"></span>
    <h2>Variable-Pitch Quadrotor</h2>
    <!--p>Where that in the center faces the nameless horrors alone.</p--> 
  </header>
  
  <!-- One -->
  <section class="wrapper style4 container"> 
    
    <!-- Content -->
    <div class="content">
      <section>
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/var-pitch-quad.JPG" alt="" /></span> </div>
        </div>
        <p>Fixed-pitch quadrotors are popular research and hobby platforms
  largely due to their mechanical simplicity relative to other
  hovering aircraft.  This simplicity, however, places fundamental
  limits on the achievable actuator bandwidth and the possible flight
  maneuvers.  This project shows that many of these limitations can be
  overcome by utilizing variable-pitch propellers on a quadrotor.  I performed a
  detailed analysis of the potential benefits of variable-pitch
  propellers over fixed-pitch propellers for a quadrotor.
  This analysis is supported with experimental testing to show that
  variable-pitch propellers, in addition to allowing for generation of
  reverse thrust, substantially increase the maximum rate of thrust
  change.  I also developed a nonlinear, quaternion-based control algorithm for
  controlling the quadrotor with an accompanying
  trajectory generation method that finds polynomial minimum-time
  paths based on actuator saturation levels.  I implemented the control law and
  trajectory generation algorithms on a custom
  variable-pitch quadrotor, utilizing my own <a href="autopilot.php">autopilot</a>.  Flight tests
  highlight the benefits of a variable-pitch quadrotor over a standard
  fixed-pitch quadrotor for performing aggressive and aerobatic
  maneuvers.</p>
  
  <p>The videos below show the prototype variable-pitch quadrotor that I built.  The quadrotor is controlled using the developed trajectory generation algorithms.</p>
        
        <!--
first we'll need a container for our video,
the 'restraining' element.
-->
        <div class="row">
          <div class="8u -2u 12u(2)">
            <div class="embed"> 
              
              <!--  
    here's your embedded content,
    whatever it may be..
    -->
              <iframe width="1280" height="720" src="http://www.youtube.com/embed/VIkqqVr_u9U?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <!--end embed--> 
          </div>
        </div>
        
        
        <!--
first we'll need a container for our video,
the 'restraining' element.
-->
        <div class="row">
          <div class="8u -2u 12u(2)">
            <div class="embed"> 
              
              <!--  
    here's your embedded content,
    whatever it may be..
    -->
              <iframe width="1280" height="720" src="http://www.youtube.com/embed/Vy5Ky50eGJs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <!--end embed--> 
          </div>
        </div>
        <br>
        <p>Since this work was completed, several commercial variable-pitch quadrotors (like <a href="http://curtisyoungblood.com/V2/products/quadcopters/stingray-500" target="_blank">this one</a> and <a href="http://www.hobbyking.com/hobbyking/store/__66936__Assault_Reaper_500_Collective_Pitch_3D_Quadcopter_Mode_2_Ready_to_Fly_.html" target="_blank">this one</a>) have become available, further validating the original idea.</p>
        <header>
        <h3>Media</h3>
        </header>
        <p>My variable-pitch quadrotor was featured on several websites such as <a href="http://gizmodo.com/5888117/breakthrough-quadcopter-does-previously-impossible-acrobatics" target="_blank">Gizmodo</a>, <a href="http://hackaday.com/2012/02/24/variable-pitch-quadrocopter-flies-upside-down/" target="_blank">Hackaday</a>, and <a href="http://diydrones.com/profiles/blogs/variable-pitch-quads-fly-upside-down" target="_blank">DIY Drones</a>.
        
        <header>
        <h3>Fails</h3>
        </header>
        <p>It probably goes without saying, but the variable-pitch quadrotor didn't always work.  One of the most notable fails was when our autopilot power distribution board short-circuited during a crash, causing the battery to ignite.  You can see the burn marks on the autopilot and the floor.</p>
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/uberquad_burn.jpg" alt="" /></span> </div>
        </div>
        
      </section>
    </div>
  </section>
  
    <!-- One -->
  <section id="related_publications" class="wrapper style2 container special-alt">
<header class="major">
  <h2><strong>Related Publications</strong></h2>
</header>
    <div id="Publications" class="container_pub alt">
      <?php include 'publications/Cutler12_Masters.php'; ?>
      <?php include 'publications/Cutler12_GNC.php'; ?>
      <?php include 'publications/Cutler11_GNC.php'; ?>
      <?php include 'publications/Cutler14_DSMC.php'; ?>
      <?php include 'publications/Michini11_ICRA.php'; ?>
    </div>
  </section>
  
  <!-- Back button -->
  <section class="wrapper style1 container special">
    <div class="row">
      <div class="12u">
        <section>
          <footer>
            <ul class="buttons">
              <li><a href="index.php#projects" class="button small">Projects</a></li>
            </ul>
          </footer>
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