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
     
	 <?php
			include('header.php');
				?>   






<section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1><span>Daftar Produk</span></h1>
             </div>
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            
<table class="table table-striped table-bordered table-hover" id="dataTables-example">                           
						   <thead>
 <tr>
    <td align="center" ><strong>Nama Makanan</td>
    <td align="center" ><strong>Harga</td>
 <td align="center" ><strong>Jumlah Pemesanan</td>
    </tr>
 </thead>
<tbody>
<tr>
<td align="center">Bolu</td>
<td align="center" >100000</td>
<td><center><input type="text" placeholder="Jumlah" name="jml_mkn"required></td></center>
</tr>
</tbody>
</table>
					</div>
					<div >
                   <!-- Send Button -->
				  <center><table>
				  <tr>
				  <td><center><a href="datapemesanan.php"><button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Order</button></a></center></td>
				  <td><center><a href="datapemesanan.php"><button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">View Order</button></a></center></td>
                 </tr>
				 </table></center>
				 </div>
                </div>
            </div>  
        </section>