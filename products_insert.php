<?php 
  include "configure.php"; 
    if (isset($_POST['pid'])){ 
      $pid = $_POST['pid'];
      $stockcount = $_POST['scount'];
      $quan = $_POST['quan'];
      $desc = $_POST['des'];
        $catid = $_POST['catid'];
     
      $sql_statement ="INSERT INTO products(pid,stockcount,quantity,descriptions) VALUES( $pid,$stockcount,$quan,'$desc')";
      $result = mysqli_query($db, $sql_statement);
      echo "result is :".$result;


      $sql_statement ="INSERT INTO belongto(pid,catid) VALUES( $pid,$catid)";
      $result = mysqli_query($db, $sql_statement);
      header ("Location: products.php");
      }

  ?>