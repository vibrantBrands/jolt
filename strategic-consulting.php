<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal content cs-page">
  <div class="topbar">
      <?php
       $page = Page::getCurrentPage();
       $title = $page->getCollectionName();
           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>
           <img src='<?php echo $image_src; ?>'>
           
       <?php else: ?>
       <?php endif; ?>
      <div>
       <h1><?php echo $title; ?></h1>
       <p>
         Jolt does more than connect clients to technology; we deliver results. See how we powered customer engagement and more for leading service companies.
       </p>
    </div>
  </div>
  <div class="subnav">
    <div class="container services">
      <span class="subnav-btn">Services</span><i class="fas fa-caret-up"></i>
      </div>
    <div class="menu">
      <div>
        <a href="">Strategic Consulting</a>
      </div>
      <div>
        <a href="/salesforce-solutions">Salesforce Solutions</a>
      </div>
      <div>
        <a href="">Azure Solutions</a>
      </div>
      <div>
        <a href="/technology-adoption-training">Technology Adoption and Training</a>
      </div>
    </div>
  </div>
  <article>
    <div class="container">
      <?php
      $a = new Area("Strategic Consulting Text");
      $a->display();
    ?>
    </div>
    <div class="container clearfix">
      <div class="case-studies">
        <div>
            <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/acco.png" alt="Acco" class="active" data-index="0" />
            <i class="fas fa-angle-down"></i>
        </div>
        <div>
          <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/allendale.png" alt="Allendale" data-index="1"/>
          <i class="fas fa-angle-down"></i>
        </div>
        <div>
          <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/CFDS.png" alt="CFDS" data-index="2"/>
          <i class="fas fa-angle-down"></i>
        </div>
        <div>
          <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/comfort-systems.png" alt="Comfort Systems" data-index="3" />
          <i class="fas fa-angle-down"></i>
        </div>
        <div>
          <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/ex1.png" alt="EX1" data-index="4" />
          <i class="fas fa-angle-down"></i>
        </div>
        <div>
          <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/gg.png" alt="GG" data-index="5" />
          <i class="fas fa-angle-down"></i>
        </div>
        <div>
          <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/mirion.png" alt="Mirion" data-index="6" />
          <i class="fas fa-angle-down"></i>
        </div>
      </div>
    </div>
    <div class="container case-study-wrapper">
      <div class="case-study">
        <h2>Acco</h2>
        <div class="half-box">
          <div>
            <p>Since 1934, ACCO Engineered Systems has designed, installed, and maintained hundreds ofthousands of mechanical projects. ACCO is an employee owned company dedicated to the design, fabrication, installation, maintenance and service of commercial and industrial HVAC, refrigeration, plumbing, process piping, and building automation systems. ACCO offers complete in-house engineering, fabrication, installation, commissioning, and service capabilities.</p><p>This integrated delivery system provides customers with the most practical, cost effective solutions for their particular mechanical and control system requirements. Its mission is to provide customers with the most cost-effective mechanical systems for their facilities through the integration knowledge of engineering, construction, and service.</p>
            <h3>Solutions:</h3>
            <ul>
              <li>Agreed on the role of service and then build an organization around it; executed changes to support a more unified service organization</li>
              <li>Recommended the implementation of a world-class service management platform with a focus on standardizing core service processes based upon best practices and then training personnel across regions</li>
              <li>Identified and implemented a vital-few operational metrics</li>
            </ul>
          </div>
          <div>
            <div>
              <h3>Results:</h3>
              <ul>
                <li>With JCG’s assistance, ACCO was able to select a new, all-encompassing IT system, IFS, as their world-class management platform and ensured employee buy-in through implementation of a consistent business process across regions and execution of best practices for change management</li>
                <li>ACCO deployed several key business metrics that have allowed it to have one of the best response times in the state of California</li>
                <li>
                  Deployed a change management program that has executive buy-in, frequent communication and clear objectives to support the roll-out of IFS
                </li>
              </ul>
              <p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/JCG-Case-Study-ACCO.pdf" target="case-study">Read More &#xbb;</a></span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="case-study">
        <h2>Allendale Machinery Systems</h2>
      <div class="half-box">
        <div>
          <p>Allendale Machinery Systems needed a system that worked for their service team and customers.  They found their solution in Salesforce’s Field Service Lightning (FSL).  The transition to FSL needed to be swift and smooth and Jolt Consulting Group provided that service for them</p>
          <h3>Solution:</h3>
          <ul>
            <li>Transfer historical SVMX data to FSL objects for full-service history in the new FSL tool using LightningJolt</li>
            <li>Introduce work order management, scheduling and dispatch, product inventory, Timesheets and USR HAAS integrations into the org</li>
            <li>Deliver a fully mobile work force by enabling capabilities in iOS and Android devices
Working more efficient by reducing the number of clicks needed to complete work</li>
          </ul>
        </div>
        <div>
          <!-- <img src="<?php echo $this->getThemePath(); ?>/images/quote.png" alt="Quote" class="quote">  -->
          <div>
            <h3>Result:</h3>
            <ul>
              <li>JCG implemented a one-click solution that made sure all necessary fields of the service report were populated –tracking inventory, hours, labor – and is now efficient in capturing all necessary info - saving technicians a great amount of time and ensuring no information is lost</li>
              <li>Work Order Management - automatically populates with the exact tools the technician will need for the visit; service appointments auto-create amount of time needed for each type of Work Order saving time and increasing customer transparency and efficiency</li>
            </ul>
            <p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/JCG-Case-Study-Allendale.pdf" target="case-study"><i class="fas fa-download"></i> Download Full Case Study &raquo;</a></span></p>
          </div>
        </div>
      </div>
    </div>

    <!-- another case study -->

    <div class="case-study">
        <h2>CFDS</h2>
      <div class="half-box">
        <div>
          <p>The Center for Disability Services (CFDS) provides disability and chronic medical care to 15,000+ people in Upstate New York through its 85 locations. CFDS provides specialty care to individuals and as a not-for-profit medical organization, faced some serious challenges.</p>
          <h3>Solutions:</h3>
          <ul>
            <li>Institute JOlt’s project methodology and management processes.</li>
            <li>Lead a rigorous RFP including requirements definition, software vendor coordination and preparation of demonstration scripts and scoring mechanism</li>
            <li>Identify future technology needs including new hardware and supporting infastructure</li>
            <li>Lead contract and pricing negotiations with the preferred software vendor</li>
          </ul> 
        </div>
        <div>
          <div>
            <h3>Results:</h3>
            <ul>
              <li>Selected the right technology for CFDS business requirements­GE Centricity.</li>
              <li>Negotiated software contract and pricing that reduced CFDS risk and ensured CFDS protection with a cyber-security plan.</li>
              <li>Developed new, efficient business processes and infrastructure.</li>
            </ul>
            <p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/Jolt-CaseStudy-CFDS.pdf" target="case-study"><i class="fas fa-download"></i> Download Full Case Study &raquo;</a></span></p>
          </div>
        </div>
      </div>
      </div>

      <!-- another case study -->

      <div class="case-study">
        <h2>Comfort Systems USA</h2>
        <div class="half-box">
        <div>
          
          <p>Comfort Systems USA is one of the nation's leaders in HVAC and mechanical systems contracting with 36 operating companies, 90 locations and 7 ,000+ employees around the country. The goal was to further leverage its scale to reduce the effort required for customers to do business while simplifying the way its employees serve customers.</p>
          <h3>Solutions:</h3>
          <ul>
            <li>Assess Comfort Systems USA operations, business processes and strategies.</li>
            <li>Lead a vigorous RFP process including requirements definition, software vendor coordination and preparation of demonstration scripts and scoring mechanisms.</li>
            <li>Develop a future IT architecture plan to anticipate deployment of the chosen solution in Comfort Systems USA's IT environment.</li>
          </ul>
        </div>
        <div>
          <div>
            <h3>Results:</h3>
            <ul>
              <li>Developed a series of "to be" future processes based upon industry best practices.</li>
              <li>Recommended technology platforms best suited to support Comfort Systems USA's business objectives.</li>
              <li>Supplied Comfort Systems USA with significant insight into nuances and different functionality of the various technology vendors.</li>
              <li>Assisted Comfort Systems USA in selecting the right technology for its business objectives and requirements.</li>
              <li>Streamlined the technology selection process.</li>
            </ul>
            <p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/Jolt_CaseStudy_ComfortSystems.pdf" target="case-study"><i class="fas fa-download"></i> Download Full Case Study &raquo;</a></span></p>
          </div>
        </div>
      </div>
    </div>

    <!-- another case study -->

    <div class="case-study">
      <div class="half-box">
        <div>
          <h2>X1</h2>
          <p>ExOne enlisted the expertise of Jolt Consulting Group to assist them in their migration from ServiceMax to Field Service Lightning.  With the use of JCG’s LightningJolt, they were able to migrate all of their historical data and begin using the FSL platform in record time.</p>
          <h3>Solutions:</h3>
          <ul>
            <li>Provide ExOne with a single end-to-end solution based upon the Salesforce Field Service Lightning functionality supporting case management, work order management, scheduling and dispatch, contract management and mobility functions</li>
            <li>Impart Jolt Consulting Group’s domain expertise and best-practices to enhance day-to-day operations</li>
            <li>Utilize a proprietary in-house tool, LightningJolt, that facilitates and minimizes the effort related to data migration from ServiceMax to FSL</li>
          </ul>
        </div>
        <div>
          <div>
            <h3>Results:</h3>
            <ul>
              <li>Increased user adoption due to outstanding mobile reviews; technicians now have a tool "they can use"</li>
              <li>Added capabilities (i.e. service contracts and PM work order generation)</li>
              <li>Positive implementation experience created loyal Salesforce advocates → ExOne purchased Community immediately following the FSL implementation and are currently considering other apps</li>
              <li>(Pardot & CPQ)</li>
            </ul>
            <p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/JCG-Case-Study-ExOne.pdf" target="case-study"><i class="fas fa-download"></i> Download Full Case Study &raquo;</a></span></p>
          </div>
        </div>
      </div>
      </div>

      <!-- another case study -->

      <div class="case-study">
        <h2>GG</h2>
      <div class="half-box">
        <div>
          <p>G&G Industrial Lighting is a Solutions-focused manufacturer of high quality, innovative lighting products for harsh environments. The largest challenge that they faced concerned their disparate data systems and lack of a comprehensive process; data was scattered, with no system or process to communicate organization-wide:</p>
          <h3>Solutions:</h3>
          <ul>
            <li>Collaboratively built and documented a new sales process for the Company</li>
            <li>Implement Salesforce’s Sales Cloud & Pardot in order to:Obtain insight into sales and marketing strategies and activities that drive leads, opportunities and deal closure</li>
            <li>Improve sales pipeline visibility</li>
            <li>Improve accountability within manufacturing lighting reps</li>
          </ul>
        </div>
        <div>
          <div>
            <h3>Results:</h3>
            <ul>
              <li>G&G is now able to move leads quickly through the pipeline due to dynamic, personalized campaigns; measure and track campaign performance, drawing insights based on the data; better understand each step of the marketing process from click to close, capturing true marketing ROI</li>
              <li>Have one system of record for all their customers, prospects and activities; by using defined sales stages, reps know when to move deals along for more accurate forecasting; now possess a way to track distributor, manufacturer and partner projects</li>
              <li>Better visibility into the sales activities and channel partners to see which distributors are producing results, what products are selling, etc.</li>
              <li>Newly hired regional sales managers are being set-up for success as they now have access to 3 years of sales data (aren’t going ‘blindly’ into the new position)</li>
            </ul>
          <p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/Case-Study-GG.pdf" target="case-study"><i class="fas fa-download"></i> Download Full Case Study &raquo;</a></span></p>
          </div>
        </div>
      </div>
    </div>

    <!-- another case study -->

      <div class="case-study">
          <h2>Mirion</h2>
        <div class="half-box">
          <div>
            <p>Mirion is a leader in radiation safety, measurement and science. In 2019, Mirion looked to consolidate their Atlanta, GA SFDC org into their Meriden, CT SFDC org in order to create a more cohesive and streamlined work environment.</p>
            <h3>Solutions:</h3>
            <ul>
              <li>Assessment and review of both orgs; Sales & RMA process assessment; Lightning readiness evaluation of SFDC & SVMX; best-practices assessment and recommendation report</li>
              <li>Atlanta migration package creation; metadata extraction; data extraction; template creation and data conversion; consolidation with verification and validation</li>
              <li>Jitterbit integration updates to consolidated org; enabling Lightning Experience, including new sales process configuration and implementation; on-site training</li>
            </ul>
          </div>
          <div>
            <div>
              <h3>Results:</h3>
              <ul>
                <li>Successfully consolidated legacy Atlanta SFDC org into Meriden SFDC org</li>
                <li>Consolidation also included migrating their RMA process from the Case object into a ServiceMax driven RMA process</li>
                <li>Led a Sales Process Workshop and created a new process that works for both business lines as they were very different in the separate orgs</li>
                <li>Enabled Lightning experience and converted Java code into process builder/visual flow</li>
              </ul>
            <p><span class="orange-link"><a href="<?php echo $this->getThemePath(); ?>/case-studies/Case-Study-Mirion-Standard.pdf" target="case-study"><i class="fas fa-download"></i> Download Full Case Study &raquo;</a></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</div>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>


<?php $this->inc('elements/footer.php'); ?>