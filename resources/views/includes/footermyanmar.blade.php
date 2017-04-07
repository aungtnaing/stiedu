
<!-- Footer
	============================================= -->
	<footer id="footer" class="dark">

		<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">
								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>ဌာနချုပ်:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>ဖုန်း:</strong></abbr> (၉၁) ၈၅၄၇ ၆၃၂၅၂၁<br>
									<abbr title="Fax"><strong>ဖက်စ်:</strong></abbr> (၉၁) ၁၁ ၄၇၅၂ ၁၄၃၃<br>
									<abbr title="Email Address"><strong>အီးမေးလ်:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">
								<h4>Catagories</h4>
								<ul>
									@foreach($categorys as $category)
									<li><a href="#">{{ $category->mname }}</a></li>
									<!-- <li><a href="#">Check In</a></li>
									<li><a href="#">Exposure</a></li>
									<li><a href="picturesques">Picturesques</a></li>
									<li><a href="#">Arrival</a></li>
									<li><a href="#">Infocus</a></li>
									<li><a href="#">Deperature</a></li>
									<li><a href="#">Stand out</a></li>
									<li><a href="#">Snap Shop</a></li>
									<li><a href="#">Underground</a></li> -->
									@endforeach
								</ul>
							</div>

						</div>

						<div class="col_one_third col_last">
							
							<div class="widget widget_links clearfix">

								<h4>Contact</h4>
								<ul>
									<li><a href="aboutus.html">My Magical အ​ကြောင်း</a></li>
									
									<li><a href="adswithus.html">ကြော်ငြာရန်</a></li>
									<li><a href="privacy.html">ကိုယ်ရေးအချက်အလက်မူဝါဒ</a></li>
									<li><a href="term.html">စည်းမျဉ်းစည်းကမ်းများနှင့်အခွအေနအေ</a></li>
									<li><a href="contact.html">ဆွက်သွယ်ရန်</a></li>
									<li><a href="storelocator.html">စတိုးဆိုင်လိပ်စာ</a></li>
									
								</ul>
							</div>
						</div>


						
					</div>

					<div class="col_one_third col_last">				
						<div class="widget subscribe-widget clearfix">
							<h5><strong>စာရင်းပေးသွင်း</strong> အရေးကြီးသတင်းရဖို့ကျွန်ုပ်တို့၏သတင်းလွှာ, Amazing ကမ်းလှမ်းချက်များမှ &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="သင့်၏အီးမေးလ်လိပ်စာထည့်ပါ">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">စာရင်းပေးသွင်း</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>
							

						</div>

					</div>
					<div class="clearfix"></div>
					<br></br>
					<div class="row">
						<div class="col">
							<div class="col-lg-2 col-sm-2 col-xs-4">
								<a href ="https://www.pata.org/" target="blank">
									<img src="images/member1.png" class="img-responsive" width="100px" height="50px">
								</a>
							</div>
							<div class="col-lg-2 col-sm-2 col-xs-4">
								
								<a href="http://www.myanmartourismfederation.org/"  target="blank">
									<img src="images/member2.png" class="img-responsive"  width="100px" height="50px">
								</a>
							</div>
							<div class="col-lg-2 col-sm-2 col-xs-4">
								<a href="https://www.umta.org/ " target="blank">
									<img src="images/member3.png" class="img-responsive"  width="100px" height="50px">
								</a>
							</div>
						</div>
					</div>
					
				</div><!-- .footer-widgets-wrap end -->


			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by My Magical Myanmar.<br>
						<div class="copyright-links"><a href="term.html">Terms of Use</a> / <a href="privacy.html">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							

							
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i>info@mymagicalmyanmar.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +95-9-1234-567<span class="middot">&middot;</span> <i class="icon-skype2"></i>OnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>