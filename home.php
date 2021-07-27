<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="page-template-home">

<div class="hero">
	<img src="<?php echo $this->getThemePath(); ?>/images/hero-image.png" alt="hero image" class="desktop" />
	<img src="<?php echo $this->getThemePath(); ?>/images/hero-mobile.png" alt="mobile hero" class="mobile" />
</div>

<div class="container service">
	<h1>Service. Expertise. Results.</h1>
	<p>Optimize customer management with technology built for today, and a partnership ready for tomorrow.</p>
	<p>
		<p>
		<?php
			$a = new Area("Get in Touch Button Top");
			$a->display();
		?>
	</p>
	</p>
</div>

<div class="soft-gradient">
	<div class="container">
		<?php
			$a = new Area("Path Header");
			$a->display();
		?>
		<i class="fas fa-angle-down"></i>
		<div class="customer-relations">
			<a href="/services/strategic-consulting">
				<div class="light-blue-gradient">
					<img src="<?php echo $this->getThemePath(); ?>/images/spyglass.png" alt="Spyglass" />
					<h3>Strategic Consulting</h3>
					<p>Leverage Tools To Make Your Business Thrive</p>
				</div>
			</a>
			<a href="/services/salesforce-solutions">
				<div class="dark-blue-gradient">
					<img src="<?php echo $this->getThemePath(); ?>/images/salesforce-circle.png" alt="Salesforce" />
					<h3>Salesforce Solutions</h3>
					<p>Automate Sales, Engage Customers, Optimize Service</p>
				</div>
			</a>
			<a href="/services/azure-solutions">
				<div class="light-blue-gradient">
					<img src="<?php echo $this->getThemePath(); ?>/images/azure.png" alt="Azure" />
					<h3>Azure Solutions</h3>
					<p>Realize the Full Potential of Microsoft Azure for Business Management &  Analytics</p>
				</div>
			</a>
			<a href="/services/technology-adoption-training">
				<div class="dark-blue-gradient">
					<img src="<?php echo $this->getThemePath(); ?>/images/gear-circle.png" alt="Gear" />
					<h3>IT Adoption & Training</h3>
					<p>Master Change Management at Employee Level for Greater Adoption and Results</p>
				</div>
			</a>
		</div>
	</div> 
</div>

<div class="container graphics">
	<h1>Learn More</h1>
	<i class="fas fa-angle-down"></i>
	<div class="half-box">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/Power-up-float.png" alt="Power Up" class="powerup desktop" />
			<img src="<?php echo $this->getThemePath(); ?>/images/Power-up-base.png" alt="Power Up" class="desktop" />
			<img src="<?php echo $this->getThemePath(); ?>/images/power-mobile.png" alt="Power Mobile" class="mobile" />
		</div>
		<div class="powertext">
			<?php
				$a = new Area("Power Up Text");
				$a->display();
			?>
		</div>
	</div>
	<div class="half-wrapper">
		<div class="half-box flip">
			<div class="buildtext">
				<?php
					$a = new Area("Build Consistency Text");
					$a->display();
				?>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/images/Build-sales-service-float.png" alt="Build Sales Service" class="build desktop" />
				<img src="<?php echo $this->getThemePath(); ?>/images/Build-sales-service-base.png" alt="Build Sales Service" class="base desktop"/>
				<img src="<?php echo $this->getThemePath(); ?>/images/build-mobile.png" alt="Build Mobile" class="mobile" />
			</div>
		</div>
	</div>
	<div class="half-box">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/360-insight-float.png" alt="360 Insight" class="insight desktop" />
			<img src="<?php echo $this->getThemePath(); ?>/images/360-insight-base.png" alt="360 Insight" class="desktop" />
			<img src="<?php echo $this->getThemePath(); ?>/images/insight-mobile.png" alt="Insight Mobile" class="mobile" />
		</div>
		<div class="gaintext">
			<?php
				$a = new Area("Gain 360 Text");
				$a->display();
			?>
		</div>
	</div>
	<div class="half-wrapper">
	<div class="half-box flip">
		<div class="adoptiontext">
			<?php
				$a = new Area("Increase Adoption");
				$a->display();
			?>
			
		</div>
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/Increase-adoption-float.png" alt="Increase Adoption" class="adoption desktop" />
			<img src="<?php echo $this->getThemePath(); ?>/images/Increase-adoption-base.png" alt="Increase Adoption" class="base desktop" />
			<img src="<?php echo $this->getThemePath(); ?>/images/adoption-mobile.png" alt="Adoption Mobile" class="mobile" />
		</div>
	</div>
	</div>
		<?php
			$a = new Area("Get in Touch Button");
			$a->display();
		?>
	</div>
	<div class="soft-gradient">
		<div class="container testimonial-wrapper">
		<h2>Hear from our clients</h2>
		<div class="testimonials">
			<div class="half-box testimonial-slide">
				<div>
					<div class="logo-container drop-shadow">
						<img src="<?php echo $this->getThemePath(); ?>/images/case-studies/gg.png" alt="Acco" />
						<i class="fas fa-arrow-circle-left"></i>
						<i class="fas fa-arrow-circle-right"></i>
					</div>
				</div>
				<div>
					<h3>G&G Lighting</h3>
					<p>"G&G is now able to move leads quickly through the pipeline due to dynamic, personalized campaigns; measure and track campaign performance, drawing insights based on the data; better understand each step of the whole marketing process from click to close, capturing true marketing ROI."</p>
					<p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/Case-Study-GG.pdf">Read More &#xbb;</a></span></p>
				</div>
			</div>
			<div class="half-box testimonial-slide">
				<div>
					<div class="logo-container drop-shadow">
						<img src="<?php echo $this->getThemePath(); ?>/images/case-studies/united-imaging.png" alt="Allendale" />
						<i class="fas fa-arrow-circle-left"></i>
						<i class="fas fa-arrow-circle-right"></i>
					</div>
				</div>
				<div>
					<h3>United Imaging</h3>
					<p>"It has been a joy working with Jolt. I was particularly impressed by the ability of the team to strike a balance between business acumen and technical expertise."</p>
					<p><strong>Max Heppermann,</strong>
						<br />Director of Service PMO, United Imaging
					</p>
					<p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/Case-Study-UIH.pdf">Read More &#xbb;</a></span></p>
				</div>
			</div>
			<div class="half-box testimonial-slide">
				<div>
					<div class="logo-container drop-shadow">
						<img src="<?php echo $this->getThemePath(); ?>/images/case-studies/CFDS.png" alt="CFDS" />
						<i class="fas fa-arrow-circle-left"></i>
						<i class="fas fa-arrow-circle-right"></i>
					</div>
				</div>
				<div>
					<h3>Center for Disability Services</h3>
					<p>"Jolt Consulting Group helped select the right technology for CFDS business requirementsGE Centricity. JCG software contract and pricing that reduced CFDS risk and ensured CFDS protection with a cyber-security plan. Lastly, new efficient business processes and infrastructures were developed."</p>
					<p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/Jolt-CaseStudy-CFDS.pdf">Read More &#xbb;</a></span></p>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>   
</div>

<?php $this->inc('elements/footer.php'); ?>