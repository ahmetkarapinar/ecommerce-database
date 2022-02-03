<?php 
  include "configure.php"; 
    if (isset($_POST['bid'])){ 
      $bids = $_POST['bid'];
      $oid = $_POST['oid'];
      $orderdate = $_POST['orderdate'];
      

     
      $sql_statement ="INSERT INTO order_makes(bid,oids,orderdate) VALUES( $bids,$oid,'$orderdate')";
      $result = mysqli_query($db, $sql_statement);
      echo "result is :".$result;
      header ("Location: order.php");
      }

  ?>