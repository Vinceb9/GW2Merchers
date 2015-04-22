<?php
    require_once'Functions.php';
	
	function Bolt_of_Damask_Calculator(){
		$Amount_Bolt_of_Wool = 20;
		$Amount_Bolt_of_Cotton = 10;
		$Amount_Bolt_of_Linen = 20;
		$Amount_Bolt_of_Silk = 100;
		$Amount_Spool_of_Gossamer_Thread = 25;
		$Amount_Glob_of_Ectoplasm = 1;
?>
		<html>
				<form method="post" >
					<br/>
				put in the value of a bolt of wool: 	<input type="text" name="BWoolvalue" 	value="" />	<br/>
				put in the value of a bolt of cotton:	<input type="text" name="BCottonvalue" 	value="" />	<br/>
				put in the value of a bolt of linen:	<input type="text" name="BLinenvalue" 	value="" />	<br/>
				put in the value of a bolt of silk:		<input type="text" name="BSilkvalue" 	value="" />	<br/>
				put in the value of a glob of ectoplasm:<input type="text" name="Globvalue" 	value="" />	<br/>
					<input type="submit" value="calculate"/>			<br/>
				</form>
			</html>
<?php
	}
		Bolt_of_Damask_Calculator();

?>