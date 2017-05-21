<?php 

$errors = [];
	foreach ($_POST as $key => $value) {
		if(empty($value)){
			$errors[] = $key;
		}
	}

	if(!empty($errors)){
		$a = array('howmany'=>36, 'wut'=>'des kiwis');
		echo json_encode($a);
	}else{
		$a = array('success'=>true);
		echo json_encode($a);
	}
?>