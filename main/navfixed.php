<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #356BA1 !important; border-bottom:none">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only" >Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a href="index.php"  ><img src="images/almadinalogo.png" alt="Al-Madina" class="navbar-brand"width="60px" height="40px"/></a>
          <a class="navbar-brand" href="index.php" style="color: #fff;"> Point Of Sales </a>
		  
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!--li class="activee"><a href="index.php">Home</a></li-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="color: #fff;">Action <span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color: #356BA1;">
                <li><a href="index.php" style="color: #fff;"><i class="icon-dashboard icon-2x"></i> DashBoard</a></li>
				<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>" style="color: #fff;"><i class="icon-shopping-cart icon-2x"></i> Sales</a></li>				
                <li><a href="products.php?id=cashh&invoice=<?php echo $finalcode ?>&page=<?php echo "1";?>" style="color: #fff;"><i class="icon-list-alt icon-2x"></i> Products</a></li>
				<li><a href="customer.php" style="color: #fff;"><i class="icon-group icon-2x"></i> Customer</a></li>
                <li><a href="supplier.php" style="color: #fff;"><i class="icon-group icon-2x"></i> Suppliers</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header" style="color: #fff;">Repors</li>
                <li><a href="salesreport.php?d1=0&d2=0" style="color: #fff;"><i class="icon-bar-chart icon-2x"></i> Sales Report</a></li>
                <li><a href="sales_inventory.php" style="color: #fff;"><i class="icon-table icon-2x"></i> Product Inventory</a></li>
                
				<?php if($_SESSION['SESS_LAST_NAME'] == "admin" || $_SESSION['SESS_LAST_NAME'] == "Admin") { ?>
				
				<li><a href="user_create.php" style="color: #fff;"><i class="icon-user icon-2x"></i> Create New User</a></li>
              
				<?php } ?>
			  
			  </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li title="<?php echo $_SESSION['SESS_LAST_NAME'];?>"><a style="color: #fff;"><i class="icon-user icon-large"></i> Welcome:<strong> <?php echo $_SESSION['SESS_LOGIN_NAME'];?></strong></a></li>
            <li><a style="color: #fff;"><i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d',mktime());
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
				</a>
			</li>
            <li class="activee"><a href="logout.php" style="color: #fff;"><font color="red"><i class="icon-off icon-large"></i></font> Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>