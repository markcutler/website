<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Autopilots</title>
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
    <h2>Autopilots</h2>
    <!--p>Where that in the center faces the nameless horrors alone.</p--> 
  </header>
  
  <!-- One -->
  <section class="wrapper style4 container"> 
    
    <!-- Content -->
    <div class="content">
      <section>
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/autopilots_before_after.jpg" alt="" /></span> </div>
        </div>
        <p>One of the best experiences of my graduate school career has been designing and building the autopilots that are currently used by the lab.  Back when this process started (2010), multi-rotors where not nearly as popular as they are now.  These days, there are lots of good options for buying a cheap, relatively high-quality autopilot that you can program yourself.  At the time, however, I was looking for a light-weight, programmable-autopilot for my <a href="var-pitch.php">variable-pitch quadrotor</a>, and after exploring a few commercial options, I resorted to building my own.</p>
        
        <!--
first we'll need a container for our video,
the 'restraining' element.
-->
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/autopilot-mess.jpg" alt="" /></span> </div>
        </div>
        <p>As a lab, many attempts at building autopilots looked like this--a terrible mishmash of wires and shoddy soldering.  Thanks to <a href="https://oshpark.com/">cheap circuit board prototyping</a> and <a href="https://www.sparkfun.com/tutorials/category/2">good tutorials</a>, I built a single board autopilot, specifically designed for the variable-pitch quadrotor.  In the lab, the variable-pitch quad was referred to as the "Uberquad", and so I named the autopilot the "UberPilot".</p>
    
            <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/uberpilot.png" alt="" /></span> </div>
        
        <p>This is version 1.1 of the UberPilot.  The <a href="https://bitbucket.org/markjcutler/uberpilot-pcb">circuit design</a> is heavily based on the <a href="https://www.sparkfun.com/products/retired/10582">UDB4</a> from Sparkfun.  The autopilot uses the <a href="http://ww1.microchip.com/downloads/en/devicedoc/70165a.pdf">dsPIC33FJ256</a> microcontroller with an <a href="http://www.invensense.com/mems/gyro/itg3200.html">InvenSense ITG-3200</a> rate gyro for sensing angular rates.  Since the only on-board sensor is a rate gyro, this autopilot is specifically designed to be flown in our <a href="http://acl.mit.edu/papers/HowYWALS08.pdf">RAVEN motion capture room</a></p>.
        
        <p>The UberPilot has undergone several improvements, such as adding on-board power distribution, new sensors (accelerometer, magnetometer, and pressure sensor) and more debug support.  The current version flown by our quadrotors in the lab is version 1.5.1.</p>
        
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/rel-nav-autopilot.png" alt="" /></span> </div>
        </div>
        <p>In addition to continually improving the hardware and software design of the basic UberPilot, I have designed two other autopilots in the last couple of years.  This one features a dual-core <a href="http://www.ti.com/lit/ds/symlink/f28m35h52c.pdf">TI F28M35H32B</a> microcontroller for increased computation power (see the <a href="rel-nav.php">Relative Navigation</a> project for more information).</p>
        
<p>I also designed an autopilot designed specifically to be low cost and high performance, based on the <a href="http://www.ti.com/lsds/ti/arm/arm_cortex_m_microcontrollers/arm_cortex_m4/tm4c123x_mcus/tm4c123x-mcus-overview.page">TI TM4C12x</a> microcontroller series, featuring an ARM Cortex-M4 core.  Hopefully soon I'll be able to post more on this autopilot.
        
      <header>
      <h3>Code and Design Files</h3>
      </header>
      <p>The UberPilot design files are <a href="https://bitbucket.org/markjcutler/uberpilot-pcb">here</a> and the code is <a href="https://bitbucket.org/acl-mit/uberpilot-mc">here</a>.  I'm not sure that this would be useful to anyone else, but shoot me an email if you have any questions.</p>
        
      </section>
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