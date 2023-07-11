<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Regime</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/backoffice/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/backoffice/css/sb-admin-2.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/portfeuille/css/style.css'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="<?php echo base_url('assets/listcode/css/style.css'); ?>">
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('BackController');?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-cart-arrow-down"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Regime<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>BackController/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>BackController/charte">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charte</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>BackController/insert">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Plat | Regime</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>BackController/code">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Codes</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="padding-top:80px">

            <!-- Main Content -->
            <div id="content">

                <div class="container-fluid">

                    <section class="ftco-section" style="margin-top:-150px">
                        <div class="container">
                            <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-wrap">
                                                <table class="table">
                                                <thead class="thead-dark">
                                                                                        
                                                    <th>Code</th>
                                                    <th>Montant</th>
                                                    <th>Prenom</th>
                                                    <th></th>
                                                    <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($code as $code_list) 
                                                    {?>
                                                        <tr>

                                                            <td><?php echo $code_list['nomCode'];?></td> 
                                                            <td><?php echo $code_list['montant'];?></td> 
                                                            <td><?php echo $code_list['prenom'];?></td> 
                                                            <td><button class="detail"><a href="<?php echo base_url()?>BackController/deleteCode?idCode=<?php echo $code_list['idCodeUtilisateur'];?>" style="text-decoration:none;color:white;">Supprimer</a></button></td>
                                                            <td><button class="detail"><a href="<?php echo base_url()?>BackController/validerCode?idCode=<?php echo $code_list['idCodeUtilisateur'];?>" style="text-decoration:none;color:white;">Accepter</a></button></td>                                                                
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


                    <script src="js/jquery.min.js"></script>
                <script src="js/popper.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery.validate.min.js"></script>
                <script src="js/main.js"></script>
                      

                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <!-- <span>Copyright &copy; Your Website 2020</span> -->
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/backoffice/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/backoffice/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/backoffice/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/backoffice/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>assets/backoffice/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>assets/backoffice/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>assets/backoffice/js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo base_url()?>assets/backoffice/js/demo/chart-bar-demo.js"></script>

</body>

</html>