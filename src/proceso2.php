<?php

$a=$_GET;
$s='';

if(isset($_GET['value'])){

	for($i=0;$i<$_GET['value'];$i++){

	$s.=$i;

	}
}

$a["s"]=$s;

echo json_encode($a);