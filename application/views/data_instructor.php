
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

           

        
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>OUR INSPECTOR</h2>
                        </div>
                    </div>
                </div>
                 <section class="feature-area pt-100 pb-100  relative">
			<div class="overlay overlay-bg"></div>
			
                <div class="container" width="555">
                    <div class="product-slider">
                        <?php foreach ($data as $x){?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href=""> 
                                                <img src="<?php echo base_url().'upload/'.$x['gambar'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
										
                                            <a href="">
                                                <img src="<?php echo base_url().'upload/'.$x['gambar'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="invisible">
                                    <img src="<?php echo base_url().'upload/'.$x['gambar'] ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html"><?php echo $x['nama_instructor'] ?></a></h3>
                                    <p class="price"> <b>keahlian :</b> <br><?php echo $x['keahlian'] ?></p>
                                   <a href="https://wa.me/62331012716?text=saya%20ingin%20info%20Curicullum%20Vitae%20<?php echo $x['nama_instructor'] ?>"><h5> REQUEST CV </h5></a>
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
                    <p class="pull-left"></p>

                </div>
                <div class="col-md-6">
                    
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