<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Ballina</title>
    <link rel="icon" type="image/png" href="style/vector_327_06-512.png"/>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
         
          <h1><a href="index.php">Mobil<span class="logo_colour"> Shop  </span> </a></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          
          <li class="selected"><a href="index.php">Ballina</a></li>
          <li><a href="produktet.php">Produktet</a></li>
         
          <li><a href="kontakti.php">Kontakto</a></li>
		  <?php
			if ($_SESSION) {
				echo "<li><a href=''>"."Mirsevini " . $_SESSION["name"] . "</a></li><li class='logout'><a href='./logout.php'>Shkyqu</a></li>";
			}
			else echo "<li><a href='./login.php'>Llogaria</a></li>";
		?>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
	  <h1 style="font-size:25px;">Miresevini!</h1>
	  
      <div id="phone" >
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
	  <div id="sidebar_container"></div>
      <div id="content">
        
      <p style="font-size:25px;">Rreth nesh</p>
     <p style="font-size:20px;"> "Mobil Shop" është dizajnuar për të ju ofruar përdoruesve shërbime online lidhur me telefona. </p>
	 
	  <p style="font-size:20px;"> Me një pervojë shumë vjeçare në këtë fushë do të mundohemi gjithmonë të jemi sa më korrekt me klientet tanë.  </p>
 
       <p style="font-size:20px;"> Tek "Mobil shop" ju mund të gjeni shumë lloje të iPhone, Samsung, Xiaomi, Huawei e të tjera. Në qoftë se telefoni juaj ka probleme të ndryshme,
 ne gjithashtu mund që ta kryejmë edhe servisimin e tij, ose edhe mundësin e dekodimit.
Tek ne punën e bëjmë me shumë dashuri dhe sinqeritet. </p>

      <p style="font-size:20px;"> Për çdo informatë apo pyetje kontakto <a href="kontakti.php"> Këtu.</a> 

     </p>
	  
	  
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Ballina</a> | <a href="produktet.php">Produktet</a> | <a href="kontakti.php">Kontakti</a> | <a href="login.php">Kyqu</a></p>
      <p>2020 &copy; </p>
    </div>
  </div>
</body>
</html>
