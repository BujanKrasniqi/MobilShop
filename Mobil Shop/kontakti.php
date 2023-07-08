<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Kontakto</title>
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
          
          <h1><a href="index.html">Mobil <span class="logo_colour">Shop</span></a></h1>
          <h2>&nbsp;</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          
          <li><a href="index.php">Ballina</a></li>
          <li><a href="produktet.php">Produktet</a></li>
         <li class="selected"><a href="kontakti.php">Kontakto</a></li>
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
      <div id="content">

  <?php
    include "connect.php" ; 
    if($_REQUEST) {

     $sql = "INSERT INTO `contacts` (`name`,`email`, `comment`) VALUES ('" . $_REQUEST["your_name"] . "','" . $_REQUEST["your_email"] . "', '" . $_REQUEST["your_enquiry"]."')"; // Inserto ne db me vlerat perkatese ne kolonat perkatese
      $result = $conn->query($sql);
      if ($result){
        header("Location:kontakti.php");
      }
      else{
        echo "Dergimi i mesazhit deshtoi :(";
      }
    }
  ?>

       
        <h1>Na kontaktoni</h1>
        <p>&nbsp;</p>     
        <form action ="#" method="POST">  
          <div class="form_settings">
            <p><span>Emri</span>
            <input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Addressa</span>
            <input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Mesazhi</span>
            <textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Dergo" /></p>
          </div>       </form>
        <p><br /><br />
        </p>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
       <p><a href="index.php">Ballina</a> | <a href="produktet.php">Produktet</a> | <a href="kontakti.php">Kontakto</a> | <a href="login.php">Kyqu</a></p>
      <p>2020 &copy;</p>
    </div>
  </div>
</body>
</html>
