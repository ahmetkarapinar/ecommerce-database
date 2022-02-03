<?php 
  include "configure.php"; 
    if (isset($_POST['catid'])){ 
      $catid = $_POST['catid'];
      $catname = $_POST['catname'];

     
      $sql_statement ="INSERT INTO category(catid,catname) VALUES( $catid ,'$catname')";
      $result = mysqli_query($db, $sql_statement);
      echo "result is :".$result;
      header ("Location: category.php");
      }

  ?>