<?php
session_start();
include ("connect.php");
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
 <style type="text/css">
 	table{
 		text-align: center;
 		font-size: 16px;
 		margin:auto;
 	}
 	
 	.container{
 		margin:auto;	
 		width:850px;
 	}
 </style>
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
	
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th style="padding:15px; text-align: center;">#</th>
      <th style="padding:15px; text-align: center;">Emri dhe mbiemri</th>
      <th style="padding:15px; text-align: center;">Emaili</th>
      <th style="padding:15px; text-align: center;">Komenti</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
	$sql = "SELECT * from contacts"; 
	$results = $conn->query($sql);
	while (($row = $results -> fetch_assoc()) !=null){
			?>

	
    <tr>
    	<th style="padding:15px; text-align: center;"><?php echo $row['id']; ?></th>
      <td style="padding:15px; text-align: center;"><?php echo $row['name']; ?></th>
      <td style="padding:15px;text-align: center;"><?php echo $row['email'];?></td>
      <td style="padding:15px;text-align: center;"><?php echo $row['comment'];?></td>
    </tr>
<?php }  ?>
  </tbody>
</table>
</div><br>



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