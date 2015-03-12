<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>MFRL</title>
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
  <header class="special container"> <span class="icon fa-car"></span>
    <h2>Real-World Reinforcement Learning via Multi-Fidelity Simulators</h2>
    <!--p>Where that in the center faces the nameless horrors alone.</p--> 
  </header>
  
  <!-- One -->
  <section class="wrapper style4 container"> 
    
    <!-- Content -->
    <div class="content">
      <section>
        <div class="row">
          <div class="8u -2u 12u(2)"> <span class="image featured"><img src="images/mfrl.png" alt="" /></span> </div>
        </div>
        <p>Reinforcement learning (RL) can be a tool for designing policies and controllers for robotic systems. However, the cost of real-world samples remains prohibitive as many RL algorithms require a large number of samples before learning useful policies. Simulators are one way to decrease the number of required real-world samples, but imperfect models make deciding when and how to trust samples from a simulator difficult. This project presents a framework, called Multi-Fidelity Reinforcement Learning (MFRL), for efficient RL in a scenario where multiple simulators of a target task are available, each with varying levels of fidelity. The framework is designed to limit the number of samples used in each successively higher-fidelity/cost simulator by allowing a learning agent to choose to run trajectories at the lowest level simulator that will still provide it with useful information. Theoretical proofs of the framework's sample complexity are given and empirical results are demonstrated on a remote controlled car with multiple simulators. The approach enables RL algorithms to find near-optimal policies in a physical robot domain with fewer expensive real-world samples than previous transfer approaches or learning without simulators.</p>
        
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
              <iframe width="1280" height="720" src="http://www.youtube.com/embed/-UYu0cGER-s?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <!--end embed--> 
          </div>
        </div>
        <br>
        <p>This simple toy domain illustrates the progression of the algorithm. On the right, the 'real' world consists of an agent starting in the lower-left corner of the grid world and trying to find a policy to lead it to the upper-right goal region. Negative reward is a accumulated in the puddle. The worlds on the right consist of low- and medium-fidelity models of the real world. The learning agent transitions between levels several times, leveraging the lower-fidelity worlds to learn an optimal policy in the real world while minimizing the steps taken there.</p>

        <div class="row">
          <div class="8u -2u 12u(2)">
            <div class="embed"> 
              <iframe width="1280" height="720" src="http://www.youtube.com/embed/c_d0Is3bxXA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <br>
        <p>The MFRL framework is demonstrated in this real-world remote-controlled (RC) car domain.  The RC car learns a policy for quickly racing around a track by efficiently utilizing two available simulators.</p>
        
        <div class="row">
          <div class="8u -2u 12u(2)">
            <div class="embed"> 
              <iframe width="1280" height="720" src="https://www.youtube.com/embed/kKClFx6l1HY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <br>
        <p>Recently, we have extended the MFRL framework to include domains with continuous representations of the states and actions.  Here, an inverted pendulum is balanced by using simulated data as a prior for both policy parameters the dynamics model.  Using the simulated data leads to learning with 3 times less data than without using a simulator.</p>
        
        
        
      </section>
    </div>
  </section>
  
    <!-- One -->
  <section id="related_publications" class="wrapper style2 container special-alt">
<header class="major">
  <h2><strong>Related Publications</strong></h2>
</header>
    <div id="Publications" class="container_pub alt">
      <?php include 'publications/Cutler14_ICRA.php'; ?>
      <?php include 'publications/Cutler14_TRO.php'; ?>
      <?php include 'publications/Cutler15_ICRA.php'; ?>
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