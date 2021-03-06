<style>
  footer .fab {
    width: 25%;
    max-width: 100px;
    font-size: 24px;
  }
</style>

            <!-- FOOTER -->
            <footer >
                <div class="container">
                    <div class="row text-center">
                      <p style="margin-bottom: 15px;">
                        <a href="https://www.facebook.com/LASNMagazine/" alt="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/LandscapeASN" alt="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEHHfaeHpX6KwAAAW-rqWzIMeU2fFN-hJAayNExST8a4iXqJkwf12n3q83GABWx7zLS_L3YoGT3pirNfFG-uuwGFqUtfDISPd6EUKyyFL-tJN3Yh84CWR3n8mZ6smbX9V2IABk=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Flandscape-architect-and-specifier-news%3Ftrk%3Dbiz-companies-cym" alt="linkedIn" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/landscapeasn/" alt="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                      </p>
                        <p style="margin-bottom: 5px;">
                          <a href="#" id="footerSubscribeBtn">Subscribe</a> | 
                          <a href="<?php echo BASE_URL; ?>contact-us/">Advertising</a> | 
                          <a href="<?php echo BASE_URL; ?>contact-us/">Become A Vendor</a> | <br class="mob-only" style="display:none;" />
                          <a href="<?php echo BASE_URL; ?>contact-us/">Contact Us</a> | 
                          <a href="<?php echo BASE_URL; ?>about-us/">About Us</a>
                      </p>
						          <p style="margin-bottom: 0px;">
                        
                        <a href="<?php echo BASE_URL; ?>report-a-bug/">Website Problems, Report a Bug</a> |
                        Landscape Communications Inc. © 2019
                      </p>
                    </div>
                </div>
            </footer>


            

        </div>

        

        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>

        <!-- jQuery -->
        <script src="/LandscapeProducts/js/jquery.js"></script>

        <!-- ADDTHIS -->
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>

        <script src="/LandscapeProducts/js/popper.min.js"></script>
        <script src="/LandscapeProducts/js/bootstrap.min.js"></script> 
        <script src="/LandscapeProducts/plugin/owl-carousel/owl.carousel.min.js"></script>
        <script src="/LandscapeProducts/js/bs-navbar.js"></script>
        <script src="/LandscapeProducts/js/vendors/isotope/isotope.pkgd.js"></script>
        <script src="/LandscapeProducts/js/vendors/slick/slick.min.js"></script>
        <script src="/LandscapeProducts/js/vendors/tweets/tweecool.min.js"></script>
        <script src="/LandscapeProducts/js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/LandscapeProducts/js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="/LandscapeProducts/js/jquery.sticky.js"></script>
        <script src="/LandscapeProducts/js/jquery.subscribe-better.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="/LandscapeProducts/js/vendors/select/jquery.selectBoxIt.min.js"></script>
				<script src="/LandscapeProducts/js/jquery.validate.min.js"></script>
				<script src="/LandscapeProducts/js/owl.carousel.js"></script>
        <script src="/LandscapeProducts/js/bootstrap-confirmation.min.js"></script>
				<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" type="text/javascript" ></script>
        <script src="/LandscapeProducts/js/main.js"></script>
						
			

      <script>
        <? if (isset($_GET['t'])){ ?>
          <? if($_GET['t'] == "ad"){ ?>
                document.loginform.email.focus();
          <? }else{ ?>
                document.loginform.password.focus();
          <? } ?>
        
            $('.vendorLoginBtn').click(function(event){
              event.preventDefault();
              document.getElementById("incorrectPasswordText").innerHTML = " ";
              var password = $('#password_field').val();
              $.post(
                '/member/login_ven.php',
                {'password': password},
                 function(data){
                    //console.log(data);
                   //extracted_data = JSON.parse(data);  
                   //console.log(data);
                   if(data.login == true){
                      window.location.href = "<?php echo BASE_URL; ?>vendor/index-vendor.php?action=edit&id=" + data.vendorId;
                   } else {
                     setTimeout(function(){
                       document.getElementById("incorrectPasswordText").innerHTML = "Incorrect Password. Please try again."
                    }, 200);
                   }
                 }
              )
            });
        
        <? } ?>
      </script>



<!-- New Tracking -->
<script>

		 $(function() {
        $('.lazy').Lazy();
    });

    
    // ADD This
    function loadAddThis() {
        addthis.init()
    }


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2956957-3', 'auto');
  ga('send', 'pageview');
	

</script>    

<!-- must go below footer to access jquery -->
<?

include $rootInclude . 'la-common-magazine-subscribe.php';

include $rootInclude . 'la-common-log-in-modal.inc';

?>

		