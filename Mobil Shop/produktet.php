<?php
session_start();
include ("connect.php");
?>
<!DOCTYPE HTML>
<html>
  

<head>
  <style>
div.gallery {
  margin: 5px;
  border: 1px solid  #ffffff;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #66a3ff;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
  <title>Produktet</title>
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
          
          <h1><a href="index.php">Mobil<span class="logo_colour"> Shop</span></a></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          
          <li><a href="index.php">Ballina</a></li>
         
          <li class="selected"><a href="produktet.php">Produktet</a></li>
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
     <h1 align="center"><img  src="style/shop.jpg" width="772" height="585"></h1>






    <div id="content_header"></div>
    <div id="site_content">
	  <div id="sidebar_container"></div>
      
       
     
<p style="font-size:40px;">Telefona</p>

<?php 
  $sql = "SELECT * from products where category='phone'";
  $results = $conn->query($sql);
  while (($row = $results -> fetch_assoc()) !=null){
      ?>

          <div class="gallery">
  <a target="_blank" href="<?php echo $row['photo']; ?>">
    <img src="<?php echo $row['photo']; ?>" width="600" height="400">
  </a>
  <div class="desc"> <?php echo $row['name']; ?> </div>
</div>
<?php }?>

<p style="font-size:40px;">Aksesorë</p>

<?php 
  $sql = "SELECT * from products where category='aksesore'"; 
  $results = $conn->query($sql);
  while (($row = $results -> fetch_assoc()) !=null){
      ?>

          <div class="gallery">
  <a target="_blank" href="<?php echo $row['photo']; ?>">
    <img src="<?php echo $row['photo']; ?>" width="600" height="400">
  </a>
  <div class="desc"> <?php echo $row['name']; ?> </div>
</div>
<?php }?>

<p style="font-size:40px;">Serviso</p>



<?php 
  $sql = "SELECT * from products where category='servis'"; 
  $results = $conn->query($sql);
  while (($row = $results -> fetch_assoc()) !=null){
      ?>

          <div class="gallery">
  <a target="_blank" href="<?php echo $row['photo']; ?>">
    <img src="<?php echo $row['photo']; ?>" width="600" height="400">
  </a>
  <div class="desc"> <?php echo $row['name']; ?> </div>
</div>
<?php }?>
        <p>&nbsp;</p>
      
    </div>


   


    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Ballina</a> | <a href="produktet.php">Produktet</a> | <a href="kontakti.php">Kontakti</a> | <a href="login.php">Kyqu</a></p>
      <p>2020 &copy; </p>
    </div>
  </div>
</body>
</html>
