<?php

$error = '';
$atm_digit = $_POST['atm_input'];
	   $atm_digit_check = mb_substr($atm_digit, 0, 2);

if ($_POST['pass'] == 'card_type') {
		   
		   if (($atm_digit_check == "22") || ($atm_digit_check == "51") || ($atm_digit_check == "52") || ($atm_digit_check == "53") || ($atm_digit_check == "54") || ($atm_digit_check == "55")) {//Master Card
		   	   $error .= '<div class="alert alert-success" role="alert">
		                     <span style="font-weight: bold;">You are typing in a Master Card!</span>
		                  </div>';
		                  
		     }elseif(($atm_digit_check == "34") || ($atm_digit_check == "37")){//AExCorp
		     	$error .= '<div class="alert alert-success" role="alert">
		                     <span style="font-weight: bold;">You are typing in an American Express or American Express Corparate!</span>
		                  </div>';
		                 
		     }elseif($atm_digit_check == "30"){//Diners Club Card
		     	$error .= '<div class="alert alert-success" role="alert">
		                     <span style="font-weight: bold;">You are typing in a  Diners Club Card!</span>
		                  </div>';
		                  
		     }elseif($atm_digit_check == "35"){//JCB Card
		     	$error .= '<div class="alert alert-success" role="alert">
		                     <span style="font-weight: bold;">You are typing in a JCB Card!</span>
		                  </div>';
		                 
		     }elseif($atm_digit_check == "60"){//Discover Card
		     	$error .= '<div class="alert alert-success" role="alert">
		                     <span style="font-weight: bold;">You are typing in a Discover Card!</span>
		                  </div>';
	         }elseif (($atm_digit_check == "40") || ($atm_digit_check == "41") || ($atm_digit_check == "42")){//Visa Card
	         	$error .= '<div class="alert alert-success" role="alert">
		                     <span style="font-weight: bold;">You are typing in a Visa Card!</span>
		                  </div>'; 
	         }else{
	         	if (strlen($atm_digit) >= 2) {//Defult 
	         		$error .= '<div class="alert alert-warning" role="alert">
		                     <span style="font-weight: bold;">Not a recognize card type!</span>
		                  </div>';
	         	}
	         	
	         } 
      
echo $error;
	}


	if ($_POST['pass'] == 'input_length') {
		$atm_digit = strlen($atm_digit);
		if ($atm_digit == 0) {
			echo "No inputed value";
		}else{
			echo $atm_digit;
		}
		
	}

?>
