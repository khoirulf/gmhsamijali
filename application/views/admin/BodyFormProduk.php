<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">

    <title>Tambah Produk || Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url() ?>assets/cssadmin/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url() ?>assets/cssadmin/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url() ?>assets/cssadmin/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/cssadmin/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url() ?>assets/cssadmin/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/cssadmin/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

             <a href="<?php echo base_url()."index.php/c_adminproduk/" ?>" class="logo">Administrator <span class="lite">Syaichoni Welding</span></a>


            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?php echo $this->session->userdata('nama_admin') ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?php echo base_url()."index.php/logout" ?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?php echo base_url()."index.php/c_admin/index" ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()."index.php/C_adminproduk/tambahproduk" ?>">Tambah Produk</a></li>   
                          
                          
                      </ul>
                  </li>          
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()."index.php/C_adminproduk/dataproduk" ?>">Daftar Produk</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="<?php echo base_url(); ?>">Website</a></li>
                          <li><a class="" href="<?php echo base_url()."index.php/logout" ?>">Logout</a></li>
                      </ul>
                  </li>   
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Tambah Produk</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-files-o"></i>Tambah Produk</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Produk
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <?php echo form_open_multipart('c_adminproduk/createproduk'); ?>
                                      
                                      
                                          <label for="cname" class="control-label col-lg-2">Nama Produk <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" type="text" name="nama_produk" required />
                                          <br>
                                          </div>
                                          <?php echo form_error('nama_produk'); ?>  
                                          
                                      
                                          <label for="cname" class="control-label col-lg-2">Harga Produk <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" type="text" name="harga" required />
                                          <br>
                                          </div>
                                          <?php echo form_error('harga'); ?>
                                          
                                          <label for="cname" class="control-label col-lg-2">Deskripsi Produk <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" type="text" name="detail_produk" required />
                                          <br>
                                          </div>
                                          <?php echo form_error('detail_produk'); ?>

                                          
                                          </div>
                                          <?php echo form_error('produk_deskripsi'); ?>
                                          
                                           <label for="cname" class="control-label col-lg-2">Gambar Produk <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                             <input class="form-control " id="cname" type="file" name="image" required/>
                                          <br>
                                           </div>
                                          <?php echo form_error('image'); ?>

                                          <label for="cname" class="control-label col-lg-2">Kategori <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="kategori">
                                              <option value="wps" selected>WPS</option>
                                              <option value="ndt">ndt Service</option>
                                              <option value="eng">engineering</option>
                                              </select>
                                          </div>
                                                                                  

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-primary" type="submit" value="SAVE">

                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
          </section>
      </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
             <!-- <h4>by Dhila</h4>-->
        </div>
    </div>
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/jsadmin/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/scripts.js"></script>    


  </body>
</html>
