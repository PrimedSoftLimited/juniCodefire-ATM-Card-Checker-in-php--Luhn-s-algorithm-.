<?php

$error = '';

if (empty($_POST['atm_input'])) {
	$error .= '<div class="alert alert-danger" role="alert">
                <span style="font-weight: bold; font-size: 20px;">Please insert a valid ATM card number</span>
              </div>';
}else{
       

	$error .= '<div class="alert alert-success" role="alert">
	                <span style="font-weight: bold; font-size: 20px;">Atm Card is Valid</span>
	            </div>';
	}

$data = array(
	'error' => $error
);

echo $error;








































/*
$i=123456789; 
$i= (string)$i;


$len=strlen($i);
for($j=1; $j <= $len; $j = $j + 2)
{
   echo $i[$j]."<br>";
}
*/

/*
$str = "12345678";

$arr1 = str_split($str);

print_r($arr1);



$array = $arr1;
$str = strlen($array);

for ($i=1; $i < $str; $i++) { 
	if($i % 2 == 0){ 
         echo $i;
    }else{ 
    	
    } 
	
}*/

/*$array = array('one', '4', '', 'four', '', 'six');
$str   = implode('-', $array);
$str   = preg_replace ('/(-)+/', '\1', $str);
echo $str;*/
?>
<!--
<script type="text/javascript">
var num = 123456;
var digits = num.toString().split('');
var realDigits = digits.map(Number)
console.log(realDigits);
</script>
-->