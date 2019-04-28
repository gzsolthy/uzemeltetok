<?php
require_once 'database.php';

class Functions extends DbConnection {

	/*function __construct(){
        parent::__construct();
        parent::Connect();
		parent::Connection_close($connection);
		parent::getCeginformacio();
        parent::getMegyeVaros();
		//parent::CheckUserPermisson();
    }*/
	
	
	function Ceginformacio() {
		global $database;
		$database->Connect();
		$database -> getCeginformacio();
		$database->Connection_close($connection);
	}
	
	function MegyeVaros() {
		global $database;
		$database ->Connect();
		$database ->getMegyeVaros();
		$database ->Connection_close($connection);
	}
	
	function Configurations() {
		global $database;
		$database->Connect();
		$database->getConfigurations();
		$database->Connection_close($connection);
	}

	function CegCount(){
		global $database;
		$database->Connect();
		$database -> getCegCount();
		$database->Connection_close($connection);
	}
	
	function AutomatakCount() {
		global $database;
		$database->Connect();
		$database -> getAutomatakCount();
		$database->Connection_close($connection);
	}
	
	function UzemeltetoRegio($regio_kod) {
		global $database;
		$database->Connect();
		$database -> getUzemeltetoRegio($regio_kod);
		$database->Connection_close($connection);
	}
	
	function Regio($regio_kod){
		global $database;
		$database->Connect();
		$database -> getRegio($regio_kod);
		$database->Connection_close($connection);
	}
	
	function AutomataRegio($regio_kod){
		global $database;
		$database->Connect();
		$database -> getAutomataRegio($regio_kod);
		$database->Connection_close($connection);
	}
	/*function WhoIam() {
	  $whoiam_user_pc = getenv('USERNAME') ?: getenv('USER');
	  print $whoiam_user_pc;
	  $database -> CheckUserPermisson();
		if ($result != 1) {
			echo 'Nem jogosult az oldal megtekintéséhez';
			exit(0);
		}
	 
	}	*/

}
$functions = new Functions();

?>