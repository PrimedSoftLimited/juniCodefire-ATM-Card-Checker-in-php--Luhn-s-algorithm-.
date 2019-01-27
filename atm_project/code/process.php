<?php

$error = '';
$valid = "";
$atm_digit = $_POST['atm_input'];
 $atm_digit_check = mb_substr($atm_digit, 0, 2);
 $atm_digit_lenght = strlen($atm_digit);
if (empty($atm_digit)) {//Throw error if input is empty
	$error .= '<div class="alert alert-danger" role="alert">
                <span style="font-weight: bold;">Please fill up input field!</span>
              </div>';
	}else{

		if (!preg_match("/^[0-9]*$/", $atm_digit)) {//Validate the text input if it is a number
			$error .= '<div class="alert alert-danger" role="alert">
	                     <span style="font-weight: bold;">Please insert a valid ATM card number!</span>
	                   </div>';
		}else{


			if($atm_digit_check == "30" && strlen($atm_digit) == 14) {//Validate the Dinner Club Card 
		                      $valid = "1";   	
			}elseif((strlen($atm_digit) == 15) && ($atm_digit_check == "34" || $atm_digit_check == "37")){//Validate AEC and AE
		                      $valid = "1";
			}elseif((strlen($atm_digit) == 16) && ($atm_digit_check == "35" || $atm_digit_check == "51" || $atm_digit_check == "52" || $atm_digit_check == "53" || $atm_digit_check == "54" || $atm_digit_check == "55" || $atm_digit_check == "60")){//Validate JCB, Discover, Master Card
		                      $valid = "1";
			}elseif((strlen($atm_digit) == 16) && ($atm_digit_check == "22" || $atm_digit_check == "35" || $atm_digit_check == "51" || $atm_digit_check == "52" || $atm_digit_check == "53" || $atm_digit_check == "54" || $atm_digit_check == "55" || $atm_digit_check == "60")){//Validate JCB, Discover, Master Card
		                      $valid = "1";
			}elseif(($atm_digit_check == "40" || $atm_digit_check == "41" || $atm_digit_check == "42") && (strlen($atm_digit) == 13) || (strlen($atm_digit) == 16)){//Validate Visa Master Card
		                      $valid = "1";
			}
			echo it_valid($valid, $error, $atm_digit);//Call the success or error function
	 	}
}
//Continue the Validation after card check
function it_valid($valid, $error, $atm_digit) {
	        $array_holder = array();
	        $array_holder_2 = array();
	        	
				if ($valid == "1") {
					//reverse the atm_card number 
					$atm_digit_rev=strrev($atm_digit);
					$atm_digit_rev_lenght=strlen($atm_digit_rev);
						//stage 1
					for ($i=1; $i <= $atm_digit_rev_lenght; $i= $i + 2) { 
						$skiped_char = $atm_digit_rev[$i];
						//multiply through by 2
						@$multiplied_char = $skiped_char * 2;
						array_push($array_holder, $multiplied_char);
					}
						$in_string_format = implode($array_holder);
						$aftersplit = str_split($in_string_format);	
						$sum_of_the_first_step = array_sum($aftersplit);
					//stage 2
						if ($sum_of_the_first_step != "") {
								for ($i=0; $i <= $atm_digit_rev_lenght; $i= $i + 2) { 
									$skiped_char_2 = $atm_digit_rev[$i];
									array_push($array_holder_2, $skiped_char_2);
								}
								$sum_of_the_second_step = array_sum($array_holder_2);

								//sum stage 1 and stage 2 togerther
								$total_sum  = $sum_of_the_first_step + $sum_of_the_second_step;
								$last_value = substr($total_sum, -1);
								if ($last_value == 0) {
									 $error .= '<div class="alert alert-success" role="alert">
						                          <span style="font-weight: bold;">This ATM card is valid!</span>
						                      </div>';
								}else{
									 $error .= '<div class="alert alert-danger" role="alert">
						                          <span style="font-weight: bold;">your ATM card is invalid!</span>
						                      </div>';
								}								
						}else{

						    $error .= '<div class="alert alert-danger" role="alert">
				                          <span style="font-weight: bold;">Please try again, there was an error!</span>
				                      </div>';
						}
					
				}else{
					
				    $error .= '<div class="alert alert-danger" role="alert">
		                          <span style="font-weight: bold;">Please your ATM card is invalid or number is not complete!</span>
		                      </div>';
	        	}
        	return $error;
		}
				
echo $error;

?>