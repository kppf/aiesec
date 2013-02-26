<?php
function slideshow()
{
?>
<div class="wrapper row2">
  <section id="slider" class="flexslider clear">
    <ul class="slides">
      <li><img src="images/demo/slider/1.gif" alt="">
        <div class="flex-caption">
          <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur consequam intesque. Curabiturpisametur in ante.</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </li>
      <li><img src="images/demo/slider/1.gif" alt="">
        <div class="flex-caption">
          <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur consequam intesque. Curabiturpisametur in ante.</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </li>
      <li><img src="images/demo/slider/1.gif" alt="">
        <div class="flex-caption">
          <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur consequam intesque. Curabiturpisametur in ante.</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </li>
    </ul>
  </section>
</div>
<?php
}

function homepagescripts()
{
?>
<!-- homepage scripts -->
<script src="scripts/flexslider/jquery.flexslider-min.js"></script>
<script>
$(window).load(function () {
    $('.flexslider').flexslider({
        animation: 'slide',
        controlNav: false,
        pauseOnHover: true,
        slideshowSpeed: 8000,
        animationSpeed: 1000,
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
</script>
<script src="scripts/jquery-ui-1.8.12.custom.min.js"></script>
<script src="scripts/pngFix/jquery.pngFix.js"></script>
<script src="scripts/mopSlider/mopSlider-2.5.js"></script>
<script src="scripts/mopSlider/mopSlider-setup.js"></script>
<!-- / homepage scripts -->
<?php
}

function show_header($title, $activeclass)
{
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title><?php echo $title; ?></title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<script src="scripts/jquery-1.4.1.min.js"></script>
<script src="scripts/jquery-browsercheck.js"></script>
<script src="scripts/jquery-defaultvalue.js"></script>
<!--[if lt IE 9]>
<link rel="stylesheet" href="styles/ie.css" type="text/css">
<script src="scripts/ie/html5shiv.min.js"></script>
<![endif]-->
<?php
if($activeclass == 'index') homepagescripts();
?>
</head>
<body><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="wrapper row1">
  <header id="header" class="clear">
    <hgroup>
	  
      <h1><a href="#"><img style='width:200px;' src='images/logo.png'></img></a></h1>
      <h2>IIT (BHU), Varanasi</h2>
    </hgroup>
   <nav>
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">About</a>
		  <ul>
            <li><a href="#">AIESEC</a>
				<ul>
					<li><a href='aiesec-overview.php'>Overview</a></li>
					<li><a href='aiesec-whoweare.php'>Who We Are</a></li>
					<li><a href='aiesec-network.php'>Network</a></li>
					<li><a href='aiesec-history.php'>History</a></li>
					<li><a href='aiesec-halloffame.php'>Hall Of Fame</a></li>
				</ul>
			</li>
            <li><a href="#">AIESEC IIT(BHU)</a>
				<ul>
					<li><a href='#'>History</a></li>
					<li><a href='aiesec-iit-bhu-departments.php'>Departments</a></li>
				</ul>
			</li>
          </ul>
		</li>
        <li><a href="full-width.php">Students</a>
		  <ul>
            <li><a href="students-internship.php">Apply For Intership</a></li>
            <li><a href="students-become-member.php">Become A Member</a></li>
          </ul>
		</li>
        <li><a href="#">Organisations</a>
          <ul>
            <li><a href="#">Partner with AIESEC</a></li>
            <li><a href="#">Who we work with</a></li>
            <li><a href="#">Hire International Talent</a></li>
			<li><a href='advisors-national.php'>National Board Of Advisors</a></li>
          </ul>
        </li>
		<li><a href="#">Events</a>
          <ul>
            <li><a href="#">Upcoming</a></li>
            <li><a href="#">Ongoing</a></li>
            <li><a href="#">Past</a></li>
          </ul>
        </li>
        <li><a href="portfolio.php">Contact Us</a></li>
      </ul>
    </nav> </header>
</div>
<?php if($activeclass == 'index') slideshow(); ?>
<!-- content -->
<div class="wrapper row3">
  <div id="container" class="clear">
<?php  
}

function show_footer()
{   
?> 
</div>
</div>
<!-- Footer -->
<div class="wrapper row4">
  <div id="footer" class="clear">
    <!-- Section One -->
    <section class="one_third first">
<!--      <div class="newsletter">
        <h2 class="title">Newsletter</h2>
        <p>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut.</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter Form:</legend>
            <label for="nl_email">Email:</label>
            <input type="text" name="nl_email" id="nl_email" value="">
            <input type="submit" id="nl_submit" value="submit">
          </fieldset>
        </form>
      </div>
-->
	
      <div class="social">
        <h2 class="title">Contact us</h2>
		<div style='font-size: 18px;'>
		<a href='mailto:aiesecvaranasi@gmail.com' target='_blank'>aiesecvaranasi@gmail.com</a>.
	<br/><a href='mailto:ayush.rai@aiesec.net' target='_blank'>ayush.rai@aiesec.net</a><br/><br/>
	Connect with us!<br/>
	<a href='http://www.facebook.com/AIESECVaranasi' target='_blank'>Facebook</a><br/>
	<a href='https://twitter.com/AIESECVaranasi' target='_blank'>Twitter</a>
<!--        <ul class="clear">
          <li><a href="http://www.fb.com/Aiesec"><img src="images/demo/social/1.gif" alt=""></a> Facebook</li>
          <li><a href="http://plus.google.com/"><img src="images/demo/social/1.gif" alt=""></a> Google+</li>
        </ul>
-->		</div>
      </div>
    </section>
    <!-- Section Two -->
    <section class="one_third">
      <h2 class="title">Recent Activities</h2>
 <!--     <article>
        <header>
          <h2>Post Title</h2>
          <time datetime="2000-04-06">Friday, 6<sup>th</sup> April 2000</time>
        </header>
        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum.</p>
        <footer class="more"><a href="#">Read More &raquo;</a></footer>
      </article>
      <article>
        <header>
          <h2>Post Title</h2>
          <time datetime="2000-04-06">Friday, 6<sup>th</sup> April 2000</time>
        </header>
        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum.</p>
        <footer class="more"><a href="#">Read More &raquo;</a></footer>
      </article> -->
    </section>
    <!-- Section Three -->
    <section class="one_third">
      <h2 class="title">Stay Social</h2>
        <div class="fb-like-box" data-href="http://www.facebook.com/AIESECVaranasi" data-width="292" data-height="300" data-show-faces="true" data-stream="true" data-header="true"></div>
    </section>
    <!-- / Section -->
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row5">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - <a href="http://www.aieseciitbhu.com">AIESEC, IIT (BHU), Varanasi</a></p>
  </footer>
</div><script>
$(document).ready(function () {
    $("#nl_email").defaultvalue("Enter Your Email Here");
});
</script>
</body>
</html>
<?php
}
?>