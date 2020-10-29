<?php
    if(isset($_POST['submit'])){
		$name = $_POST['email'];
		echo $name. "<br>";	
	}else{
		echo "error...";
	}
?>