<?php
session_start();
//$regio_kod = $_GET['regio_kod'];
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/mainmenu.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/mainmenu.js"></script>
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
   <title></title>

</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href="index.php?id=1" <?php if ((isset($_GET['id'])) && ($_GET['id'] == 1)) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">Kezdőlap</a></li>
   <li><a href='#'>Listák</a>
      <ul>
         <li><a href='#'>Üzemeltetők</a>
            <ul>
               <li><a href="index.php?id=2&regio_kod=1" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 2)) && $_GET['regio_kod'] == 1) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/BP</a></li>
               <li><a href="index.php?id=2&regio_kod=2" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 2)) && $_GET['regio_kod'] == 2) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/M</a></li>
			   <li><a href="index.php?id=2&regio_kod=3" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 2)) && $_GET['regio_kod'] == 3) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/D</a></li>
			   <li><a href="index.php?id=2&regio_kod=4" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 2)) && $_GET['regio_kod'] == 4) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/P</a></li>
			   <li><a href="index.php?id=2&regio_kod=5" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 2)) && $_GET['regio_kod'] == 5) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/S</a></li>
			   <li><a href="index.php?id=2&regio_kod=6" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 2)) && $_GET['regio_kod'] == 6) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/SZ</a></li>
			   <li><a href="index.php?id=2&regio_kod=7" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 2)) && $_GET['regio_kod'] == 7) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">Egyéb</a></li>
            </ul>
         </li>
         <li><a href='#'>Automaták</a>
            <ul>
               <li><a href="index.php?id=3&regio_kod=1" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 3)) && $_GET['regio_kod'] == 1) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/BP</a></li>
               <li><a href="index.php?id=3&regio_kod=2" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 3)) && $_GET['regio_kod'] == 2) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/M</a></li>
			   <li><a href="index.php?id=3&regio_kod=3" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 3)) && $_GET['regio_kod'] == 3) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/D</a></li>
			   <li><a href="index.php?id=3&regio_kod=4" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 3)) && $_GET['regio_kod'] == 4) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/P</a></li>
			   <li><a href="index.php?id=3&regio_kod=5" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 3)) && $_GET['regio_kod'] == 5) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/S</a></li>
			   <li><a href="index.php?id=3&regio_kod=6" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 3)) && $_GET['regio_kod'] == 6) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/SZ</a></li>
			   <li><a href="index.php?id=3&regio_kod=7" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 3)) && $_GET['regio_kod'] == 7) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">Egyéb</a></li>
            </ul>
         </li>
		 <li><a href='#'>Telepítők</a>
            <ul>
               <li><a href="index.php?id=4&regio_kod=1" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 1) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/BP</a></li>
               <li><a href="index.php?id=4&regio_kod=2" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 2) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/M</a></li>
			   <li><a href="index.php?id=4&regio_kod=3" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 3) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/D</a></li>
			   <li><a href="index.php?id=4&regio_kod=4" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 4) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/P</a></li>
			   <li><a href="index.php?id=4&regio_kod=5" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 5) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/S</a></li>
			   <li><a href="index.php?id=4&regio_kod=6" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 6) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/SZ</a></li>
			   <li><a href="index.php?id=4&regio_kod=7" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 7) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">Egyéb</a></li>
            </ul>
		</li>
		<li><a href='#'>Régiók</a>
            <ul>
               <li><a href="index.php?id=5&regio_kod=1" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 1) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/BP</a></li>
               <li><a href="index.php?id=5&regio_kod=2" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 2) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/M</a></li>
			   <li><a href="index.php?id=5&regio_kod=3" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 3) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/D</a></li>
			   <li><a href="index.php?id=5&regio_kod=4" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 4) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/P</a></li>
			   <li><a href="index.php?id=5&regio_kod=5" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 5) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/S</a></li>
			   <li><a href="index.php?id=5&regio_kod=6" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 6) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/SZ</a></li>
			   <li><a href="index.php?id=5&regio_kod=7" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 4)) && $_GET['regio_kod'] == 7) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">Egyéb</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'>Ütemezés</a>
            <ul>
               <li><a href="index.php?id=6&regio_kod=1" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 5)) && $_GET['regio_kod'] == 1) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/BP</a></li>
               <li><a href="index.php?id=6&regio_kod=2" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 5)) && $_GET['regio_kod'] == 2) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/M</a></li>
			   <li><a href="index.php?id=6&regio_kod=3" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 5)) && $_GET['regio_kod'] == 3) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/D</a></li>
			   <li><a href="index.php?id=6&regio_kod=4" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 5)) && $_GET['regio_kod'] == 4) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/P</a></li>
			   <li><a href="index.php?id=6&regio_kod=5" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 5)) && $_GET['regio_kod'] == 5) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/S</a></li>
			   <li><a href="index.php?id=6&regio_kod=6" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 5)) && $_GET['regio_kod'] == 6) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">RTO/SZ</a></li>
			   <li><a href="index.php?id=6&regio_kod=7" <?php if (((isset($_GET['id'])) && ($_GET['id'] == 5)) && $_GET['regio_kod'] == 7) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">Egyéb</a></li>
            </ul>
	</li>
	<li><a href="index.php?id=7" <?php if ((isset($_GET['id'])) && ($_GET['id'] == 6)) { echo "class='active'"; } ?>><span class="l"></span><span class="r"></span><span class="t">Beállítások</a></li>
</ul>
</div>
    <?php
	
	  if (((isset($_GET['id'])) &&($_GET['id'] == 1)) || (!isset($_GET['id']))) { include('includes/menu/main.php'); };
	  if ((isset($_GET['id'])) &&($_GET['id'] == 2)){  
		if (isset($_GET['regio_kod'])) {
			include('includes/menu/lists_uzemeltetok.php');
		}
	  };
	   if ((isset($_GET['id'])) &&($_GET['id'] == 3)){  
		if (isset($_GET['regio_kod'])) {
			include('includes/menu/lists_automat.php');
		}
	  };
	  if ((isset($_GET['id'])) && ($_GET['id'] == 5)) { include('includes/menu/sheduling.php'); };
	  if ((isset($_GET['id'])) && ($_GET['id'] == 6)) { include('includes/menu/settings.php'); };
	  
	
    ?>
</body>
<html>