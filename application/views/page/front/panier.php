<!doctype html>
<html lang="en">
  <head>
  	<title>Regime</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/listcode/css/style.css'); ?>">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Liste des régimes achetées</h2>
				</div>

                

			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th>Nom Régime</th>
						      <th>Durée</th>
						      <th>Variation</th>
						      <th>Montant</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
								
									<?php
									foreach ($panier as $nom) 
									{?>
										<tr>
											<td><?php echo $nom['nomRegime']; ?></td>
											<td><?php echo $nom['duree']; ?> j</td>
											<td><?php echo $nom['variation']; ?> %</td>
											<td><?php echo $nom['prix']; ?></td>

											<td> <button class="detail"><a href="<?php echo base_url()?>FrontController/listplat?idRegime=<?php echo $nom['idRegime']; ?>" style="text-decoration:none; color:white;">Voir détails</a></button></td>
										</tr>
									<?php } ?>
																	
                            
								<style>
									button.detail{
										background-color:#224abe;
										padding: 7px 10px 7px 10px;
										border:none;
										border-radius:5px;
									}
								</style>						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>

