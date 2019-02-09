<?php

$section='-1';//default variable value
if(isset($_GET['section'])){ //does the 'section' URL parameter exist
	$section=$_GET['section']; //reassigned variable value
	
}

if($section=='-1'){ //if we're on the home page
	include('content/intro.php');
	
	}else if($section=='graphic'){ // if we're on the graphic page
		include('content/graphic.php');
	
	}else if($section=='web'){ // if we're on the web page
		include('content/web.php');
	
	
	}else if($section== 'culinary'){ // if we're on the culinary page
		include('content/culinary.php');
		
	}else if($section== 'photography'){ // if we're on the photography page
		include('content/photography.php');
		
	}else if($section== 'fashion'){ // if we're on the fashion page
		include('content/fashion.php');
		
	}else if($section== 'interior'){ // if we're on the interior page
		include('content/interior.php');
		
	}else if($section== 'film'){ // if we're on the film page
		include('content/film.php');
		
	}else if($section== 'contributors'){ // if we're on the contributors page
		include('content/contributors.php');
		
	}else if($section== 'about'){ // if we're on the about page
		include('content/about.php');
		
	}else if($section== 'submissions'){ // if we're on the submissions page
		include('content/submissions.php');
		
	}else{ //if we need a default page (or URL parameter doesn't match)
		include('content/intro.php');
}










?>