<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Heptapods | Cousins to Octocats!</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">
</head>
<body>
  <!-- START page-wrapper -->
	<div id="page-wrapper">
  <!-- START header -->
  	<header>
		<h1>HEPTAPOD'S <span class="header">have</span>ARRIVED</h1>
		<!-- <h2></h2> Remove for now - don't need it. -->
  <!-- START nav-menu -->
  		<nav>
			<ul>
				<li><a href ="#">Welcome</a></li>	
				<li><a href ="#">Gallery</a></li>
				<li><a href ="#">Blog</a></li>
				<li><a href ="#">About Us</a></li>
				<li><a href ="#">Contact Us</a></li>

			</ul>
		</nav>
  <!-- END nav-menu -->
	</header>
  <!-- END header -->

  <!-- START main-content -->
	<main>
  <!-- START article -->
  		<article>
  			<header id="article-header" class="">
  				<h1>Cousins <span class="header">of</span> Octocats</h1>
  			</header><!-- /header -->
  		</article>
  <!-- END article -->
	</main>
  <!-- END main-content -->
  
  <!-- START footer -->
  	<footer>
  		<section id="left">
        <h2>Social <br/> Media:</h2>
        <span><img class="social-media-icons" src="assets/social-media-icons/icon-twitter-white.png" alt="Twitter Icon"></span>
        <span><img class="social-media-icons" src="assets/social-media-icons/icon-youtube-white.png" alt="Youtube Icon"></span>
        <span><img class="social-media-icons" src="assets/social-media-icons/icon-facebook-white.png" alt="Facebook Icon"></span>
          <span><img class="social-media-icons" src="assets/social-media-icons/icon-google-plus-white.png" alt="Google Plus Icon"></span>
        <span><img class="social-media-icons" src="assets/social-media-icons/icon-instagram-white.png" alt="Instagram Icon"></span>
        <span><img class="social-media-icons" src="assets/social-media-icons/icon-pinterest-white.png" alt="Pinterest Icon"></span>
      </section>
  		<section id="middle"><p>Copyright &copy;<br/>  <?php echo date("Y"); ?> <br/><br/> Assimil8 <br/> Web Solutions </p></section>
  		<section id="right">
        <h2>Contact <br/> Info:</h2>
        <form action="index_submit" method="get" accept-charset="utf-8">
          <label>Name:</label>
          <input type="text" name="name" placeholder="Joe Bloggs"><br/>
          <label>Email:</label>
          <input type="email" name="email" placeholder="jb@gmail.com.au">
          <label>Msg:</label>
          <textarea name="message" placeholder="I am writing to..."></textarea>
          <input id="submit" type="submit" name="submit" value="Submit">
        </form>
      </section>
  	</footer>
  <!-- END footer -->
	</div>
  <!-- END page-wrapper -->
</body>
</html>
