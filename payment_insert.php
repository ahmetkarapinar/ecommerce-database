<?php 
  include "configure.php"; 
    if (isset($_POST['payid'])){ 
      $payid = $_POST['payid'];
      $paytype = $_POST['paytype'];
      $oid = $_POST['oid'];
  
     
      $sql_statement ="INSERT INTO payment(payid,paytype) VALUES( $payid,'$paytype')";
      $result = mysqli_query($db, $sql_statement);
      echo "result is :".$result;

      $sql_statement ="INSERT INTO proceedto_order(oids,payid) VALUES( $oid,$payid)";
      $result = mysqli_query($db, $sql_statement);
      header ("Location: payment.php");
      }

  ?>