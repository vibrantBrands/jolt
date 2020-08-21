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
					<div id="wufoo-ksz7qmk072k643"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/ksz7qmk072k643">online form</a>. </div> <script type="text/javascript"> var ksz7qmk072k643; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'ksz7qmk072k643', 'autoResize':true, 'height':'260', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { ksz7qmk072k643 = new WufooForm(); ksz7qmk072k643.initialize(options); ksz7qmk072k643.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
				</div>
				<div class="social">
					<a href="https://www.linkedin.com/company/joltconsultinggroup/" target="social"><i class="fab fa-linkedin"></i></a>
					<a href="" target="social"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="salesforce-btn">
		<span class="orange-btn">
			<a href="" class="submit-a-case">Submit a Case</a>
		</span>
	</div>
	<!-- submit request form -->
		<div class="modal-overlay">
	        <div id="case-information">
	            <h4 class="form-title">Contact Customer Support</h4>
	            <h4 class="form-subtitle">Tell Us How We Can Help!</h4>
	            <form action="https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" method="POST">

	            <input type=hidden name='captcha_settings' value='{"keyname":"Jolt_Widget","fallback":"true","orgId":"00Di0000000IpkH","ts":""}'>
	            <input type=hidden name="orgid" value="00Di0000000IpkH">
	            <input type=hidden name="retURL" value="https://joltconsultinggroup.com/submit-a-case/case-submitted/">
	             
	            <label for="name">Contact Name</label>
	            <input  id="name" name="name" type="text" /><br>
	            <label for="company">Company</label>
	            <input  id="company"name="company" type="text" /><br>
	            <label for="email">Email</label>
	            <input  id="email" name="email" type="text" /><br>
	            <label for="subject">Subject</label>
	            <input  id="subject" name="subject" type="text" /><br>
	            <label for="description">Description</label>
	            <textarea name="description"></textarea><br>
	            <input type="hidden"  id="external" name="external" value="1" />
	            
	            <div class="g-recaptcha" data-sitekey="6LfmM-cUAAAAAGaz1Ha-mNxbfeIHTMS7cOcpcZVR"></div><br>
	            <input type="submit" id="submit-form-btn" name="submit">
	            
	            </form>
	       </div>        
		</div> 
		<!-- end submit request form -->
	<div class="logos container">
		<div>
			<a href="/" class="mobile"><img src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="Logo"></a>
		</div>
		<div>
			<a href="https://appexchange.salesforce.com/appxConsultingListingDetail?listingId=a0N3000000E6QjgEAF" target="_blank">
				<img src="<?php echo $this->getThemePath(); ?>/images/salesforce_appexchange.png" alt="Salesforce App Exchange">
			</a>
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
	<script src="<?php echo $view->getThemePath()?>/js/web-to-case.js"></script>	
	<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
	<script src="<?php echo $view->getThemePath()?>/js/lity.js"></script>
	<script src="<?php echo $view->getThemePath()?>/js/main.js"></script>
</div>
</body>



</div>

</html>