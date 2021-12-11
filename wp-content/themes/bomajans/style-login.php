<?php $site_logosu = get_field('site_logosu', 'option'); 
	  $site_girisi = get_field('login_arka_plan', 'option');
?>
<style type="text/css">
.login h1 a {
background-image: url(<?php echo $site_logosu['url']; ?>) !important;
width:100% !important;
background-size: contain !important;
background-position: center center;
background-color:transparent;
}
		
.login {
background-color: transparent;
background-image: url(<?php echo $site_girisi['url']; ?>) !important;
background-position: center center;
background-size:cover;
}

#loginform, #registerform, #lostpasswordform, #resetpassform {
				
background: rgba(0, 0, 0, 0) -moz-linear-gradient(center top , rgba(0,0,0, 0.7) 0%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
background: -webkit-linear-gradient(top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%);
}
				
#nav {
background: rgba(0, 0, 0, 0) -moz-linear-gradient(center top , rgba(0,0,0, 0.7) 0%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
background: -webkit-linear-gradient(top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%);
					}

#backtoblog {
background: rgba(0, 0, 0, 0) -moz-linear-gradient(center top , rgba(0,0,0, 0.7) 0%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
background: -webkit-linear-gradient(top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%);
					}
			
.login #backtoblog a, .login #nav a, .login a {
    color: rgba(255, 255, 255, 1) !important;
	line-height:40px;
}
.login #backtoblog a:hover, .login #nav a:hover, .login a:hover {
    color: rgba(255, 255, 255, 1) !important;
}
.login #backtoblog a:active, .login #nav a:active, .login a:active {
    color: rgba(255, 255, 255, 1) !important;
}
.login, .login form label, .login form, .login #login_error, .login .message {
    color: rgba(255, 255, 255, 1) !important;
}
.login.wp-core-ui .button-primary {
    background-color: rgba(244, 82, 70, 1);
	border:none;
	  background: rgba(244, 82, 70, 1);
	  text-shadow:none;
	  box-shadow:none;
}
.login.wp-core-ui .button-primary:hover, .login.wp-core-ui .button-primary:focus {
    background-color: rgba(24, 179, 220, 1);
	border:none;
}
.login.wp-core-ui .button-primary {
    color: rgba(255, 255, 255, 1);
	border:none;
}
.login form .input, .login form input[type="checkbox"], .login input[type="text"] {
	background-color: transparent !important;
}
.login form .input:hover, .login form input[type="checkbox"]:hover, .login input[type="text"]:hover, .login form .input:focus, .login form input[type="checkbox"]:focus, .login input[type="text"]:focus {
	background-color: transparent !important;
}
.login form .input, .login form input[type="checkbox"], .login input[type="text"] {
    color: rgba(245, 245, 245, 1);
	background-color: transparent !important;
}
.login.wp-core-ui input[type="checkbox"]:checked::before {
    color: rgba(245, 245, 245, 1);
}
.login form .input, .login input[type="text"] {
    border-bottom-color: rgba(139, 140, 145, 1);
	border-top: none;
	border-left: none;
	border-right:none;
}

#pass1-text {background-color:transparent; }

.login form input[type="checkbox"] {
    border-color: rgba(139, 140, 145, 1);
}
.login label[for="user_login"]::before, .login label[for="user_pass"]::before, .login label[for="user_email"]::before {
    color: rgba(139, 140, 145, 1);
}
input[type="checkbox"], input[type="color"], input[type="date"], input[type="datetime-local"], input[type="datetime"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="radio"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"], select, textarea {
    background-color: transparent;
}
input[type="checkbox"], input[type="color"], input[type="date"], input[type="datetime-local"], input[type="datetime"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="radio"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"], select, textarea {
    color: rgba(245, 245, 245, 1);
}
.login #login_error, .login .message {
       background: rgba(0, 0, 0, 0) -moz-linear-gradient(center top , rgba(0,0,0, 0.7) 0%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
	background: -webkit-linear-gradient(top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%);

}

.acf-field .acf-label label {
    font-size: inherit !important;
}		
	
</style>