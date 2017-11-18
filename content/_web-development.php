<script type="text/javascript">
	$(document).ready(function () {
	  /* global $ */
	  $(".nav-link").removeClass("active");
	  $('#webdev').addClass('active');

	});
</script>


<div id="container" class="web-development">					
	<div id="row">
    <h1 class="text-center">Web Development</h1>
    <div id="web-development"> 
      <div class="col-xs-12 col-md-6 text-center">
      	<a class="" href="bst_site" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit Page">
      	  <video id="BST" class="wide " autoplay loop muted poster="/resources/web-development/BST-FS.png">
      	    <source type="video/mp4" src="/resources/web-development/BST-FS.mp4">
      	    <source type="video/webm" src="/resources/web-development/BST-FS.webm">
          </video>
        </a>
    	  <h3 class="font-weight-bold">Breton SmarTek / FireQ-RVS Website</h3>
    	  <br>
    	  <a data-toggle="modal" data-target="#bretonsmartek-modal"><span>(See Details)</span></a>
      </div>
      
      <!--Make this into a fancybox window - play walkthrough video -->
      <div class="col-xs-12 col-md-6 text-center">
      	<a class="fancybox fancybox.iframe" href="/resources/web-development/MimirWalkthrough.mp4" data-toggle="tooltip" data-placement="top" title="Watch Demo">
      	  <video id="Mimir" class="wide " autoplay loop muted poster="/resources/web-development/Mimir-FS.png">
      	    <source type="video/mp4" src="/resources/web-development/Mimir-FS.mp4">
      	    <source type="video/webm" src="/resources/web-development/Mimir-FS.webm">
          </video>
        </a>
    	  <h3 class="font-weight-bold">Mimir Networks Website</h3>
    	  <br>
    	  <a data-toggle="modal" data-target="#mimir-modal"><span>(See Details)</span></a>
      </div>
      
      
      
      
      <div class="col-xs-12 col-md-6 text-center" id="DevMatch">
        <a class="" href="https://devmatch120884.herokuapp.com/" alt="DevMatch" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit Page">
          <img class="img-responsive" src="/resources/web-development/DevMatch.png" />
        </a>
        <h3 class="font-weight-bold">DevMatch</h3>
        <br>
        <a data-toggle="modal" data-target="#devmatch-modal"><span>(See Details)</span></a>
      </div>
      
      <div class="col-xs-12 col-md-6 text-center"></div>
    </div>

	</div>
</div>


<!-- Modals -->
<div id="bretonsmartek-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title"><a class="" href="bst_site" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit Page">Breton SmarTek / FireQ-RVS</a></h1>
      </div>
      <div class="modal-body">
        <div class="well">
          <p>
            Company and product web pages for sister US/Canadian companies offering
        similar services. Serves different content based on location (    <em>Breton SmarTek for Canada / Thuh Company for US</em>)
            <br/>
            <br/>
            <br/>
        </p>
        <p>
            <a name="user-content-features"></a>
            <strong>Features</strong>
        </p>
        <ul>
            <li>
                <p>
                    Full company and product information and support pages with dynamic
                    content (<em>ie images / contact form / text</em>)
                </p>
            </li>
            <li>
                <p>
                    Several external JS libraries used to enhance user experience
                </p>
            </li>
            <li>
                <p>
                    External API used to detect country by user’s IP address
                </p>
            </li>
            <li>
                <p>
                    Search engine optimization
                </p>
            </li>
            <li>
                <p>
                    Full training video series by me (FireQ-RVS Support section)
                </p>
            </li>
        </ul>
        <h1>
            <a name="user-content-technologies-used"></a>
            Technologies Used
        </h1>
        <p>
            <strong>Languages / </strong>
            <strong>Frameworks</strong>
            <strong>:</strong>
        </p>
        <ul>
            <li>
                <p>
                    HTML / CSS
                </p>
            </li>
            <li>
                <p>
                    JavaScript / jQuery
                </p>
            </li>
            <li>
                <p>
                    PHP
                </p>
            </li>
        </ul>
        <p>
            <strong>Scripts / APIs / Tools Used:</strong>
        </p>
        <ul>
            <li>
                <p>
                    MaxMind GeoIP API
                    <sub>
                        (subscription service used initially – added country switcher
                        for demo purposes)
                    </sub>
                </p>
            </li>
            <li>
                <p>
                    TM Slider / Lean Slider
                </p>
            </li>
            <li>
                <p>
                    FancyBox
                </p>
            </li>
            <li>
                <p>
                    Google WebMaster Tools
                </p>
            </li>
        </ul>
    	  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="mimir-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title">Mimir Networks Website</h1>
      </div>
      <div class="modal-body">
        <div class="well">
          <p>
              Responsive company website developed in WordPress with company and product
              information
          </p>
          <h1>
              <a name="user-content-technologies-used"></a>
              Technologies Used
          </h1>
          <p>
              <strong>Languages / </strong>
              <strong>Frameworks</strong>
              <strong>:</strong>
          </p>
          <ul>
              <li>
                  <p>
                      WordPress
                  </p>
              </li>
              <li>
                  <p>
                      HTML / CSS
                  </p>
              </li>
              <li>
                  <p>
                      PHP
                  </p>
              </li>
          </ul>
          <p>
              <strong>WordPress Plugins</strong>
              <strong> </strong>
              <strong>Used</strong>
              <strong>:</strong>
          </p>
          <ul>
              <li>
                  <p>
                      Contact Form 7
                  </p>
              </li>
              <li>
                  <p>
                      Theme Fusion Avada
                  </p>
              </li>
              <li>
                  <p>
                      LayerSlider WP / Smart Slide 3 / Revolution Slider
                  </p>
              </li>
          </ul>
    	  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="devmatch-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title"><a class="" href="https://devmatch120884.herokuapp.com/" alt="DevMatch" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit Page">DevMatch</a></h1>
      </div>
      <div class="modal-body">
        <div class="well">
              <p>
              	A full-stack Ruby On Rails application for a fictional startup company app
              	called DevMatch. A membership-based networking platform for students,
              	developers, entrepreneurs, and investors. Created as part of Web Development course 
              	(<a href="//www.upskillcourses.com" target="_blank">UpskillCourses.com</a>) taken
              	to refresh my knowledge in Ruby On Rails.
              	<br/>
              	<br/>
              	<a href="//github.com/wobblefish/upskill_saas_app" target="_blank">Git Repo</a>
              	<br/>
              </p>
              <p>
              	<a name="user-content-features"></a>
              	<strong>Features</strong>
              </p>
              <ul>
              	<li>
              		<p>
              			A user interface
              		</p>
              	</li>
              	<li>
              		<p>
              			Login/logout system with authentication
              		</p>
              	</li>
              	<li>
              		<p>
              			Email notifications
              		</p>
              	</li>
              	<li>
              		<p>
              			Subscription payments for premium services
              		</p>
              	</li>
              </ul>
              <h1>
              	<a name="user-content-technologies-used"></a>
              	Technologies Used
              </h1>
              <p>
              	<strong>Languages:</strong>
              </p>
              <ul>
              	<li>
              		<p>
              			HTML
              		</p>
              	</li>
              	<li>
              		<p>
              			CSS
              		</p>
              	</li>
              	<li>
              		<p>
              			JavaScript
              		</p>
              	</li>
              	<li>
              		<p>
              			Ruby on Rails
              		</p>
              	</li>
              	<li>
              		<p>
              			PostgreSQL
              		</p>
              	</li>
              </ul>
              <p>
              	<strong>Frameworks/Libaries:</strong>
              </p>
              <ul>
              	<li>
              		<p>
              			BootStrap
              		</p>
              	</li>
              	<li>
              		<p>
              			SCSS
              		</p>
              	</li>
              	<li>
              		<p>
              			jQuery
              		</p>
              	</li>
              </ul>
              <p>
              	<strong>Gems/APIs:</strong>
              </p>
              <ul>
              	<li>
              		<p>
              			Figaro
              		</p>
              	</li>
              	<li>
              		<p>
              			Devise (user profile setup)
              		</p>
              	</li>
              	<li>
              		<p>
              			PaperClip/ImageMagick (image upload handler)
              		</p>
              	</li>
              	<li>
              		<p>
              			Stripe (subscription service)
              		</p>
              	</li>
              	<li>
              		<p>
              			MailGun (email sender)
              		</p>
              	</li>
              	<li>
              		<p>
              			Hirb (database table formatting)
              		</p>
              	</li>
              </ul>
              <p>
              	<strong>Tools:</strong>
              </p>
              <ul>
              	<li>
              		<p>
              			Heroku (deployment)
              		</p>
              	</li>
              	<li>
              		<p>
              			Cloud9 IDE
              		</p>
              	</li>
              </ul>
      	  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>