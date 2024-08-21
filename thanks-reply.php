<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="dwjs8/jtw67/jquery-3.7.1.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="dwjs8/jtw67/animatecss.js"></script>
        <script src="dwjs8/jtw67/bootstrap.bundle.min.js"></script>
        <title>Dice Dreams | Your request has been accepted!</title>
        <meta property="og:image" content="{page-images-1}"/>
        <meta property="og:title" content="Dice Dreams | Your request has been accepted!" />
        
        <meta name="description" content="Dice Dreams | Your request has been accepted!">
        <meta property="og:description" content="Dice Dreams | Your request has been accepted!">
        <meta name="author" content=""/>
        <link rel="stylesheet" href="dwjs8/cs8t/animate.css">
        <link rel="stylesheet" href="dwjs8/cs8t/bootstrap-icons.css">
        <link rel="stylesheet" href="dwjs8/cs8t/sprite16dfras.svg">
        <link rel="stylesheet" href="dwjs8/cs8t/bootstrap.min.css">
        <link rel="stylesheet" href="dwjs8/cs8t/button.css">
        <meta name="twitter:image:src" content="{page-images-1}"/>
        
        

        <link rel="shortcut icon" href="artisticstorage/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">

            <style>
            
            </style>
        
        </head>

        <body>
            <style>

	.cookie-consent-container, .cookie-settings-modal {
	  display: none;
	  position: fixed;
	  bottom: 0;
	  left: 0;
	  width: 100%;
	  background-color: #180707;
	  box-shadow: 0 -2px 5px rgba(0,0,0,.2);
	  z-index: 1000;
	  padding: 20px;
	  box-sizing: border-box;
	  color: #fff;
	}

	.cookie-settings-modal {
	  left: 50%;
	  transform: translate(-50%, -30%);
	  width: 90%;
	  max-width: 600px;
	  height: auto;
	  background-color: #180707;
	  color: #fff;
	  z-index: 2000;
	}

	.cookie-text {
	  margin-bottom: 20px;
	}

	.cookie-buttons{
	  display: flex;
	  gap: 10px;
	  flex-wrap: wrap;
	  align-items: center;
	}

	.cookie-buttons button, #saveCookieSettings {
	  background-color: #2f5d62;
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	  border-radius: 0px;
	  transition: background-color 0.3s ease-out, box-shadow 0.3s ease-out;
	   width: auto;
	}

	.cookie-buttons button:hover {
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	  opacity: 0.8;
	}

	.cookie-buttons button, .cookie-settings-content button {
	  margin-right: 10px;
	  padding: 10px 20px;
	  cursor: pointer;
	}

	.cookie-buttons a {
	  text-decoration: none;
	  color: #007bff;
	  cursor: pointer;
	  text-decoration: underline;
	}

	.cookie-buttons a:hover, .cookie-text a:hover{
	  text-decoration: none;
	}

	.cookie-buttons a:active,
	.cookie-buttons a:focus,
	.cookie-buttons a:visited,
	.cookie-buttons a:target{
	  color: #007bff;
	}

	.cookie-text a:active,
	.cookie-text a:focus,
	.cookie-text a:visited,
	.cookie-text a:target{
	  color: #007bff;
	}



	.cookie-settings-content {
	  padding: 20px;
	}

	.cookie-settings-content div {
	  margin-bottom: 10px;
	}
	.cookie-description {
	  margin-left: 20px;
	  font-size: 14px;
	  color: #9f9c9c;
	}
	@media(max-width: 400px){
		.cookie-text{
			font-size: 14px;
		}
		.cookie-buttons button, .cookie-settings-content button{
			font-size: 14px;
		}
		#cookieSettings{
			font-size: 14px;
		}
	}
</style>

<div id="cookieConsentContainer" class="cookie-consent-container">
	<div class="cookie-text">By clicking on the "Accept all cookies" button, you agree to the storage of cookies on your device to improve site navigation, analyze site usage, and assist in our marketing efforts. You can consult our <a href="cookie-consent.html" target="_blank">Cookie Policy</a> for more information.</div>
	<div class="cookie-buttons">
		<button id="acceptCookies">Accept All</button>
		<button id="declineCookies">Reject All</button>
		<a href="#" id="cookieSettings">Cookie settings</a>
	</div>
</div>

<div id="cookieSettingsModal" class="cookie-settings-modal">
	<div class="cookie-settings-content">
		<h2>Cookie settings</h2>
		<p>Adjust your cookie preferences</p>
		<div class="cookie-option">
			<input type="checkbox" id="analyticsCookies" checked />
			<label for="analyticsCookies">Analytics cookies</label>
			<p class="cookie-description">These cookies are used to collect information about how visitors use our website. We use this information to compile reports and help improve the site. Cookies collect information in an anonymous form.</p>
		</div>
		<div class="cookie-option">
			<input type="checkbox" id="marketingCookies" checked />
			<label for="marketingCookies">Marketing Cookies</label>
			<p class="cookie-description">These cookies are used to make advertising messages more relevant to you. They perform functions such as preventing the same ads from appearing repeatedly, ensuring that ads are displayed correctly for advertisers, and, in some cases, selecting ads based on your interests.</p>
		</div>
		<button id="saveCookieSettings">Save Settings</button>
	</div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function() {
  const cookieConsentContainer = document.getElementById('cookieConsentContainer');
  const cookieSettingsModal = document.getElementById('cookieSettingsModal');
  const acceptCookies = document.getElementById('acceptCookies');
  const declineCookies = document.getElementById('declineCookies');
  const cookieSettings = document.getElementById('cookieSettings');
  const saveCookieSettings = document.getElementById('saveCookieSettings');
  const analyticsCookies = document.getElementById('analyticsCookies');
  const marketingCookies = document.getElementById('marketingCookies');

  const cookieName = 'SitePreference-2982';

  function loadCookieSettings() {
    const settings = localStorage.getItem(cookieName + '_settings');
    if (settings) {
      const cookieSettings = JSON.parse(settings);
      analyticsCookies.checked = cookieSettings.analytics;
      marketingCookies.checked = cookieSettings.marketing;
    }
  }

  function checkCookieConsent() {
    if (localStorage.getItem(cookieName + '_consent')) {
      cookieConsentContainer.style.display = 'none';
    } else {
      cookieConsentContainer.style.display = 'block';
    }
  }

  function saveCookieSettingsOnly() {
    const settings = {
      analytics: analyticsCookies.checked,
      marketing: marketingCookies.checked,
    };
    localStorage.setItem(cookieName + '_settings', JSON.stringify(settings));
    cookieSettingsModal.style.display = 'none';
  }

  function setCookieConsent(consent) {
    localStorage.setItem(cookieName + '_consent', consent);
    cookieConsentContainer.style.display = 'none';
  }

  acceptCookies.addEventListener('click', function() {
    setCookieConsent('accepted');
  });

  declineCookies.addEventListener('click', function() {
    setCookieConsent('declined');
  });

  saveCookieSettings.addEventListener('click', saveCookieSettingsOnly);

  cookieSettings.addEventListener('click', function(e) {
    e.preventDefault();
    cookieSettingsModal.style.display = 'block';
  });

  loadCookieSettings();
  
  checkCookieConsent();
});



</script>



            <header class="header16dfras shadow-sm wrapper__3aWBi__section">
                <div class="container">
                    <nav class="header_ldhuu7  flex-row-reverse">
                        <a class="d-flex logo16dfras header__logo16dfras flex-row-reverse"
                            href="./">
                            <span class="logo-pic16dfras align-text-center">
                                <img  src="artisticstorage/logo.png" alt="" />
                            </span>
                            <span class="logo-text16dfras">Dice Dreams</span>
                        </a>
            
                        <button class="menu-btn16dfras" aria-expanded="false" aria-controls="menu-container" type="button"
                            data-menu-button>
                            <svg class="menu-svg16dfras" aria-label="" width="45" height="45">
                                <use class="menu-btn__icon-open" href="dwjs8/cs8t/sprite16dfras.svg#open-menu-icon">
                                </use>
                            </svg>
                        </button>
            
                        <div class="animate__animated animate__fadeIn menu-container16dfras justify-content-lg-between"
                            id="menu-container" data-menu>
                            <button class="menu__close-btn16dfras" type="button" data-menu-close>
                                <svg aria-label="" width="45" height="45">
                                    <use class="menu__icon-close16dfras" href="dwjs8/cs8t/sprite16dfras.svg#modal-close">
                                    </use>
                                </svg>
                            </button>
            
                            <ul class="menu__listhsu">
                                <li class="menu-shd6">
                                    <a class="menu__link16dfras active16dfras" href="./#home3073">Home</a>
                                </li>

                                <li class="menu-shd6">
                                    <a class="menu__link16dfras" href="about-us.html">Our Journey</a>
                                </li>
            
                                <li class="menu-shd6">
                                    <a class="menu__link16dfras" href="all-games.html">Explore games</a>
                                </li>
            
                                <li class="menu-shd6">
                                    <a class="menu__link16dfras" href="contact-page.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>

            <section class="hero16dfras hero16dfras-2 scroll-35205 ">
                <div class="container">
                    <div class="hero-wrapper16dfras">

                        <div class="hero-box16dfras-1 text-center">
                            <h1 class="hero__title16dfras">Dice Dreams</h1> 
                            <span>35205</span> 
                            <h2>Total Players</h2>
                        
                        </div>

                        <div class="hero-box16dfras-2">
                           <h1 class="hero__title16dfras text-center text-lg-center">Welcome to Dice Dreams! Here you will find exciting games and you can try your luck. Join us and enjoy the bright moments!</h1> 

                        
                        </div>  
                    </div>
                </div>
            </section>
        


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-footer__ITJV0__style{
		margin: 0px;
		padding: 0px;
		font-family: 'Noto Sans Mono', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 344px 0px;
	}
	.bodyClass1-footer__ITJV0__style{
		background: #f6f5f5;
		color: #ffffff;
	}
	.bodyClass2-footer__ITJV0__style{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-footer__ITJV0__style{
		background: #fff;
		color: #111;
	}
	.wrapage-block-footer__ITJV0__style{
		background-size: 100%;
		width: 100%;
	}
	.box_main-footer__ITJV0__style{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-footer__ITJV0__style h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-footer__ITJV0__style p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-footer__ITJV0__style{
		text-align: start;
	}
	.mainBlock-footer__ITJV0__style ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-footer__ITJV0__style ul>li span{
		font-weight: bold;
	}
	.mainBlock-footer__ITJV0__style{
		max-width: 999px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 15px;
	}
	.mainBlock-footer__ITJV0__style .cBlock-footer__ITJV0__style{
		text-align: start;
	}

	.bodyClass3-footer__ITJV0__style .mainBlock-footer__ITJV0__style{
		background: none;
		border-top: 2px dotted #feffde;
		border-bottom: 2px dotted #feffde;
	}
	.bodyClass2-footer__ITJV0__style .mainBlock-footer__ITJV0__style{
		background: #2D132C;
		color: #fff !important;
		box-shadow: 0px 0px 15px #2D132C;
	}
	.bodyClass2-footer__ITJV0__style .mainBlock-footer__ITJV0__style p{
		color: #fff !important;
	}
	.bodyClass1-footer__ITJV0__style .mainBlock-footer__ITJV0__style{
		background: #00ACB0;
		color: #ffffff;
		border-left: 0px solid #46B5D1;
	}
	.bodyClass1-footer__ITJV0__style .mainBlock-footer__ITJV0__style p{
		color: #ffffff !important;
	}
	.order-footer__ITJV0__style{
		font-size: 22px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-footer__ITJV0__style p{
			padding: 0px 15px;
		  }
		  .box_main-footer__ITJV0__style h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-footer__ITJV0__style{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-footer__ITJV0__style{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-footer__ITJV0__style" id="mainWrapp-footer__ITJV0__style">


	<div class="wrapage-block-footer__ITJV0__style">
		<div class="box_main-footer__ITJV0__style">
			<div class="mainBlock-footer__ITJV0__style">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-footer__ITJV0__style">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>



            
            <section class="disclaimer16dfras section16dfras">
                <div class="container">
                    <h2 class="mb-3 text-center">Disclaimer</h2>
                    <div class="disclaimer-text16dfras">Our site offers safe social games where bets are made only with game credits. There is no real money to win here, and this is a platform for pure enjoyment. Access to the site is allowed only to adult users over 18 years old. Success on our site does not mean success in real money gambling.</div>
                    <div class="disclaimer-btn16dfras  text-center">
                        <a href="member-conduct-code.html" class="submit-btn-3 common-btn16dfras">Read More</a>
                    </div>
                </div>
            </section>
            

        
            <section class="footer16dfras" style="overflow: hidden;">
                <div class="container">
                    <div class="footer-box1-16dfras">
                        <a class="footer-logo-titel16dfras fst-normal" href="./">Dice Dreams
                        </a>

                        <div class="d-flex flex-column gap-3">
                            <div class="footer-box2-16dfras">
                                 <div class="footer-pic16dfras">
                                    <img src="artisticstorage/img-18.svg" alt="">
                                </div>  
                                <div class="footer-pic16dfras">
                                    <img src="artisticstorage/assets/chips-066c377cc9f180.png" alt="">
                                </div>
                            </div>

                            <div class="d-flex flex-column gap-3">
                                <div class="policy-16dfras">
                                    <div class="policy-item16dfras">
                                        <a href="gamingIntegrity.html">Responsible Social Gaming</a>
                                    </div>

                                    <div class="policy-item16dfras">
                                        <a href="member-conduct-code.html">Community rules</a>
                                    </div>
                                    <div class="policy-item16dfras">
                                        <a href="liability-disclaimer.html">Disclaimer</a>
                                    </div>
                                    <div class="policy-item16dfras">
                                        <a href="usageTerms.html">Terms & Conditions</a>
                                    </div>
                                    <div class="policy-item16dfras">
                                        <a href="user-privacy.html">Privacy policy</a>
                                    </div>
                                </div>

                                <div class="footer-random-box-4">
                                     <div class="footer-disclaimer-text16dfras">Our site offers safe social games where bets are made only with game credits. There is no real money to win here, and this is a platform for pure enjoyment. Access to the site is allowed only to adult users over 18 years old. Success on our site does not mean success in real money gambling.</div> 

                                    <ul class="footer-menu__listhsu list-unstyled">
                                        <li class="footer-menu-shd6">
                                            <a class="footer-menu__link16dfras active16dfras" href="./">Home</a>
                                        </li>
                                    
                                        <li class="footer-menu-shd6">
                                            <a class="footer-menu__link16dfras" href="about-us.html">Our Journey</a>
                                        </li>
                                    
                                        <li class="footer-menu-shd6">
                                            <a class="footer-menu__link16dfras" href="all-games.html">Explore games</a>
                                        </li>
                                    
                                        <li class="footer-menu-shd6">
                                            <a class="footer-menu__link16dfras" href="contact-page.html">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            

                            <div class="footer-box3-16dfras">
                                <a href="./" class="footer-pic16dfras">
                                <img src="artisticstorage/logo.png" alt="" /> 
                                </a>
                            </div>
                        </div>

                        <div class="footer-copyright16dfras">Copyright© <span id="copyright-3">2024</span> Dice Dreams</div>
                    </div>

                </div>
            </section>

            <script>
                const menuBtnRef = document.querySelector('[data-menu-button]');
                const menuIconRef = document.querySelector('.menu-svg16dfras');
                const menuCloseRef = document.querySelector('[data-menu-close]');
                const mobileMenuRef = document.querySelector('[data-menu]');
                const headerRef = document.querySelector('.header16dfras');
                const menuLinksRef = document.querySelectorAll('.menu__link16dfras');


                function toggleFunction() {
                    let expanded = menuBtnRef.getAttribute('aria-expanded') === 'true' || false;
                    menuBtnRef.classList.toggle('is-open');
                    menuBtnRef.setAttribute('aria-expanded', !expanded);
                    mobileMenuRef.classList.toggle('is-open');
                }

                menuBtnRef.addEventListener('click', () => {
                    toggleFunction();
                })

                menuCloseRef.addEventListener('click', () => {
                    toggleFunction()
                })

                menuLinksRef.forEach((item) => {
                    item.addEventListener('click', () => {
                        if (mobileMenuRef.classList.contains("is-open")) {
                            toggleFunction()
                        }
                    }
                    )
                })
            </script>

        

</body>
</html>
