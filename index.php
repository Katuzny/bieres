<?php
include('donnees.php');
?>

<!DOCTYPE html>
<html>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

<head>
	<title>Les bières</title>
	<link  rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
	</style>	
</head>


<body class="contain">

	<header class="row">
		<h1 class="col-12 text-center col-sm-12 text-center col-md-12 text-center col-lg-12 text-center">Les bières</h1>
	</header>
<br/>
<br/>
	<ul id="navigation">
  			<li><a href="index.php" title="aller à Les bières">Les Bières</a></li>
  			<li><a href="bondecommande.php" title="aller à Bon de commande">Bon de commande</a></li>
	</ul>
<br/>

	<section class="row">
		<?php foreach ($beerArray as $value) : ?>
			<article class="col-10-offset-1 col-sm-5 offset-0  col-md-4  col-lg-4 ">
				<h2 class="col-10 offset-1 col-sm-10 col-md-3  col-lg-10 text-center"><?= $value[0] ?></h2>
				<img class="col-4 offset-3 col-sm-3 col-md-3  col-lg-3 w-100" src="<?= $value[1] ?>" alt="<?= $value[0] ?>" style=max-width:50% height:auto/>
				<p class="col-10 offset-1 col-sm-10 col-md-10  col-lg-10 text-justify"><?= $value[2] ?></p>
				<p class="col-10 offset-1 col-sm-10 col-md-10  col-lg-10 text-center"><?= number_format($value[3]*1.2, 2, ',', '.') ?>€</p>			
			</article>
		<?php endforeach; ?>
	</section>
</body>
</html>