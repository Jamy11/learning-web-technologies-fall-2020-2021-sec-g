<?php
    if(isset($_POST['submit'])){
		$name = $_POST['dob'];
		echo $name. "<br>";	
	}else{
		echo "error...";
	}
?>