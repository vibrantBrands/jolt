<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php Loader::element('footer_required'); ?>

<footer>
	<div class="connect">
		<div class="half-box">
			<div></div>
			<div>
				<h2>Get in touch</h2>
				<p>Enter your Email to contact a representative</p>
				<div class="input-box">
					<input type="email" placeholder="Email Address" id="email">
					<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit">
				</div>
				

				<div class="social">
					<a href=""><i class="fab fa-facebook"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-linkedin"></i></a>
					<a href=""><i class="fab fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="logos container">
		<div>
			<a href="/" class="mobile"><img src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="Logo"></a>
		</div>
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/salesforce-certified.png" alt="Salesforce Certified">
		</div>
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/accessibility-logo.png" alt="Accessiblity" class="wheelchair" />
			<span>Accessibility</span>
		</div>
	</div>
	<div class="bottombar">
		 Copyright&copy; 2020 Jolt Consulting Group LLC, All rights reserved
	</div>
</footer>
	<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
	<script src="<?php echo $view->getThemePath()?>/js/lity.js"></script>
	<script src="<?php echo $view->getThemePath()?>/js/main.js"></script>
</div>
</body>



</div>

</html>