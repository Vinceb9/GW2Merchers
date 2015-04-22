<?php
	require_once ("Includes.php");
	function Salvaging_For_Silk_Calculator(){
	?>
		<html>
				<form method="post" >
					This only works for light armour lvl50+ !				<br/>
					Put in the value of an scrap of silk below.				<br/>
					<input type="text" 		name="silk value" value="" />	<br/>
					<input type="checkbox" 	name="licht_armored_body"/>		body piece<br/>
					<input type="checkbox" 	name="other"/> 					other piece<br/>
					<br/><br/>
					<input type="submit" 	value="calculate"/>				<br/>
				</form>
		</html>
	
	<?php
	if(isset($_POST["silk_value"])){
		$avarage_silk_ea_unit = 2;
		$salvaging_fee = 3;	
			if(isset($_POST["licht_armored_body"])){
				$avarage_silk_ea_unit = 3;
			}
			if(isset($_POST["other"])){
				$avarage_silk_ea_unit = 2;
			}
				
		$itemvalue = $_POST["silk_value"];
		$value = TradingpostFee_Calculator($itemvalue);
		$amount_of_money = $value * $avarage_silk_ea_unit - $salvaging_fee;
		echo "Your break even point is at: ".Price_Switch($amount_of_money)."!";
	}
		
	else {
		$itemvalue = "nothing";
	}		
}
	Salvaging_For_Silk_Calculator();
?>