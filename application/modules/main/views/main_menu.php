




 				<ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                            </a>
                 <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>Master</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
<li <?php if(isset($m_employees_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/employees_management')?>'><i class="fa fa-circle-o"></i> <span>Employees</a></span></li>
                            </ul>
                            <ul class="treeview-menu">
                               <!-- <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>-->
                </ul>
                       <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>Accounting</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
<li <?php if(isset($m_offices_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/offices_management')?>'><i class="fa fa-circle-o"></i> <span>CashFlow</a></span></li>
</ul>
<!--<li <?php if(isset($m_film_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/film_management')?>'><i class="fa fa-circle-o"></i> <span>Films</a></span></li>
<li <?php if(isset($m_multigrids)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/multigrids')?>'><i class="fa fa-circle-o"></i> <span>Multigrid [BETA]</a></span></li>
<li <?php if(isset($m_customers_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/customers_management')?>'><i class="fa fa-circle-o"></i> <span>Customers</span></a></li>
<li <?php if(isset($m_orders_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/orders_management')?>'><i class="fa fa-circle-o"></i> <span>Orders</a></span></li>
<li <?php if(isset($m_products_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/products_management')?>'><i class="fa fa-circle-o"></i> <span>Products</a></span></li>-->
                       <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>HRD</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            <li <?php if(isset($m_customers_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/customers_management')?>'><i class="fa fa-circle-o"></i> <span>Pengajuan Cuti</span></a></li>
                            <li <?php if(isset($m_products_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/examples/products_management')?>'><i class="fa fa-circle-o"></i> <span>Pengajuan Biaya</a></span></li>