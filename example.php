<?php
	$directory = 'pictures'; //default folder
	$allowed=array('jpg','jpeg','gif','png'); //allowed file extension
	$filearray=array(); // file array - filearray[0] -> filename,filearray[1] -> fileext
	$fileext=''; //filearray[1] -> fileext
	$filename=''; //filearray[0] -> filename
	$browsing = @opendir($directory) or die("There is an error with your image directory!"); // open the directory
	while ($file = readdir($browsing)) // read to the file 
	{
		if($file=='.' || $file == '..') continue; // if not empty continue
		$filearray = explode('.',$file); // split the file to the array 
		$fileext = strtolower(array_pop($filearray)); // lowercase the file extension
		$filename = implode('.',$filearray); // put filename to the array
		$filename = htmlspecialchars($filename); // change the special charachters			
		if(in_array($fileext,$allowed)) // if success write to the div
		{
			echo '<li id="'.$id.'" class="'.$class.'" style="'.$liclass.'"><a href="'.$directory.'/'.$file.'" data-toggle="lightbox" data-gallery="multiimages" data-title="'.$filename.'"><div  id="'.$imgdiv.'"  class="'.$imgclass.'" style="background:url('.$directory.'/'.$file.');'.$imgstyle.'"></div></a></li>';				
		}
	}
	closedir($browsing); // close the browsing
?>