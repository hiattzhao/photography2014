<?php
	
	// Get what page we're on
	$url = explode("/",$_SERVER['PHP_SELF']);
	$current = str_replace(".php","",$url[count($url)-1]);
	
	// All of the pages on the site
	$pages = array("index"			=> "Home",
				   "abstract_usa" 	=> "Abstract USA",
				   "abstract_china" => "Abstract China",
				   "civilization"	=> "Civilization",
				   "concrete"		=> "Concrete",
				   "dharma_bums"	=> "Dharma Bums",
				   "flora"			=> "Flora",
				   "humanity"		=> "Humanity",
				   "scapes"			=> "Scapes",
				   "uglies"			=> "Uglies",
				   "shop"			=> "Shop",
				   "about"			=> "About");
	
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Hiatt Zhao Photography - <?php echo $pages[$current]; ?></title>
<meta charset="utf-8">
<meta name="keywords" content="hiatt, zhao, thehiatt, photograph, photography, photographer, fine, art, abstract, architecture, city, civilization, landscape, macro, flora, scape, nature, people, bums, usa, new york city, nyc, philadelphia, atlanta, china, beijing, shanghai, shenzhen, xi'an, hong kong" />
<meta name="description" content="The official website of Hiatt Zhao Photography" />
<link rel="canonical" href="http://www.hiattzhao.com" />
<link rel="icon" type="image/x-icon" href="img/favicon.ico" />

<!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js\"></script>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- javascript -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/galleria-1.2.9.js"></script>
<script type="text/javascript" src="js/galleria/galleria.portfolio.js"></script>
<script type="text/javascript">var switchTo5x=false;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.0.6"></script>
<!-- end javascript -->

<!-- CSS -->
<link href="css/base.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
<link rel="stylesheet" type="text/css" media="all" href="fancybox/jquery.fancybox.css">
<!-- end CSS -->

<!-- gallery script -->
<script type="text/javascript">
$(document).ready(function(){
	// Initialize Gallery
	if($("#gallery").length) {
		$("#gallery").galleria({width: 1000,height: 600,debug: false});
	}
});

stLight.options({publisher:'9eb3804f-7d75-4066-9bef-824e46e29d37', onhover: false});

var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12962987-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- end gallery script -->

</head>


<body>
<div id="page">
<div id="wrapper">
<header>
<img src="img/header.png" width="421" height="30" title="Hiatt Zhao Photography" alt="Hiatt Zhao Photography">
<div class="sl">
	<span class='st_sharethis_hcount' displayText='ShareThis'></span> 
</div>

</header>

<!-- Navigation Links -->
<nav id="pagenav">
    <ul>
    <?php
    foreach ($pages as $url => $title) {
		$sel = "";
		if($url == $current) {
			$sel = " class='selected' ";
		}
		
		echo "<li $sel><a href='$url.php'>$title</a></li>";
	}
	?>
    </ul>
</nav>

<!--End of Header-->