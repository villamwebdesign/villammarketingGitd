<footer>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71310402-3', 'auto');
  ga('send', 'pageview');

</script>
<section id="weblap-keszites-kapcsolat">
	<div class="free-quote">
	<?php
	$name = "";
	$email = "";
	$errEmail = "";
	$errName = "";
	$errMessage = "";
	$errHuman = "";
	$result = "";
		if (isset($_POST["submit"])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$human = intval($_POST['human']);
				$from = 'OLCSOWEBOLDALKESZITES.XYZ';
				$to = 'info@villamwebdesign.xyz';
				$subject = 'Egyedi ajánlat kérése ';
				$headers = "Content-Type: text/html; charset=UTF-8";
				$body = "Küldő: $name\n E-Mail: $email\n Üzenet:\n $message";

				// Check if name has been entered
				if (!$_POST['name']) {
						$errName = 'Írja be kérem a nevét / Write in your name';
				}

				// Check if email has been entered and is valid
				if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
						$errEmail = 'Adjon meg egy érvényes e-mailt / Provide valid email';
				}

				//Check if message has been entered
				if (!$_POST['message']) {
						$errMessage = 'Írja ide az üzenetét / Write in your message';
				}
				//Check if simple anti-bot test is correct
				if ($human !== 4) {
						$errHuman = 'Rossz megfejtés. Az almák száma nem jó! Egyen meg vagy vegyen még. / Bad solution.';

				}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
		if (mail ($to, $subject, $body, $from)) {
				$result=$lang['OKAY_ENQ'];
		} else {
				$result= $lang['ERROR_ENQ'];
		}
}
		}
?>
			<div class="container free-quote-inside" id="weboldal-keszites-arajanlat">
			<div class="row"> <a href="#" id="closeQuote"><i class="fa fa-close faclose" aria-hidden="true"></i></a></div>
			<br />
			<?php echo $lang['ARAJANLAT_HEADER']; ?>

	<form class="form-horizontal" role="form" method="post" action="plugins/phpmailer/examples/mail.php" autocomplete="on" enctype="application/x-www-form-urlencoded;">
		<div class="form-group">
				<label for="name" class="col-sm-2 control-label"><?php echo $lang['AR_NAME']; ?></label>
				<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="Keresztnév és családnév" value="<?php if (isset($_POST['submit'])){echo htmlspecialchars($_POST['name']);} ?>">
						<?php echo "<p class='text-danger'>$errName</p>";?>
				</div>
		</div>
		<div class="form-group">
				<label for="email" class="col-sm-2 control-label">E-mail</label>
				<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="példa@valami.hu" value="<?php  if (isset($_POST['submit'])){echo htmlspecialchars($_POST['email']);} ?>">
						<?php echo "<p class='text-danger'>$errEmail</p>";?>
				</div>
		</div>
		<div class="form-group">
				<label for="message" class="col-sm-2 control-label"><?php echo $lang['AR_UZENET']; ?></label>
				<div class="col-sm-10">
						<textarea class="form-control" rows="4" name="message"><?php  if (isset($_POST['submit'])){ echo htmlspecialchars($_POST['message']);} ?></textarea>
						<?php echo "<p class='text-danger'>$errMessage</p>";?>
				</div>
		</div>
		<div class="form-group">
				<label for="human" class="col-sm-2 control-label"><?php echo $lang['AR_TOKEN']; ?><img src="./assets/img/token.jpg" alt="Weboldal készítés ikon"></label>
				<div class="col-sm-10">
						<input type="text" class="form-control" id="human" name="human" placeholder="Az Ön válasza">
						<?php echo "<p class='text-danger'>$errHuman</p>";?>
				</div>
		</div>
		<div class="form-group">
				<div class="text-center col-sm-10 col-sm-offset-2">
						<input id="submit" name="submit" type="submit" value="Küldés" class="btn btn-primary">
				</div>
		</div>
</form>
	</div>
</div>
        <div class="container"><div class="footer-divver">
            <div class="row">
                <div class="col-md-12 col-md-offset-4 text-center">
                    <h2 class="section-heading"><?php echo $lang['KEEP_TOUCH'];?></h2>
                    <hr class="primary">
                    <?php echo $lang['ARE_U_READY'];?>
										<button class="contact-now btn btn-lg btn-primary"><?php echo $lang['req_free_quote'];?></button>
										<script>$('.contact-now').click(function(){$('.free-quote').fadeToggle(1000);});</script>
                </div>

                <div class="col-lg-12 placeToHold">
                    <div class="placeToHold"></div>
                </div>
            </div>
			</div></div></section>
			<div class="footer-distributed">
			<div class="footer-left">

				<h2>Villam Marketing</h2>

				<p class="footer-links">
					<a class="page-scroll" href="index.php#weboldal-keszites-olcson"><?php echo $lang['MENU_1']; ?></a>
					<!--<a class="arak-link" href="index.php?p=weboldal-keszites-arak-budapest-esztergom"><?php //echo $lang['MENU_2']; ?></a>-->
					·
					<a class="page-scroll" href="#webaruhaz-keszites-szolgaltatasok"><?php echo $lang['MENU_4'];?></a>
					·
					<a class="page-scroll" href="#weblap-keszites-kapcsolat"><?php echo $lang['MENU_5']; ?></a>
				</p>

				<p class="footer-company-name">Villam Marketing Agency &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="animated wow bounceIn fa fa-map-marker"></i>
					<p><span><a href="https://www.google.hu/maps/place/Budapest,+Ny%C3%A1rf%C3%A1s+sor+22,+1188/@47.4129019,19.2020554,17z/data=!3m1!4b1!4m5!3m4!1s0x4741c1fe3f42cbdf:0xe041a2452b3f7d3b!8m2!3d47.4129019!4d19.2042441?hl=en" target="_blank">Nyárfás sor 22. Budapest, Hungary</a></span></p>
				</div>

				<div>
					<i class="animated wow bounceIn fa fa-phone"></i>
					<p><?php echo $lang['PHN_NU'];?></p>
				</div>

				<div>
					<i class="animated wow bounceIn fa fa-envelope"></i>
					<p><?php echo $lang['MAILTO'];?></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Info</span>

<br/> <?php echo $lang['FIRMINFO'];?> <br/>Icons made by <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
				</p>

				<div class="footer-icons">

					<a href="https://facebook.com/OlcsoWeboldalKeszites" target="_blank"><i class="animated wow bounceIn fa fa-facebook"></i></a>
					<a href="https://twitter.com/WeboldalOlcson"target="_blank"><i class="animated wow bounceIn fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/miklos-nagy-91322570/"target="_blank"><i class="animated wow bounceIn fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>
</div>
		</footer>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>

		<script src="plugins/acf/public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form', {
            endpoint: './process.php'
        });
    </script>
    <!-- other javascript codes -->
		<script src="plugins/tiltjs/tilt.js"></script> <!-- Tilt JS Plugin -->
		<script src="plugins/particlesjs/particles.min.js"></script>
		<script src="plugins/particlesjs/particles.js"></script>
		<script type="text/javascript">
		$('.parallax-container').tilt({
			reset: false
		});
		</script>
   </body>
</html>
