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
      <?php include 'publications/Cutler15_TRO.php'; ?>
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
      <?php include 'publications/Cutler15_DSMC.php'; ?>
    </div>
  </section>
  
  <!-- Back button -->
  <section class="wrapper style1 container special">
    <div class="row">
      <div class="12u">
        <section>
          <footer>
            <ul class="buttons">
              <li><a href="index.php#pubs" class="button small">Back</a></li>
              <li><a href="https://scholar.google.com/citations?user=OG-5aqEAAAAJ&hl=en" class="button small" target="_blank">Google Scholar</a></li>
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
