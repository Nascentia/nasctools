<?php
	for ($i=1; $i < 58; $i++) { 
		if (isset($_POST['chbx'.$i])) {
			echo htmlspecialchars($_POST['chbx'.$i]);
		}
		else {
			echo "0";
		}
	}
?>