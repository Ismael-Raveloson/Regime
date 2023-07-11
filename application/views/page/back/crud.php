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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>BackController/insert">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Plat | Regime</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
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
        <div id="content-wrapper" class="d-flex flex-column" style="padding-top:40px">

            <!-- Main Content -->
            <div id="content">

                <div class="container-fluid">
                    <!-- Regime -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Insertion Regime</h6>
                        </div>
                            <div class="card-body">
                                <div class="card-body-form" style="">
                                    <div class="form">
                                    <form action="" method="get" style="display:grid;grid-template-columns: 50% 50%;">
                                        <div class="formulaire">
                                            <p>Nom: <input type="text" name="nom" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;"></p>
                                            <p>Durée: <input type="number" name="duree" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;"></p>
                                            <p>Variation: <input type="number" name="variation" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;"></p>
                                            <p>Objectif: </p>
                                            <select name="objectif" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;">
                                                <?php
                                                    foreach ($objectif as $list_objectif) {?>
                                                        
                                                        <option value=""><?php echo $list_objectif['nomObjectif'];?></option>
                                                        
                                                        
                                                    <?php } ?>
                                            </select>
                                        </div>
                                        
                                        
                                        <div class="plat" style="float:right;display:grid;grid-template-columns: 33% 33% 33%;">
                                        
                                        <?php
                                            foreach ($plat as  $list_plat) 
                                            {?>

                                                    <span> <input type="checkbox" name="plat" id="" value="p1">  <?php echo $list_plat['nomPlat'];?> </span>
                                                
                                            <?php } ?>

                                        </div>

                                        <button type="submit" style="width:10vw;margin-top:10px;padding:8px 0px 8px 0px;background-color:#224abe;border:none;color:white;border-radius:6px ">Valider</button>
                                    </form>

                                        <style>
                                         
                                        </style>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4" style="width:50%;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Insertion Plat</h6>
                        </div>
                            <div class="card-body" style="">
                                <div class="formulaire-plat" style="">
                                    <form action="" method="get">
                                        <style>
                                            input[type="file"]::-webkit-file-upload-button {
                                            /* CSS properties */
                                            border:none;
                                            border-radius:8px;
                                            padding: 8px 10px 8px 10px;
                                            background-color:#224abe;
                                            color:white;
                                            
                                            }
                                        </style>


                                            <p><input type="file" name="photo" id="" style="border:1px solid grey;padding:0px 10px 0px 0px;border-radius:8px;" ></p>
                                            <p>Nom: <input type="text" name="nom" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;"></p>
                                            <p>Prix: <input type="number" name="nom" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;"></p>
                                            <p>Objectif: <select name="objectif" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;">
                                                <?php
                                                    foreach ($objectif as $list_objectif) {?>
                                                        
                                                        <option value=""><?php echo $list_objectif['nomObjectif'];?></option>
                                                        
                                                        
                                                    <?php } ?>
                                            </select>   

                                                    <button type="submit" style="width:10vw;margin-top:20px;padding:8px 0px 8px 0px;background-color:#224abe;border:none;color:white;border-radius:6px ">Valider</button>
                                        </form>        
                                </div>
                                    
                                    
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4" style="width:50%;margin-left:20px">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Insertion Activité Sportive</h6>
                        </div>
                            <div class="card-body" style="">
                                <div class="formulaire-plat" style="">
                                    <form action="" method="get">
                                        <style>
                                            input[type="file"]::-webkit-file-upload-button {
                                            /* CSS properties */
                                            border:none;
                                            border-radius:8px;
                                            padding: 8px 10px 8px 10px;
                                            background-color:#224abe;
                                            color:white;
                                            
                                            }
                                        </style>


                                            <p><input type="file" name="photo" id="" style="border:1px solid grey;padding:0px 10px 0px 0px;border-radius:8px;" ></p>
                                            <p>Nom: <input type="text" name="nom" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;"></p> 
                                            <p>Objectif: <select name="objectif" id="" style="padding:5px 10px 5px 10px;border-radius:8px;border:1px solid grey;">
                                                <?php
                                                    foreach ($objectif as $list_objectif) {?>
                                                        
                                                        <option value=""><?php echo $list_objectif['nomObjectif'];?></option>
                                                        
                                                        
                                                    <?php } ?>
                                            </select>  

                                                    <button type="submit" style="width:10vw;margin-top:20px;padding:8px 0px 8px 0px;background-color:#224abe;border:none;color:white;border-radius:6px ">Valider</button>
                                        </form>        
                                </div>
                                    
                                    
                            </div>
                        </div>
                    </div>
                    






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