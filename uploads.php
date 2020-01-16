<?php
	$targetDir = "upload/";
	$fileName = basename ($_FILES['file']['name']);
	$targetFilePath = $targetDir.$fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

	if (isset($_POST['submit']) && !empty($_FILES['file']['name'])) {
		$allowTypes  = array('jpg','png','gif','pdf');

		if (in_array($fileType,$allowTypes)) 
		{
			if (move_uploaded_file($_FILES['file']['tmp_name'],$targetFilePath)) {
				echo $fileName;
			}

			else{
				echo "failed to uploads";
			}
			
		}
		else{
			echo "File type not allowed";
		}

	}
	else{
			echo "No File Choosen";
		}


?>


