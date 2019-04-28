<html>
<head>
<title></title>
</head>
<body>
<?php
	require_once 'includes/functions.php';
	require_once 'includes/database.php';
    global $functions;
	$config=$functions->Configurations();
	echo $config['SITE_NAME'] . '- Main<br>' ;
	//$database->CheckUserPermisson();
    //$functions->WhoIam();
    //$functions->Ceginformacio();
	echo 'Üzemeltetők száma: ';
	$functions->CegCount(); 
	echo ' db'; 
	//$functions->CegCount();
	echo '<br>Automaták száma: ';
	$functions->AutomatakCount();
	echo ' db';
	
	
?>
</body>
</html>