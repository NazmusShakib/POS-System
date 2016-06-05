<html>
<head>
<title>
POS
</title>
    <link rel="icon" href="main/images/favicon-96x96.png" type="png/image/x-icon">
  	<link href="main/css/bootstrap.css" rel="stylesheet">
  	<link href="main/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
  	<link rel="stylesheet" href="main/css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
	.grad1 {
		background-color: #356BA1;
	}
    </style>
    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">
	  function preventBack(){
		  window.history.forward();
	  }
	  setTimeout("preventBack()",0);
	  window.onunload = function(){null};
	  
	  /* This for warning for this page which not back again
	  window.onbeforeunload = function(){
	  return "You won't be able to come back to this page again";		  
	  }
	  */
  </script>
	
</head>
<body class="grad1">
    <div class="container-fluid">
    <div class="row-fluid">

		<div id="login" >		
				<?php
				if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
					echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
					}
					unset($_SESSION['ERRMSG_ARR']);
				}
				?>
				<center>
				<!--div class="alert alert-success text-center msg-demo">
				   <h3>Press login to continue</h3>
				</div-->
				<form action="login.php" method="post" class="form login-form">
					<font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;">
					Al-MADINA AUTO PARTS
					</font>
					<font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 25px #000; color:#fff;"><center>All Kinds of Motor Baike parts retail and wholesaler</br> 1102, D.T.Road Dhonialapara, Raj Bannijjo Bitan, Chittagong.</br> Mobile: 01817-207660, 01812-686860, 01817-723813, 01819-3017959 <br> Phone: 031-2520905</center></font>
					<br/>
					<br/>
					<br/>
					<table>
						<tr>
							<td><i class="icon-user icon-2x"></i>&nbsp;&nbsp;</td>
							<td>
							<input class=" " type="text" name="username" Placeholder="Username" required/><br>
							</td>
						</tr>
						<tr>
							<td class=""><i class="icon-lock icon-2x">&nbsp;&nbsp;</i></td>
							<td><input class=" " type="password" name="password" Placeholder="Password" required/><br></td>
						</tr>
						<tr>
						<td></td>

						<td>
							<button class="btn btn-large btn-primary btn-block" href="dashboard.html" type="submit">
							<i class="icon-signin icon-large"></i> Login
							</button>
						</td>
						</tr>
						
					</table>					
				 </form>
				 </center>
		</div>
	</div>
</div>
</div>
<div class="footer navbar-fixed-bottom text-center">
    <div class="center-block">
	<marquee behavior="alternate">
        <div class="small navbar-text text-center">
			<!--img src="" alt="logo" class=""  /--></marquee>
        </div>
    </div>
</div>
</body>
</html>