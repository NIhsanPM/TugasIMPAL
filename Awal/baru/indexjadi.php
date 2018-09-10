<!DOCTYPE html>
<?php include 'config.php';
  include 'ceklogin.php';
  ?>
<html>

    <head>
        <meta charset="UTF-8">
		
        <title>Oleh-Oleh Bandung</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    </head>

    <body>
	<?php
$sql = 'select * from pemesanan';
$query = mysqli_query($db_link,$sql);
?>
     <?php
			include('header.php');
			
		?>   
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title">Oleh-Oleh Khas Bandung</h2>
                    <h2 class="white second-title">"Pusat Oleh-oleh Makanan Terlengkap Hanya Ada di Kami!!"</h2>
                    <hr>
                </div>
            </div>
        </div>

    

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>