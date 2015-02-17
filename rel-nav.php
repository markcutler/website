<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Relative Navigation</title>
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
    <h2>Quadrotor Relative Navigation</h2>
    <!--p>Where that in the center faces the nameless horrors alone.</p--> 
  </header>
  
  <!-- One -->
  <section class="wrapper style4 container"> 
    
    <!-- Content -->
    <div class="content">
      <section>
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/flying_quad.png" alt="" /></span> </div>
        </div>
        <p>Many researchers have demonstrated significant and impressive results of UAVs flying in GPS-denied environments, typically using expensive (financially and/or computationally) sensors such as cameras and laser scanners.  If many aerial robots are needed to perform a task collaboratively, it may be advantageous to outfit a few of the robots with expensive sensors and algorithms for global situational awareness (flight relative to a room, for instance), while keeping the rest of the vehicles simple, allowing them to navigate relative to the leader robots.</p>
        
        <p>In an attempt to realize this goal, I developed a lightweight solution for estimating position
and velocity relative to a known marker.
The marker consists of three infrared (IR) LEDs
in a fixed pattern. Using an IR camera with a 100 Hz
update rate (a camera from a Wii remote), the range and bearing to the marker are
calculated. I then fuse this information with inertial
sensor information to produce state estimates at 1 kHz
using a sigma point Kalman filter. The computation
takes place on a 14 gram custom autopilot, yielding a
lightweight system for generating high-rate relative state
information. I compared the estimation scheme to data
recorded with a motion capture system.</p>
        
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/rel-nav-autopilot.png" alt="" /></span> </div>
        </div>
        
        <p>This is the autopilot I designed and built for the project, and the sensors that were used.  The autopilot itself contains a dual-core TI microcontroller, inertial sensors, and a barometer.  Externally, a sonar estimates height to the ground and the Wii camera (not see in this image), sees the IR LEDs on the known marker. </p>
        
        
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/block_diagram.png" alt="" /></span> </div>
        </div>
        
        <p>This is a rough block diagram of the data flow for the project, including the rates at which various sensors are read and algorithms are executed.  I designed, manufactured, and programmed the autopilot from the ground up.</p>
        
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/computation_framework.png" alt="" /></span> </div>
        </div>
        
        <p>Finally, this is a diagram of the autopilot architecture, including the communication protocols for the sensors and the computation distribution between the two cores.</p>
        
        <header>
        <h3>Lessons Learned</h3>
        </header>
        <p>This was a really fun project and I learned a lot of valuable things.  Here are a few:</p>
        <ul style="list-style-type:disc">
        <li>Hardware is hard.  For instance, I spent many, many days trying to get the sigma-point filter code to fit in the available memory on the autopilot.</li>
        <li>Prototype with the right data.  The original filter code was developed using a data-set collected by moving the autopilot around by hand.  The vibrations induced by the motors during flight, though, were very significant and could have been accounted for had I collected the data set from a flying vehicle instead.</li>
        <li>Don't use cutting-edge microcontrollers.  I originally thought that the new TI dual-core microcontroller was a really good idea, but it didn't have a big enough user base yet.  Instead, I should have used two popular single-core microcontrollers and just sent data between them over SPI or another protocol.</li>
        <li>Hardware is really fun.  I had a blast going from initial concept all the way through circuit design, hardware construction, programming, and flight testing.</li>
        </ul>
        
        
        
      </section>
    </div>
  </section>
  
    <!-- One -->
  <section id="related_publications" class="wrapper style2 container special-alt">
<header class="major">
  <h2><strong>Related Publications</strong></h2>
</header>
    <div id="Publications" class="container_pub alt">
      <?php include 'publications/Cutler13_ICUAS.php'; ?>
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