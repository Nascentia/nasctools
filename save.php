<?php
	$savefile=fopen('save.sav', 'r+');
	for ($i=1; $i < 106; $i++) 
	{ 
		if(isset($_POST['chbx'.$i])&&$_POST['chbx'.$i]!=0)
		{
			fputs($savefile,"1");
		}
		else
		{
			fputs($savefile,"0");
		}
	}
	fclose($savefile);

	$file = 'save.sav';

	if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
	}
?>