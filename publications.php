<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Mark Cutler - Publications</title>
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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="mixitup/js/index.js"></script>
<noscript>
<link rel="stylesheet" href="css/skel.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-wide.css" />
<link rel="stylesheet" href="css/style-noscript.css" />
</noscript>
<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head><body class="no-sidebar">

<!-- Header -->
<header id="header">
<h1 id="logo">
<a href="index.html" class="scrolly">Mark Cutler</a>
</h>
<nav id="nav">
  <ul>
    <li class="current"><a href="index.html#main" class="scrolly">About</a></li>
    <li class="current"><a href="index.html#experience" class="scrolly">Experience</a></li>
    <li class="current"><a href="index.html#projects" class="scrolly">Projects</a></li>
    <li class="current"><a href="index.html#publications" class="scrolly">Publications</a></li>
    <li class="current"><a href="index.html#interests" class="scrolly">Interests</a></li>
    <li class="current"><a href="index.html#footer" class="scrolly">Contact</a></li>
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

<!-- Main -->
<article id="main">
  <header class="special container"> <span class="icon fa-file"></span>
    <h2>Publications</h2>
  </header>
  
  <!-- One -->
  <section class="wrapper style4 container">
    <div class="controls">
      <div class="row">
        <div class="8u 12u(2)">
          <button class="filter" data-filter="all">All</button>
          <button class="filter" data-filter=".conference">Conference Papers</button>
          <button class="filter" data-filter=".journal">Journal Papers</button>
          <button class="filter" data-filter=".other">Other Papers</button>
        </div>
        <div class="4u 6u(2) -3u(2)">
          <label>Year:</label>
          <button class="sort" data-sort="myorder:desc"><i class="fa fa-sort-numeric-desc"></i></button>
          <button class="sort" data-sort="myorder:asc"><i class="fa fa-sort-numeric-asc"></i></button>
        </div>
      </div>
    </div>
    <div id="Publications" class="container_pub">
      <?php include 'publications/Michini11_ICRA.php'; ?>
      <?php include 'publications/Cutler14_ICRA.php'; ?>
      <?php include 'publications/Cutler15_ICRA.php'; ?>
      <?php include 'publications/Cutler14_TRO.php'; ?>
      <?php include 'publications/Chen15_ICRA.php'; ?>
      <?php include 'publications/Cutler12_GNC.php'; ?>
      <?php include 'publications/Ure13_ICUAS.php'; ?>
      <?php include 'publications/Cutler13_NIPS.php'; ?>
      <?php include 'publications/Chowdhary13_ICRA.php'; ?>
      <?php include 'publications/Michini13_ICRA.php'; ?>
      <?php include 'publications/Cutler13_ICUAS.php'; ?>
      <?php include 'publications/Cutler12_Masters.php'; ?>
      <?php include 'publications/Chowdhary12_GNC.php'; ?>
      <?php include 'publications/Cutler11_GNC.php'; ?>
      <?php include 'publications/Cutler10_GNC.php'; ?>
      <?php include 'publications/Thomson09_ASM.php'; ?>
      <?php include 'publications/Barrett09_EJLA.php'; ?>
      <div class="mix journal" data-myorder="2014">
        <div class="title">Analysis and Control of a Variable-Pitch Quadrotor for Agile Flight</div>
        <div class="authors"><b>Mark Cutler</b>, Jonathan P. How</div>
        <div class="location_info">ASME Journal of Dynamic Systems, Measurement and Control, 2014 (submitted)</div>
      </div>
    </div>
  </section>
  
  <!-- Back button -->
  <section class="wrapper style1 container special">
    <div class="row">
      <div class="12u">
        <section>
          <footer>
            <ul class="buttons">
              <li><a href="index.html#publications" class="button small">Back</a></li>
            </ul>
          </footer>
        </section>
      </div>
    </div>
  </section>
</article>

<!-- Footer -->
<footer id="footer">
  <ul id="Publications" class="copyright">
    <li>&copy; Mark Cutler <script>document.write(new Date().getFullYear())</script></li> 
  <li><button data-dialog="attributions" class="button link">Attributions</button></li>
  <div class="content_dialog">
  <div id="attributions" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content alt">
      <li>Template inspired by <a href="http://html5up.net">HTML5 UP</a></li>
    <br>
    <div>Icons made by Freepik, SimpleIcon, Icons8 from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
        <button class="action" data-dialog-close>Close</button>
    </div>
  </div>
</div>
<!-- /content -->
</div>
    <!--li>Template inspired by <a href="http://html5up.net">HTML5 UP</a></li-->
  </ul>
</footer>
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