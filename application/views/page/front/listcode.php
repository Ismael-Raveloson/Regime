<!doctype html>
<html lang="en">
  <head>
  	<title>Liste des code</title>
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
					<h2 class="heading-section">Liste des code</h2>
				</div>

                

			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th>ID Code</th>
						      <th>Code</th>
						      <th>Montant</th>
						      <th>Validité</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
                            <?php
                                foreach ($code as $codelist) 
                                {?>
                                    
                                    <tr class="alert" role="alert">
                                        <th scope="row"><?php echo $codelist['idCode'];?></th>
                                        <td><?php echo $codelist['nomCode'];?></td>
                                        <td><?php echo $codelist['montant'];?> AR</td>
                                        <td><?php echo $codelist['validite'];?></td>
                                        <td>
                                            
                                        </a>
                                        </td>
                                    </tr>

                                <?php }?>
						   
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>

