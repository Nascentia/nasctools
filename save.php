<?php
	for ($i=1; $i < 106; $i++) { 
		if (isset($_POST['chbx'.$i])) {
			echo htmlspecialchars($_POST['chbx'.$i]);
		}
		else {
			echo "0";
		}
	}
?>