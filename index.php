<?php include('include/Connection.php');


if(isset($_POST['Formsubmit'])){
   extract($_POST);

$sql = "SELECT * from contact_form where  Name='".$Name."' and Phone_No='".$Phone_No."'  and Message='".$Message."'";
      $info = $db->query($sql);
          if($info->num_rows>0) 
          { 
            
          }else{
            $insert = "insert into contact_form(Name,Phone_No,Message) 
             VALUES('".$Name."','".$Phone_No."','".$Message."')";
              $query1 = $db->query($insert);
           }    
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Thelaundry</title>

<link rel="icon" href="icon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Immerse a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="csss/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="csss/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="csss/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
 <link type="text/css" rel="stylesheet" href="csss/cm-overlay.css" />


<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="csss/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Sintony:400,700&amp;subset=latin-ext" rel="stylesheet">

</head>
<style type="text/css">
  /* Social Icons */
#social_side_links {
  position: fixed;
  top: 340px;
  left: 0;
  padding: 0;
  list-style: none;
  z-index: 99;
}

#social_side_links li a {display: block; padding: 5px 5px 5px 5px; }

</style>
<body>



<!-- <div class="icon-bar">
  <a href="#" class="facebook" data-toggle="modal" data-target="#myModal1">Order Now<i class="fa fa-order"></i></a> 
</div> -->
<!-- banner -->
<div class="w3l_banner" >

<div class="w3_bandwn">
<div class="container">
	<div class="col-md-3 w3_l">
	<i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:Thelaundry@Gmail.com">Aryalaundry@Gmail.com</a>
	</div>
	<div class="col-md-6 w3_c">
	<i class="fa fa-phone" aria-hidden="true"></i> +62876524162
	</div>
	<div class="col-md-3 w3_r">
	<a href="https://facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div>
    <div class="clearfix"></div>
</div>
</div>
<nav class="navbar navbar-default ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <h1><a class="navbar-brand" href="#">Arya Laundry</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="w3l_bandwn">
 <h2>Malas Nyuci ?</h2>
 <div class="about-p text-center">
<span class="sub-title"></span>
<span class="fa fa-star" aria-hidden="true"></span>
<span class="sub-title"></span>
</div>
<h3>Laundry AzzA</h3>
<div class="agile_dwng">
<a href="login.php" data-toggle="modal" data-target="#myModal">LOGIN </a>
  <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
         <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thelaundry</h4>
        </div>
        <div class="modal-body">
		<img src="images/modal.jpg"  class="img-responsive" alt="tfg">
          <p>Our network is still growing. Currently, we are operating in the major areas of Lahore and soon we would be spreading clean laundry to the entire city.
theloundary is here to save your precious time and take the load off your shoulders, literally. It is an on-demand laundry and dry-cleaning service. Don’t worry. Your clothes will be in the hands of experienced and professional team, especially trained to handle your laundry with great care. We NEVER compromise on quality. Safe and environment friendly detergents and dry-cleaning products of imported quality are used.

We Pickup and Deliver Garments at your Doorstep.

Our services are not only fast, clean, efficient, they are also very reliable. Our customer care executives are especially trained to provide guidance and ensure on-time delivery.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</div>
 </div>
</div>
<!-- /features -->
<div class="about" id="about">
	<div class="features" id="features">
		<div class="container">
	<h3>About Us</h3>
			<div class="tittle_head_w3layouts">
				<h4>Powerful Features</h4>
				
					<P>Our services are not only fast, clean, efficient, they are also very reliable. Our customer care executives are especially trained to provide guidance and ensure on-time delivery.</p>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<!-- <div class="border1"> -->
				<div class="w3_banup">
					<div class="col-md-4 w3_ret">
					<div class="col-md-10 w3_txt">
							<h4>Wash </h4>
							<p>Our services are not only fast, clean, efficient, they are also very reliable. </p>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-crosshairs" aria-hidden="true"></i>
						
							</div>
							
						<div class="clearfix"></div>
					
					<div class="col-md-10 w3_txt">
						
							<h4>Dry</h4>
							<p>Our services are not only fast, clean, efficient, they are also very reliable. </p>
							</div>
							<div class="col-md-2 w3ls_ic">
							<i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>
				
					<div class="col-md-10 w3_txt">
						
							<h4>Iron</h4>
							<p>Our services are not only fast, clean, efficient, they are also very reliable. .</p>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-tint" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>
					
					</div>
					<div class="col-md-4 w3l_mid">
					<div class="bulb">
						<img src="images/pic.jpg" alt="" />
					</div>
					</div>
					<div class="col-md-4 wthree_r">
					<div class="col-md-2 w3ls_ic">
							<i class="fa fa-street-view" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Bedding</h4>
							<p class="move">Our services are not only fast, clean, efficient, they are also very reliable. </p>
						</div>
						<div class="clearfix"></div>
					
					 <div class="col-md-2 w3ls_icr">
							<i class="fa fa-fast-forward" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Speedy</h4>
							<p class="move">Our services are not only fast, clean, efficient, they are also very reliable. </p>
						</div>
						<div class="clearfix"></div>
					
					<div class="col-md-2 w3ls_icr">
						<i class="fa fa-bolt" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 w3_txt">
							<h4>Stream</h4>
							<p class="move">Our services are not only fast, clean, efficient, they are also very reliable. </p>
						</div>
						<div class="clearfix"></div>
					</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
				<!-- </div> -->
	</div>
		</div>
	</div>
	<!-- //features -->
</div>
</div>
	
	

</body>
</html>