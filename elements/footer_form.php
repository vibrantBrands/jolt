<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php Loader::element('footer_required'); ?>

<footer class="alternate-footer">
	<div class="forms">
		<div class="container">
			<h2>Contact us to learn more</h2>
			<div class="fields">
				<div id="wufoo-k1x7jewm17bej7g"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/k1x7jewm17bej7g">online form</a>. </div> <script type="text/javascript"> var k1x7jewm17bej7g; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'k1x7jewm17bej7g', 'autoResize':true, 'height':'402', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { k1x7jewm17bej7g = new WufooForm(); k1x7jewm17bej7g.initialize(options); k1x7jewm17bej7g.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
			</div>
			<div class="social container">
				<a href="https://www.linkedin.com/company/joltconsultinggroup/"><i class="fab fa-linkedin"></i></a>
				<a href=""><i class="fab fa-youtube"></i></a>
			</div>
		</div>

	</div>

	<div class="logos container">
		<div>
			<a href="/" class="mobile"><img src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="Logo"></a>
		</div>
		<div>
			<a href="/" class="mobile"><img src="<?php echo $this->getThemePath(); ?>/images/salesforce-certified.png" alt="Salesforce Certified"></a>
		</div>
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/accessibility-logo.png" alt="Accessiblity" class="wheelchair" />
			<span>Accessibility</span>
		</div>
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