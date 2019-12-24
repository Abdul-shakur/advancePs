
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">

            <div class="nano">
                <div class="nano-content">
                    <ul class="sidebar-menu">

                      <!--   <li class="label">Main</li> -->

                      <?php

                        if ($_SESSION["profile"] == "Administrator") {
                            
                            echo '

                        <li class="active"><a href="home"><i class="ti-home"></i> Dashboard </a></li> 


                            ';
                        }


                        if($_SESSION["profile"] == "Administrator" || $_SESSION["profile"] == "Seller"){

                         echo'
                        
                        <li><a class="sidebar-sub-toggle"><i class="ti-shopping-cart"></i> Point of Sale  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="create-sale">Process Sale</a></li>
                                <li><a href="sales">Manage sales</a></li>

                                ';

                            }

                            if($_SESSION["profile"] == "Administrator"){

                            echo '

                                <li><a href="reports">Sales History</a></li>

                                ';

                            }

                            echo '
                                
                            </ul>

                        </li> ';



                        if($_SESSION["profile"] == "Administrator" || $_SESSION["profile"] == "Special"){

                         echo '

                        <li><a class="sidebar-sub-toggle"><i class="ti-clipboard"></i> Stockroom  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="products">Products</a></li>
                                <li><a href="inventory">Inventory</a></li>
                                <li><a href="adjustments">Adjustments</a></li>
                                <li><a href="purchase order">Purchase Order</a></li>
                                <li><a href="promotion">Promotions</a></li>
                                <li><a href="suppliers">Suppliers</a></li>
                            </ul>
                        </li>

                         
                        <li><a href="categories"><i class="fa fa-th"></i> Categories </a></li>                  

                        <li><a class="sidebar-sub-toggle"><i class="ti-stats-up"></i> Office <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="invoice list"> Invoice List </a></li>
                                <li><a href="reports"> Reports </a></li>
                          
                            </ul>
                        </li>

                            ';

                         }


                        if($_SESSION["profile"] == "Administrator" || $_SESSION["profile"] == "Seller"){
                            echo '

                         <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Customers <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="customers"> Customers </a></li>
                                <li><a href="membership"> Membership </a></li>
                                <li><a href="gifts"> Gifts </a></li>
                          
                            </ul>
                        </li>

                            ';
                        }


                         if($_SESSION["profile"] == "Administrator" || $_SESSION["profile"] == "Special"){

                         echo '

                        <li><a class="sidebar-sub-toggle"><i class="fa fa-user"></i> Users <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="users"> Users </a></li>
                                <li><a href="roster"> Roster </a></li>
                          
                            </ul>
                        </li>                        


                        <li><a href="settings"><i class="ti-settings"></i> Settings </a></li>



                        <li><a class="sidebar-sub-toggle"><i class="ti-server"></i> Package <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="subscription"> Subscription </a></li>
                                <li><a href="branches"> Branches </a></li>
                                <li><a href="#add ons"> Add Ons </a></li>
                          
                            </ul>
                        </li>

                          ';
                        }

                        if($_SESSION["profile"] == "Administrator" || $_SESSION["profile"] == "Seller"){
                            echo '

                        <li><a href="logout"><i class="ti-power-off"></i> <span>Logout</span></a></li>


                          ';
                        }

                        ?>

                    </ul>


                </div>
            </div>
        </div>
        <!-- /# sidebar -->

