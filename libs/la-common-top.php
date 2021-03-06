<?php session_start() ?>
<?
  
  //root to root folder for includes
  #$rootInclude = str_replace('public_html', 'includes/', $_SERVER['DOCUMENT_ROOT']);
  
  
  //used to pull styles from correct directory for home page until
  //stylesheets can be consolidated
  if($_SERVER["PHP_SELF"] != "/index.php"){
    $extraDir = '/LandscapeProducts/';
    $nonHomePage = 'true';
  } else {
    $extraDir = "";
    $nonHomePage = 'false';
  }


?>


<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>

        <!-- META DATA -->
        <META DATA charset="utf-8">

        <title><?php echo (isset($metaTitle)) ? $metaTitle : 'Landscape Architect'; ?></title>

        <!-- Mobile META DATAs -->
        <META DATA name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>


				<link href="https://fonts.googleapis.com/css?family=DM+Serif+Text:400,400i|Nunito:400,400i,600,600i,800,800i&display=swap" rel="stylesheet">
		
        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- CSS -->
        <link rel="stylesheet" href="/LandscapeProducts/css/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="/LandscapeProducts/css/font-awesome/css/all.css">
        <link rel="stylesheet" href="/LandscapeProducts/css/bootstrap.min.css">
        <link rel="stylesheet" href="/LandscapeProducts/js/vendors/isotope/isotope.css">
        <link rel="stylesheet" href="/LandscapeProducts/js/vendors/slick/slick.css">
        <link rel="stylesheet" href="/LandscapeProducts/js/vendors/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="/LandscapeProducts/js/vendors/select/jquery.selectBoxIt.css">
        <link rel="stylesheet" href="/LandscapeProducts/css/subscribe-better.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">     
        <link rel="stylesheet" href="/LandscapeProducts/plugin/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/LandscapeProducts/plugin/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<? echo $extraDir ?>css/style.css">
        <link rel="stylesheet" href="/LandscapeProducts/css/inner.css"> 
        <link rel="stylesheet" href="/LandscapeProducts/css/owl.carousel.css" />
				<link rel="stylesheet" href="/LandscapeProducts/css/custom-latest-from-mab.css">
				<link rel="stylesheet" href="/LandscapeProducts/css/bootstrap-datepicker.min.css" />
        <link rel="stylesheet" href="<? echo $extraDir ?>css/custom.css">
			
			
<script src="https://www.google.com/recaptcha/api.js?render=<? echo GCAPTCHA_KEY; ?>"></script>
<script>
//grecaptcha.ready(function() {
//    grecaptcha.execute('6LeWWMYUAAAAAJd2h7hNl8BGknakenroC05XhfPC', {action: 'homepage'}).then(function(token) {
//       ...
//    });
//});

grecaptcha.ready(function() {
    grecaptcha.execute('<? echo GCAPTCHA_KEY; ?>', {action: 'homepage'});
});

  // New Tracking
/*  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2956957-3', 'auto');
  ga('send', 'pageview');*/
</script>	 		
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5CB2JSR');</script>
<!-- End Google Tag Manager -->

            
            
            
            <!-- Additional Page CSS -->
            
            


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->

    </head>
    <body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CB2JSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    

