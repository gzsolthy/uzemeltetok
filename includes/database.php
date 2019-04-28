<?php
require_once 'config.php';

class DbConnection {

	protected $connection;
	protected $count;
	protected $regio_kod;
	protected $num_rows;
	
//Adatbázis kapcsolódás	kezdete...
	function Connect() {
	    try {
	      $this->connection = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	      $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
	    }
	    catch(PDOException $e) {  
	      echo 'Hiba az adatbázishoz való kapcsolódáskor!';
		  exit();
	    } 
		return $this->connection;	
	}
	
	function Connection_close(&$connection) {
		$connection=null;
	}
//..vége
	
	function getConfigurations(){ //Konfiguráció betöltése
	   $config = array();
	   $result = $this -> connection -> query("SELECT * FROM ".TBL_CONFIGURATIONS);
		  //$result = mysql_query($q, $database->connection);
		  while($row = $result->fetch()) {
			$config[$row['config_name']] = $row['config_value'];
		  }
		  return $config;
	 }
	
	function getCeginformacio(){ //Céginformációk lekérdezése
		$result = $this -> connection -> query("SELECT * FROM ".TBL_CEGINFORMACIO." ORDER BY id_ceginformacio");
		printf('<table align="center" class="select_table"><tr><th>ID</th><th>Cégnév</th><th>Vevőkód</th></tr>');
		while ($row = $result->fetch()) {
			printf('<tr><th>%s</th><th align="left">%s</th><th>%s</th></tr>',
				$row['id_ceginformacio'],
				$row['cegnev'],
				$row['vevokod']
			);
		}
		printf('</table>');
	}  
	
	function getMegyeVaros(){ //Települések listázása megyék alapján
		$result = $this -> connection -> query("SELECT * FROM ".TBL_VAROS." WHERE megye= 1 ORDER BY id_varos");
		printf('<table align="center" class="select_table"><tr><th>ID</th><th>Város</th><th>Irányítószám</th><th>Megye</th></tr>');
		while ($row = $result->fetch()) {
			printf('<tr><th>%s</th><th align="left">%s</th><th>%s</th><th>%s</th></tr>',
				$row['id_varos'],
				$row['varos_nev'],
				$row['irszam'],
				$row['megye']
			);
		}
		printf('</table>');
	}  
	
	function CheckUserPermisson(){ //Jogosultásgok ellenőrzése
		$user_pc = null;
		$result = $this -> connection -> query("SELECT * FROM ".TBL_FELHASZNALOK." WHERE $user_pc='DESKTOP-MF31J96$'");
		return $result;
	}
	
	function getCegCount() {
		$result = $this -> connection -> query("SELECT * FROM ".TBL_CEGINFORMACIO);
		$this -> count = $result->rowCount();
		echo $this -> count;
	}
	
	function getAutomatakCount() {
		$result = $this -> connection -> query("SELECT * FROM ".TBL_AUTOMATA_ADATOK);
		$this -> count = $result->rowCount();
		echo $this -> count;
	}
	
	function getRegio($regio_kod){
		$result = $this -> connection -> query("SELECT * FROM ".TBL_REGIO." WHERE id_regio= $regio_kod");
		while ($row = $result->fetch()) {
			printf('<tr><th>%s</th></tr>',
				$row['nev_regio']
			);
		}
	}
	
	function getUzemeltetoRegio($regio_kod){
		$result = $this -> connection -> query("SELECT * FROM ".TBL_CEGINFORMACIO." WHERE regio_kod= $regio_kod");
		printf('<table align="center" class="select_table"><tr><th>ID</th><th>Cégnév</th><th>Adószám</th><th>Vevőkód</th></tr>');
		if ($result->num_rows > 0) {
		while ($row = $result->fetch()) {
			printf('<tr><th>%s</th><th align="left">%s</th><th>%s</th><th>%s</th></tr>',
				$row['id_ceginformacio'],
				$row['cegnev'],
				$row['adoszam'],
				$row['vevokod']
			);
		}} else {
			echo '<tr><th>Nincs adat ebben a lekérdezésben</th></tr>';
		}
		printf('</table>');
	}
	
	function getAutomataRegio($regio_kod){
		$result = $this -> connection -> query("SELECT * FROM ".TBL_AUTOMATA_ADATOK." WHERE regio_kod= $regio_kod");
		printf('<table align="center" class="select_table"><tr><th>Cégnév</th><th>U szám</th><th>W szám</th><th>Üzemeltetési hely</th><th>Nav aktív?</th><th>Státusz</th><th>Megszemélyesítés dátuma</th><th>Szüneteltetés kezdete</th><th>Szüneteltetés vége</th><th>Megjegyzés</th></tr>');
		if ($result->num_rows > 0) {
		while ($row = $result->fetch()) {
			printf('<tr><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th align="center">%s</th><th align="center">%s</th><th align="center">%s</th><th align="center">%s</th><th align="center">%s</th><th align="center">%s</th></tr>',
				$row['ceg'],
				$row['u_szam'],
				$row['w_szam'],
				$row['uzem_hely'],
				$row['nav_aktiv'],
				$row['statusz'],
				$row['megszemelyesites_datum'],
				$row['szuneteltetes_kezdete'],
				$row['szuneteltetes_vege'],
				$row['megjegyzes']
			);
		}} else {
			echo '<tr><th>Nincs adat ebben a lekérdezésben</th></tr>';
		}
		printf('</table>');
	}
}

$database = new DbConnection();
?>