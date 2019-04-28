<?php
	require_once 'includes/functions.php';
    global $functions;

	$regio_kod = $_GET['regio_kod'];
	echo '<br><b>Kiválasztott régió:</b> ';
	switch ($_GET['regio_kod']){
		case '1':
			$functions->Regio($regio_kod);
			$functions->AutomataRegio($regio_kod);
			break;
		case '2':
			$functions->Regio($regio_kod);
			$functions->AutomataRegio($regio_kod);
			break;
		case '3':
			$functions->Regio($regio_kod);
			$functions->AutomataRegio($regio_kod);
			break;
		case '4':
			$functions->Regio($regio_kod);
			$functions->AutomataRegio($regio_kod);
			break;
		case '5':
			$functions->Regio($regio_kod);
			$functions->AutomataRegio($regio_kod);
			break;
		case '6':
			$functions->Regio($regio_kod);
			$functions->AutomataRegio($regio_kod);
			break;
		case '7':
			$functions->Regio($regio_kod);
			$functions->AutomataRegio($regio_kod);
			break;
		default: print 'Érvénytelen adat';
	}
		
	//$database->CheckUserPermisson();
    //$functions->WhoIam();
    //$functions->Ceginformacio();
	
	//$functions->CegCount();
	
?>