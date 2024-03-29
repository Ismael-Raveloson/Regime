<!doctype html>
<html lang="en">
  <head>
  	<title>Regime</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/portfeuille/css/style.css'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/listcode/css/style.css'); ?>">
	
	</head>
	<body>
	
	<div class="vola">
		<h5>Votre portefeuille est de:
		
		<?php
		if($vola != null){
			echo number_format($vola,0,',',' ') ;
		}
		 ?> Ar</h5>
	</div>

	<style>
		.vola{
			padding-top: 40px;
			text-align:center;
			color: blue;
		}
	</style>

	<section class="ftco-section">
		<div class="container">
						<div class="row no-gutters" >
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Inserer Code    </h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            
				      		</div>
									<form action="<?php echo base_url('FrontController/listcode_treat'); ?>" id="contactForm" name="contactForm" class="contactForm" method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Votre code</label>
													<input type="text" class="form-control" name="code" id="name" placeholder="Code">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Valider" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
                                    </form>


                                    <div class="col-md-12">
												<div class="form-group">
                                                    <!-- <form action="<?php echo base_url('FrontController/listcode'); ?>">
                                                        <input type="submit" value="Voir la liste des codes" class="btn btn-primary">
                                                    </form> -->
													<div class="submitting"></div>
												</div>
									</div>

                                            <div class="col-md-12">
												<div class="form-group">
                                                    <!-- <form action="<?php echo base_url('FrontController/home'); ?>">
                                                        <input type="submit" value="Retour" class="btn btn-primary">
                                                    </form> -->
													<a href="<?php echo base_url()?>FrontController/home" style="font-size:13px;">Retour</a>
													<!-- <div class="submitting"></div> -->
												</div>
											</div>





										</div>
									
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch" >
								<div class="info-wrap w-100 p-5 img" style="background-image: url(<?php echo base_url('assets/portfeuille/images/img.jpg'); ?>);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section" style="margin-top:-150px">
		<div class="container">
			<div class="row">
						<div class="col-md-12">
							<div class="table-wrap">
								<table class="table">
								<thead class="thead-dark">
									<tr>
					
									<th>Code</th>
									<th>Montant</th>
		
									</tr>
								</thead>
								<tbody>
									<?php
										foreach ($code as $codelist) 
										{?>
											
											<tr class="alert" role="alert">
												
												<td><?php echo $codelist['nomCode'];?></td>
												<td><?php echo $codelist['montant'];?> AR</td>
													
											</tr>

										<?php }?>
								
									
								</tbody>
								</table>
							</div>
						</div>
					</div>
			</div>
		</section>


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

