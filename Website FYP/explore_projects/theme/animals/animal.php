<?php

//VALUES HERE
$target = 3500;
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
$target2 = 1500;
$billcode2 = 'donation-sinar-ilmu';


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
$target3 = 6500;
$billcode3 = 'Protect-Coral-Reefs';


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
    <link rel="stylesheet" href="animal.css">
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







  

        <div class="text_news_title"> Animals <br>____________</div>
  

<! 1st post >
        <div class="blog-post">
            <div class="blog-post_img">
                <img src="../../Images_projects/animal2.jpg">
        </div>

        <div class="blog-post_info">
        <div class="blog-post_date">
        <span>  </span>
        <span>  </span>
        </div>

        <h1 class="blog-post_title"> Protect the Malayan Tiger </h1>
        <p class="blog-post_text">
          The Malayan tiger is the least known and most critically endangered of all tiger subspecies, and they are nearing extinction. Only 200 wild tigers remain and they are exceedingly threatened by poaching and habitat loss. This project will create sustainable livelihoods as well as empower indigenous peoples to become forest custodians through surveillance patrols, and by restoring vital ecosystems in the only enduring wildlife corridor connecting 2.5 million hectares of rainforests.        </p>
        
<! PROGRESS BAR >
<div class="chart" >
    <div class="bar" ></div>
    <!-- Change the value below -->
    <span id="value1"><?php echo $currentDonations; ?>/<?php echo  $target; ?></span>
</div>
  
        <a href="https://toyyibpay.com/Tiger" class="blog-post_cta"> DONATE </a>
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
                <img src="../../Images_projects/animal3.jpg">
        </div>

        <div class="blog-post_info2">
        <div class="blog-post_date2">
        <span>  </span>
        <span>  </span>
        </div>

        <h1 class="blog-post_title2"> Safeguarding Rhino Populations </h1>
        <p class="blog-post_text2">
          As the largest black rhino sanctuary in East and Central Africa and home to the world's last two northern white rhinos, Ol Pejeta is one of the most important wildlife conservancies in the world.   The constant threat from poachers combined with the devastating financial impact of COVID-19 means that we urgently need your support to keep our rangers on the ground and our rhino population safe.        
      
<! PROGRESS BAR >
<div class="chart2" >
    <div class="bar2" ></div>
    <!-- Change the value below -->
    <span id="value2"><?php echo $currentDonations2; ?>/<?php echo  $target2; ?></span>
</div>
  
        <a href="https://toyyibpay.com/Safeguard-of-African-Rhinos" class="blog-post_cta2"> DONATE </a>
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
                <img src="../../Images_projects/coralreef.webp">
        </div>

        <div class="blog-post_info3">
        <div class="blog-post_date3">
        <span>  </span>
        <span>  </span>
        </div>

        <h1 class="blog-post_title3"> Protect the coral reef </h1>
        <p class="blog-post_text3">
          Reef Check Malaysia works to conserve Malaysia's ocean and marine ecosystems. Malaysia is part of the Coral Triangle, home to more than 75% of the world's coral species. Our Projects are based in 3 locations in Malaysia and our teams are based on these islands, where they work with the local communities to empower them to look after the marine resources.        
      
<! PROGRESS BAR >
<div class="chart3" >
    <div class="bar3" ></div>
    <!-- Change the value below-->
    <span id="value3"><?php echo $currentDonations3; ?>/<?php echo  $target3; ?></span>
</div>
  
        <a href="https://toyyibpay.com/Protect-Coral-Reefs" class="blog-post_cta2"> DONATE </a>
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