
<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
          

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->


    <div id="all">

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url().'assets/sam/img/orumy3.jpg'?>" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url().'assets/sam/img/samijalislider2.jpeg'?>" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url().'assets/sam/img/orumy2.jpg'?>" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        

                        <div class="col-sm-12">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">WPS</a></h3>
                                <p>
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias ametlorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias ametlorim
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								var_dumplorim ipsum lor dias amet
								lorim ipsum lor dias amet
								lorim ipsum lor dias amet
								
								</p>
                            </div>
                        </div>

                     
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Produk Kami</h2>
                        </div>
                    </div>
                </div>
                 <section class="feature-area pt-100 pb-100  relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
						<div class="single-feature">
							<div class="icon">
								<span class="lnr lnr-laptop-phone"></span>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			
                <div class="container">
                    <div class="product-slider">
                        <?php foreach ($data as $x){?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url().'detail/'.$x['id_produk'] ?>">
                                                <img src="<?php echo base_url().'upload/'.$x['image'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url().'index.php/C_Front1/detailproduk/'.$x['id_produk'] ?>">
                                                <img src="<?php echo base_url().'upload/'.$x['image'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo base_url().'upload/'.$x['image'] ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html"><?php echo $x['nama_produk'] ?></a></h3>
                                    <p class="price"> Harga Rp.<?php echo $x['harga'] ?></p>
                                   
                                </div>
                                <!-- /.text -->
                            </div>
                        </div>
                            <?php } ?>
                            
                    </div>
                    
                </div>
                    
            </div>
                 


    <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->



          
            <!-- /.container -->

            <!-- *** BLOG HOMEPAGE END *** -->

            <!-- Footer pindah -->
        
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2017 Samijali-Orumy.com</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->

    <!-- </div> -->
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="<?php echo base_url().'assets/sam/js/jquery-1.11.0.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sam/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sam/js/jquery.cookie.js'?>"></script>
    <script src="<?php echo base_url().'assets/sam/js/waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sam/js/modernizr.js'?>"></script>
    <script src="<?php echo base_url().'assets/sam/js/bootstrap-hover-dropdown.js'?>"></script>
    <script src="<?php echo base_url().'assets/sam/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sam/js/front.js'?>"></script>


</body>

</html>