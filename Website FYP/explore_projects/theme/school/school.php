<?php

//VALUES HERE
$target = 8500;
$billcode = 'donation-sinar-ilmu';


error_reporting(E_ERROR | E_PARSE);
$currentDonations = 0;
  
  $some_data = array(
    'billCode' => $billcode
  );  

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/getBillTransactions');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

  $result = curl_exec($curl);
  $info = curl_getinfo($curl);  
  curl_close($curl);



try {
    $obj = json_decode($result);

	$total = 0;

	for($i = 0; $i < sizeof($obj); $i++){
		
		$total += $obj[$i]->billpaymentAmount;
	}

	$currentDonations = $total;
  
} catch(Exception $e) {
  
 
}
	
	

?>

<! 2nd BAR>
<?php

//VALUES HERE
$target2 = 3000;
$billcode2 = 'Sports-for-children-with-disab';


error_reporting(E_ERROR | E_PARSE);
$currentDonations2 = 0;
  
  $some_data = array(
    'billCode' => $billcode2
  );  

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/getBillTransactions');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

  $result = curl_exec($curl);
  $info = curl_getinfo($curl);  
  curl_close($curl);



try {
    $obj = json_decode($result);

	$total = 0;

	for($i = 0; $i < sizeof($obj); $i++){
		
		$total += $obj[$i]->billpaymentAmount;
	}

	$currentDonations2 = $total;
  
} catch(Exception $e) {
  
 
}
	
	

?>

<! 3rd BAR>
<?php

//VALUES HERE
$target3 = 5300;
$billcode3 = 'Support-a-Peace-Farm';


error_reporting(E_ERROR | E_PARSE);
$currentDonations3 = 0;
  
  $some_data = array(
    'billCode' => $billcode3
  );  

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/getBillTransactions');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

  $result = curl_exec($curl);
  $info = curl_getinfo($curl);  
  curl_close($curl);



try {
    $obj = json_decode($result);

	$total = 0;

	for($i = 0; $i < sizeof($obj); $i++){
		
		$total += $obj[$i]->billpaymentAmount;
	}

	$currentDonations3 = $total;
  
} catch(Exception $e) {
  
 
}
	
	

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>LifeLine</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta name ="viewport" content="with=device-width, initial- scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../../../images/tab_logo.PNG">
    <link rel="stylesheet" href="school.css">
    <link href="../../../BS/css/bootstrap.min.css" rel="stylesheet" >
    <script src="../../../BS/js/bootstrap.min.js"></script>

    <! HEADER >
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <html style="font-size: 16px;">
    <meta charset="utf-8">
    <meta name="keywords" content="Post 6 Headline, Post 5 Headline, Post 6 Headline, Post 5 Headline, Post 6 Headline, Post 5 Headline, Post 6 Headline, Post 5 Headline">
    <meta name="description" content="">
    <link rel="stylesheet" href="../../../Header/nicepage.css" media="screen">
    <link rel="stylesheet" href="../../../Header/News.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../../Header/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../../Header/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
   
   
    
    

    <! FOOTER >
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../../footer/fonts/icomoon/style.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../../explore_projects/countries/bosnia/style_news.css">
</head>




<! NAVBAR >
  
    
<script type="application/ld+json">{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "",
  "logo": "images/logo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:type" content="website">
</head>
<body class="u-body"><header class="u-clearfix u-grey-10 u-header u-header" id="sec-3d8d"><div class="u-clearfix u-sheet u-sheet-1">
      <a href="../../../Home/Home.php" class="u-image u-logo u-image-1" data-image-width="1323" data-image-height="445">
        <img src="../../../images/logo.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-hover-palette-3-base u-nav-link u-text-active-palette-1-base u-text-hover-black" href="" style="padding: 10px 20px;">🔍EXPLORE PROJECTS</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="" >Country</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="../../../explore_projects/countries/malaysia/malaysia.php">Malaysia</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="../../../explore_projects/countries/bosnia/bosnia.php " >Bosnia and Herzegovina</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="">Theme</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="../../../explore_projects/theme/animals/animal.php" >Animals</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="../../../explore_projects/theme/refugees/refugees.php " >Refugees</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="../../../explore_projects/theme/school/school.php " >School</a>
</li></ul>
</div>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-hover-palette-3-base u-nav-link u-text-active-palette-1-base u-text-hover-black" href="../../../about/about.php" style="padding: 10px 20px;">About us</a>
</li><li class="u-nav-item"><a class="u-button-style u-hover-palette-3-base u-nav-link u-text-active-palette-1-base u-text-hover-black" href="../../../news/news/News.php" style="padding: 10px 20px;">News</a>
</li><li class="u-nav-item"><a class="u-button-style u-hover-palette-3-base u-nav-link u-text-active-palette-1-base u-text-hover-black" href="../../../database/index.php" style="padding: 10px 20px;">👥Profile</a>
</li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-5"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="🔍EXPLORE-PROJECTS.php" style="padding: 10px 20px;">🔍EXPLORE PROJECTS</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link">Country</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-7"><li class="u-nav-item"><a class="u-button-style u-nav-link">Malaysia</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../../explore_projects/countries/bosnia/bosnia.php" >Bosnia and Herzegovina</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Theme</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-8"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../../explore_projects/theme/animals/animal.php" >Animals</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../../explore_projects/theme/refugees/refugees.php ">Refugees</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../../explore_projects/theme/school/school.php ">School</a>
</li></ul>
</div>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 20px;">About us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">News</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">👥Profile</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div></header>







  

        <div class="text_news_title"> School <br>____________</div>
  

<! 1st post >
        <div class="blog-post">
            <div class="blog-post_img">
                <img src="../../../explore_projects/Images_projects/school2.jpg">
        </div>

        <div class="blog-post_info">
        <div class="blog-post_date">
        <span>  </span>
        <span>  </span>
        </div>

        <h1 class="blog-post_title"> Live and Learn in Kenya Int'l Sponsorship Program </h1>
        <p class="blog-post_text">
          Live and Learn in Kenya Int'l provides educational possibilities to profoundly poor children who are mainly living in the slums of Nakuru, Kenya. Besides school fees, the program also provides all school materials, madatiory uniforms, free meals, medical and dental care, mentor support and housing costs for (AIDS) orphans and university students. The differences made to the girls is especially astonishing.        </p>
        
<! PROGRESS BAR >
<div class="chart" >
    <div class="bar" ></div>
    <!-- Change the value below -->
    <span id="value1"><?php echo $currentDonations; ?>/<?php echo  $target; ?></span>
</div>
  
        <a href="https://toyyibpay.com/Education-in-Kenya" class="blog-post_cta"> DONATE </a>
    </div>
</div>
<style>
@keyframes load {
	0% {
		width: 0;
	}
	100% {
		/* You need to change the percentage below to match the value in the corresponding <span> */
		width: <?php echo (100/$target)*$currentDonations; ?>%;
	}
}
</Style>



<! 2st post >
        <div class="blog-post2">
            <div class="blog-post_img2">
                <img src="../../../explore_projects/Images_projects/school3.jpg">
        </div>

        <div class="blog-post_info2">
        <div class="blog-post_date2">
        <span>  </span>
        <span>  </span>
        </div>

        <h1 class="blog-post_title2"> Give school to girls in Mexico </h1>
        <p class="blog-post_text2">
          Abandoned and abused girls have the right to a family and should be protected. Every child deserves a loving family and education. Puerta Abierta is giving the tools to the girls so they can achieve their life project to become responsible, self-sufficient and independent adults. They will build healthy families and will not permit the abuse they suffered as they have learned to respect and love and won't repeat the pattern that hurt them.  
      
<! PROGRESS BAR >
<div class="chart2" >
    <div class="bar2" ></div>
    <!-- Change the value below -->
    <span id="value1"><?php echo $currentDonations2; ?>/<?php echo  $target2; ?></span>
</div>
  
        <a href="https://toyyibpay.com/Education-in-Mexico" class="blog-post_cta2"> DONATE </a>
    </div>
</div>
<style>
@keyframes load2 {
	0% {
		width: 0;
	}
	100% {
		/* You need to change the percentage below to match the value in the corresponding <span> */
		width: <?php echo (100/$target2)*$currentDonations2; ?>%;
	}
}
</Style>


<! 3st post >
        <div class="blog-post3">
            <div class="blog-post_img3">
                <img src="../../../explore_projects/Images_projects/school4.jpg">
        </div>

        <div class="blog-post_info3">
        <div class="blog-post_date3">
        <span>  </span>
        <span>  </span>
        </div>

        <h1 class="blog-post_title3"> Free for Underprivileged Children </h1>
        <p class="blog-post_text3">
          The JAAGO Foundation aims to use education as a weapon to break through the cycle of poverty, creating opportunities for income, growth and sustainable development. At present JAAGO is educating 13,000 students in 11 districts across Bangladesh. The Free Of Cost School Program reaches 3,500 underprivileged children across 12 schools in Bangladesh.        
      
<! PROGRESS BAR >
<div class="chart3" >
    <div class="bar3" ></div>
    <!-- Change the value below-->
    <span id="value1"><?php echo $currentDonations3; ?>/<?php echo  $target3; ?></span>
</div>
  
        <a href="https://toyyibpay.com/Education-in-Bangladesh" class="blog-post_cta2"> DONATE </a>
    </div>
</div>
<style>
@keyframes load3 {
	0% {
		width: 0;
	}
	100% {
		/* You need to change the percentage below to match the value in the corresponding <span> */
		width: <?php echo (100/$target3)*$currentDonations3; ?>%;
	}
}
</Style>



    
<!--FOOTER-->

<footer class="footer-20192">
  <div class="site-section">
      <div class="container">

      <div class="cta d-block d-md-flex align-items-center px-5">
          <div>
          <h2 class="mb-0">Ready for a next project?</h2>
          <h3 class="text-dark">Let's get started!</h3>
      </div>
      <div class="ml-auto">
          <a href="#" class="btn btn-dark rounded-0 py-3 px-5">Explore</a>
      </div>
      </div>
      <div class="row">

      <div class="col-sm">
          <p class="footer-logo">LifeLine</p>
          <p class="copyright">
      <small>&copy; 2021</small>
          </p>
          </div>
          <div class="col-sm">
          <h3>Partners</h3>
          <ul class="list-unstyled links">
          <li><a href="https://www.unhcr.org/">UNHCR</a></li>
          <li><a href="https://www.unicef.org/">UNICEF</a></li>
          </ul>
      </div>
      <div class="col-sm">
          <h3>Company</h3>
          <ul class="list-unstyled links">
          <li><a href="../about/about.php">About us</a></li>
          <li><a href="#"></a></li>
          </ul>
      </div>
      <div class="col-sm">
          <h3>Further Information</h3>
          <ul class="list-unstyled links">
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          </ul>
      </div>
      <div class="col-md-3">
          <h3>Follow us</h3>
          <ul class="list-unstyled social">
          <li><a href="https://www.facebook.com/profile.php?id=100077456797704"><span class="icon-facebook"></span></a></li>
          <li><a href="https://twitter.com/FypLine"><span class="icon-twitter"></span></a></li>
          <li><a href="https://www.instagram.com/lifelinefyp2022/"><span class="icon-instagram"></span></a></li>
          <li><a href="https://www.youtube.com/channel/UC-hIVCh43FxvvPN-y8mW6MA"><span class="icon-youtube"></span></a></li>
          
          </ul>
      </div>
      
      </div>
  </div>
  </div> 
</footer>
</footer>


<script src="../../../footer/js/jquery-3.3.1.min.js"></script>
<script src="../../../footer/js/popper.min.js"></script>
<script src="../../../footer/js/bootstrap.min.js"></script>

<style>
 .bar {
	/* You can modify the total time used for the animation here */
	animation: load 3s normal forwards;
	/* 
	Add a little spice by having a shadow below the bar.
	Feel free to comment out this line below to have an even LITE version :D 
	*/
	box-shadow: 0 10px 40px -10px rgb(0, 0, 0);

	border-radius: 100px;
	background: #36454f;
	height: 30px;
	width: 0;
}
 .bar2 {
	/* You can modify the total time used for the animation here */
	animation: load2 3s normal forwards;
	/* 
	Add a little spice by having a shadow below the bar.
	Feel free to comment out this line below to have an even LITE version :D 
	*/
	box-shadow: 0 10px 40px -10px rgb(0, 0, 0);

	border-radius: 100px;
	background: #36454f;
	height: 30px;
	width: 0;
}
.bar3 {
	/* You can modify the total time used for the animation here */
	animation: load3 3s normal forwards;
	/* 
	Add a little spice by having a shadow below the bar.
	Feel free to comment out this line below to have an even LITE version :D 
	*/
	box-shadow: 0 10px 40px -10px rgb(0, 0, 0);

	border-radius: 100px;
	background: #36454f;
	height: 30px;
	width: 0;
}

 </style>
</body>

</html>

<!--
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script src="../explore_projects/theme.js"></script>

-->