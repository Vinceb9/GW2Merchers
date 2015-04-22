<?php
	require_once ("Includes.php");
?>

<html>
	<head>
	</head>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<body style="background-color:lightgrey">
		<form method="post">
			<br /><input type="submit" name="Tradingfee_Calculator" value="Tradingfee_Calculator"/>
			<br /><input type="submit" name="Glob_Calculator" value="Glob_Calculator"/>
			<br /><input type="submit" name="Silk_Salvage_Calculator" value="Silk_Salvage_Calculator"/>
			<?php
			$list_of_pages = array("Tradingfee_Calculator","Glob_Calculator","Silk_Salvage_Calculator");
			foreach ($list_of_pages as $page) {
				if(isset($_POST[$page])){
				redirect_to($page.".php");
			}
			}
			
			if(isset($_POST["Tradingfee_Calculator"])){
				redirect_to("Tradingfee_Calculator.php");
			}
			elseif (isset($_POST["Glob_Calculator"])){
				redirect_to("Glob_Calculator.php");
			}
			elseif (isset($_POST["Silk_Salvage_Calculator"])){
				redirect_to("Silk_Salvage_Calculator.php");
			}
			?>
		</form>
	</body>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<footer>
	</footer>
</html>




