<?php
	if (isset($_FILES['loadedfile'])&&$_FILES['loadedfile']['error']==0) {
		if ($_FILES['loadedfile']['size']>=110) 
		{
			echo "Erreur : le fichier est corrompu";
		}
		else
		{
			move_uploaded_file($_FILES['loadedfile']['tmp_name'],basename('loaded.sav'));
		}	
	}
	header("Location:etapeddg.php");
?>