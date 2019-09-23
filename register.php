<?php include('function.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pharis' website login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="btn-group">
                                <a class="btn btn-theme btn-sm btn-min-block" href="https://www.whitebox.go.ke/register">Get Started</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="#ipmodal" data-toggle="modal">Protect your IP</a>


                            </div>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<h1>Register to Pharis' website</h1>
<a class="btn btn-lg btn-linkedin display-block" data-disable-with="<i class=&quot;fa fa-spinner fa-spin&quot; />" 
    rel="nofollow" data-method="post" href="https://web.whatsapp.com/"><i class="fa fa-WhatsApp-square fa-inverse"></i> Sign up with WhatsApp</a>

<a class="btn btn-lg btn-linkedin display-block" data-disable-with="<i class=&quot;fa fa-spinner fa-spin&quot; />" 
    rel="nofollow" data-method="post" href="https://www.linkedin.com/uas/login?session_redirect=%2Foauth%2Fv2%2Flogin-success%3Fapp_id%3D6602464%26auth_type%3DAC%26flow%3D%257B%2522authorizationType%2522%253A%2522OAUTH2_AUTHORIZATION_CODE%2522%252C%2522redirectUri%2522%253A%2522https%253A%252F%252Fwww.talent.io%252Fusers%252Fauth%252Flinkedin%252Fcallback%2522%252C%2522externalBindingKey%2522%253Anull%252C%2522loginHint%2522%253Anull%252C%2522codeChallenge%2522%253Anull%252C%2522codeChallengeMethod%2522%253Anull%252C%2522currentStage%2522%253A%2522LOGIN_SUCCESS%2522%252C%2522currentSubStage%2522%253A0%252C%2522flowHint%2522%253Anull%252C%2522authFlowName%2522%253A%2522generic-permission-list%2522%252C%2522appId%2522%253A6602464%252C%2522creationTime%2522%253A1563373138276%252C%2522state%2522%253A%2522cd9cd8f385a07404835a183335621b0391e202c18c019f54%2522%252C%2522scope%2522%253A%2522r_basicprofile%2Br_emailaddress%2522%257D&fromSignIn=1&trk=oauth&cancel_redirect=%2Foauth%2Fv2%2Flogin-cancel%3Fapp_id%3D6602464%26auth_type%3DAC%26flow%3D%257B%2522authorizationType%2522%253A%2522OAUTH2_AUTHORIZATION_CODE%2522%252C%2522redirectUri%2522%253A%2522https%253A%252F%252Fwww.talent.io%252Fusers%252Fauth%252Flinkedin%252Fcallback%2522%252C%2522externalBindingKey%2522%253Anull%252C%2522loginHint%2522%253Anull%252C%2522codeChallenge%2522%253Anull%252C%2522codeChallengeMethod%2522%253Anull%252C%2522currentStage%2522%253A%2522LOGIN_SUCCESS%2522%252C%2522currentSubStage%2522%253A0%252C%2522flowHint%2522%253Anull%252C%2522authFlowName%2522%253A%2522generic-permission-list%2522%252C%2522appId%2522%253A6602464%252C%2522creationTime%2522%253A1563373138276%252C%2522state%2522%253A%2522cd9cd8f385a07404835a183335621b0391e202c18c019f54%2522%252C%2522scope%2522%253A%2522r_basicprofile%2Br_emailaddress%2522%257D"><i class="fa fa-linkedin-square fa-inverse"></i> Sign up with LinkedIn</a>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="" required>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="" required>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" required>
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" required>
	</div>
	<div class="response-group">
                  <div class="form-checkbox js-answer ">
                    <label for="answers_108_choice_514">
                      <input type="radio" name="answers[108][choice]" id="answers_108_choice_514" value="514" class="">
                      None—I don't program at all
</label>                    
                  </div>
                  <div class="form-checkbox js-answer ">
                    <label for="answers_108_choice_515">
                      <input type="radio" name="answers[108][choice]" id="answers_108_choice_515" value="515" class="">
                      New to programming
</label>                    
                  </div>
                  <div class="form-checkbox js-answer ">
                    <label for="answers_108_choice_516">
                      <input type="radio" name="answers[108][choice]" id="answers_108_choice_516" value="516" class="">
                      Somewhat experienced
</label>                    
                  </div>
                  <div class="form-checkbox js-answer ">
                    <label for="answers_108_choice_517">
                      <input type="radio" name="answers[108][choice]" id="answers_108_choice_517" value="517" class="">
                      Very experienced
</label>                    
                  </div>
              </div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
    
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
    <div class="search-box">
    <div class="search-input-container">
    <div class="search-input">
    <input type="search" autocomplete="off" placeholder=""></div>
    <div class="search-suggestions"><div class="menu"></div>
    </div>
    </div>
    <div class="search-button" title="">
    <span class="search-button-label">Search</span>
    </div>
    <div class="product-logo right"><img class="product-logo-image" src="//ak.staticimgfarm.com/images/webtooltab/search/google_enhancedby_v2.png" role="presentation"></div></div>
</form>
</body>
<style>
	body{
        background-image: url(./images/pharis.jpg);
		font-size: 120%;
    </style>
		
</html>