<?php
	$page="index";
	$title="Home";
	require_once('header.php');
?>		
		<div class="container-fluid">
		  <div class="row slider">
			<div class="col-lg-14">			
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="images/gosaikunda.jpg" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/treaking side.jpg" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/mardi_himal.jpg" alt="Flower">
					</div>
				  </div>
				  
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		  </div>
		
		  <div class="row home_info">
			<div class="col-md-9 recent_product">
                <div class="panel panel-default">
				    <div class="panel-heading">Recent Products</div>
				        <div class="panel-body">
                            <div class="container recent_product_container">
                              <div class="row recent_img">
                                <div class="col-md-4"><img src="images/patriotism.jpg" class="img-thumbnail home_img" alt="Cinque Terre"></div>
                                <div class="col-md-4"><img src="images/mardi_himal.jpg" class="img-thumbnail home_img" alt="Cinque Terre"></div>
                                <div class="col-md-4"><img src="images/eyes.Jpg" class="img-thumbnail home_img" alt="Cinque Terre"></div>
                              </div>
                                <div class="row recent_img_desc">
                                    <div class="col-md-4">patriotism</div>
                                    <div class="col-md-4">Mardi Himal</div>
                                    <div class="col-md-4">eyes</div>
                                </div>
                                <div class="row recent_img_desc">
                                    <div class="col-md-4"><button type="button" class="btn-add-cart">Add Cart</button></div>
                                    <div class="col-md-4"><button type="button" class="btn-add-cart">Add Cart</button></div>
                                    <div class="col-md-4"><button type="button" class="btn-add-cart">Add Cart</button></div>
                                </div>
                            </div>
                        </div>
                </div>
			</div>
			<div class="col-md-3 my_cart">
				<h3>MyCart</h3>
				<div class="cart_items">
					<ol>
                        <li><img src="images/patriotism.jpg" alt="patriotism" class="my_cart_items"> <span class="my_cart_items_title">patriotism</span> <span class="my_cart_items_price">Rs. 250</span></li>
                    </ol>
				</div>
			</div>	
		  </div>
<?php

	require('footer.php');
?>	
