<?php
    include_once './header.php';
?>
<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Stopi v stik z mano</h2>
							<p>Če me želite kontaktirati storite to spodaj.</p>
                                                        <form method="post" action="text.php">
								<div class="field">
									<label for="name">Ime</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field">
									<label for="surname">Priimek</label>
									<input type="text" name="surname" id="surname" />
								</div>
								<div class="field">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Sporočilo</label>
                                                                        <textarea name="message" id="message" name="message" rows="4"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Pošlji sporočilo" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="fa-home">
									Stantetova ulica 9<br />
									3320 Velenje<br />
									Slovenia, Europe
								</li>
								<li class="fa-phone">+386-40-938-730</li>
								<li class="fa-envelope"><a href="mailto:Jure.zajc.95@gmail.com?Subject=Hello%20again" target="_top" rel="noopener">Pošlji email</a></li>
								<li class="fa-twitter"><a href="https://twitter.com/JureZAJC1" target="_blank" rel="noopener">Sledi mi na Twitterju</a></li>
                                                                <li class="fa-facebook"><a href="https://www.facebook.com/JureZajc1995" rel="noopener" target="_blank">Sledi mi na Facebooku</a></li>
								<li class="fa-instagram"><a href="https://www.instagram.com/jure_zajc/" target="_blank" rel="noopener">Sledi mi na Instagramu</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Jure Zajc. All rights reserved.</li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
                        
                        <script type="text/javascript">function you_sure()
                                    {
                                      var retVal = confirm("Ali si prepričan da ga želiš narediti za skrbnika?");
                                      if (retVal === true){
                                          return true;
                                      }
                                      else{
                                          return false;
                                      }
                                    }
                                </script>
                        
	</body>
</html>

