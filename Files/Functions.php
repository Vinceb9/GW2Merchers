<?php
function TradingpostFee_Calculator($itemvalue){
		$tradingfee = 0.10;
		$listingfee = 0.05;
		$exspectedvalue = $itemvalue-($itemvalue*($tradingfee+$listingfee));
		return $exspectedvalue;
	}
	
function Price_Switch($amount_of_money){
		if($amount_of_money > 0){
		
			$gold = 0;
			$silver = 0;
			$copper = 0;
			
			while ($amount_of_money >= 10000){
				$amount_of_money = $amount_of_money - 10000;
				$gold++;
			}
		
			while ($amount_of_money >= 100) {
				$amount_of_money = $amount_of_money -100;
				$silver++;
			}
		
			$copper = $amount_of_money;
			$message = " ".$gold." gold, ".$silver." silver and ".$copper." copper!";
			return $message;
		}
		else {
		}
	}
		
function Tradingfee_Calculator(){
?>

<html>
	<form method="post" >
		Put the value of the item you want to sell in the box below. <br/>
		<input type="text" name="itemvalue" value="" />	<br/>
		<input type="submit" value="calculate"/>	<br/>
	</form>
</html>


<?php
	if(isset($_POST["itemvalue"])){
		$itemvalue = $_POST["itemvalue"];
		$value = TradingpostFee_Calculator($itemvalue);
		$amount_of_money = $value;
		echo "You will get: ".Price_Switch($amount_of_money)."!";
	}
	else {
		$itemvalue = "nothing";
	}
}

function Glob_Calculator(){
		?>
			<html>
				<form method="post" >
					Put in the value of an glob of ectoplasm below.<br/>
					<input type="text" name="globvalue" value="" />	<br/>
					<input type="submit" value="calculate"/>	<br/>
				</form>
			</html>
		<?php
	
		if(isset($_POST["globvalue"])){
			$salvaging_fee_master_kit = 1536/25;
			$itemvalue = $_POST["globvalue"];
			$value = TradingpostFee_Calculator($itemvalue);
			$amount_of_money = $value*0.875 - $salvaging_fee_master_kit;
			echo "your breakeven point is at: ".Price_Switch($amount_of_money)."!";
		}
		else {
			$itemvalue = "nothing";
		}
	}

function redirect_to($new_location){
	header("location: " . $new_location); 
	exit;
}
?>