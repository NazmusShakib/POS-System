<?php
  
 if(isset($_POST['get_option']))
   {
     $host = 'localhost';
     $user = 'root';
     $pass = '';
           
     mysql_connect($host, $user, $pass);
     mysql_select_db('sales');
     
     $state = $_POST['get_option'];
     $find=mysql_query("SELECT qty FROM products where product_id ='$state'");
     while($row=mysql_fetch_array($find))
     {
       echo $row['qty'];
     }
   
     exit;
	}
?>
