<!DOCTYPE html>
<html>
<head>
	<title>Atm Card Check</title>
	<!-- custom_style -->
	<link rel="stylesheet" type="text/css" href="styles/custom.css">

    <!-- Bootstrap -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="styles/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="styles/mobile-menu.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="styles/owl.carousel.css" rel="stylesheet">
    <link href="styles/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="styles/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles/animated.css"/>
</head>
<body>
	<div class="container">
		<div class="head_box">
			<h1 class="header_sty">ATM CARD CHECK PROJECT IN PHP</h1>
		</div>
		<div class="body_box">
			<div id="display_atm_type"></div><br>
			<div id="form_box">
				<form action="process.php" method="post" id="atm_tranfer"><br>
					<input class="form-control" id="atm_input" type="text" name="atm_card" placeholder="ATM Card Number">
					<div id="numb_style"><span id="display_input_number"></span></div><br>
					<input class="btn btn-primary" id="atm_submit" type="submit" name="submit" value="Check">
				</form><br>
				
			</div><br>	
			<div id="display_callback_msg"></div>	
		</div>
		<div class="footer_box">
			
		</div>
   </div>
</body>
</html>