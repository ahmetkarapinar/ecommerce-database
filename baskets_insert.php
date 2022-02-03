<?php 
  include "configure.php"; 
    if (isset($_POST['bid'])){ 
      $bid = $_POST['bid'];
      $date = $_POST['date'];
        $cid = $_POST['cid'];
     $pid = $_POST['pid'];
      $sql_statement ="INSERT INTO basket(bid,updatedate) VALUES( $bid ,'$date')";
      $result = mysqli_query($db, $sql_statement);
      echo "result is :".$result;

      $sql_statement ="INSERT INTO creates(cid,bid) VALUES( $cid ,$bid)";
      $result = mysqli_query($db, $sql_statement);

      $sql_statement ="INSERT INTO contain(bid,pid) VALUES( $bid ,$pid)";
      $result = mysqli_query($db, $sql_statement);
      header ("Location: baskets.php");
      }

  ?>