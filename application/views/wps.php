<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ITSWelding</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/blog-home.css" rel="stylesheet">

  </head>

  <body>
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
    <!-- Navigation -->
    
    <!-- Page Content -->
    <div class="container">
	<?php foreach ($data as $x){?>
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">
          <!-- Blog Post -->
          <div class="card mb-4">
		  
            <img height = 299 class="card-img-top" src="<?php echo base_url().'upload/'.$x['image'] ?>"" alt="jasa pembuatan wps">
            <div class="card-body">
              <h2 class="card-title"><?php echo $x['nama_produk'] ?></h2>
			  <p class="card-text">harga <?php echo $x['harga'] ?></p>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="<?php echo base_url().'index.php/C_Front1/detailproduk/'.$x['id_produk'] ?>" class="btn btn-primary">Read More &rarr;</a>
           	
			 <div style="background-color: black; border: 1px solid #17202A; height: auto; margin: 10px 0px; padding: 5px; text-align: left; width: auto;" class="card-footer text-muted">
           
            </div>
			<?php } ?>
		   </div>
			
           
		</div>
          </div>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
