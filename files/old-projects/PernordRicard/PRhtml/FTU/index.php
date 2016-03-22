<?php
include('libs/functions.php');
if (loggedin()) {
	header('Location:/Inicio');
	exit();
}
$showError=false;
if (!empty($_POST)) {
	function allowed($y,$m,$d,$min) {
		$age = date("Y")-$y-((date("md")<$m.$d)?1:0);
		return($age>=$min)?true:false;
	}
	if ($_POST['countryV'] == '-1') {
		$showError=true;
	} else {
		if (allowed($_POST['yearV'],$_POST['monthV'],$_POST['dayV'],$_POST['countryV'])) {
			if (isset($_POST['rememberVerify']) && $_POST['rememberVerify'] == "y") {
				$_SESSION["edad"] = 1;
				$_SESSION['timeout'] = time()+7600;
				setcookie('edad', 1, time()+7600);
			}
			header('Location:/Inicio');
			exit();
		} else { $showError=true; }
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Pernod Ricard México::.</title>
		<meta name="description" content="Pernod Ricard México">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="/imgs/design/favicon.ico">
		<link rel="stylesheet" href="/css/style.css">
		<script src="/js/modernizr-2.6.2.min.js"></script>
		<?php include('libs/jquery-1.11.0.php'); ?>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="bgVerify"></div>
		<div id="contVerify" class="clearfix">
			<h1 class="logoVerify">Pernord Ricard México</h1>
			<p class="descripVerify">Somos creadores de convivialidad y promovemos el<br>consumo responsable del alcohol.<br><br>Te pedimos confirmar que tienes la edad mínima legal<br>para consumir alcohol antes de entrar a nuestro sitio:</p>
			<form id="validateAge" method="POST" action="">
				<h2>Validador de edad</h2>
				<fieldset>
					<select name="countryV" id="countryV">
						<option value="">País</option>
						<option value="-1">Afghanistan</option>
						<option value="18">Albania</option>
						<option value="18">Algeria</option>
						<option value="18">Angola</option>
						<option value="18">Argentina</option>
						<option value="0">Armenia</option>
						<option value="18">Australia</option>
						<option value="16">Austria</option>
						<option value="16">Azerbaijan</option>
						<option value="18">Bahamas</option>
						<option value="-1">Bangladesh</option>
						<option value="18">Belarus</option>
						<option value="18">Belgium</option>
						<option value="18">Belize</option>
						<option value="18">Bermuda</option>
						<option value="18">Bolivia</option>
						<option value="18">Bosnia and Herzegovinia</option>
						<option value="18">Botswana</option>
						<option value="18">Brazil</option>
						<option value="-1">Brunei</option>
						<option value="0">Bulgaria</option>
						<option value="18">Burundi</option>
						<option value="0">Cambodia</option>
						<option value="18">Cameroon</option>
						<option value="18">Canada</option>
						<option value="18">Cape Verde</option>
						<option value="18">Central African Republic</option>
						<option value="18">Chile</option>
						<option value="18">China</option>
						<option value="18">Colombia</option>
						<option value="0">Comoros</option>
						<option value="18">Costa Rica</option>
						<option value="18">Croatia</option>
						<option value="18">Cuba</option>
						<option value="17">Cyprus</option>
						<option value="18">Czech Republic</option>
						<option value="18">Denmark</option>
						<option value="0">Dominican Republic</option>
						<option value="18">Ecuador</option>
						<option value="21">Egypt</option>
						<option value="18">El Salvador</option>
						<option value="0">Equatorial Guinea</option>
						<option value="18">Eritrea</option>
						<option value="18">Estonia</option>
						<option value="18">Ethiopia</option>
						<option value="18">Falkland Islands</option>
						<option value="18">Fiji</option>
						<option value="18">Finland</option>
						<option value="18">France</option>
						<option value="18">Gabon</option>
						<option value="18">Gambia</option>
						<option value="16">Georgia</option>
						<option value="14">Germany</option>
						<option value="18">Ghana</option>
						<option value="18">Gibraltar</option>
						<option value="18">Greece</option>
						<option value="21">Guam</option>
						<option value="18">Guatemala</option>
						<option value="0">Guinea-Buissau</option>
						<option value="18">Guyana</option>
						<option value="16">Haiti</option>
						<option value="18">Honduras</option>
						<option value="18">Hong Kong</option>
						<option value="18">Hungary</option>
						<option value="20">Iceland</option>
						<option value="18">India</option>
						<option value="21">Indonesia</option>
						<option value="-1">Iran</option>
						<option value="18">Iraq</option>
						<option value="18">Ireland</option>
						<option value="18">Israel</option>
						<option value="18">Italy</option>
						<option value="0">Jamaica</option>
						<option value="20">Japan</option>
						<option value="18">Jordan</option>
						<option value="21">Kazakhstan</option>
						<option value="18">Kenya</option>
						<option value="-1">Kuwait</option>
						<option value="18">Kyrgyzstan</option>
						<option value="18">Latvia</option>
						<option value="18">Lebanon</option>
						<option value="18">Lesotho</option>
						<option value="-1">Libya</option>
						<option value="18">Liechtenstein</option>
						<option value="18">Lithuania</option>
						<option value="16">Luxembourg</option>
						<option value="0">Macau</option>
						<option value="18">Macedonia</option>
						<option value="18">Malawi</option>
						<option value="16">Malaysia</option>
						<option value="18">Maldives</option>
						<option value="17">Malta</option>
						<option value="18">Mauritius</option>
						<option value="18">México</option>
						<option value="21">Micronesia</option>
						<option value="18">Moldova</option>
						<option value="18">Mongolia</option>
						<option value="0">Montenegro</option>
						<option value="0">Morocco</option>
						<option value="18">Mozambique</option>
						<option value="18">Namibia</option>
						<option value="18">Nepal</option>
						<option value="18">Netherlands</option>
						<option value="18">New Zeland</option>
						<option value="18">Nicaragua</option>
						<option value="18">Niger</option>
						<option value="18">Nigeria</option>
						<option value="18">North Korea</option>
						<option value="21">Northern Mariana</option>
						<option value="0">Norway</option>
						<option value="21">Oman</option>
						<option value="21">Pakistan</option>
						<option value="21">Palau</option>
						<option value="16">Palestine</option>
						<option value="18">Panama</option>
						<option value="18">Papua New Guina</option>
						<option value="20">Paraguay</option>
						<option value="18">Peru</option>
						<option value="18">Philippines</option>
						<option value="0">Poland</option>
						<option value="18">Portugal</option>
						<option value="18">Puerto Rico</option>
						<option value="21">Qatar</option>
						<option value="18">Republic of the Congo</option>
						<option value="0">Romania</option>
						<option value="0">Russia</option>
						<option value="18">Rwanda</option>
						<option value="21">Samoa</option>
						<option value="-1">Saudi Arabia</option>
						<option value="18">Serbia</option>
						<option value="18">Seychelles</option>
						<option value="18">Singapore</option>
						<option value="18">Slovakia</option>
						<option value="18">Slovenia</option>
						<option value="21">Solomon Islands</option>
						<option value="0">Somalia</option>
						<option value="18">South Africa</option>
						<option value="19">South Korea</option>
						<option value="18">South Sudan</option>
						<option value="18">Spain</option>
						<option value="21">Sri Lanka</option>
						<option value="-1">Sudan</option>
						<option value="0">Swahiland</option>
						<option value="18">Sweden</option>
						<option value="18">Switzerland</option>
						<option value="18">Syria</option>
						<option value="18">Taiwan</option>
						<option value="21">Tajikistan</option>
						<option value="18">Tanzania</option>
						<option value="20">Thailand</option>
						<option value="0">Togo</option>
						<option value="16">Tokelau</option>
						<option value="18">Tonga</option>
						<option value="18">Trinidad and Tobago</option>
						<option value="18">Tunisia</option>
						<option value="18">Turkey</option>
						<option value="18">Turkmenistan</option>
						<option value="21">UAE</option>
						<option value="18">Uganda</option>
						<option value="18">Ukraine</option>
						<option value="18">United Kingdom</option>
						<option value="21">United States</option>
						<option value="0">Uruguay</option>
						<option value="18">Vanuatu</option>
						<option value="18">Venezuela</option>
						<option value="0">Vietnam</option>
						<option value="18">Virgin Islands</option>
						<option value="-1">Yemen</option>
						<option value="18">Zambia</option>
						<option value="18">Zimbabwe</option>
					</select>
					<!-- <div class="select_join">
						<select name="txtCountry">
							<option>-- Select Country --</option>
							<option value="1">Georgia</option>
							<option value="2">Afghanistan</option>
						</select>
					</div> -->
				</fieldset>
				<fieldset>
					<input type="text" name="yearV" id="yearV" class="numberV" maxlength="4" size="4" placeholder="AAAA">
					<input type="text" name="monthV" id="monthV" class="numberV" maxlength="2" size="2" placeholder="MM">
					<input type="text" name="dayV" id="dayV" class="numberV" maxlength="2" size="2" placeholder="DD">
					<button type="submit" class="isButton loginButton" id="verificar" name="verificar">Entra&nbsp;&nbsp;>></button>
				</fieldset>
				<fieldset>
					<div class="rememberMe"><label for="rememberVerify">Recordar</label><input type="checkbox" name="rememberVerify" id="rememberVerify" value="y"></div>
				</fieldset>
			</form>
			<?php if ($showError) { echo'<div class="Restrict"><p class="descripRestrict">La legislación de nuestro país no permite el acceso a este sitio. Para<br>mayor información de consume responsable da click en:<br><a href="www.alcoholinformate.org.mx">www.alcoholinformate.org.mx</a></p></div>'; } ?>
		</div>
		<script src="/js/jquery-ui-1.10.4.min.js"></script>
		<script src="/js/jquery.placeholder.min.js"></script>
		<script src="/js/jquery.validate.min.js"></script>
		<script src="/js/jquery.autotab.min.js"></script>
		<script src="/js/validateAge.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$('input, textarea').placeholder();
				if ($.fn.placeholder.input && $.fn.placeholder.textarea) { console.log('Placeholder: input and textarea.'); }
				else if ($.fn.placeholder.input) { console.log('Placeholder: input yes, textarea no.'); }
			});
		</script>
	</body>
</html>