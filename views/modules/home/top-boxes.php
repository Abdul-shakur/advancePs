<?php

$item = null;
$value = null;
$order = "id";

$sales = ControllerSales::ctrAddingTotalSales();

$categories = ControllerCategories::ctrShowCategories($item, $value);
$totalCategories = count($categories);

$customers = ControllerCustomers::ctrShowCustomers($item, $value);
$totalCustomers = count($customers);

$products = ControllerProducts::ctrShowProducts($item, $value, $order);
$totalProducts = count($products);

?>
        <div class="main">
           <div class="container-fluid">
                <!-- /# row -->
                <div id="main-content">
                   
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card p-0">
                                <div class="media">
                                    <div class="p-20 bg-primary media-left media-middle">
                                        <i class="ion ion-social-usd f-s-48 color-white"></i>

                                    </div>
                                    <div class="p-20 media-body">
                                        <h4 class="color-primary">Sales</h4>
                                        <h5>$<?php echo number_format($sales["total"],2); ?></h5>
                                    
                                        <a href="sales" class="small-box-footer">
        
                                          More info <i class="fa fa-arrow-circle-right"></i>
                                        
                                        </a>

                                    </div>

                                </div>                            

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card p-0">
                                <div class="media">
                                    <div class="p-20 bg-success media-left media-middle">
                                        <i class="ion ion-clipboard f-s-48 color-white"></i>
                                    </div>
                                    <div class="p-20 media-body">

                                        <h4 class="color-info">Categories</h4>
                                        <h5><?php echo number_format($totalCategories); ?></h5>

                                        <a href="categories" class="small-box-footer">
      
                                          More info <i class="fa fa-arrow-circle-right"></i>
                                        
                                        </a>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card p-0">
                                <div class="media">
                                    <div class="p-20 bg-warning media-left media-middle">
                                        <i class="ion ion-person-add f-s-48 color-white"></i>
                                    </div>
                                    <div class="p-20 media-body">

                                        <h4 class="color-warning">Customers</h4>
                                        <h5><?php echo number_format($totalCustomers); ?></h5>

                                        <a href="customers" class="small-box-footer">

                                            More info <i class="fa fa-arrow-circle-right"></i>

                                          </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card p-0">
                                <div class="media">
                                    <div class="p-20 bg-danger media-left media-middle">
                                        <i class="ion ion-ios-cart f-s-48 color-white"></i>
                                    </div>
                                    <div class="p-20 media-body">

                                        <h4 class="color-danger">Products</h4>
                                        <h5><?php echo number_format($totalProducts); ?></h5>

                                        <a href="products" class="small-box-footer">
      
                                          More info <i class="fa fa-arrow-circle-right"></i>
                                        
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- ===================================== -->

                    <!-- Top Boxes -->
                    <!-- ========================================= -->
             
         
                </div>
      </div>

    </div>
